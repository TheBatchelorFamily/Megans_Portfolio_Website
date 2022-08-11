<?php $page_title = "Ivanhoe Cambridge Get My Balance"; ?>
<?php $page_description = "Check your balance, register your card and get support."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>



    	<div class="row">
    	    <div class="span12">
    		<div id="carousel" class="carousel slide" data-ride="carousel">
	   	    <!-- Indicators -->
		    <ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
		    </ol>
   		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
			<div class="item active">
			    <img src="img/banniere-cc-1-en.jpg" alt="Place Ste-Foy, Québec City, Canada"  />
                            
			</div>
			<div class="item">
			    <img src="img/banniere-cc-2.jpg" alt="Vaughan Mills, Vaughan, Canada"  />
                        </div>    
			<div class="item">
			    <img src="img/guildford-town-centre-banner.jpg" alt="Metropolis at Metrotown, Burnaby, Canada" />
                        </div>
			<div class="item">
			    <img src="img/banniere-cc-2.jpg" alt="Vaughan Mills, Vaughan, Canada"  />
                            
			</div>
		    </div>
	            <!-- Controls -->
		      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">&lsaquo;</a>
  		      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">&rsaquo;</a>
		</div>
    	    </div>
    	<!--<div class="span12">
    		<img src="img/stockPhoto.jpg"  />
    	</div>-->
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