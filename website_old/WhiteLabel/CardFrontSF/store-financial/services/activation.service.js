(function () {
	"use strict";

	angular.module("angular.store-financial")
    .factory("activationService", activationServiceFactory);

	activationServiceFactory.$inject = ["$q", "$log", "api", "appConfig", "notify", "preActivationService", "cardFees"];

	function activationServiceFactory($q, $log, api, appConfig, notify, preActivationService, cardFees) {
		var activations = [];

		return {
			activate: activate,
			activations: getActivations,
			mostRecentActivation: getMostRecentActivation,
			hasActivations: hasActivations,
			reset: reset
		};

		function getMostRecentActivation() {
			return hasActivations() ? activations[0] : null;
		}

		function activate(payments, salesChannel, note, customer, lockOnActivation) {
			var deferred = $q.defer();
			var merchantGroupUniqueTag = appConfig.selectedMerchantGroup().uniqueTag,
				programUniqueTag = preActivationService.getProgramUniqueTag(),
				location = appConfig.getLocation(),
				activation = {
					salesChannel: salesChannel,
					location: location,
					note: note,
					customer: customer,
					cardActivations: mapCards(),
					payments: mapPayments(payments),
					transactionFees: cardFees.getTransactionFees(),
					cardTypeFees: cardFees.getPerCardFees(),
					lockOnActivation: lockOnActivation
				};;

			notify.forHttp(api.activation.activate(merchantGroupUniqueTag, programUniqueTag, activation),
				{ startTranslationId: "ENTER_SALES.SALE_SUMMARY.COMPLETE_SALE_PROGRESS_TEXT" })
				.then(function (data) {
					activation.currencySymbol = preActivationService.getCurrencySymbol();
					activation.confirmation = data;
					activations.unshift(activation);
					preActivationService.reset();
					cardFees.reset();
					deferred.resolve(activation);
				}, function(error) {
					deferred.reject(error);
				});

			return deferred.promise;

		}

		function mapCards() {
			return _.map(preActivationService.getCardsPreActivated(), function (card) {
				return {
					cardNumber: card.primaryAccountNumber,
					cardType: card.currentCardType,
					amount: card.amount,
					campaign: card.campaign
				};
			});
		}

		function mapPayments(payments) {
			return _.map(payments, function (payment) {
				return {
					paymentType: payment.paymentType.paymentType,
					amount: payment.amount
				};
			});
		}

		function hasActivations() {
			return angular.isArray(activations) && activations.length > 0;
		}

		function getActivations() {
			return angular.isArray(activations) ? activations : [];
		}


		function reset() {
			activations = [];
		}



	}

}());