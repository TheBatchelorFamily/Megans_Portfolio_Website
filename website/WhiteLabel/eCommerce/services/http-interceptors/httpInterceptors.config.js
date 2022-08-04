(function () {
    "use strict";

    angular.module("privateLabel")
        .config(configHttpProvider);

    configHttpProvider.$inject = ["$httpProvider"];

    function configHttpProvider($httpProvider) {
        $httpProvider.interceptors.push("globalHttpInterceptor");
    }
}());