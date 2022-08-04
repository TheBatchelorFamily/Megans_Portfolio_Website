(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.HOME, {
            	templateUrl: "areas/home/home.html",
            	controller: "Home",
            	controllerAs: "model"
            });
	}

}());