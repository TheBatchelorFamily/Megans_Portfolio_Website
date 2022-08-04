(function () {
	"use strict";

	angular.module("privateLabel")
        .config(config);

	config.$inject = ["$routeProvider", "NAV_URLS"];

	function config($routeProvider, NAV_URLS) {

		$routeProvider
            .when(NAV_URLS.PERSONALIZE, {
            	templateUrl: "areas/personalize/personalize.html",
            	controller: "Personalize",
            	controllerAs: "model"
            });
	}

}());