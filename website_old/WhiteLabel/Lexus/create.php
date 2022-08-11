<?php $page_title = "White Label Mockup - Create"; ?>
<?php $page_description = "Check your balance, register your card and get support."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>

	
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

<option value="USA">USA</option>

</select>
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Country" data-valmsg-replace="true"></span></div>
	    </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="AddressModel_Province">State</label>
    	    <div class="controls">
    	    	<input class="text-box single-line" data-val="true" data-val-length="Province exceeds 255 characters." data-val-length-max="255" id="AddressModel_Province" name="AddressModel.Province" type="text" value="" />
    	    	<div class="help-block"></div>
    	    	<div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Province" data-valmsg-replace="true"></span></div>
    	    </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="AddressModel_Zip">Zip Code*</label>
    	    <div class="controls">
    	    	<input class="text-box single-line" data-val="true" data-val-length="Postal code exceeds 10 characters." data-val-length-max="10" id="AddressModel_Zip" name="AddressModel.Zip" type="text" value="" />
    	    	<div class="help-block"></div>
    	    	<div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Zip" data-valmsg-replace="true"></span></div>
    	    </div>
    </div>


<div id="provinceContainer" class="stateHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_Province">State</label>		
	    <div class="controls">
		    <select Disabled="True" class="provinceSelect" data-val="true" data-val-length="Province exceeds 255 characters." data-val-length-max="255" id="AddressModel_Province" name="AddressModel.Province"></select>
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Province" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

</div>

<div id="countyContainer" class="stateHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_County">Country</label>		
	    <div class="controls">
		    <select Disabled="True" class="countySelect" data-val="true" data-val-length="County exceeds 255 characters." data-val-length-max="255" id="AddressModel_County" name="AddressModel.County"></select>
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.County" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

</div>

<div id="zipContainer" class="postalHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_Zip">Zip Code</label>		
	    <div class="controls">
		    <input Disabled="True" class="zipText" data-val="true" data-val-length="Zip Code exceeds 10 characters." data-val-length-max="10" id="AddressModel_Zip" name="AddressModel.Zip" type="text" value="" />
			<div class="help-block"></div>
		    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="AddressModel.Zip" data-valmsg-replace="true"></span></div>
	    </div>
    </div>

</div>

<div id="postalContainer" class="postalHolder" style="display:none">
	    <div class="control-group">
        <label class="control-label" for="AddressModel_PostalCode">Zip Code</label>		
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
								   
								<p class="required-field">
									<span class="required"> </span>* Indicates required field.
								</p>
								<div class="pull-right">
									<input type="submit" value="Submit" class="btn btn-primary"/>
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

<?php include("includes/footer.php"); ?>
    