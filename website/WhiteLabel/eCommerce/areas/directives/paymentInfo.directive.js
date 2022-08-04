(function () {
	"use strict";

	angular.module("privateLabel.areas.directives")
		.directive("sfPaymentInfo", configDirective);

	function configDirective() {
		return {
			restrict: "E",
			scope: {
				paymentInformation: "="
			},
			controller: Controller,
			controllerAs: "model",
			templateUrl: function(elem, attr) {
				return "areas/directives/paymentInfo." + attr.type + ".directive.html";
			}
		};
	}

	Controller.$inject = ["$scope", "currentOrder", "program"];

	function Controller($scope, currentOrder, program) {
		var model = this
		;


	}
}());
