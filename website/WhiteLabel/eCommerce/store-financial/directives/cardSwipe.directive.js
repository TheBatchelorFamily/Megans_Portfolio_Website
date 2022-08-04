(function() {
    "use strict";

    angular.module('angular.store-financial')
        .directive('sfCardSwipe', cardSwipe);

    cardSwipe.$inject = ["$document", "SF_EVENTS"];

    function cardSwipe($document, SF_EVENTS) {
        return {
            link: link,
            scope: {}
        };

        function sfParser(rawData) {
        	var pattern = new RegExp("^(%[^%;\\?]+\\?)?(;[0-9\\:<>\\=]+\\?)?([+;][0-9\\:<>\\=]+\\?)?");

        	var match = pattern.exec(rawData);
        	if (!match) return null;

        	// Extract the tracks
        	var cardData = {
        		type: "generic",
        		line1: match[1] ? match[1].slice(1, -1) : "",
        		line2: match[2] ? match[2].slice(1, -1) : ""
        	};

        	//try to get primary card number
        	var cardNumberPattern = new RegExp("^%B([0-9]*)\\^");
        	var cardNumberMatch = cardNumberPattern.exec(rawData);
        	if (cardNumberMatch) {
		        cardData.primaryAccountNumber = cardNumberMatch[1];
	        }

        	return cardData;
        }

        function link(scope, element, attrs) {

            $.cardswipe({
                firstLineOnly: false,
                success: swipeSuccess,
                parsers: [sfParser],
                debug: false
            });

            function swipeSuccess(data) {
                
            	scope.$emit(SF_EVENTS.CARDSWIPE_SUCCESS, { track1Data: data.line1, track2Data: data.line2, primaryAccountNumber: data.primaryAccountNumber });
			}
		}
	}
}());