(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.ORDER_CONFIRMATION, {
            	templateUrl: "areas/order-confirmation/order-confirmation.html",
            	controller: "OrderConfirmation",
            	controllerAs: "model"
            });
	}

}());