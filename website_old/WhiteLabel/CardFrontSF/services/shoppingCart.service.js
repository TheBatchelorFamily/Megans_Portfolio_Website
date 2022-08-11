(function () {
	"use strict";

	angular.module("privateLabel.services")
		.factory("shoppingCart", configFactory);

	configFactory.$inject = ["program", "currentOrder", "store"];

	function configFactory(program, currentOrder, store) {

		var paymentInformation, optIn;

		//init();

		return {
			orders: getOrders,
			billingContact: getBillingContact,
			paymentInformation: getPaymentInformation,
			optIn: optIn,
			haveOrders: haveOrders,
			addCurrentOrder: addCurrentOrder,
			removeOrder: removeOrder,
			reset: reset
		};

		function getOrders() {
			var storedOrders = store.get("orders");
			if (!angular.isArray(storedOrders)) {
				store.set("orders", []);
				return [];
			}

			return store.get("orders");
		}

		function getBillingContact() {
			if (!store.get("billingContact")) {
				store.set("billingContact", {
					firstName: "Salvador",
					lastName: "Perez",
					address1: "1500 E. Royals Dr.",
					address2: "",
					city: "Kansas City",
					state: "MO",
					postalCode: "64108",
					country: {
						countryKey: "Unites States",
						countryName: "United States"
					}
				});
			}

			return store.get("billingContact");
		}

		function getPaymentInformation() {

			if (!paymentInformation) {
				paymentInformation = {
					creditCardNumber: "4100000000000000",
					nameOnCard: "Salvador Perez",
					expiryMonth: 11,
					expiryYear: 2018,
					cvv: 257
				};

			}

			return paymentInformation;
		}

		function removeOrder(order) {
			angular.copy(_.reject(orders, function (anOrder) {
				return order.$$hashKey === anOrder.$$hashKey;
			}), orders);
		}

		function haveOrders() {
			return angular.isArray(orders) && orders.length > 0;
		}

		function reset() {
			init();
		}

		function addCurrentOrder() {

			var storedOrders = getOrders();

			var copiedOrder = angular.copy(currentOrder.order());
			copiedOrder.index = storedOrders.length + 1;
			storedOrders.push(copiedOrder);
			store.set("orders", storedOrders);

			currentOrder.reset();
		}

		function init() {
			//orders = [];
			store.remove("orders");
			store.remove("billingContact");
			store.remove("paymentInformation");
			optIn = false;
		}
	}
}());