(function () {
	"use strict";

	angular.module("privateLabel.areas.directives")
		.directive("sfCardAmounts", configDirective);

	function configDirective() {
		return {
			restrict: "E",
			scope: {
			},
			controller: CardAmountsController,
			controllerAs: "model",
			templateUrl: "areas/directives/cardAmounts.directive.html"
		};
	}

	CardAmountsController.$inject = ["$scope", "currentOrder", "program"];

	function CardAmountsController($scope, currentOrder, program) {
		var model = this
			;

		model.cardAmounts = program.cardAmounts;
		model.lineItems = currentOrder.getLineItems();
		model.addCard = currentOrder.addLineItem;
		model.removeCard = currentOrder.removeLineItem;
		model.canAddCard = currentOrder.canAddLineItem;

		model.setLineItemAmount = setLineItemAmount;

		function setLineItemAmount(lineItem, amount) {
			lineItem.amount = amount;
			currentOrder.setLineItems(model.lineItems);
		}
	}
}());
