(function () {
	"use strict";

	angular.module("angular.store-financial")
    .factory("receipts", serviceFactory);

	serviceFactory.$inject = ["$q", "$log", "api", "notify"];

	function serviceFactory($q, $log, api, notify) {
		var receipts = [];

		return {
			getReceipt: getReceipt
		};

		function getReceipt(transactionId) {

			var deferred = $q.defer(),
				existingReceipt = _.find(receipts, function(receipt) {
					return receipt.transactionId === transactionId;
				});

			if (existingReceipt) {
				deferred.resolve(existingReceipt);
			} else {
				notify.forHttp(api.activation.getEmailReceipt(transactionId), { startTranslationId: "SALES_RECEIPT.GET_RECEIPT_PROGRESS_TEXT" })
					.then(function (response) {
						var receipt = {
							transactionId: transactionId,
							receiptHtml: response.receiptHtml
						};
						receipts.unshift(receipt);
						deferred.resolve(receipt);
					}, function (error) {
						deferred.reject(error);
					});
			}
			return deferred.promise;
		}
	}
}());