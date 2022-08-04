(function() {
    "use strict";

    angular.module('angular.store-financial')
        .directive('sfRequireClaim', requireClaim);

    requireClaim.$inject = ["authService"];

    function requireClaim(authService) {
        return function(scope, element, attrs) {
            if (!authService.hasClaim(attrs.sfRequireClaim)) {
                element.hide();
            }

        };
    }

}());