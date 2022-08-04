(function () {
	"use strict";

	angular.module('privateLabel.areas.billingPayment')
        .controller('BillingPayment', BillingPayment);

	BillingPayment.$inject = ["$scope", "program", "currentOrder", "navigate"];

	function BillingPayment($scope, program, currentOrder, navigate) {

		var model = this
		;

		model.navigateToReviewOrder = navigateToReviewOrder;

		function navigateToReviewOrder() {
			navigate.toReviewOrder();
		}
	}
}());