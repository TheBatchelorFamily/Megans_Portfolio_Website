<footer>
    	<h3 style="padding:15px;">About Ivanhoé Cambridge</h3>
                    <p style="text-align: justify;"><span style="font-size: 13px;">Ivanho&eacute; Cambridge leverages its high-level expertise in all aspects of real estate including investment, development, asset management, leasing and operations, to deliver optimal returns for its investors. Its assets, held through multiple subsidiaries and located mainly in Canada, the United States, Europe, Brazil and Asia, totalled more than Cdn$40 billion as at December 31, 2013. Its portfolio consists mainly of shopping centres, office and multiresidential properties. Ivanho&eacute; Cambridge is a real estate subsidiary of the Caisse de d&eacute;p&ocirc;t et placement du Qu&eacute;bec (lacaisse.com), one of Canada's leading institutional fund managers.</span></p></p>
                    <hr />
                    <div class="offset1">
                        <span>&copy;2015 Ivanhoé Cambridge</span>
                    </div>

</footer>
<div id="cardLookupModal" class="modal hide fade">
	<form action="details.php" autocomplete="off" id="findCardForm" method="post" style="margin: 0"><input name="__RequestVerificationToken" type="hidden" value="cVa3evl-BTjXos2P7HsqWD9tFT9V2bUJzm2sY9jVDhXFaT1nI0kJ4e0v_HmYRkGw9JEIJ88z9mdP2wgpI9_13Eo8so04WH33SXsUwoVLxYCFdi9w0" />		
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Check Balance</h3>
	</div>
	<div class="modal-body">
		<p class="lead" style="margin-bottom: 30px">Your gift card has a unique 16-digit number and a 6-digit security code located on the back of the card. Enter the numbers below to check your balance.</p>
		<div class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="PrintText">Card Number</label>		
					<div class="controls">
						<input class="span4" data-val="true" data-val-regex="Invalid card number. Please retry." data-val-regex-pattern="^[a-zA-Z0-9]{16}$" data-val-required="Card number is required." id="PrintText" maxlength="16" name="PrintText" placeholder="Card Number" type="text" value="" />
						<div class="help-block">16-digit number without spaces.</div>
						<div class="help-block error"><span class="field-validation-valid" data-valmsg-for="PrintText" data-valmsg-replace="true"></span></div>
					</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="SecurityCode">Security Code</label>		
				<div class="controls">
					<input class="span4" data-val="true" data-val-required="Security code is required." id="SecurityCode" maxlength="6" name="SecurityCode" placeholder="Security Code" type="text" value="" />
					<div class="help-block">6-digit number found on card back.</div>
					<div class="help-block error"><span class="field-validation-valid" data-valmsg-for="SecurityCode" data-valmsg-replace="true"></span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Check Balance</button>
		<button id="btnCancelCardLookup" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
	</div>
</div>
</div>
</body>
</html>