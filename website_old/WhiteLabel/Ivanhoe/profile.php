<?php $page_title = "Ivanhoe Cambridge Get My Balance"; ?>
<?php $page_description = "Check your balance, register your card and get support."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>

    <div class="row">
		<div class="span12" style="padding-top:25px;">
        	    <h1 class="profileTitle">My Profile</h1>
        	    <div>
            
        	    </div>
        	    <form class="form-horizontal" role="form" style="padding-bottom:45px;">
        	    	<fieldset>
        	    	    <legend>Your Information</legend>
        	            <div class="form-group">
        	            	<div class="row">
        	            	    <div class="span6">
        	            	    	<div class="control-group">
        	            		    <label for="firstName" class="control-label">First Name</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="firstName" class="form-control" placeholder="Megan" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="lastName" class="control-label">Last Name</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="lastName" class="form-control" placeholder="Example" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="email" class="control-label">Email</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="emailName" class="form-control" placeholder="meganexample@test.com" disabled />
        	            		    	<div class="help-block">Your user name will be your email address.</div>

        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="phone" class="control-label">Phone</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="phone" class="form-control" placeholder="555-555-5555" disabled />
        	            		    </div>
        	            		</div>
        	            	    </div><!-- end of span -->
        	            	    <div class="span6">
        	            	    	<div class="control-group">
        	            		    <label for="address" class="control-label">Address</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="address" class="form-control" placeholder="5 1st St." disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="address2" class="control-label">Address 2</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="address2" class="form-control" placeholder="Apt 5A" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="city" class="control-label">City</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="city" class="form-control" placeholder="Toronto" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="country" class="control-label">Country</label>
        	            		    <div class="controls">
        	            		    	<select id="country" class="form-control" placeholder="Canada" disabled>
        	            		    	   <option>Canada</option>
        	            		    	</select>
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="state" class="control-label">Province</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="state" class="form-control" placeholder="ON" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="zip" class="control-label">Postal Code</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="zip" class="form-control" placeholder="M4B 1B3" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="oldPassword" class="control-label">Old Password</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="oldPassword" class="form-control" placeholder="************" disabled />
        	            		    </div>
        	            		</div>
        	            	    </div><!-- end of span -->
<div class="span12">
        	            	    	<div class="control-group">
										<label class="control-label" for="optIn">Opt-In</label>
										<div class="controls">
											<input type="checkbox" name="optIn" id="optIn" class="optIn" oninput="myFunction()"> I agree to receive communications from Ivanhoe Cambridge and its affiliates regarding their gift card program including information about its properties and their retailers.<br><div class="max_tickets"><p><br>*I prefer to receive communications in:<br> <input type="radio" name="language" value="English">English     <input type="radio" name="language" value="French">French</p><p><br>You can withdraw your consent at any time.</p><p> For more information about Ivanhoe Cambrdige and its affiliates, and properties, with its head office address at Centre CDP Capital
1001, rue du Square-Victoria, Montréal, Québec, Canada H2Z 2B5, please visit our website at <a href="http://www.ivanhoecambridge.com/" target=_blank" style="text-decoration:underline;">ivanhoecambridge.com/</a>. To email us click <a href="mailto:gmbcontact@ivanhoecambridge.com" style="text-decoration:underline;">here</a>.</p>
										</div>
										<div class="help-block"></div>
										</div>
									</div>
								</div><!-- end of span -->
							</div><!-- end of row -->
        	            </div><!-- end of form-group -->
        	            <div class="form-inline pull-right">
                        	<button class="btn cancel" id="editProfile">Edit Profile</button>
                        </div>
        	        </fieldset>
        	    </form> 
		</div><!-- end of span -->
	</div><!-- end of row -->
	<script>
	    jQuery(document).ready(function($) {
   		$('input.optIn').change(function(){
        	    if ($(this).is(':checked')) $('div.max_tickets').show();
        	    else $('div.max_tickets').hide();
    		}).change();
	    });
	</script>		
<?php include("includes/footer.php"); ?>
    <div class="clearfix"></div>

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
</div>
</body>
</html>