(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.SHIPPING_INFO, {
            	templateUrl: "areas/shipping-info/shipping-info.html",
            	controller: "ShippingInfo",
            	controllerAs: "model"
            });
	}

}());