(function () {
    "use strict";

    angular.module("angular.store-financial")
    .factory("transferService", transferServiceFactory);

    transferServiceFactory.$inject = ["$q", "$log", "api", "appConfig","notify", "cardService"];

function transferServiceFactory ($q, $log, api, appConfig, notify, cardService) {    
	
	return {
		transferCard: transferCard
	};
	 
	function transferCard(transferModel) {
		var deferred = $q.defer(),transferResponse;
        
        api.transfer.transferCard(appConfig.selectedMerchantGroup().uniqueTag, appConfig.getLocation(), transferModel).then(function(response){
            transferResponse = response;
            return refreshFromCard(transferModel.fromCardPrintText);
        }).then(function(){
            return refreshToCard(transferModel.toCardPrintText);        
        }).catch(function(error){
            deferred.reject(error);
        }).then(function(){
            deferred.resolve(transferResponse);
        });          
		
		return deferred.promise;            
	}
    
    function refreshFromCard(printText){
        var deferred = $q.defer();
        
        cardService.refreshCard(printText)
				.then(function(){					
                    deferred.resolve();
				}, function (error) {
                    deferred.reject(error);
                });
                
        return deferred.promise;  
    }
    
     function refreshToCard(printText){
        var deferred = $q.defer();
        
        cardService.refreshCard(printText)
				.then(function(){					
                    deferred.resolve();
				}, function (error) {
                    deferred.reject(error);
                });
                
        return deferred.promise;  
    }
}

}());