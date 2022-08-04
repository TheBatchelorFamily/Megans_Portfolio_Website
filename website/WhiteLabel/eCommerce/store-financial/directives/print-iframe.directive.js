(function () {
	"use strict";

	angular.module("angular.store-financial")
        .directive("sfPrintIframe", printIframe);

	printIframe.$inject = [];

	function printIframe() {

		return {
			restrict: "A",
			scope: {
				getIframeContentPromise: "="
			},
			link: function (scope, element, attrs) {

				var iframe = attrs.printIframe ? $("#" + attrs.printIframe) :
						$("#print-iframe").length > 0 ? $("#print-iframe")
						: $('<iframe id="print-iframe" style="height:1px;width:1px;border:0;padding:0;margin:0"></iframe>').appendTo("body");

				$(element)
					.on("click", function (e) {
						e.preventDefault();
						scope.getIframeContentPromise()
							.then(function (html) {
								var contentWindow = iframe[0].contentWindow;
								html = html.replace("<body>", "<body onload=\"window.focus();window.print()\">");
								contentWindow.document.open();
								contentWindow.document.write(html);
								contentWindow.document.close();
								return true;
						});
					});
			}
		}
	}
}());