(function () {
    "use strict";

    angular.module("angular.store-financial")
        .filter("abs", [function () {
            return function (value) {                
                if (value < 0) {
                    value = Math.abs(value);                    
                }
                return value;
            };
        }]);
} ());