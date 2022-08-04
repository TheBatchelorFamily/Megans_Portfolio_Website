(function () {
    "use strict";

    angular.module("privateLabel")
        .config(configTranslate);

    configTranslate.$inject = ["$translateProvider", "DEFAULT_LANG_KEY"];
    function configTranslate($translateProvider, DEFAULT_LANG_KEY) {

        $translateProvider.preferredLanguage(DEFAULT_LANG_KEY);
        $translateProvider.useCookieStorage();
        $translateProvider.useSanitizeValueStrategy("escape");
        $translateProvider.useStaticFilesLoader({
            prefix: "/content/locales/",
            suffix: ".json"
        });
        $translateProvider.fallbackLanguage(DEFAULT_LANG_KEY);


    }

}());