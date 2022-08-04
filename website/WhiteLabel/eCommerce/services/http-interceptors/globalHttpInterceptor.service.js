(function () {
    'use strict';

    angular.module('privateLabel')
        .factory("globalHttpInterceptor", globalHttpInterceptor);

    globalHttpInterceptor.$inject = ["$q", "$log", "apiUrlFormatter"];

    function globalHttpInterceptor ($q, $log, apiUrlFormatter) {
        return {
            'request': function (config) {
                if (!(config.url.startsWith("http") || config.url.endsWith(".json") || config.url.endsWith(".html"))) {
                    //convenient way to format all $http URLs outside of static files and calls to the oauth service
                    config.url = apiUrlFormatter.format(config.url);
                }
                return config;
            }//,
            //// optional method
            //'requestError': function (rejection) {
            //    // do something on error
            //    if (canRecover(rejection)) {
            //        return responseOrNewPromise
            //    }
            //    return $q.reject(rejection);
            //},
            //// optional method
            //'response': function (response) {
            //    // do something on success
            //    return response;
            //},
            //// optional method
            //'responseError': function (rejection) {
            //    // do something on error
            //    if (canRecover(rejection)) {
            //        return responseOrNewPromise
            //    }
            //    return $q.reject(rejection);
            //}
        };
    }


}());