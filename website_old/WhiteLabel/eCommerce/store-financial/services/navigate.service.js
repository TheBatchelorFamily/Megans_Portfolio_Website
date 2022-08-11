(function () {
    "use strict";

    angular.module('angular.store-financial')
        .factory('navigate', ['$timeout', '$location', function ($timeout, $location) {

            var referrerInternal,
                defaultUrl = "/";

            return {
                to: to,
                setReferrer: setReferrer,
                setDefaultUrl: setDefaultUrl,
                toReferrerOrDefault: toReferrerOrDefault
            };


            function to(url) {
                $timeout(function () {
                    $location.path(url);
                });
            }

            function toReferrerOrDefault() {
                if (referrerInternal) {
                    to(referrerInternal);
                }
                else {
                    to(defaultUrl);
                }
            }

            function setReferrer(referrer) {
                referrerInternal = referrer;
            }

            function setDefaultUrl(url) {
                defaultUrl = url;
            }
        }]);
}());