<?php $page_title = "White Label Mockup"; ?>
<?php $page_description = "All of the things. You do them here."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>




    	<div class="row">
    	   <div class="span12">
    		<img src="img/financial_banner.jpg" alt="Banner Image" />
    	   </div>
    </div>
    
    <div class="row">
		<div class="span5 offset1" style="padding-bottom:75px;">
        	<h2>Welcome</h2>
            <hr />
            <p>To check your card balance or recent activity, enter the card number and 6-digit security code shown on your gift card.</p>
            <p>The card number is a 16-digit number found on either the front or back of your card; do not enter hyphens if present. The security code is a 6-digit number found on the card back.</p>
             
		</div>
        <div class="span4 offset1" style="padding-bottom:75px;">
        <h2>Card Lookup</h2>
            <hr />
        	<h3>Card Number:</h3>
                <input type="number" />
                <p>16-digit number without spaces found on the card back.</p>
                <h3>Security Code:</h3>
                <input type="number" />
                <p>6-digit number found on the bottom of the card back.</p>
                <br>
                <br>
                <div style="text-align:center;">
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                    <input type="submit" value="Cancel" class="btn btn-primary"/>
                </div>
       </div>
	</div>

	
    	<?php include("includes/footer.php"); ?>