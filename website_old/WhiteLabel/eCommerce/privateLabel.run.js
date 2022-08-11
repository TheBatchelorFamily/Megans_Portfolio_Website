(function () {
    "use strict";

    angular.module("privateLabel")
    .run(["$rootScope", "$translate", "NAV_URLS", "DATE_FORMATS", "DEFAULT_DATE_FORMAT", "navigate", "notify", "LANGUAGES", "DEFAULT_VALUES",
		    function ($rootScope, $translate, NAV_URLS, DATE_FORMATS, DEFAULT_DATE_FORMAT, navigate, notify, LANGUAGES, DEFAULT_VALUES) {

			    $rootScope.NAV_URLS = NAV_URLS;
			    $rootScope.DEFAULT_VALUES = DEFAULT_VALUES;
			    $rootScope.languages = LANGUAGES;

			    $rootScope.useLanguage = function(language) {
				    $translate.use(language.key);
			    };

				$rootScope.$on("$routeChangeSuccess", function (event, nextRoute) {
					if (nextRoute && nextRoute.$$route) {
					    notify.dismissErrorAlert();
				    }
		    	});

			$rootScope.currentLanguage = function () {
                return $translate.currentLanguage();
            };

            $rootScope.currentDateFormat = function () {
                var currentLang = $translate.currentLanguage(),
                    formatName = currentLang ? currentLang.dateFormat : DEFAULT_DATE_FORMAT,
                    format = _.find(DATE_FORMATS, function (dateFormat) {
                    	return dateFormat.name === formatName;
                    });
                if (format) {
                    return format.formatString;
                }
                throw "The date format string for {formatName} could not be found.".supplant({ formatName: formatName });
            };
        }]);
}());