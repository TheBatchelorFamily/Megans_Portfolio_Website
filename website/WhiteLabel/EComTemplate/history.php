    <?php $page_title = "White Label Ecommerce Mockup - Transaction History"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container" style="padding-bottom:5%;">
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<h1>Transaction History</h1>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<table class="table table-bordered" id="transactionTable">
		    <thead>
			<tr>
			    <th class="hidden">Date Sort</th>
			    <th>Date</th>
			    <th>Action</th>
			    <th den-phone">Note</th>
			    <th>Amount</th>			
			</tr>
		    </thead>
		    <tbody>
			<tr>
			    <td class="hidden">635283432310070000</td>
			    <td>12/20/2015</td>
			    <td>Purchase - Transaction #145890</td>
			    <td class="hidden-phone">Happy Holidays</td>
			    <td>$75.00</td>
			</tr>
			<tr style="background-color:ghostwhite;">
			    <td class="hidden">635283432315471009</td>
			    <td>2/25/2015</td>
			    <td>Purchase - Transaction #123489</td>
			    <td class="hidden-phone">Happy Birthday</td>
			    <td>$25.00</td>
			</tr>
		    </tbody>
		</table>
    	    </div>
    	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>