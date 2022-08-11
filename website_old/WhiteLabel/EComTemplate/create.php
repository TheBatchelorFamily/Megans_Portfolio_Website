    <?php $page_title = "White Label Ecommerce Mockup - Create Account"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container" style="padding-bottom:5%;">
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<h1>Create an Account</h1>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<form class="form-horizontal" role="form" style="padding-bottom:45px;">
        	    	<fieldset>
        	            <div class="form-group">
        	            	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        	            	    	<div class="control-group">
        	            		    <label for="firstName" class="control-label">First Name</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="firstName" class="form-control" />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="lastName" class="control-label">Last Name</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="lastName" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="email" class="control-label">Email</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="emailName" class="form-control"  />
        	            		    	<div class="help-block">Your user name will be your email address.</div>

        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="phone" class="control-label">Phone</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="phone" class="form-control" />
        	            		    </div>
        	            		</div>
        	            	    </div><!-- end of span -->
        	            	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        	            	    	<div class="control-group">
        	            		    <label for="address" class="control-label">Address</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="address" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="address2" class="control-label">Address 2</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="address2" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="city" class="control-label">City</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="city" class="form-control"  />
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
        	            		    	<input type="text" id="state" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="zip" class="control-label">Postal Code</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="zip" class="form-control" />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="oldPassword" class="control-label">Create Password</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="password" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="oldPassword" class="control-label">Enter Password Again</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="passwordcheck" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            	    </div><!-- end of col -->
        	            </div><!-- end of form-group -->
        	            <div class="form-inline pull-right">
                        	<button class="btn btn-primary" id="editProfile" >Create Account</button>
                        </div>
        	        </fieldset>
        	    </form> 
	    </div> <!-- end of col -->
    	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>