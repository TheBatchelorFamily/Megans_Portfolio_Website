(function () {
	"use strict";

	angular.module('privateLabel.areas.shippingInfo')
        .controller('ShippingInfo', ShippingInfo);

	ShippingInfo.$inject = ["$scope", "program", "currentOrder", "navigate"];

	function ShippingInfo($scope, program, currentOrder, navigate) {

		var model = this
		;

		model.navigateToPersonalize = navigateToPersonalize;

		function navigateToPersonalize() {
			navigate.toPersonalize();
		}
	}
}());