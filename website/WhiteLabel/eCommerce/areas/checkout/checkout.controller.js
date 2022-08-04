(function () {
	"use strict";

	angular.module('privateLabel.areas.checkout')
        .controller('Checkout', Checkout);

	Checkout.$inject = ["$scope", "program", "shoppingCart", "navigate"];

	function Checkout($scope, program, shoppingCart, navigate) {

		var model = this
		;

		model.termsAgreed = false;
		model.billingContact = shoppingCart.billingContact();
		model.paymentInformation = shoppingCart.paymentInformation();
		model.optIn = shoppingCart.optIn;
		model.goToReviewOrder = navigate.toReviewOrder;
	}
}());