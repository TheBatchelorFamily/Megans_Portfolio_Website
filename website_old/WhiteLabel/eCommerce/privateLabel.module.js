(function () {
    "use strict";

    angular.module("privateLabel", [
    "ngRoute",
    "ngCookies",

    "pascalprecht.translate",
    "angular-storage",
    "angular.store-financial",

	"privateLabel.areas.global",
	"privateLabel.areas.home",
	"privateLabel.areas.personalize",
	"privateLabel.areas.shippingInfo",
	"privateLabel.areas.reviewOrder",
	"privateLabel.areas.checkout",
	"privateLabel.areas.shoppingCart",
	"privateLabel.areas.billingPayment",
	"privateLabel.areas.orderConfirmation",
	"privateLabel.areas.directives",

    "privateLabel.services"
    ]);
}());
