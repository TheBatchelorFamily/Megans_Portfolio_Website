(function () {
    "use strict";

    angular.module("angular.store-financial")
        .filter("default", [function () {
            return function (value, def) {
                return value || def;
            };
        }]);
}());