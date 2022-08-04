(function () {
    "use strict";

    angular.module("angular.store-financial")
        .filter("yesNo", [function () {
            return function (input) {
                return input ? "GLOBAL.YES_TEXT" : "GLOBAL.NO_TEXT";
            };
        }]);
}());