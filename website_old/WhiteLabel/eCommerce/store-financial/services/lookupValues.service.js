(function () {
    "use strict";

    angular.module("angular.store-financial")
		.factory("lookupValues", lookupValuesFactory);

    lookupValuesFactory.$inject = ["$q", "api", "notify"];

	function lookupValuesFactory($q, api, notify) {
		var lockCardReasonsPromise,
			salesChannelsPromise,
			countriesPromise,
			regionCollections = [];


		return {
			getLockCardReasons: getLockCardReasons,
			getSalesChannels: getSalesChannels,
			getCountries: getCountries,
			getRegions: getRegions

		};

		function getLockCardReasons() {

			if (!lockCardReasonsPromise) {
				lockCardReasonsPromise = api.lookupValues.getLockCardReasons();
			}
			
			return lockCardReasonsPromise;
		}

		function getSalesChannels() {
			if (!salesChannelsPromise) {
				salesChannelsPromise = notify.forHttp(api.activation.getSalesChannels(), { startTranslationId: "LOOKUP_VALUES.GET_SALES_CHANNELS_PROGRESS_TEXT" });
			}
			return salesChannelsPromise;
		}

		function getCountries() {
			if (!countriesPromise) {
				countriesPromise = notify.forHttp(api.lookupValues.getCountries(), { startTranslationId: "LOOKUP_VALUES.GET_COUNTRIES_PROGRESS_TEXT" });
			}
			return countriesPromise;
		}
		
		function getRegions(countryKey) {

			var deferred = $q.defer();

			var countryRegion = _.find(regionCollections, function (regionCollection) {
				return regionCollection.countryKey === countryKey;
			});

			if (countryRegion) {
				deferred.resolve(countryRegion.regions);
			} else {
				notify.forHttp(api.lookupValues.getRegions(countryKey), { startTranslationId: "LOOKUP_VALUES.GET_REGIONS_PROGRESS_TEXT" })
				.then(function (data) {
						var newCountryRegion = {
							countryKey: countryKey,
							regions: data
						};
						regionCollections.push(newCountryRegion);
						deferred.resolve(newCountryRegion.regions);

					}, function(error) {
						deferred.reject(error);
					});
			}
			return deferred.promise;
		}
	}
} ());