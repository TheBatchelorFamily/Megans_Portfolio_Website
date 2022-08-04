(function () {
	"use strict";

	angular.module("privateLabel.areas.directives")
		.directive("sfOrderSummary", configDirective);

	function configDirective() {
		return {
			restrict: "E",
			scope: {
				paymentInformation: "=",
				billingContact: "=",
				orders: "="
			},
			controller: Controller,
			controllerAs: "model",
			templateUrl: "areas/directives/orderSummary.directive.html"
		};
	}

	Controller.$inject = ["$scope", "shoppingCart"];

	function Controller($scope, shoppingCart) {
		var model = this
		;

		model.billingContact = shoppingCart.billingContact();
		model.paymentInformation = shoppingCart.paymentInformation();
	}
}());
