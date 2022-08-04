    <?php $page_title = "White Label Mockup"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container" style="padding-bottom:5%;">
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<h1>Account Login</h1>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 well">
    	    	    <h4>Don't Have an Account?</h4>
    	    	    <p>To create an account associated with your gift card, please select Create an Account below.</p>
    	    	    <br>
    	    	    <br>
    	    	    <br>
    	    	    <a class="btn btn-primary pull-right" href="create.php">Create Account</a>
    	    	</div>
    	    	<div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-5 col-xs-offset-1 well">
    	    	    <h4>Returning Users</h4>
    	    	    <div class="form-group col-sm-12">
    	    	    	<label for="email">Email Address:</label>
    	    	     	<input type="email" class="form-control" id="email" placeholder="Enter your email address"/>
    	    	    </div>
    	    	    <div class="form-group col-sm-12">
    	    	        <label for="password">Password:</label>
    	    	    	<input type="password" class="form-control" id="password" placeholder="Enter your password" />
    	    	    </div>
    	    	</div>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>