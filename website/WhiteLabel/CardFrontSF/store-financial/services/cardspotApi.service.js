(function () {
    "use strict";

    angular.module("angular.store-financial")
	.factory("api", cardspotApi);

    cardspotApi.$inject = ["$log", "$http", "store", "CARDSPOT_SERVICE_FOLDER"];

    function cardspotApi($log, $http, store, CARDSPOT_SERVICE_FOLDER) {

        return {
            merchantGroups: {
                getMerchantGroups: getMerchantGroups
            },
            cards: {
            	lookupCardByPrintText: lookupCardByPrintText,
            	lookupCardBySwipe: lookupCardBySwipe
            },
			activation: {
				getFees: getFees,
				getSalesChannels: getSalesChannels,
				activate: activate,
				sendEmailReceipt: sendEmailReceipt,
				getEmailReceipt: getEmailReceipt
			},
            preActivation:{
                preActivateCardByPrintText: preActivateCardByPrintText,
                preActivateCardBySwipe: preActivateCardBySwipe,
                preActivateGroup : preActivateGroup,
                getPreActivationMerchantGroupProgramInformation: getPreActivationMerchantGroupProgramInformation
            },
            lookupValues:{
                getLockCardReasons: getLockCardReasons,
				getCountries: getCountries,
				getRegions: getRegions
            },
            cardStatus:{
                lockCard: lockCard,
                unlockCard: unlockCard
            },
            transfer:{
                transferCard: transferCard
            },
            transaction:{
                getTransaction: getTransaction,
                voidActivationTransaction: voidActivationTransaction,
                lockActivationTransaction: lockActivationTransaction,
                unlockActivationTransaction: unlockActivationTransaction
            }
        }

        function prefixUrl(url) {
            return CARDSPOT_SERVICE_FOLDER + url;
        }

        function getMerchantGroups() {
            return $http.get(prefixUrl("/merchantgroups"), {});
        }

        function lookupCardByPrintText(printText) {
        	return $http.post(prefixUrl("/lookup-card/manual-entry"), { printText: printText });
        }
        function lookupCardBySwipe(track1Data, track2Data) {
        	return $http.post(prefixUrl("/lookup-card/swipe"), { track1Data: track1Data, track2Data: track2Data });
        }
        
        function preActivateCardByPrintText(printText, merchantGroupUniqueTag) {
        	return $http.post(prefixUrl("/preactivate/entry"), { printText: printText, merchantGroupUniqueTag: merchantGroupUniqueTag });
        }
        
	    function preActivateCardBySwipe(primaryAccountNumber, merchantGroupUniqueTag) {
		    return $http.post(prefixUrl("/preactivate/swipe"), {
			    primaryAccountNumber: primaryAccountNumber,
			    merchantGroupUniqueTag: merchantGroupUniqueTag
		    });  
	    }

	    function preActivateGroup(firstCardNumber, lastCardNumber, merchantGroupUniqueTag) {
	    	var apiRoute = "preactivate/group/merchantgroup/" + merchantGroupUniqueTag;
	    	return $http.post(prefixUrl(apiRoute), {
	    		firstCardNumber: firstCardNumber,
	    		lastCardNumber: lastCardNumber
		    });  
	    }
        
         function getPreActivationMerchantGroupProgramInformation(merchantGroupUniqueTag, programUniqueTag) {
             var apiRoute = "/preactivate/merchantgroup/" + merchantGroupUniqueTag +  "/program/" + programUniqueTag;
        	return $http.get(prefixUrl(apiRoute));
        }
        
        function getLockCardReasons(){
            return $http.get(prefixUrl("/status/lock-reasons"));
        }
        
        function lockCard(merchantGroupUniqueTag, cardNumber, location, reason, note){
            var apiRoute = "/card/status/lock/merchantgroup/" + merchantGroupUniqueTag;
            return $http.post(prefixUrl(apiRoute), { location: location, cardNumber: cardNumber, lockCardReason: reason, note: note});
        }
        
        function unlockCard(merchantGroupUniqueTag, cardNumber, location, note){
            var apiRoute = "/card/status/unlock/merchantgroup/" + merchantGroupUniqueTag;
            return $http.post(prefixUrl(apiRoute), { location: location, cardNumber: cardNumber, note: note});
        }

	    function getFees(merchantGroupUniqueTag, programUniqueTag, cards) {
	    	var apiRoute = "/activate/fees/merchantgroup/" + merchantGroupUniqueTag +  "/program/" + programUniqueTag;
	    	return $http.post(prefixUrl(apiRoute), { cards: cards });
	    }

		function getSalesChannels() {
			return $http.post(prefixUrl("/activate/sales-channels"));
		}

		function activate(merchantGroupUniqueTag, programUniqueTag, activationArgs) {
	    	var apiRoute = "/activate/merchantgroup/" + merchantGroupUniqueTag +  "/program/" + programUniqueTag;
	    	return $http.post(prefixUrl(apiRoute), activationArgs);
		}

		function sendEmailReceipt(transactionId, email, cultureName) {
			return $http.post(prefixUrl("/activate/emailreceipt"), { transactionId: transactionId, destinationEmailAddress: email, cultureName: cultureName });
		}

		function getCountries() {
            return $http.get(prefixUrl("/activate/countries"));
		}

		function getRegions(countryKey) {
			return $http.post(prefixUrl("/activate/regions"), { countryKey: countryKey });
		}
		
		function transferCard(merchantGroupUniqueTag, location, transferModel){
            var apiRoute = "/transfer/merchantgroup/" + merchantGroupUniqueTag;
            return $http.post(prefixUrl(apiRoute), { 
                location: location, 
                fromCardNumber: transferModel.fromCardNumber,
                toCardNumber: transferModel.toCardNumber,
                paymentType: transferModel.paymentType,
                transferFeeAmount: transferModel.transferFeeAmount,
                note: transferModel.note,
                receiptDestinationEmailAddress: transferModel.receiptDestinationEmailAddress});            
        }    

        function getEmailReceipt(transactionId) {
            return $http.get(prefixUrl("/activate/receipt/" + transactionId));
        }
		
	   function getTransaction(transactionId){
            return $http.get(prefixUrl("/lookup-sale/" + transactionId));
        }
        
         function voidActivationTransaction(merchantGroupUniqueTag, transactionId, location, note){
            var apiRoute = "/transaction/status/void/merchantgroup/" + merchantGroupUniqueTag;
            return $http.post(prefixUrl(apiRoute), { locationName: location, systemTransactionId: transactionId, note: note});
        } 
        
        function lockActivationTransaction(merchantGroupUniqueTag, transactionId, location){
            var apiRoute = "/transaction/status/lock/merchantgroup/" + merchantGroupUniqueTag;
            return $http.post(prefixUrl(apiRoute), { locationName: location, systemTransactionId: transactionId});
        }
        
        function unlockActivationTransaction(merchantGroupUniqueTag, transactionId, location){
            var apiRoute = "/transaction/status/unlock/merchantgroup/" + merchantGroupUniqueTag;
            return $http.post(prefixUrl(apiRoute), { locationName: location, systemTransactionId: transactionId});
        }  
	}
}());