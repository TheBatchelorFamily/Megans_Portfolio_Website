    <?php $page_title = "White Label Mockup"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container" style="padding-bottom:5%;">
    	<div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
    	    	<h3>Welcome</h3>
    	    	<hr />
    	    	 <p>To check your card balance or recent activity, enter the card number and 6-digit security code shown on your gift card.</p>
	    	<p>The card number is a 16-digit number found on either the front or back of your card; do not enter hyphens if present. The security code is a 6-digit number found on the card back.</p>
    	    </div><!-- end of col -->
    	    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
    		<h3>Card Lookup</h3>
            <hr />
        	<h3>Card Number:</h3>
                <input type="number" />
                <p>16-digit number without spaces if present.</p>
                <h3>Security Code:</h3>
                <input type="number" />
                <p>6-digit number found on card back.</p>
                <br>
                <br>
                <div style="text-align:center;">
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                    <input type="submit" value="Cancel" class="btn btn-primary"/>
                </div>
	    </div><!-- end of col -->
    	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>