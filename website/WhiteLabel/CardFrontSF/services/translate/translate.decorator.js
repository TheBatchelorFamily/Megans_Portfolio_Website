(function () {
    "use strict";

    angular.module('privateLabel')
        .config(configModule);
    configModule.$inject = ["$provide"];

    function configModule($provide) {

        $provide.decorator("$translate", decorateTranslateService);
        decorateTranslateService.$inject = ["$delegate", "LANGUAGES"];

        function decorateTranslateService($delegate, LANGUAGES) {

            var getLanguageFromKey = function (langKey) {
                return _.find(LANGUAGES, function (lang) {
                    return lang.key === langKey;
                });
            };

            $delegate.currentLanguage = function () {
                return getLanguageFromKey($delegate.use());
            };

            return $delegate;
        }
    }

}());