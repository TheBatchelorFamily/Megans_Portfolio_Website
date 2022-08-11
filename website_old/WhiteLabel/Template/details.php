    <?php $page_title = "White Label Mockup - Details"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container" style="padding-bottom:5%;">
    	<div class="row">
			<div class="card-wells" style="margin-bottom: 40px">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-left no-print">
					<div style="display: inline-block; vertical-align: middle;" class="cardInfoHeader">
					     <h3 class="circle25-text-info">I want to…</h3>
					</div>
					<div class="well well-small">
						<p style="text-transform:uppercase; padding:5px;"><a href="#"><input type="submit" value="View/Print Cardholder Agreement" class="btn btn-primary"/></a><br><br>
						<a href="#"><input type="submit" value="Lost your gift card?" class="btn btn-primary"/</a></p>
						<a id="regInfoLink" href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="Internet, mail and phone order purchases may require that we have the name and address of the cardholder on file. <br/><br/>Please note, information entered during registration must match the information entered during your online purchases, if information does not match, your transaction may be declined." data-title='<span class="text-info"><strong>Registration Info</strong></span><button type="button" id="close" class="close" onclick="$(&apos;#regInfoLink&apos;).popover(&apos;hide&apos;);">&times;</button>' style="display: inline;padding: 0;margin-left: 3px; width:300px;">
							<span class="info-icon-img"></span>
						</a>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<div style="display: inline-block; vertical-align: middle;" class="cardInfoHeader">
						<h3 class="circle25-text-info">Card Information</h3>
					</div>
					<div class="well well-small">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<img src="img/card1.png"/>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="toggled-items">
									<div class="row balances">
										<strong>
											<div class="row col-lg-offset-3">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Card Number</div>
												<div class="card-toggled col-lg-5 col-md-5 col-sm-5 col-xs-5" id="masked-card">
												**** **** **** 0122
												</div>
											</div>
											<div class="row col-lg-offset-3">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Current</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">$50.00</div>
											</div>
											<div class="row col-lg-offset-3">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Available</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">$50.00</div>
											</div>
										</strong>
									</div>
								</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Status</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Active</div>
						</div>
						<div class="row">
							 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Activated On</div>
							 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">2/18/2015</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Valid Thru Date</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">02/2023</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Next Maintenance Fee Date</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">2/19/2016</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Maintenance Fee</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">$2.50</div>
							</div>
					</div>
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
							<div class="">
								<small>This gift card is issued by a bank you trust.</small>
							</div>
						</div>
					</div>				
				</div>
			</div>
    	</div><!-- end of row -->
    	<div class="row">
	    <div class="span11" style="padding-left:20px;">
		<div style="display: inline-block; vertical-align: middle;">
			<h3 class="circle25-text-info">Transactions</h3>
		</div>
		<table class="table table-bordered" id="transactionTable">
			<thead>
				<tr>
					<th class="hidden">Date Sort</th>
					<th>Date</th>
					<th>Action</th>
					<th class ="hidden-phone">Note</th>
					<th>Amount</th>			
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="hidden">635283432310070000</td>
					<td>2/18/2015</td>
					<td>New Card Activation</td>
					<td class="hidden-phone"></td>
					<td>$75.00</td>
				</tr>
				<tr style="background-color:ghostwhite;">
					<td class="hidden">635283432315471009</td>
					<td>2/25/2015</td>
					<td>Purchase - Transaction #123489</td>
					<td class="hidden-phone"></td>
					<td>($25.00)</td>
				</tr>
			</tbody>
		</table>
	    </div>
	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>