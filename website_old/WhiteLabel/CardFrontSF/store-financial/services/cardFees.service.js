(function () {
	"use strict";

	angular.module("angular.store-financial")
    .factory("cardFees", cardFeesServiceFactory);

	cardFeesServiceFactory.$inject = ["$q", "api", "notify"];

	function cardFeesServiceFactory($q, api, notify) {
		var perCardFees = [],
			transactionFees = [],
			cardsToBeActivated
			;

		return {
			getFees: getFees,
			getTransactionFees: getTransactionFees,
			haveTransactionFees: haveTransactionFees,
			removeTransactionFee: removeTransactionFee,
			addTransactionFee: addTransactionFee,
			getPerCardFees: getPerCardFees,
			havePerCardFees: havePerCardFees,
			removePerCardFee: removePerCardFee,
			addPerCardFee: addPerCardFee,
			hasPerCardFeeForCardType: hasPerCardFeeForCardType,
			reset: reset
		};

		function addTransactionFee(transactionFee) {
			if (angular.isArray(transactionFees)) {
				transactionFees.push(transactionFee);
			}
		}

		function addPerCardFee(perCardFee) {
			if (angular.isArray(perCardFees) && !hasPerCardFeeForCardType(perCardFee)) {
				perCardFees.push(perCardFee);
			}
		}

		function hasPerCardFeeForCardType(perCardFee) {
			return perCardFees.length > 0
				&& _.find(perCardFees, function (aPerCardFee) {
					return perCardFee.cardType === aPerCardFee.cardType;
			});
		}

		function removeTransactionFee(transactionFee) {
			transactionFees = _.reject(transactionFees, function(aFee) {
				return aFee.$$hashKey === transactionFee.$$hashKey;
			});
		}

		function removePerCardFee(perCardFee) {
			perCardFees = _.reject(perCardFees, function(aFee) {
				return aFee.$$hashKey === perCardFee.$$hashKey;
			});
		}

		function mapCards() {
			return _.map(cardsToBeActivated,
				function (card) {
					return {
						cardType: card.currentCardType,
						amount: card.amount
					};
				});
		}

		function getFees(merchantGroupUniqueTag, programUniqueTag, cards) {

			cardsToBeActivated = cards;
			var deferred = $q.defer();
			notify.forHttp(api.activation.getFees(merchantGroupUniqueTag, programUniqueTag, mapCards()), { startTranslationId: 'ENTER_SALES.FEES.GETTING_FEES_PROGRESS_TEXT' })
				.then(function(response) {
					perCardFees = response.cardTypeFees;
					transactionFees = response.transactionFees;
					deferred.resolve(response);
				}, function(error) {
					deferred.reject(error);
				});
			return deferred.promise;

		}


		function reset() {
			perCardFees = [];
			transactionFees = [];
		}

		function getPerCardFees() {
			return perCardFees;
		}
		function getTransactionFees() {
			return transactionFees;
		}
		function havePerCardFees() {
			return angular.isArray(perCardFees) && perCardFees.length > 0;
		}
		function haveTransactionFees() {
			return angular.isArray(transactionFees) && transactionFees.length > 0;
		}

	}

}());