(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.REVIEW_ORDER, {
            	templateUrl: "areas/review-order/review-order.html",
            	controller: "ReviewOrder",
            	controllerAs: "model"
            });
	}

}());