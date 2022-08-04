<?php $page_title = "Promo Card"; ?>
<?php $page_description = "All of the things. You do them here."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>

    <div class="container">
    	
    	<div class="span5">
    	    <h2>Redeem a Virtual Code</h2>
    	    <p>Ready to grab your virtual card and start shopping?</p>
    	    	<form>
  		    <div class="form-group">
    		   	<input type="text" class="form-control" id="promoCode" placeholder="Enter Vitual Card Code">
  		    </div>
  		    <div class="form-group">
    		    	<input type="email" class="form-control" id="email" placeholder="Enter Email Address">
  		    </div>
 		    <input type="submit" class="btn btn-primary"></input>
	   	</form>
    	</div>
    	<div class="span6">
    	    	<img src="img/card.png" class="img-responsive" alt="card" />
        </div>
    </div>
    <?php include("includes/footer.php"); ?>