    <?php $page_title = "White Label Ecommerce Mockup - Cart"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container container-page" style="padding-bottom:5%;">
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<h1>Cart</h1>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<div class="cards-container">
		    <h4>&nbps;</h4>
          	    <table class="table table-striped" id="cardsTable">
			<thead>
			    <tr>
			    	<th class="hidden-phone">Card Image</th>
				<th>Amount</th>
				<th>Quantity</th>
				<th>Total</th>
				<th> </th>
			    </tr>
			</thead>
			<tbody>
                    	    <tr>
                            	<td class="hidden-phone border-td"><span><img src="img/card4.png" class="img-responsive" /></span></td>
			    	<td class="border-td">$25.00</td>
			    	<td class="border-td">1</td>
			    	<td class="border-td">$25.00</td>
			    	<td><button type="btn btn-primary">Edit</button><br><br>
			    	    <button type="btn btn-primary">Remove</button></td>
                    	    </tr>
                    	    <tr>
                    		<td><a>View Cardholder Agreement</a></td>
                    		<td></td>
                    		<td></td>
                    		<td></td>
                    		<td>Subtotal: $25.00</td>
                    	    </tr>
                    	    <tr>
	                    	<td><a href="index.php"><input type="cancel" value="Continue Shopping" class="btn btn-primary" /></a></td>
                    		<td></td>
                    		<td></td>
                    		<td></td>
                    		<td><a href="personalize.php"><input type="submit" value="Personalize" class="btn btn-primary"/></a></td>
                    	    </tr>
                    	    <tr>
                    	        <td colspan="6">The Your Comany Gift Card is the porperty of and issued by The Bank You Trust pursuant to a license from VISA/Mastercard. Distributed and serviced by Store Financial. FUNDS DO NOT EXPIRE. After valid thru date, contact us for free replacement card. Unless prohibited by law, a $3.00 fee will be deducted monthly from Card balance starting 1st day after 1 year of inactivity. Activity means any action resulting in a change in Card balance, other than fee imposition, or adjustment due to error or prior transaction reversal. $5.00 fee to replace lost, stolen or damaged Card, except as prohibited by law. NO CASH ACCESS AND NO ATM ACCESS. Additional terms are stated in Card Agreement. Purchase, acceptance or use of the Card constitues acceptance of the Card Agreement.</td>
                    	    </tr>
                    	</tbody>
		    </table>
        	</div>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>