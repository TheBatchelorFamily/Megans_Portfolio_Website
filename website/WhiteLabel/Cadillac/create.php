<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> <![endif]--><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Cadillac Fairview Create Account</title>
    <meta name='description' content='Cadillac Fairview Get My Balance Inquiry site. Where you can check your balance at any time.' />
    <meta name='keywords' content='getmybalance, gift card, gift cards, virtual gift card, virtual gift cards' />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/libs/modernizr-2.5.3.min.js"></script>
    <script src="js/libs/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>

</head>

<body> 
<div class="container">  
	<header>
       	<div class="top-nav">
			<div class="span2 offset8" style="margin-top:5px;">
        		<div class="dropdown">
            		<button class="btn btn-link dropdown-toggle" type="button" id="language" data-toggle="dropdown">Language</button>
            		<ul class="dropdown-menu" role="menu" aria-labelledby="language">
                        <li><a tabindex="-1" href="#">English</a></li>
                        <li><a tabindex="-1" href="#">Français</a></li>
                	</ul>
           		 </div>
			</div>
		</div>
	</header>
    
	<div class="nav nav-fixed-top">
    	<a href="https://www.cfshopcard.ca/Home.aspx" target="_blank"><img src="img//logo.png" style="width: 336px;margin-top: 25px; margin-left: 10px; float:left;"/></a>
    	<div class="clearfix"></div>
    	<div>
    		&nbsp;
    	</div>
	    <ul>
          	<li><a href="index.html"><i class="fa fa-home fa-1x"></i>  Home</a></li>
            <li><a href="cards.html"><i class="fa fa-credit-card fa-1x"></i>  My Cards</a></li>
            <li><a href="profile.html"><i class="fa fa-user fa-1x"></i>  My Profile</a></li>
            <li><a href="contact.html"><i class="fa fa-phone fa-1x"></i>  Contact Us</a></li>
            <li class="pull-right" style="margin-right:15px;"><a href="create.php"><input type="submit" value="Create Account" class="btn btn-primary"/></a></li>
            <li class="pull-right" style="margin-right:5px;"><a href="login.html"><input type="submit" value="Login" class="btn btn-primary"/></a></li>
            <li class="pull-right" style="margin-right:5px;"><a href="#cardLookupModal" data-toggle="modal" data-target="#cardLookupModal">Check Balance</a></li>
        </ul>
    </div>
	
	<div class="row">
	<div class="span12" style="padding-top:25px; padding-bottom:45px;">
		<h1>Create an Account</h1>
			<fieldset>	
				<legend><h3>Your Information</h3></legend>
				<div class="span12"><span class="field-validation-valid" data-valmsg-for="GenericError" data-valmsg-replace="true"></span></div>
				<form action="/Account/Register" method="post"><input name="__RequestVerificationToken" type="hidden" value="5_1LyJTRdId0zeKEWSwkRn0FSsP3gY319-uHqjherDkDmKP67lgibhelsRHNa1pUejq0nAKXo_OyDXBUr3FDdfNAdjs1" />					<div class="alert alert-error  hide">
						
					</div>
					<div class="form-horizontal" id="CreateAccountForm">
						<div class="row">
							<div class="span6 ">
								    <div class="control-group">
        <label class="control-label" for="FirstName">First Name*</label>		
	    <div class="controls">
		    <input class="text-box single-line" data-val="true" data-val-length="First name exceeds 50 characters." data-val-length-max="50" data-val-regex="First name is not in the correct format." data-val-regex-pattern="^[a-zA-Z |&#39;|\.|,|\s|:]+$" id="FirstName" name="FirstName" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

								    <div class="control-group">
        <label class="control-label" for="LastName">Last Name*</label>		
	    <div class="controls">
		    <input class="text-box single-line" data-val="true" data-val-length="Last name exceeds 50 characters." data-val-length-max="50" data-val-regex="Last name is not in the correct format." data-val-regex-pattern="^[a-zA-Z |&#39;|\.|,|\s|:]+$" id="LastName" name="LastName" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

								    <div class="control-group">
        <label class="control-label" for="Email">Email*<span class="required"></span></label>		
	    <div class="controls">
		    <input class="text-box single-line" data-val="true" data-val-length="The user name must be between 7 and 50 characters and contain only alphanumeric characters." data-val-length-max="50" data-val-minlength="Email must be between 7 and 50 characters and contain only alphanumeric characters." data-val-minlength-min="7" data-val-regexwithoptions="Please enter a valid email address." data-val-regexwithoptions-flags="i" data-val-regexwithoptions-pattern="^((([a-z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$" data-val-required="The Email field is required." id="Email" name="Email" type="text" value="" />
			<div class="help-block">Your user name will be your email address.</div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

								    <div class="control-group">
        <label class="control-label" for="Phone">Phone</label>		
	    <div class="controls">
		    <input class="text-box single-line" data-val="true" data-val-length="Phone number exceeds 20 characters." data-val-length-max="20" data-val-regexwithoptions="Please enter a valid phone number." data-val-regexwithoptions-flags="i" data-val-regexwithoptions-pattern="^[a-zA-Z0-9-()+\.\s]*$" id="Phone" name="Phone" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

							</div>
							<div class="span6 ">
								
<input class="isUsa" data-val="true" data-val-required="The IsUsa field is required." id="AddressModel_IsUsa" name="AddressModel.IsUsa" type="hidden" value="False" />
<input class="isCanada" data-val="true" data-val-required="The IsCanada field is required." id="AddressModel_IsCanada" name="AddressModel.IsCanada" type="hidden" value="False" />
<input class="isUsaTerritory" data-val="true" data-val-required="The IsUsaTerritory field is required." id="AddressModel_IsUsaTerritory" name="AddressModel.IsUsaTerritory" type="hidden" value="False" />
<input class="isUkWithCounty" data-val="true" data-val-required="The IsUkWithCounty field is required." id="AddressModel_IsUkWithCounty" name="AddressModel.IsUkWithCounty" type="hidden" value="False" />
<input class="isUk" data-val="true" data-val-required="The IsUk field is required." id="AddressModel_IsUk" name="AddressModel.IsUk" type="hidden" value="False" />

    <div class="control-group">
        <label class="control-label" for="AddressModel_Address1">Address</label>		
	    <div class="controls">
		    <input class="text-box single-line" data-val="true" data-val-length="Email Address exceeds 255 characters." data-val-length-max="255" id="AddressModel_Address1" name="AddressModel.Address1" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Address1" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="AddressModel_Address2">Address 2</label>		
	    <div class="controls">
		    <input class="text-box single-line" data-val="true" data-val-length="Address 2 exceeds 255 characters" data-val-length-max="255" id="AddressModel_Address2" name="AddressModel.Address2" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Address2" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="AddressModel_City">City</label>		
	    <div class="controls">
		    <input class="text-box single-line" data-val="true" data-val-length="City exceeds 255 characters" data-val-length-max="255" id="AddressModel_City" name="AddressModel.City" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.City" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="AddressModel_Country">Country</label>		
	    <div class="controls">
		    <select class="countrySelect" data-val="true" data-val-requiredifnotempty="The country field is required." data-val-requiredifnotempty-dependentproperty="State" id="AddressModel_Country" name="AddressModel.Country"><option></option>

<option value="CAN">Canada</option>

</select>
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Country" data-valmsg-replace="true"></span></div>
	    </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="AddressModel_Province">Province</label>
    	    <div class="controls">
    	    	<input class="text-box single-line" data-val="true" data-val-length="Province exceeds 255 characters." data-val-length-max="255" id="AddressModel_Province" name="AddressModel.Province" type="text" value="" />
    	    	<div class="help-block"></div>
    	    	<div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Province" data-valmsg-replace="true"></span></div>
    	    </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="AddressModel_Zip">Postal Code*</label>
    	    <div class="controls">
    	    	<input class="text-box single-line" data-val="true" data-val-length="Postal code exceeds 10 characters." data-val-length-max="10" id="AddressModel_Zip" name="AddressModel.Zip" type="text" value="" />
    	    	<div class="help-block"></div>
    	    	<div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Zip" data-valmsg-replace="true"></span></div>
    	    </div>
    </div>


<div id="provinceContainer" class="stateHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_Province">Province</label>		
	    <div class="controls">
		    <select Disabled="True" class="provinceSelect" data-val="true" data-val-length="Province exceeds 255 characters." data-val-length-max="255" id="AddressModel_Province" name="AddressModel.Province"></select>
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Province" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

</div>

<div id="countyContainer" class="stateHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_County">County</label>		
	    <div class="controls">
		    <select Disabled="True" class="countySelect" data-val="true" data-val-length="County exceeds 255 characters." data-val-length-max="255" id="AddressModel_County" name="AddressModel.County"></select>
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.County" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

</div>

<div id="zipContainer" class="postalHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_Zip">Postal Code</label>		
	    <div class="controls">
		    <input Disabled="True" class="zipText" data-val="true" data-val-length="Zip Code exceeds 10 characters." data-val-length-max="10" id="AddressModel_Zip" name="AddressModel.Zip" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Zip" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

</div>

<div id="postalContainer" class="postalHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_PostalCode">Postal Code</label>		
	    <div class="controls">
		    <input Disabled="True" class="postalText" data-val="true" data-val-length="Postal code exceeds 10 characters" data-val-length-max="10" id="AddressModel_PostalCode" name="AddressModel.PostalCode" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.PostalCode" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

</div>

							</div>
						</div>
						<div class="row">
							<div class="span6 ">
								    <div class="control-group">
        <label class="control-label" for="Password">Password*<span class="required"></span></label>		
	    <div class="controls">
		    <input Autocomplete="off" data-val="true" data-val-length="Password exceeds 50 characters." data-val-length-max="50" data-val-required="The Password field is required." id="Password" name="Password" type="password" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span></div>
	    </div>
    </div>
								
							</div>
							
							<div class="span6 ">
								    <div class="control-group">
        <label class="control-label" for="ConfirmPassword">Confirm Password*<span class="required"></span></label>		
	    <div class="controls">
		    <input Autocomplete="off" data-val="true" data-val-equalto="The password and confirmation password do not match." data-val-equalto-other="*.Password" data-val-length="Confirm Password exceeds 50 characters." data-val-length-max="50" data-val-required="The Confirm Password field is required." id="ConfirmPassword" name="ConfirmPassword" type="password" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

							</div>
						</div>
						<div class="row">
						<div class="span12">
							<div class="control-group">
								    <label class="control-label" for="optIn">Opt-In</label>
								    <div class="controls">
								    	<input type="checkbox" name="optIn" id="optIn" class="optIn" oninput="myFunction()"> I agree to receive communications from Cadillac Fairview and its affiliates regarding the CF SHOP! card program including information about its properties and their retailers.<br><div class="max_tickets"><p><br>*I prefer to receive communications in:<br> <input type="radio" name="language" value="English">English     <input type="radio" name="language" value="French">French</p><p><br>You can withdraw your consent at any time.</p><p> For more information about The Cadillac Fairview Corporation Limited and its affiliates, and properties, with its head office address at 20 Queen Street West, Toronto Ontario, Suite 500, M5H 3R4, please visit our website at <a href="http://www.cadillacfairview.com" target=_blank" style="text-decoration:underline;">cadillacfairview.com</a>. To email us click <a href="mailto:hoecontact@cadillacfairview.com" style="text-decoration:underline;">here</a>.</p></div>
								    	<div class="help-block"></div>
								    </div>
								<p class="required-field">
									<span class="required"> </span>* Indicates required field.
								</p>
								<div class="pull-right">
									<input type="submit" value="Submit" class="btn"/>
								</div>
							</div>
						</div>
						</div>
					
					
					</div>
</form>			</fieldset>        
		</div>
		</div>


<br>
<br>
<script>
jQuery(document).ready(function($) {
   $('input.optIn').change(function(){
        if ($(this).is(':checked')) $('div.max_tickets').show();
        else $('div.max_tickets').hide();
    }).change();
});
</script>
<br>

    	<footer>
    	    <div class="row">
    	    	<center>
 	    		    <p>
    	    	 		<a class="footerLinks" href="contact.html" target="_blank">CONTACT US</a>
                                <a class="footerLinks" href="https://www.cfshopcard.ca/Public/Terms-And-Conditions.aspx" target="_blank">TERMS + CONDITIONS</a>
                        	<a class="footerLinks" href="http://www.cadillacfairview.com/privacy-policy/ " target="_blank">PRIVACY POLICY</a>
                        	<a class="footerLinks" href="httP://www.cadillacfairview.com/disclaimer/" target="_blank">DISCLAIMER</a>	
                                <img src="img/footer_logo.png" style="padding-left:15px;" />
                            </p>
                 </center>
                            
    	    </div>
    	    <div class="row">
    	    	<p style="text-align: center;">&copy; 2015 Cadillac Fairview Corporation Limited. &nbsp; &nbsp; &reg; a registered trademark of The Cadillac Fairview Corporation Limited.</p>
    	    </div>
    	    <div class="row">
              <p class="normal">The CF SHOP! card gift card is subject to <a href="https://www.cfshopcard.ca/Public/Terms-And-Conditions.aspx" style="text-decoration:underline;" target="_blank"> Terms + Conditions</a>. For the full <a href="https://www.cfshopcard.ca/Public/Terms-And-Conditions.aspx" style="text-decoration:underline;" target="_blank">Terms + Conditions</a> please review the card holder agreement accompanied with your gift card packaging or click <a href="https://www.cfshopcard.ca/Public/Terms-And-Conditions.aspx" target=_blank" style="text-decoration:underline;">Terms + Conditions</a>. The fee for replacing lost, stolen or damaged cards can be up to $5 per card.</p>
	    </div>
   	</footer>
    <div class="clearfix"></div>
	<div id="cardLookupModal" class="modal hide fade">
		<form action="/Card" autocomplete="off" id="findCardForm" method="post" style="margin: 0"><input name="__RequestVerificationToken" type="hidden" value="cVa3evl-BTjXos2P7HsqWD9tFT9V2bUJzm2sY9jVDhXFaT1nI0kJ4e0v_HmYRkGw9JEIJ88z9mdP2wgpI9_13Eo8so04WH33SXsUwoVLxYCFdi9w0" />		
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Check Balance</h3>
		</div>
		<div class="modal-body">
			<p class="lead" style="margin-bottom: 30px">Your CF SHOP! card has a unique 16-digit number and a 6-digit security code located on the back of the card. Enter the numbers below to check your balance.</p>
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