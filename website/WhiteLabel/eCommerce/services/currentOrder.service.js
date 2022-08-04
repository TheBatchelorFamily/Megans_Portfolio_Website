(function () {
	"use strict";

	angular.module("privateLabel.services")
		.factory("currentOrder", configFactory);

	configFactory.$inject = ["program", "store"];

	function configFactory(program, store) {

		var lineItemMaster = { amount: 0 },
		maxCardCount = program.getMaxCardCount();

		//init();

		return {
			order: getOrder,
			getLineItems: getLineItems,
			setLineItems: setLineItems,
			haveLineItems: haveLineItems,
			canAddLineItem: canAddLineItem,
			addLineItem: addLineItem,
			removeLineItem: removeLineItem,
			lineItemsValid: lineItemsValid,

			setCardDesign: setCardDesign,
			getCardDesign: getCardDesign,

			reset: reset
		};

		function getOrder() {
			var order = store.get("order");
			if (!order) {
				store.set("order", angular.copy({
					lineItems: [angular.copy(lineItemMaster)],
					shippingContact: {
						firstName: "Alex",
						lastName: "Gordon",
						address1: "1500 E. Royals Dr.",
						address2: "",
						city: "Kansas City",
						state: "MO",
						postalCode: "64108",
						country: {
							countryKey: "Unites States",
							countryName: "United States"
						}
					},
					selectedCardDesign: undefined,
					selectedShippingOption: program.shippingOptions[0],
					personalization: {
						to: "Alex Gordon",
						from: "Salvie",
						message: "Please enjoy this gift card."
					}
				}));
			}
			return store.get("order");
		}

		function saveOrder(order) {
			store.set("order", order);
		}

		function setLineItems(someLineItems) {
			var order = getOrder();
			order.lineItems = someLineItems;
			saveOrder(order);
		}

		function getLineItems() {
			return getOrder().lineItems;
		}

		function canAddLineItem() {
			return getOrder().lineItems.length < maxCardCount;
		}

		function lineItemsValid() {
			var lineItems = getOrder().lineItems;
			return haveLineItems() && (lineItems.length <= maxCardCount) && _.every(lineItems, function (lineItem) {
				return lineItem.amount && lineItem.amount > 0;
			});
		}

		function removeLineItem(lineItem) {
			var order = getOrder();
			angular.copy(_.reject(order.lineItems, function (aLineItem) {
				return lineItem.$$hashKey === aLineItem.$$hashKey;
			}), order.lineItems);
			saveOrder(order);
		}

		function haveLineItems() {
			var lineItems = getOrder().lineItems;
			return angular.isArray(lineItems) && lineItems.length > 0;
		}

		function setCardDesign(design) {
			if (design) {
				var order = getOrder();
				order.selectedCardDesign = design;
				saveOrder(order);
			}
		}

		function getCardDesign() {
			return getOrder().selectedCardDesign;
		}

		function reset() {
			init();
		}

		function addLineItem() {
			var order = getOrder();
			order.lineItems.push(angular.copy(lineItemMaster));
			saveOrder(order);
		}

		function init() {
			store.remove("order");
		}
	}
}());