(function () {
    "use strict";

    angular.module("privateLabel")
        .constant("NAV_URLS", {
        	"HOME": "/",
        	"REVIEW_ORDER": "/review-order", 
        	"CHECKOUT": "/checkout", 
        	"SHIPPING_INFO": "/shipping-info", 
        	"PERSONALIZE": "/personalize",
        	"BILLING_PAYMENT": "/billing-payment",
        	"SHOPPING_CART": "/shopping-cart",
			"ORDER_CONFIRMATION": "/order-confirmation"
        })
        .constant("DEFAULT_LANG_KEY", "en-us")
        .constant("LANGUAGES", [
            { name: "CULTURES.EN_US", key: "en-us", dateFormat: "MDY" },
            { name: "CULTURES.EN_CA", key: "en-ca", dateFormat: "MDY" },
            { name: "CULTURES.EN_GB", key: "en-gb", dateFormat: "DMY" },
            { name: "CULTURES.FR_CA", key: "fr-ca", dateFormat: "YMD" },
            { name: "CULTURES.DE", key: "de", dateFormat: "YMD" },
            { name: "CULTURES.DE_AT", key: "de-at", dateFormat: "DMY" },
            { name: "CULTURES.IT", key: "it", dateFormat: "DMY" },
            { name: "CULTURES.ES", key: "es", dateFormat: "DMY" },
            { name: "CULTURES.NL", key: "nl", dateFormat: "DMY" }
        ])
        .constant("DATE_FORMATS", [
            { name: "YMD", formatString: "yyyy-MM-dd" },
            { name: "MDY", formatString: "MM/dd/yyyy" },
            { name: "DMY", formatString: "dd-MM-yyyy" }
        ])
		.constant("REGION_TYPES", {
	  		"NONE": "None",
	  		"STATE": "State", 
	  		"PROVINCE": "Province", 
	  		"COUNTY": "County"
	    })
        .constant("CONTROLLERS", {
            "HOME": "Home"
        })
        .constant("DEFAULT_DATE_FORMAT", "MDY")
		.constant("STORE_KEYS", {
			"SHOPPING_CART": "shopping-cart"
		})
		.constant("DEFAULT_VALUES", {
		})
        ;
}());