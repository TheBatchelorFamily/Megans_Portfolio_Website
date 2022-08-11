(function () {
    "use strict";

    angular.module("angular.store-financial")
    .factory("transactionService", transactionServiceFactory);

    transactionServiceFactory.$inject = ["api", "appConfig", ];

function transactionServiceFactory (api, appConfig) {
        var transaction;

        return {
        	lookupTransaction: lookupTransaction,
        	currentTransaction: currentTransaction,
            haveTransaction: haveTransaction,
            voidTransaction: voidTransaction,
            lockTransaction: lockTransaction,
            unlockTransaction: unlockTransaction
        };
        
       function lookupTransaction(transactionId){
          var lookupPromise = api.transaction.getTransaction(transactionId);
		  lookupPromise.then(handleLookupResponse);
		  return lookupPromise;
       }
       
       function handleLookupResponse(response) {
	       transaction = response.data;		
	   }
       
       function currentTransaction(){
           return transaction;
       }
       
       function haveTransaction(transactionId) {
            return transaction && transaction.transactionId && transaction.transactionId == transactionId;
        }
        
        function voidTransaction(transactionId, note){
             return api.transaction.voidActivationTransaction(appConfig.selectedMerchantGroup().uniqueTag, transactionId, appConfig.getLocation(), note);
        }
        
        function lockTransaction(transactionId){
             return api.transaction.lockActivationTransaction(appConfig.selectedMerchantGroup().uniqueTag, transactionId, appConfig.getLocation());
        }
        
         function unlockTransaction(transactionId){
             return api.transaction.unlockActivationTransaction(appConfig.selectedMerchantGroup().uniqueTag, transactionId, appConfig.getLocation());
        }
}

}());