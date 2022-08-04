<?php $page_title = "Ivanhoe Cambridge Get My Balance"; ?>
<?php $page_description = "Check your balance, register your card and get support."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>

    <div class="container">
    <div class="row">
    	<div class="span12">
    	    <h1>Account Login</h1>
    	</div>
    </div>
    <br>
    <div class="row">
	<div class="span5 well">
            <h4>Create an Account Here.</h4>
            <hr />
            <p>To create an account associated with your gift card, please select "Create an Account" below</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a href="create.php"><input type="button" class="btn btn-success pull-right" value="Create an Account" /></a>
             
	</div>
        <div class="span5 well">
            <h4>Returning Cardholders</h4>
            <hr />
            <h5>Username</h5>
            <input type="text" />
            <h5>Password</h5>
            <input type="text" />
            <br>
            <a href="#">Forgot password?</a>
            <br>
            <br>
            <div style="text-align:right;">
            	<input type="submit" value="Sign In" class="btn btn-primary"/>
           </div>
       </div>
     </div>
	<div id="cardLookupModal" class="modal hide fade">
		<form action="/Card" autocomplete="off" id="findCardForm" method="post" style="margin: 0"><input name="__RequestVerificationToken" type="hidden" value="cVa3evl-BTjXos2P7HsqWD9tFT9V2bUJzm2sY9jVDhXFaT1nI0kJ4e0v_HmYRkGw9JEIJ88z9mdP2wgpI9_13Eo8so04WH33SXsUwoVLxYCFdi9w0" />		
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Check Balance</h3>
		</div>
		<div class="modal-body">
			<p class="lead" style="margin-bottom: 30px">Your Cadillac Fairview <span class="shop">shop! card</span> has a unique 16-digit number and a 6-digit security code located on the back of the card. Enter the numbers below to check your balance.</p>
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
			<button class="btn btn-primary">Check Balance</button>
			<button id="btnCancelCardLookup" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		</div>
	</div>
    	<?php include("includes/footer.php"); ?>