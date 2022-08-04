(function() {
    "use strict";

    angular.module('angular.store-financial')
        .directive('sfTogglePanelContents', togglePanelContents);

    togglePanelContents.$inject = [];

    function togglePanelContents() {
        return function (scope, element, attrs) {
           element.on('click', function(){
               $(this).siblings('.collapse').toggleClass('in');
               $(this).find('.glyphicon').toggleClass('glyphicon-triangle-bottom glyphicon-triangle-top');               
           });
        };
    }
}());