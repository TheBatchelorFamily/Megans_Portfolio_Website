(function () {
    "use strict";

    angular.module("angular.store-financial")
    .factory("cardService", cardServiceFactory);

    cardServiceFactory.$inject = ["api", "appConfig"];

function cardServiceFactory (api, appConfig) {
        var cardsRetrieved = [];

        return {
        	lookupByPrintText: lookupByPrintText,
        	lookupBySwipe: lookupBySwipe,
            haveCard: haveCard,
            cardsRetrieved: cardsRetrieved,
            cardJustRetrieved: cardJustRetrieved,
            removeCard: removeCard,
            clearAll: clearAll,
            lockCard: lockCard,
            unlockCard: unlockCard,
			findCard: findCard,
            refreshCard: refreshCard
        };
        
        function clearAll(){
            angular.copy([],cardsRetrieved);            
        }

        function cardJustRetrieved() {
            return cardsRetrieved[0];
        }

        function haveCard(printText, primaryAccountNumber) {
            if (primaryAccountNumber) {
                return _.find(cardsRetrieved, function (card) {
                    return card.cardNumber === primaryAccountNumber;
                });
            }
            if (printText) {
                return _.find(cardsRetrieved, function (card) {
                    return card.printText === printText;
                });
            }
            return false;
        }

        function findCard(printText) {
	        return _.find(cardsRetrieved, function(card) {
		        return card.printText === printText;
	        });
        }

        function removeCard(printText, primaryAccountNumber) {
            if (primaryAccountNumber) {
                angular.copy(_.reject(cardsRetrieved, function (card) {
                    return card.cardNumber === primaryAccountNumber;
                }), cardsRetrieved);
            }
            if (printText) {
                angular.copy(_.reject(cardsRetrieved, function (card) {
                    return card.printText === printText;
                }),cardsRetrieved);
            }

        }

	function lookupByPrintText(printText) {
		var lookupPromise = api.cards.lookupCardByPrintText(printText);
		lookupPromise.then(handleLookupResponse);
		return lookupPromise;
	}

	function lookupBySwipe(track1Data, track2Data) {
		var lookupPromise = api.cards.lookupCardBySwipe(track1Data, track2Data);
		lookupPromise.then(handleLookupResponse);
		return lookupPromise;
	}

	function handleLookupResponse(response) {
		var cardInfo = response.data.card;

		if (!haveCard(undefined, cardInfo.cardNumber)) {
			cardsRetrieved.unshift(cardInfo);
		} else {
			var index = _.findIndex(cardsRetrieved, function(card) {
				return card.cardNumber === cardInfo.cardNumber;
			});
			cardsRetrieved[index] = cardInfo;
		}
	}
    
    function lockCard(cardNumber, reason, note){
        return api.cardStatus.lockCard(appConfig.selectedMerchantGroup().uniqueTag, cardNumber, appConfig.getLocation(), reason, note);                
    }
    
    function unlockCard(cardNumber, note){
        return api.cardStatus.unlockCard(appConfig.selectedMerchantGroup().uniqueTag, cardNumber, appConfig.getLocation(), note);
    }
    
    function refreshCard(printText){
        return lookupByPrintText(printText);
    }
}

}());