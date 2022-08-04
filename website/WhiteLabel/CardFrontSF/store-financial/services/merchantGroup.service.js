(function () {
    "use strict";

    angular.module("angular.store-financial")
    .factory("merchantGroupService", merchantGroupServiceFactory);

    merchantGroupServiceFactory.$inject = ["api"];

function merchantGroupServiceFactory (api) {
	     
	return {
		currentMerchantGroup: 'SugarLa651',
		selectedMerchantGroups: selectedMerchantGroups,
		availableMerchantGroups: availableMerchantGroups
	};	

	function selectedMerchantGroups() {		
		return [];
	}

	function availableMerchantGroups() {
		return [];
	}	
}

}());