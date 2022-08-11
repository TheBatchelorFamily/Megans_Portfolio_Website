(function () {
    "use strict";
    angular.module("angular.store-financial")
        .factory('apiUrlFormatter', ApiUrlFormatter);

    function ApiUrlFormatter() {

        var serviceHost = "https://webservices.storefinancial.net";

        return {
            format: format
        };

        function format(url) {
            return serviceHost + url;
        };
    }

}());