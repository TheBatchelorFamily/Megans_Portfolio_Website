<?php $page_title = "Cart"; ?>
<?php $page_description = "All of the things. You do them here."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>


	<div class="span11">
        <h1>Shopping Cart</h1>
        
        <div class="cards-container">
		    <h4 style="color:white;">My Cart</h4>
          	<table class="table table-striped" id="cardsTable">
				<thead>
					<tr>
						<th class="hidden-phone">Card Image</th>
						<th>Card Description</th>
						<th>Amount</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
                    <tr>
                        <td class="hidden-phone"><span><img src="img/card.png" class="cardFix img-responsive" /></span></td>
	                    <td>Information about this card would go here</td>
			    <td>$25.00</td>
			    <td><select><option>1</option><option>2</option><option>3</option></select></td>
			    <td>$25.00</td>
                    </tr>
                    <tr>
                    	
                    <tr>
                    <tr>
                    	<td><a>View Cardholder Agreement</a></td>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    	<td>Order Total:$25.00</td>
                    </tr>
                    <tr>
                    </tr>
                    	<td><a href="index.php"><input type="cancel" value="Continue Shopping" class="btn btn-primary" /></a></td>
                    	<td>
                    	<td>
                    	<td>
                    	<td><input type="submit" value="Check Out" class="btn btn-primary"/></td>
                    				</tbody>
			</table>

        </div>
	</div>

	
    <div class="clearfix"></div>
	<div id="associateCardAddModal" class="modal hide fade" data-backdrop="static" data-keyboard="false">
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
</form></div>

<div id="associateCardRemoveModal" class="modal hide fade" data-backdrop="static" data-keyboard="false">
<form action="/Card/DissociateCard" autocomplete="off" id="dissociateCardForm" method="post" style="margin: 0"><input name="__RequestVerificationToken" type="hidden" value="gtnkSGIx1Fw7sUA89i2_PWkqLq3k3CeMS2Zaps_kS1e2yFiaFnNbh2XZmzog3jVWI3DZoNwV-qWXDKBkDWmERaCfGAh2JaAWeNnfzSrM7ZvJd0g00" />		<div class="modal-body">
			<p class="lead" style="margin-bottom: 30px">Are you sure you want to remove this card?</p>
			<input type="hidden" id="ExternalId" name="ExternalId"/>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary">Yes</button>
			<button id="btnCancelCardLookup" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		</div>
</form></div>
<input id="ShowAssociateCardDialog" name="ShowAssociateCardDialog" type="hidden" value="False" />
   	<?php include("includes/footer.php"); ?>