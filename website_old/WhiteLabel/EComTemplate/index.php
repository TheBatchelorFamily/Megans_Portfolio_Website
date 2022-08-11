    <?php $page_title = "White Label Ecommerce Mockup"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container container-page" style="padding-bottom:5%;">
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<h1>Purchase A Gift Card</h1>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:25px;">
    	    	<p>1. Choose your card below. (Choose from the design selection to fit your gifting occasion.)</p>
    	    	<div id="cardDesigns">
    	    	     <img src="img/card1.png" alt="card design1" class="img-responsive" /><img src="img/card2.png" alt="card design2" class="img-responsive" /><img src="img/card3.png" alt="card design3" class="img-responsive" /><img src="img/card4.png" alt="card design4" class="img-responsive" style="border:3px solid gray;" /><img src="img/card5.png" alt="card design5" class="img-responsive" />
    	    	</div>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row" style="margin-bottom:25px;">
    	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    		<p>2. Amount. (Choose a dollar amount to give or designate a custom amount. Max amount per order is $500)</p>
    		<button class="btn btn-primary">$25.00</button><button class="btn btn-default">$50.00</button><button class="btn btn-default">$100.00</button><button class="btn btn-default">$250.00</button>
    		<div class="form-group" style="margin-top:10px;">
    		     <input type="text" class="form-control" placeholder="$25-$500 increments of $5" />
    		</div>
	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<p>3. Quantity (Max quantity per order is 5)</p>
    	    	<select class="form-group">
    	    	    <option>1</option>
    	    	    <option>2</option>
    	    	    <option>3</option>
    	    	    <option>4</option>
    	    	    <option>5</option>
    	    	</select>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->

    	<div class="row">
    	    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-xs-offset-9" >
    	    	<a href="cart.php"><button class="btn btn-primary">Add to Cart</button></a>
    	    </div>
    	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>