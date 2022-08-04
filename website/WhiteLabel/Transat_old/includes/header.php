<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> <![endif]--><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Transat E-commerce Mockup</title>
    <meta name='description' content='Transat E-commerce' />
    <meta name='keywords' content='getmybalance, gift card, gift cards, virtual gift card, virtual gift cards' />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/libs/modernizr-2.5.3.min.js"></script>
    <script src="js/libs/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/bootstrap-modal.js"></script>-->

</head>

<body>

<div class="container">  
    <header>
       	<div class="top-nav">
	    <div class="span2 offset8" style="margin-top:5px;">
        	<div class="dropdown">
            	     <button class="btn btn-link dropdown-toggle" type="button" id="language" data-toggle="dropdown">Language</button>
            	     <ul class="dropdown-menu" role="menu" aria-labelledby="language">
            	     	<li><a tabindex="-1" href="#">English</a></li>
            	     	<li><a tabindex="-1" href="#">Français</a></li>
                     </ul>
           	</div>
	    </div>
	</div>
     </header>
  	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 id="myModalLabel">Check Balance</h3>
            </div>
            <div class="modal-body">
                <p class="lead" style="margin-bottom: 30px">Your gift card has a unique 16-digit number and a 6-digit security code located on the back of the card. Enter the numbers below to check your balance.</p>
		<div class="form-horizontal">
		    <div class="control-group">
			<label class="control-label" for="PrintText">Card Number</label>		
			<div class="controls">
			    <input class="span4" data-val="true" data-val-regex="Invalid card number. Please retry." data-val-regex-pattern="^[a-zA-Z0-9]{16}$" data-val-required="Card number is required." id="PrintText" maxlength="16" name="PrintText" placeholder="Card Number" type="text" value="" />
			     <div class="help-block">16-digit number without spaces.</div>
			     <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="PrintText" data-valmsg-replace="true"></span></div>
			</div>
		    </div>
		    <div class="control-group">
			<label class="control-label" for="SecurityCode">Security Code</label>		
			<div class="controls">
			    <input class="span4" data-val="true" data-val-required="Security code is required." id="SecurityCode" maxlength="6" name="SecurityCode" placeholder="Security Code" type="text" value="" />
			    <div class="help-block">6-digit number found on card back.</div>
			    <div class="help-block error"><span class="field-validation-valid" data-valmsg-for="SecurityCode" data-valmsg-replace="true"></span></div>
			</div>
		    </div>
		</div>
            </div>
            <div class="modal-footer">
                <button id="btnCancelCardLookup" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button type="submit" class="btn btn-primary">Check Balance</button>
            </div>
	</div>
    	<div class="nav nav-fixed-top">
    	    <div class="pull-left">
    	    	<img src="img/combo.png" style=" width:266px; margin-left:25px;"/></a>
    	    </div>
    	    <div class="clearfix"></div>
    	    <div class="pull-right">
    	    	<li><a data-toggle="modal" href="#myModal" class="btn btn-link">Check Balance</a></li>
    	    	<li><a href="create.php"><input type="submit" value="Create Account" class="btn btn-trans"/></a></li>
            	<li style="padding-right:15px;"><a href="login.php"><input type="submit" value="Login" class="btn btn-trans"/></a></li>
    	    </div>
    	<div class="clearfix"></div>
    	<div id="divider">
			&nbsp;
    	</div>
	    <ul>
           	<li><a href="index.php"><i class="fa fa-home fa-1x"></i> Home</a></li>
            	<li><a href="cards.php"><i class="fa fa-credit-card fa-1x"></i> My Cards</a></li>
            	<li><a href="profile.php"><i class="fa fa-user fa-1x"></i> My Profile</a></li>
            	<li><a href="shop.php"><i class="fa fa-credit-card fa-1x"></i> Shop</a></li>
            	<li><a href="cart.php"><i class="fa fa-shopping-cart fa-1x"></i> Cart (1)</a></li>
            	<li><a href="faq.php"><i class="fa fa-question fa-1x"></i> FAQ</a></li>
            	<li><a href="contact.php"><i class="fa fa-phone fa-1x"></i> Contact Us</a></li>
    	    	

            </ul>
   	 </div>
    