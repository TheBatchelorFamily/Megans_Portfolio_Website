<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> <![endif]--><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo $page_title; ?></title>
    <meta name='description' content='<?php echo $page_description; ?>' />
    <meta name='keywords' content='<?php echo $page_keywords; ?>' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/libs/modernizr-2.5.3.min.js"></script>
    <script src="js/libs/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">  
	<header>
       	<div class="top-nav">
		<div class="pull-right" style="margin-top:5px;">
        	
        	    <ul style="display:inline-flex; list-style:none;">
            	     <li><button class="btn btn-link dropdown-toggle" type="button" id="language" data-toggle="dropdown">Language</button></li>
                     <li><a data-toggle="modal" href="#myModal" class="btn btn-link">Check Balance</a></li>
    	    	     <li style="padding-right:5px;"><a href="create.php"><input type="submit" value="Create Account" class="btn btn-primary"/></a></li>
    	    	     <li style="padding-right:5px;"><a href="login.php"><input type="submit" value="Login" class="btn btn-primary" /></a></li>
		     </ul>
	    </div>
	</div>
	</header>
  
    <div class="nav nav-fixed-top">
    	<a href="http://www.toyota.com/" target="_blank"><img src="img/logo.png" style="width:166px; float:left; margin-left:25px;"/></a>
    	<div class="clearfix"></div>
    	<div id="divider">
			&nbsp;
    	</div>
	    <ul>
           	<li><a href="index.php"><i class="fa fa-home fa-1x"></i>  Home</a></li>
            <li><a href="cards.php"><i class="fa fa-credit-card fa-1x"></i>  My Cards</a></li>
            <li><a href="profile.php"><i class="fa fa-user fa-1x"></i>  My Profile</a></li>
            <li><a href="contact.php"><i class="fa fa-phone fa-1x"></i>  Contact Us</a></li>
        </ul>
    </div>
    