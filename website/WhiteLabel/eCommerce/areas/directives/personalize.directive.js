(function () {
	"use strict";

	angular.module("privateLabel.areas.directives")
		.directive("sfPersonalize", configDirective);

	function configDirective() {
		return {
			restrict: "E",
			scope: {
			},
			controller: Controller,
			controllerAs: "model",
			templateUrl: "areas/directives/personalize.directive.html"
		};
	}

	Controller.$inject = ["$scope", "currentOrder", "program"];

	function Controller($scope, currentOrder) {
		var model = this
		;

		model.personalization = currentOrder.order().personalization;
	}
}());
