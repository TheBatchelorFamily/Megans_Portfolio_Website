(function () {
    "use strict";

    angular.module("angular.store-financial")
        .factory("notify", notifyServiceFactory);

    notifyServiceFactory.$inject = ["$timeout", "$rootScope", "$q", "$translate"];
    function notifyServiceFactory ($timeout, $rootScope, $q, $translate) {

        var minimumDisplayTime = 400,
            ajaxLoaderUrl = "/content/images/ajax-loader-info.gif";

        initProgressNotification();
        initErrorAlert();

        return {
            success: showSuccess,
            info: showInfo,
            warning: showWarning,
            danger: showDanger,
            hideNotification: hideNotification,
            initErrorAlert: initErrorAlert,
            dismissErrorAlert: dismissErrorAlert,
            showError: showErrorAlert,
            forHttp: forHttp,
            forFormSubmission: forFormSubmission
        };

        function hideNotification() {
            $rootScope.notification.message = undefined;
            $rootScope.notification.alertClass = "alert-success";
            $rootScope.notification.showSpinner = false;
            $rootScope.notification.visible = false;
        }
        function dismissErrorAlert() {
            $rootScope.errorAlert.translationId = undefined;
            $rootScope.errorAlert.translateValues = undefined;
            $rootScope.errorAlert.message = undefined;
        }
        function initProgressNotification() {
            $rootScope.notification = {
                show: false,
                showSpinner: false,
                showDismiss: false,
                translationId: undefined,
                translateValues: undefined,//values to be interpolated into the translation
                message: undefined,
                timeStarted: null,
                cssClass: "",
                alertClass: "alert-info",
                spinnerUrl: ajaxLoaderUrl
            };
            $rootScope.hideNotification = hideNotification;
        }
        function initErrorAlert() {
            $rootScope.errorAlert = {
                translationId: undefined,
                translateValues: undefined,
                message: undefined
            };
            $rootScope.hasErrorAlert = function () {
                return $rootScope.errorAlert &&
                    (($rootScope.errorAlert.translationId &&
                    $rootScope.errorAlert.translationId.length > 0) || ($rootScope.errorAlert.message &&
                    $rootScope.errorAlert.message.length > 0));
            };
            $rootScope.dismissErrorAlert = dismissErrorAlert;
        }

        function notify(translationId, translateValues, alertClass, expire) {
            $timeout(function () {
                $rootScope.notification.translationId = translationId;
                $rootScope.notification.translateValues = translateValues;
                $rootScope.notification.visible = true;
                $rootScope.notification.alertClass = alertClass;
                $rootScope.notification.showSpinner = false;
                $rootScope.notification.showDismiss = true;
                $rootScope.notification.cssClass = "large";

                if (expire) {
                    $timeout(function () {
                        initProgressNotification();
                    }, 1000);
                }
            });
        }
        function showSuccess(translationId, translateValues, expire) {
            notify(translationId, translateValues, "alert-success", expire);
        }
        function showInfo(translationId, translateValues, expire) {
            notify(translationId, translateValues, "alert-info", expire);
        }
        function showWarning(translationId, translateValues, expire) {
            notify(translationId, translateValues, "alert-warning", expire);
        }
        function showDanger(translationId, translateValues, expire) {
            notify(translationId, translateValues, "alert-danger", expire);
        }
        function showErrorAlert(translationId, translateValues, message, sessionExpired) {
            if ((translationId || message) && $rootScope.errorAlert) {
                $timeout(function () {
                    $rootScope.errorAlert.translationId = translationId;
                    $rootScope.errorAlert.translateValues = translateValues;
                    $rootScope.errorAlert.message = message;
                });
            }
            else if (translationId || message) {
                alert(message ? message : $translate.instant(translationId, translateValues));
            }

            if (sessionExpired === true) {
                $timeout(function () {
                    window.location.reload();
                }, 2000);
            }
        }
        function startProgress(translationId, translateValues) {
            $timeout(function () {
                $rootScope.notification.showSpinner = true;
                $rootScope.notification.alertClass = "alert-info";
                $rootScope.notification.spinnerUrl = ajaxLoaderUrl;
                $rootScope.notification.translationId = translationId;
                $rootScope.notification.translateValues = translateValues;
                $rootScope.notification.visible = true;
                $rootScope.notification.timeStarted = new Date().getTime();
            });
        }
        function endProgress(translationId, translateValues) {
            var endTime = new Date().getTime(),
                timeDiff = endTime - $rootScope.notification.timeStarted,
                timeout = Math.max(minimumDisplayTime, minimumDisplayTime - timeDiff);

            //calculating a minimum timeout for display of notification. this ensures the progress message shows for at least 400 ms
            $timeout(function () {
                if (angular.isDefined(translationId) && angular.isString(translationId) && translationId.trim().length > 0) {
                    $rootScope.notification.visible = false;
                    $timeout(function () {
                        showSuccess(translationId, translateValues, true);
                    }, 40);
                } else {
                    initProgressNotification();
                }

            }, timeout);
        }
        function forCondition(delegate, messageOptions, trueCallback) {
            //messageOptions: translationId, translateValues, message

            if (delegate && angular.isFunction(delegate)) {
                var isTrue = delegate();
                if (isTrue) {
                    if (trueCallback && angular.isFunction(trueCallback)) {
                        trueCallback();
                    }
                    else {
                        throw "The trueCallback for the trueCondition() call was undefined or not a function.";
                    }
                }
                else {
                    showErrorAlert(messageOptions.translationId, messageOptions.translateValues, messageOptions.message);
                }
            }
            else {
                throw "The delegate for the trueCondition() call was undefined or not a function.";
            }
        }
        function forHttp(promise, options) {
            //watches an http promise and handles UI progress and result notification, returns the derived promise
            //in case the client wants to do something additional on success, error or finally
            //intent here is to provide a global, consistent means to handle UI notification for async api calls
            initErrorAlert();

            if (options && options.startTranslationId) {
                startProgress(options.startTranslationId, options.startTranslateValues);
            }
            else {
                startProgress("GLOBAL.DEFAULT_LOADING_TEXT");
            }

            var deferred = $q.defer(),
                handleError = function (translationId, translateValues, message, sessionExpired) {
                    showErrorAlert(translationId, translateValues, message, sessionExpired);
                    endProgress();
                    deferred.reject(message ? message : $translate.instant(translationId, translateValues));
                };

                promise.then(
                        function(response) { //success
                            if (options) {
                                endProgress(options.endTranslationId, options.endTranslateValues);
                            }

	                        if (response && response.data && (response.data.succeeded === false || response.data.success === false)) {
	                        	handleError(response.data.translationId, undefined, response.data.message);
	                        } else {
								$timeout(function() { //clients will more often than not change the model with this resolve, so make sure angular does a digest
                                    if(!options){
                                        endProgress();
                                    }
									deferred.resolve(response && response.data ? response.data : {}); //notify.forHttp returns just the data of the api response object
								});
	                        }
                        },
                        function(response) { //error
                            //some type of server error occurred, HTTP response probably in the range of 400 or 500

                            var serverMessage = "";
                            if (response.data) {

                                if (response.data.modelState) {
                                    var modelState = response.data.modelState;
                                    Object.getOwnPropertyNames(modelState).forEach(function(val, idx, array) {
                                        serverMessage += modelState[val] + " ";
                                    });
                                } else if (response.data.exceptionMessage) {
                                    serverMessage = response.data.exceptionMessage + " ";
                                } else if (response.data.message) {
                                    serverMessage = response.data.message + " ";
                                }

                            } else {
                                serverMessage = response.status + ": " + response.statusText;
                            }

                            var translateValues = { serverMessage: serverMessage };
                            if (options.errorMessage) {
                                handleError(undefined, undefined, options.errorMessage);
                            } else if (options.errorTranslationId) {
                                handleError(options.errorTranslationId, options.errorTranslateValues || translateValues);
                            } else {
                                handleError("GLOBAL.SERVER_ERROR_TEXT", translateValues);
                            }
                        },
                        function(value) { //notification
                            deferred.notify(value);
                        }
                    )
                //.finally(function () {
                //    $log.info('finally');
                //})
                ;

            return deferred.promise;
        }
        function forFormSubmission(form, successCallback) {
            if (form.$valid) {
                if (successCallback && angular.isFunction(successCallback)) {
                    successCallback();
                }
            }
            else {
                showErrorAlert("FORMS.SHARED.FORM_INVALID_TEXT");
            }
        }
    }
}());