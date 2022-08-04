(function () {
	"use strict";

	angular.module('privateLabel.areas.shoppingCart')
        .controller('ShoppingCart', ShoppingCart);

	ShoppingCart.$inject = ["$scope", "program", "navigate", "shoppingCart"];

	function ShoppingCart($scope, program, navigate, shoppingCart) {
		var model = this;

		model.orders = shoppingCart.orders();
		model.navigateToCheckout = navigateToCheckout;
		model.navigateToHome = navigateToHome;

		function navigateToCheckout() {
			navigate.toCheckout();
		}

		function navigateToHome() {
			navigate.toHome();
		}
	}
}());