(function () {
	"use strict";

	angular.module('privateLabel.areas.personalize')
        .controller('Personalize', Personalize);

	Personalize.$inject = ["$scope", "program", "currentOrder", "navigate", "shoppingCart"];

	function Personalize($scope, program, currentOrder, navigate, shoppingCart) {
		var model = this
		;

		model.navigateToShoppingCart = navigateToShoppingCart;

		function navigateToShoppingCart() {
			shoppingCart.addCurrentOrder();
			navigate.toShoppingCart();
		}
	}
}());