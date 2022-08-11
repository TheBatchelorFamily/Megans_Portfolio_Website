    <?php $page_title = "White Label Ecommerce Mockup - Check Out"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container container-page" style="padding-bottom:5%;">
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<h1>Checkout</h1>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<p>1. Billing information</p>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
    	    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" style="margin-bottom:25px;">
    	    	<form class="form-horizontal" role="form" style="padding-bottom:45px;">
        	    	<fieldset>
        	    	    <legend>Credit card details</legend>
        	            <div class="form-group">
        	            	    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
        	            	    	<div class="control-group">
        	            		    <label for="cardNumber" class="control-label">Card number</label>
        	            		    <div class="controls">
        	            		    	<input type="number" id="cardNumber" class="form-control" />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="cvv" class="control-label">CVV</label>
        	            		    <div class="controls">
        	            		    	<input type="number" id="cvv" class="form-control" />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="month" class="control-label">Valid Thru Month</label>
        	            		    <div class="controls">
        	            		    	<select class="form-control">
  						    <option>1  (January)</option>
  						    <option>2  (February)</option>
  						    <option>3  (March)</option>
  						    <option>4  (April)</option>
  						    <option>5  (May)</option>
  						    <option>6  (June)</option>
  						    <option>7  (July)</option>
  						    <option>8  (August)</option>
  						    <option>9  (September)</option>
  						    <option>10 (October)</option>
  						    <option>11 (November)</option>
  						    <option>12 (December)</option>
  						</select>
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="year" class="control-label">Valid Thru Year</label>
        	            		    <div class="controls">
        	            		    	<select class="form-control">
  						    <option>2015</option>
  						    <option>2016</option>
  						    <option>2017</option>
  						    <option>2018</option>
  						    <option>2019</option>
  						    <option>2020</option>
  						    <option>2021</option>
  						    <option>2022</option>
  						</select>
        	            		    </div>
        	            		</div>
        	            	    	<div class="control-group">
        	            		    <div class="checkbox">
       	 					<label>
          					    <input type="checkbox"> I opt-in to communications from your company.
        					</label>
      					    </div>
        	            		</div>
        	            	    </div><!-- end of col -->
        	            	</div><!-- end of form-group -->
    	    </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom:25px;">
    	    	<form class="form-horizontal" role="form" style="padding-bottom:45px;">
        	    	<fieldset>
        	    	    <legend>Credit card billing address</legend>
        	    	    <p>* indicates a requied field</p>
        	            <div class="form-group">
        	            	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        	            	    	<div class="control-group">
        	            		    <label for="firstName" class="control-label">First Name*</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="firstName" class="form-control" required/>
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="lastName" class="control-label">Last Name*</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="lastName" class="form-control" required />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="email" class="control-label">Email</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="emailName" class="form-control" />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="phone" class="control-label">Phone</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="phone" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            	    </div><!-- end of span -->
        	            	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        	            	    	<div class="control-group">
        	            		    <label for="address" class="control-label">Address*</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="address" class="form-control"  required/>
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="address2" class="control-label">Address 2</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="address2" class="form-control"  />
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="city" class="control-label">City*</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="city" class="form-control"   required/>
        	            		    </div>
        	            		</div>
        	            		<!--<div class="control-group">
        	            		    <label for="country" class="control-label">Country*</label>
        	            		    <div class="controls">
        	            		    	<select id="country" class="form-control" placeholder="Canada" required>
        	            		    	   <option>Canada</option>
        	            		    	</select>
        	            		    </div>
        	            		</div>-->
        	            		<div class="control-group">
        	            		    <label for="state" class="control-label">State*</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="state" class="form-control"  required/>
        	            		    </div>
        	            		</div>
        	            		<div class="control-group">
        	            		    <label for="zip" class="control-label">Postal Code*</label>
        	            		    <div class="controls">
        	            		    	<input type="text" id="zip" class="form-control"  required/>
        	            		    </div>
        	            		</div>
        	            	    	<div class="control-group">
        	            		    <div class="checkbox">
       	 					<label>
          					    <input type="checkbox"> I have read and accept the <a href="#">Terms of Use</a>
        					</label>
      					    </div>
        	            		</div>
        	            	    </div><!-- end of col -->
        	            	</div><!-- end of form-group -->
                            </div><!-- end of col -->
        	        </fieldset>
        	    </form> 
    	    </div><!-- end of row -->
    	    <div class="row">
    	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	    <p>2. Shipping information</p>
    	    	    <div class="row">
    	    		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    	    		    <form class="form-horizontal" role="form" style="padding-bottom:45px;">
        	    		<fieldset>
        	            		<div class="form-group">
        	            	    	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        	            	    		<div class="control-group">
        	            		    	    <div class="checkbox">
       	 						<label>
          					    	    <input type="checkbox"> Shipping and billing address are the same
        						</label>
      					    	    </div>
        	            			</div>
						<br>
        	            	    		<div class="control-group">
        	            		    	    <label for="firstName" class="control-label">Recipient First Name</label>
        	            		    	    <div class="controls">
        	            		    		<input type="text" id="firstName" class="form-control" />
        	            		    	    </div>
        	            			</div>
        	            			<div class="control-group">
        	            		    	    <label for="lastName" class="control-label">Recipient Last Name</label>
        	            		    	    <div class="controls">
        	            		    		<input type="text" id="lastName" class="form-control" />
        	            		    	    </div>
        	            			</div>
        	            			<div class="control-group">
        	            		    	    <label for="address" class="control-label">Recipient Address</label>
        	            		    	    <div class="controls">
        	            		    	        <input type="text" id="address" class="form-control" />
        	            		    	    </div>
        	            			</div>
        	            			<div class="control-group">
        	            		    	    <label for="address2" class="control-label">Recipient Address 2</label>
        	            		    	    <div class="controls">
        	            		    		<input type="text" id="address2" class="form-control"  />
        	            		    	    </div>
        	            			</div>
        	            	    	    </div><!-- end of span -->
        	            	    	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        	            	    		<div class="control-group">
        	            		    	    <label for="null" class="control-label"></label>
        	            		    	    <div class="controls">
        	            		    		<br><br>
        	            		    	    </div>
        	            			</div>
        	            			<div class="control-group">
        	            		    	    <label for="city" class="control-label">Recipient City</label>
        	            		    	    <div class="controls">
        	            		    		<input type="text" id="city" class="form-control"  />
        	            		    	    </div>
        	            			</div>
        	            			<div class="control-group">
        	            		    	    <label for="state" class="control-label">Recipient State</label>
        	            		    	    <div class="controls">
        	            		    		<input type="text" id="state" class="form-control" />
        	            		    	    </div>
        	            			</div>
        	            			<div class="control-group">
        	            		    	    <label for="zip" class="control-label">Recipient Postal Code</label>
        	            		    	    <div class="controls">
        	            		    		<input type="text" id="zip" class="form-control" />
        	            		    	    </div>
        	            			</div>

        	            	    	    </div><!-- end of col -->
        	            	    	    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
        	            	    	    	<div class="control-group">
        	            			    <p>Orders are processed and shipped during the business week which is Monday through Friday.</p>
        	            			    <p>Orders received before 2PM CT Monday-Friday are processed that same business day.</p>
        	            			    <p>Orders received after 2PM CT Monday-Thursday are processed the next business day.</p>
        	            			    <p>Orders received after 2PM CT on Friday, Saturday or Sunday will be processed the following Monday.</p>
        	            			</div>
        	            	    	    </div><!-- end of col -->
        	            		</div><!-- end of form-group -->
                            	    </div><!-- end of col -->
        	        	</fieldset>
        	    	    </form> 
    	    		</div>
    	    	    </div><!-- end of col -->
    	    	</div><!-- end of row -->
    	    <div class="row">
    	    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	    <p>3. Order Summary</p>
    	    	    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<div class="cards-container">
		    <h4>&nbps;</h4>
          	    <table class="table table-striped" id="cardsTable">
			<thead>
			    <tr>
			    	<th>Card Image</th>
			    	<th>Carrier</th>
				<th>Amount</th>
				<th>Quantity</th>
			    </tr>
			</thead>
			<tbody>
                    	    <tr>
                            	<td class="border-td"><span><img src="img/card4.png" class="img-responsive" /></span></td>
			    	<td class="border-td"><span><img src="img/carrierDesign1.png" class="img-responsive" /></span></td>
			    	<td class="border-td">$25.00</td>
			    	<td class="border-td">1</td>
                    	    </tr>
                    	    <tr>
                    		<td><a>View Cardholder Agreement</a></td>
                    		<td></td>
                    		<td></td>
                    		<td colspan="2">Subtotal:     $25.00<br>
                    		    Shipping fee: $5.00<br>
                    		    Tax/Fees:	  $1.50</td>
                    	    </tr>
                    	    <tr>
                    	        <td colspan="4">The Your Comany Gift Card is the porperty of and issued by The Bank You Trust pursuant to a license from VISA/Mastercard. Distributed and serviced by Store Financial. FUNDS DO NOT EXPIRE. After valid thru date, contact us for free replacement card. Unless prohibited by law, a $3.00 fee will be deducted monthly from Card balance starting 1st day after 1 year of inactivity. Activity means any action resulting in a change in Card balance, other than fee imposition, or adjustment due to error or prior transaction reversal. $5.00 fee to replace lost, stolen or damaged Card, except as prohibited by law. NO CASH ACCESS AND NO ATM ACCESS. Additional terms are stated in Card Agreement. Purchase, acceptance or use of the Card constitues acceptance of the Card Agreement.</td>
                    	    </tr>
                    	</tbody>
		    </table>
        	</div>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	    	</div>
    	    </div>
    	    <div class="row">
    	     	<div class="pull-left col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin-top:30px;">
    	     	    <a href="personalize.php"><button class="btn btn-primary">Go Back</button></a>
    	     	</div>
    	     	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-xs-offset-9" style="margin-top:30px; margin-right:40px;">
    	    	    <a href="complete.php"><button class="btn btn-primary">Submit Order</button></a>
    	    	</div>
    	    </div><!-- end of row -->
    	</div><!-- end of container -->
    <?php include("includes/footer.php"); ?>