(function () {
	"use strict";

	angular.module("privateLabel.areas.directives")
		.directive("sfContactInfo", configDirective);

	function configDirective() {
		return {
			restrict: "E",
			scope: {
				contact: "=",
				collectEmail: "="
			},
			controller: Controller,
			controllerAs: "model",
			templateUrl: function(elem, attr) {
				return "areas/directives/contactInfo." + attr.type + ".directive.html";
			}
		};
	}

	Controller.$inject = ["$scope", "currentOrder", "program"];

	function Controller($scope, currentOrder, program) {
		var model = this
		;

		model.countries = [
			{
				countryKey: "Unites States",
				countryName: "United States"
			}
		];
		model.regions = [
			{ regionKey: "KS", regionName: "KS" },
			{ regionKey: "MO", regionName: "MO" }
		];

		model.countrySelectionChanged = countrySelectionChanged;



		function countrySelectionChanged() {
			
		}


	}
}());
