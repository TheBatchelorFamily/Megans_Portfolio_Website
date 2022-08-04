(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.CHECKOUT, {
            	templateUrl: "areas/checkout/checkout.html",
            	controller: "Checkout",
            	controllerAs: "model"
            });
	}

}());