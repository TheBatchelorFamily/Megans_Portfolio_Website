(function () {
    "use strict";

    angular.module("angular.store-financial")
        .factory("preActivationService", preActivationServiceFactory);

    preActivationServiceFactory.$inject = ["$q", "$log", "api", "appConfig", "notify"];

    function preActivationServiceFactory($q, $log, api, appConfig, notify) {
        var cardsPreActivated = [],
            errors = [],
            merchantGroupProgramInformation;

        return {
            preActivateByPrintText: preActivateByPrintText,
            preActivateBySwipe: preActivateBySwipe,
            preActivateGroup: preActivateGroup,
            getCardsPreActivated: getCardsPreActivated,
            hasCards: hasCards,
            getAmountTotal: getAmountTotal,
            currentPreActivationCard: currentPreActivationCard,
            isDuplicateCard: isDuplicateCard,
            removeCard: removeCard,
            getCardTypes: getCardTypes,
            getPaymentTypes: getPaymentTypes,
            getCampaigns: getCampaigns,
            getProgramUniqueTag: getProgramUniqueTag,
            getCurrencySymbol: getCurrencySymbol,
            reset: reset,
            hasErrors: hasErrors,
            errors: getErrors,
            ensureMerchantGroupProgramInformation: ensureMerchantGroupProgramInformation
        };

        function getCurrencySymbol() {
            return hasCards() ? cardsPreActivated[0].bin.currency.currencySymbol : "";
        }

        function hasCards() {
            return angular.isArray(cardsPreActivated) && cardsPreActivated.length > 0;
        }

        function removeCard(card) {
            cardsPreActivated = _.reject(cardsPreActivated, function (aCard) {
                return card.primaryAccountNumber === aCard.primaryAccountNumber;
            });
            if (!hasCards()) {
                reset();
            }
        }

		function resetErrors() {
			errors = [];
		}

        function reset() {
            cardsPreActivated = angular.copy([], cardsPreActivated);
            resetErrors();
            merchantGroupProgramInformation = undefined;
        }


        function getCardsPreActivated() {
            return cardsPreActivated;
        }

        function getAmountTotal() {
            return hasCards() ? _.reduce(cardsPreActivated, function (memo, card) {
                return memo + card.amount;
            }, 0) : 0;
        }

        function hasErrors() {
            return angular.isArray(errors) && errors.length > 0;
        }

        function getErrors() {
            return errors;
        }

        function currentPreActivationCard() {
            return cardsPreActivated[0];
        }

        function preActivateGroup(firstCardNumber, lastCardNumber) {
	        
        }

        function preActivateByPrintText(printText) {
            return preAcivate(api.preActivation.preActivateCardByPrintText(printText, appConfig.selectedMerchantGroup().uniqueTag));
        }

        function preActivateBySwipe(primaryAccountNumber) {
            return preAcivate(api.preActivation.preActivateCardBySwipe(primaryAccountNumber, appConfig.selectedMerchantGroup().uniqueTag));
        }

        function preAcivate(apiPromise) {
            var deferred = $q.defer();
            apiPromise
                .then(function (response) {
                    handlePreActivateResponse(response)
                        .then(function (response) {
                            deferred.resolve(response);
                        }, function (error) {
                            deferred.reject(error);
                        });
                },
                    function (error) {
                        deferred.reject(error);
                    });
            return deferred.promise;
        }

        function handlePreActivateResponse(response) {
            var deferred = $q.defer();
            if (response.data.canActivate === true) {
                if (!merchantGroupProgramInformation) {
                    notify.forHttp(api.preActivation.getPreActivationMerchantGroupProgramInformation(appConfig.selectedMerchantGroup().uniqueTag, response.data.card.programUniqueTag))
                        .then(function (data) {
                            merchantGroupProgramInformation = data;
                            validateCard(response.data.card, function () {
                                deferred.resolve();
                            });
                        }, function (error) {
                            deferred.reject(error);
                        });
                } else {
                    validateCard(response.data.card, function () {
                        deferred.resolve();
                    });
                }
            } else {
            	resetErrors();
            	addError(response.data.reasonMessage);
                deferred.resolve();
            }

            return deferred.promise;
        }

        function getPaymentTypes() {
            return merchantGroupProgramInformation ? merchantGroupProgramInformation.paymentTypes : [];
        }

        function getCardTypes() {
            return merchantGroupProgramInformation ? merchantGroupProgramInformation.cardTypes : [];
        }

        function getCampaigns() {
            return merchantGroupProgramInformation ? merchantGroupProgramInformation.campaigns : [];
        }

        function getProgramUniqueTag() {
            return merchantGroupProgramInformation ? merchantGroupProgramInformation.programUniqueTag : null;
        }

        function validateCard(card, doneCallback) {
        	resetErrors();
            //must be of the same program
            if (card.programUniqueTag !== merchantGroupProgramInformation.programUniqueTag) {
                addError("PRE_ACTIVATION.VALIDATION_TEXT.CARDS_NOT_SAME_PROGRAM");
            }

            if (hasCards() && !_.every(cardsPreActivated, function (aCard) {
                return aCard.bin.currency.numericCode === card.bin.currency.numericCode; //has the same currency as existing cards
            })) {
                addError("PRE_ACTIVATION.VALIDATION_TEXT.CARDS_NOT_SAME_CURRENCY");
            }

            if (!hasErrors()) {
                cardsPreActivated.unshift(card);
            }
            if (angular.isFunction(doneCallback)) {
                doneCallback();
            }
        }

        function addError(message) {
            errors.unshift(message);
        }

        function isDuplicateCard(printText, primaryAccountNumber) {
        	var isDupe = true;

            if (primaryAccountNumber) {
                isDupe = _.find(cardsPreActivated, function (card) {
                	return card.cardNumber.toString() === primaryAccountNumber.toString();
                });
            }
            if (printText) {
            	isDupe = _.find(cardsPreActivated, function (card) {
            		return card.printText.toString() === printText.toString();
                });
            }
            return isDupe;
        }

        function ensureMerchantGroupProgramInformation(programUniqueTag) {

            var deferred = $q.defer();

            if (!merchantGroupProgramInformation) {
                notify.forHttp(api.preActivation.getPreActivationMerchantGroupProgramInformation(appConfig.selectedMerchantGroup().uniqueTag, programUniqueTag))
                    .then(function (data) {
                        merchantGroupProgramInformation = data;
                        deferred.resolve(data);
                    }, function (error) {
                            deferred.reject(error);
                    });
            } else {
                deferred.resolve(merchantGroupProgramInformation);
            }

            return deferred.promise;
        }
    }
} ());