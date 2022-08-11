(function() {
    "use strict";

    angular.module('angular.store-financial')
        .directive('sfFocusWhenTrue', focusWhenTrue);

    focusWhenTrue.$inject = ["$timeout"];

    function focusWhenTrue($timeout) {
        return function (scope, element, attrs) {
            scope.$watch(attrs.sfFocusWhenTrue,
                function(newValue) {
                    if (newValue) {
                        $timeout(function() {
                            element[0].focus();
                        });
                    }
                }, true);
        };
    }
}());