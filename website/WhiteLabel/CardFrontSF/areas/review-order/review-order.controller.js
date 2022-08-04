(function () {
	"use strict";

	angular.module('privateLabel.areas.reviewOrder')
        .controller('ReviewOrder', ReviewOrder);

	ReviewOrder.$inject = ["navigate"];

	function ReviewOrder(navigate) {
		var model = this
		;

		model.goToOrderConfirmation = navigate.toOrderConfirmation;
	}
}());