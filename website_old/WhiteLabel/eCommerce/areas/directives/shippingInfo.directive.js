(function () {
	"use strict";

	angular.module("privateLabel.areas.directives")
		.directive("sfShippingInfo", configDirective);

	function configDirective() {
		return {
			restrict: "E",
			scope: {
			},
			controller: Controller,
			controllerAs: "model",
			templateUrl: "areas/directives/shippingInfo.directive.html"
		};
	}

	Controller.$inject = ["$scope", "currentOrder", "program"];

	function Controller($scope, currentOrder, program) {
		var model = this
		;

		model.shippingOptions = program.shippingOptions;
		var order = currentOrder.order();
		model.order = order;
		model.shippingContact = order.shippingContact;
		
	}
}());
