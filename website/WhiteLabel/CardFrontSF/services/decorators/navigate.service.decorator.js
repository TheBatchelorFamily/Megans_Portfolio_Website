(function () {
    "use strict";

    angular.module('privateLabel')
        .config(configModule);

    configModule.$inject = ["$provide"];

    function configModule($provide) {
        $provide.decorator("navigate", decorateNavigateService);
    }

    decorateNavigateService.$inject = ["$delegate", "NAV_URLS"];

    function decorateNavigateService($delegate, NAV_URLS) {

        $delegate.toHome = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.HOME);
        };

        $delegate.toShippingInfo = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.SHIPPING_INFO);
        };

        $delegate.toPersonalize = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.PERSONALIZE);
        };

        $delegate.toReviewOrder = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.REVIEW_ORDER);
        };

        $delegate.toShoppingCart = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.SHOPPING_CART);
        };

        $delegate.toBillingPayment = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.BILLING_PAYMENT);
        };

        $delegate.toCheckout = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.CHECKOUT);
        };

        $delegate.toOrderConfirmation = function (referrer) {
        	$delegate.setReferrer(referrer);
        	$delegate.to(NAV_URLS.ORDER_CONFIRMATION);
        };

        $delegate.setDefaultUrl(NAV_URLS.HOME);

        return $delegate;
    }
}());