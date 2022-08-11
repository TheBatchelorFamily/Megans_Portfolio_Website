(function () {
    "use strict";
    angular.module("angular.store-financial")
        .factory('apiUrlFormatter', ApiUrlFormatter);

    ApiUrlFormatter.$inject = ["$location"];

    function ApiUrlFormatter($location) {

        var serviceHost;

        return {
            format: format
        };

        function determineHost() {
            var host = $location.host().toLowerCase(),
                qaRegex = /(alpha|bravo|charlie|delta)/,
                qaMatch = host.match(qaRegex);

	        if (qaMatch) {
		        //we are in one of the four QA envirnoments, concatenate appropriate host
		        serviceHost = "webservices-" + qaMatch[0] + ".storefinancialdev.net";
	        } 
	        else if (host.includes("xtest")) { 
                //we are in xtest test environment
                serviceHost = "xtest.webservices.storefinancial.net";
            }
	        else if (host.includes("uat")) {
	        	//we are in uat test environment
                serviceHost = "webservices.uat.storefinancial.net";
            }
            else if (host === "localhost") {
				//running debug build locally 
				serviceHost = "local.storefinancialdev.net";
			}

            if (!serviceHost) {
                throw "The debug API URL Formatter could not determine the web services URL host.";
            }
        }

        function format(url) {
            if (!serviceHost) {
                determineHost();
            }
            return "https://" + serviceHost + url;
        }
    }

}());