(function () {
	"use strict";

	angular.module("privateLabel.services")
		.factory("program", configFactory);

	configFactory.$inject = ["$log"];

	function configFactory($log) {

		var cardDesigns = [
			{
				cardDesignId: 1,
				 imageUrl: "/content/images/card-designs/card-01.png"
			},
			{
				cardDesignId: 2,
				imageUrl: "/content/images/card-designs/card-02.png"
			},
			{
				cardDesignId: 3,
				imageUrl: "/content/images/card-designs/card-03.png"
			}
		];

		var cardAmounts = [
			25, 50, 75
		];

		var shippingOptions = [
			{
				id: 1,
				description: "Regular U.S. Mail (No Tracking)",
				amount: 3.50
			},
			{
				id: 2,
				description: "UPS Ground (No Tracking)",
				amount: 6.50
			},
			{
				id: 3,
				description: "Priority U.S. Mail (No Tracking)",
				amount: 4.50
			}
		];

		var canSpecifyAmount = true;

		return {
			getCardDesigns: getCardDesigns,
			hasCardDesigns: hasCardDesigns,
			getMaxCardCount: getMaxCardCount,
			cardAmounts: cardAmounts,
			haveCardAmounts: haveCardAmounts,
			canSpecifyAmount: canSpecifyAmount,
			shippingOptions: shippingOptions
		};

		function getCardDesigns() {
			return cardDesigns;
		}
		function hasCardDesigns() {
			return angular.isArray(cardDesigns) && cardDesigns.length > 0;
		}
		function getMaxCardCount() {
			return 5;
		}
		function haveCardAmounts() {
			return angular.isArray(cardAmounts) && cardAmounts.length > 0;
		}
	}
}());