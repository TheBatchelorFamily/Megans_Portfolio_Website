    <footer>
    	<div class="container">
    	    <div class="row">
    	        <br>
    	        <br>
    	    </div>
    	    <div class="row">
    	    	<p>2015 &copy; Company Name. All rights reserved.</p>
    	    	<p>Terms and Conditions:Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum efficitur tellus, id pulvinar felis auctor id. Nam aliquam viverra gravida. Nullam posuere dui ut ipsum bibendum ornare. Quisque at malesuada odio. Nullam malesuada ante convallis ante gravida, sed consectetur risus molestie.
    	    </div>
    	    <div class="row">
    	       <br>
    	       <br>
    	    </div>
    	    <div class="row">
    	    	<ul class=" col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-3 nav">
    	    	    <li>Link 1</li>
    	    	    <li>Link 2</li>
    	    	    <li>Link 3</li>
    	    	    <li>Link 4</li>
    	    	    <li>Link 5</li>
    	    	</ul>
    	    </div>
    	</div>
    </footer>
    <div id="associateCardAddModal" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    <div class="modal-content">
<form action="/Card/AssociateCard" autocomplete="off" id="associateCardForm" method="post" style="margin: 0"><input name="__RequestVerificationToken" type="hidden" value="8dDalz7GUfzUCsX_u_h-AqyofbMkFIfCWw0-2XuFr-V-nTChPL8EWNbFmUnwFSnVhgnA-OVl9x4aeDzqRLudxfkaEEdNNEHPyJv3lrciIscTMR7_0" />		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h1>Add Gift Card</h1>
		</div>
		<div class="modal-body">
			<p class="lead" style="margin-bottom: 30px">Your gift card has a unique 16-digit number and a 6-digit security code located on the back of the card. Enter the numbers below to add your gift card.</p>

			<div class="form-horizontal">
				    <div class="control-group">
        <label class="control-label" for="PrintText">Card Number<span class="required"></span></label>		
	    <div class="controls">
		    <input class="span4" data-val="true" data-val-regex="Invalid card number. Please retry." data-val-regex-pattern="^[a-zA-Z0-9]{16}$" data-val-required="Card number is required." id="PrintText" maxlength="16" name="PrintText" placeholder="Card Number" type="text" value="" />
			<div class="help-block">16-digit number without spaces.</div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="PrintText" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

				
				    <div class="control-group">
        <label class="control-label" for="SecurityCode">Security Code<span class="required"></span></label>		
	    <div class="controls">
		    <input class="span4" data-val="true" data-val-required="Security code is required." id="SecurityCode" maxlength="6" name="SecurityCode" placeholder="Security Code" type="text" value="" />
			<div class="help-block">6-digit number found on card back.</div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="SecurityCode" data-valmsg-replace="true"></span></div>
	    </div>
    </div>


				<div class="text-error">
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary">Add Card</button>
			<button id="btnCancelCardLookup" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		</div>
</form></div></div></div>

<div id="associateCardRemoveModal" class="modal fade" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog">
    <div class="modal-content">
<form action="/Card/DissociateCard" autocomplete="off" id="dissociateCardForm" method="post" style="margin: 0"><input name="__RequestVerificationToken" type="hidden" value="gtnkSGIx1Fw7sUA89i2_PWkqLq3k3CeMS2Zaps_kS1e2yFiaFnNbh2XZmzog3jVWI3DZoNwV-qWXDKBkDWmERaCfGAh2JaAWeNnfzSrM7ZvJd0g00" />		<div class="modal-body">
			<p class="lead" style="margin-bottom: 30px">Are you sure you want to remove this card?</p>
			<input type="hidden" id="ExternalId" name="ExternalId"/>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary">Yes</button>
			<button id="btnCancelCardLookup" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		</div>
</form></div></div></div>
    <div id="cardLookupModal" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
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
     </div><!-- end of modal-dialog -->
     </div><!-- end of modal content -->
     </div><!-- end of modal -->
    </body>
</html>