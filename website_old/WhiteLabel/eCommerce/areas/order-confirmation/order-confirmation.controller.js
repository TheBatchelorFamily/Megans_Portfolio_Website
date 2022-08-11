(function () {
	"use strict";

	angular.module('privateLabel.areas.orderConfirmation')
        .controller('OrderConfirmation', OrderConfirmation);

	OrderConfirmation.$inject = ["$scope", "currentOrder", "navigate", "shoppingCart"];

	function OrderConfirmation($scope, currentOrder, navigate, shoppingCart) {
		var model = this
		;

		model.shoppingCart = shoppingCart;
		model.placeAnotherOrder = placeAnotherOrder;

		function placeAnotherOrder() {
			shoppingCart.reset();
			currentOrder.reset();
			navigate.toHome();
		}
	}

}());