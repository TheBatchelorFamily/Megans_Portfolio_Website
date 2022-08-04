    <?php $page_title = "White Label Mockup - My Cards"; ?>
    <?php $page_description = "All of the things. You do them here."; ?>
    <?php $page_keywords = "balance, gift card"; ?>
    <?php include("includes/header.php"); ?>
    <div class="container" style="padding-bottom:5%;">
    	<div class="row">
    	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	    	<h1>My Gift Cards</h1>
    	    </div><!-- end of col -->
    	</div><!-- end of row -->
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>You can view all of your cards associated with your user name here. To add a gift card to your account, click Add a Card below and provide the gift card number and 6-digit security code.<p>
            <div class="cards-container">
		<h4 style="color:white;">My Cards</h4>
          	<table class="table table-bordered table-striped" id="cardsTable">
		    <thead>
			<tr>
			    <th class="hidden-phone">Card Image</th>
			    <th>Card Number</th>
			    <th>Balance</th>
			    <th>Actions</th>
			</tr>
		    </thead>
		    <tbody>
                    	<tr>
                            <td class="hidden-phone"><span><img src="img/card1.png" class="cardFix img-responsive" /></span></td>
	                    <td>**** **** **** 0122</td>
			    <td>$50.00</td>
                            <td>
                            	<div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    	Action
                                    	<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="details.php">View</a></li>
                                    	<li><a href="#associateCardRemoveModal" data-toggle="modal" data-target="#associateCardRemoveModal" data-id="D4PTDM7LDDJC5YJG" class="open-ConfirmRemoveCard">Remove</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
				</tbody>
			</table>
            <a class="btn btn-primary pull-right" href="#associateCardAddModal" data-toggle="modal" data-target="#associateCardAddModal" style="margin-right: 15px;">+ Add a Card</a>
        </div>
	</div>

	
    <div class="clearfix"></div>
    	</div><!-- end of row -->
    </div><!-- end of container -->
    <?php include("includes/footer.php"); ?>