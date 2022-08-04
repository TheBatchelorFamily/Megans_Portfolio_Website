(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.BILLING_PAYMENT, {
            	templateUrl: "areas/billing-payment/billing-payment.html",
            	controller: "BillingPayment",
            	controllerAs: "model"
            });
	}

}());