<?php $page_title = "Transat E-commerce Mockup - My Profile"; ?>
<?php $page_description = "All of the things. You do them here."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>

	<div class="container">
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
        	            		    	<input type="text" id="city" class="form-control" placeholder="Columbis" disabled />
        	            		    </div>
        	            		</div>
        	            		<!--<div class="control-group">
        	            		    <label for="country" class="control-label">Country</label>
        	            		    <div class="controls">
        	            		    	<select id="country" class="form-control" placeholder="Canada" disabled>
        	            		    	   <option>Canada</option>
        	            		    	</select>
        	            		    </div>
        	            		</div>-->
        	            		<div class="control-group">
        	            		    <label for="state" class="control-label">State</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="state" class="form-control" placeholder="MO" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="zip" class="control-label">Postal Code</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="zip" class="form-control" placeholder="65202" disabled />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="oldPassword" class="control-label">Old Password</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="oldPassword" class="form-control" placeholder="************" disabled />
        	            		    </div>
        	            		</div>
        	            	    </div><!-- end of span -->
				</div><!-- end of row -->
        	            </div><!-- end of form-group -->
        	            <div class="form-inline pull-right" style="padding-right:35px;">
                        	<button class="btn cancel" id="editProfile" >Edit Profile</button>
                        </div>
        	        </fieldset>
        	    </form> 
		</div><!-- end of span -->
	</div><!-- end of row -->

   	<?php include("includes/footer.php"); ?>