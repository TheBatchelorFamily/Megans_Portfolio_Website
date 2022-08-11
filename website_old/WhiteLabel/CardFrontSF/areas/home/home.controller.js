(function () {
	"use strict";

	angular.module('privateLabel.areas.home')
        .controller('Home', Home);

	Home.$inject = ["$scope", "program", "currentOrder", "navigate"];

	function Home($scope, program, currentOrder, navigate) {
		var model = this
		;

		model.cardDesigns = program.getCardDesigns();
		model.selectCardDesign = selectCardDesign;
		model.isSelectedCardDesign = isSelectedCardDesign;
		model.haveSelectedCardDesign = haveSelectedCardDesign;
		model.lineItemsValid = currentOrder.lineItemsValid;
		model.navigateToShippingInfo = navigateToShippingInfo;

		function selectCardDesign(design) {
			currentOrder.setCardDesign(design);
		}

		function isSelectedCardDesign(design) {
			var selectedCardDesign = currentOrder.getCardDesign();
			return selectedCardDesign && selectedCardDesign.$$hashKey === design.$$hashKey;
		}

		function haveSelectedCardDesign() {
			return currentOrder.getCardDesign();
		}

		function navigateToShippingInfo() {
			navigate.toShippingInfo();
		}
	}
}());