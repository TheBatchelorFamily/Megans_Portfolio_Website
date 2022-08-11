(function () {
	"use strict";

	angular.module("privateLabel.areas.directives")
		.directive("sfShoppingCart", configDirective);

	function configDirective() {
		return {
			restrict: "E",
			scope: {
				type: "@"
			},
			controller: Controller,
			controllerAs: "model",
			templateUrl: "areas/directives/shoppingCart.directive.html"
		};
	}

	Controller.$inject = ["$scope", "shoppingCart"];

	function Controller($scope, shoppingCart) {
		var model = this
		;

		model.orders = shoppingCart.orders();

		model.orderTotal = _.reduce(shoppingCart.orders(), function (orderMemo, order) {
			return orderMemo + _.reduce(order.lineItems, function (itemMemo, lineItem) {
				return itemMemo + lineItem.amount || 0;
			}, 0);
		}, 0);

		model.shippingTotal =
				_.reduce(shoppingCart.orders(), function (memo, order) {
					return memo + (order.selectedShippingOption ? order.selectedShippingOption.amount : 0);
				}, 0);

		model.feesTotal = 9.50;

		model.isReadOnly = $scope.type && $scope.type === "readOnly";
	}
}());
