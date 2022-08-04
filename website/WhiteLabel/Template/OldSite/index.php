<?php $page_title = "White Label Mockup"; ?>
<?php $page_description = "All of the things. You do them here."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>




    	<div class="row">
    	   <div class="span12">
    		<img src="img/stockPhoto.jpg"  />
    	   </div>
    </div>
    <div class="row">
    	<div class="span9 offset1">
    	    <p style="color:red;">Customizable Items: Background color, Logo, Image on front page, Card Image, Button/Icon Color, Font color; Font can be chosen from this list: Arial, Arial Black, Arial Narrow, Courier New, Georgia, Impact, Tahoma, Times New Roman & Verdana.</p>
    	</div>
    </div>
    <div class="row">
		<div class="span5 offset1" style="padding-bottom:75px;">
        	<h3>Welcome</h3>
            <hr />
            <p>To check your card balance or recent activity, enter the card number and 6-digit security code shown on your gift card.</p>
	    <p>The card number is a 16-digit number found on either the front or back of your card; do not enter hyphens if present. The security code is a 6-digit number found on the card back.</p>
             
		</div>
        <div class="span4 offset1" style="padding-bottom:75px;">
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
       </div>
	</div>

	
    	<?php include("includes/footer.php"); ?>