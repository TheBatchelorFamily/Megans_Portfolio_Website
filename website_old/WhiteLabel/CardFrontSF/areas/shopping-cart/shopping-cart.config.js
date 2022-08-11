(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.SHOPPING_CART, {
            	templateUrl: "areas/shopping-cart/shopping-cart.html",
            	controller: "ShoppingCart",
            	controllerAs: "model"
            });
	}
}());