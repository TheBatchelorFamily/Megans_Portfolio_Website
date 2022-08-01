<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>TEST Enrollment</title>
    <meta name='description' content='We develop electronic card and commercial payment solutions that allow clients to control the use, enable redemption, and automate settlement for card programs including gift, incentive, reward, membership, discount and more.' />
    <meta name='keywords' content='electronic cards, electronic payments, virtual cards, gift cards, program management, payment processing, payment card, card payments' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/jquery-ui.theme.css">
    <link rel="stylesheet" href="css/jquery-ui.structure.css">
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/libs/modernizr-2.5.3.min.js"></script>
    <script src="js/libs/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.swipebox.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">var switchTo5x=false;</script>
    <script type="text/javascript" src="js/jquery.simplescroll.js"></script>
    <script>
  	$(function() {
    	    $( ".accordion" ).accordion({
      		collapsible: true,
      		heightStyle: "content",
      		active: false
   	     });
  	});
    </script>
    <!-- Start of Woopra Code -->
<script>
    (function(){
        var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call","trackForm","trackClick"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/t/5.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
    })

    ("woopra");

    woopra.config({
        domain: 'www.storefinancial.com',
        hide_campaign: true
    });
    woopra.track();
</script>
<!-- End of Woopra Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50685119-1', 'auto');
  ga('send', 'pageview');

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56ec1c5d27dba83622c5cb57/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <style>
    	body {background-color:ghostwhite;color:black;}
    	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {border: 1px solid #d3d3d3;background: whitesmoke;font-weight: normal;color: black;}
    	.ui-widget-content {color: black;}
    	
    </style>
</head>

<body>
         <?php
    	    if (isset($_POST["send"])) {
    	    	$companyVal = $_POST['companyVal'];
       	 	$name = $_POST['companyname'];
       	 	$contact = $_POST['contactName'];
        	$email = $_POST['email'];
        	$phone = $_POST['phone'];
        	$employee = $_POST['employee'];
        	$from = 'TEST Enrollment Form'; 
        	$to = 'sfsupplierpayments@gmail.com'; 
        	$subject = 'TEST Enrollment Form';
        
        	//Yes to company agrees
 		if (!$_POST['companyVal']){
 			$companyYES = 'Yes';
 		}
 		
 		//Yes to employee with authority
 		if (!$_POST['employee']){
 			$authorityYES = 'Yes';
 		}
        	$body = "From: $contact\n Company: $name\n Phone: $phone\n E-Mail: $email\n Company agrees to participate: $companyYES\n Authority: $authorityYES";
 
        	// Check if companyname has been entered
        	if (!$_POST['companyname']) {
            		$errCompanyName = 'Please enter your company name';
        	}
        	
        	// Check if contactname has been entered
        	if (!$_POST['contactName']) {
            		$errContactName = 'Please enter your name';
        	}
        
        	// Check if email has been entered and is valid
        	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            		$errEmail = 'Please enter a valid email address';
        	}
        
        	//Check if message has been entered
        	if (!$_POST['phone']) {
            		$errPhone = 'Please enter your phone number';
        	}
 
		// If there are no errors, send the email
		if (!$errCompanyName && !$errContactName && !$errEmail && !$errPhone) {
    			if (mail ($to, $subject, $body, $from)) {
        			$result='<div class="alert alert-success">Thank You! A Store Financial specialist will be in touch soon.</div>';
    			} else {
        			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    			}
		}
    	    }
    	    elseif (isset($_POST["ask"])) {
       	 	$qemail = $_POST['qemail'];
       	 	$qcompany = $_POST['qcompany'];
        	$qquestion = $_POST['qquestion'];
        	$qfrom = 'TEST Supplier Question'; 
        	$qto = 'sfsupplierpayments@gmail.com'; 
        	$qsubject = 'TEST Supplier Question';
        
        	$qbody = "From: $qemail\n Company: $qcompany\n Question: $qquestion";
 
        	// Check if email has been entered and is valid
        	if (!$_POST['qemail'] || !filter_var($_POST['qemail'], FILTER_VALIDATE_EMAIL)) {
            		$errqemail = 'Please enter a valid email address';
        	}
        	
        	// Check if contactname has been entered
        	if (!$_POST['qcompany']) {
            		$errqcompany = 'Please enter your company';
        	}
          
        	//Check if message has been entered
        	if (!$_POST['qquestion']) {
            		$errqquestion = 'Please enter your question';
        	}
 
		// If there are no errors, send the email
		if (!$errqemail && !$errqcompany && !$errqquestion) {
    			if (mail ($qto, $qsubject, $qbody, $qfrom)) {
        			$qresult='<div class="alert alert-success">Thank You! A Store Financial specialist will be in touch soon.</div>';
    			} else {
        			$qresult='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    			}
		}
    	    }
	?>
	
    <div class="hidden-phone visible-tablet visible-desktop">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:white;">
            <div class="container">
                <ul class="nav navbar-nav offset1">
      	            <li><img src="img/hero1_en-TEST.jpg" /></li>
                </ul>
            </div>
	</nav>
    </div>
    <div class="hidden-phone visible-tablet visible-desktop">
	
   	<div class="pageContent">
		<div class="sectionOne">
			<div class="container">	
				<div class="span10 pageBox" style="margin-top:25px;">
					<p>Thank you for your interest in virtual card payments. In addition to faster and more secure payments, you will have complimentary 24/7 access to our new virtual card payment portal with visibility to invoices and payment status. Once you activate your account with Store Financial you will begin receiving your e-payments.</p>
				</div>
			</div><! -- end of container -->
		</div><!-- end of section class -->
		<div class="sectionTwo">
			<div class="container">
				<div class="span5 pageBox">
				    <form class="form-horizontal" name="enroll" role="form" method="post" action="TEST_Enroll.php">
		    		    	<div class="control-group">
		    		    	    <h5>Start the enrollment process</h5>
		    		    	    <p>Please provide AR/billing contact information below:</p>
		    		    	</div>
    					<div class="control-group">
    					    <label class="checkbox">
  					    <input type="checkbox" name="companyVal" id="companyVal" value="" required>
  					    	The company agrees to participate in the virtual card payment program
					    </label>
					</div>
    					<div class="control-group">
    					    <label for="companyname" class="control-label">Company Name</label>
    					    <div class="controls">
    					    	<input type="text" class="form-control" id="companyname" name="companyname" placeholder="Smith Inc" value="<?php echo htmlspecialchars($_POST['companyname']); ?>" required>
    					    	<?php echo "<p class='text-danger'>$errCompanyName</p>";?>
    					    </div>
    					</div>
    					<div class="control-group">
    					    <label for="contactName" class="control-label">Contact Name</label>
    					    <div class="controls">
    					        <input type="text" class="form-control" id="contactName" name="contactName" placeholder="John Smith" value="<?php echo htmlspecialchars($_POST['contactName']); ?>" required>
    					        <?php echo "<p class='text-danger'>$errcontactName</p>";?>
    					    </div>
    					</div>
    					<div class="control-group">
    					    <label for="phone" class="control-label">Contact Phone</label>
    					    <div class="controls">
    					        <input type="text" class="form-control" id="phone" name="phone" placeholder="555-555-5555" value="<?php echo htmlspecialchars($_POST['phone']); ?>" required>
    					        <?php echo "<p class='text-danger'>$errPhone</p>";?>
    					    </div>
    					</div>
    					<div class="control-group">
        				    <label for="email" class="control-label">Email</label>
        				    <div class="controls">
        				        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
            					<?php echo "<p class='text-danger'>$errEmail</p>";?>
        				    </div>
    					</div>
    					<div class="control-group">
    					    <label class="checkbox">
  					    <input type="checkbox" name="employee" id="employee" value="" required>
  					    	I certify that I am employee of the company for which I am activating an account and have the authority to enroll in the payment program
					    </label>
					</div>
    					<div class="control-group">
    					    <div class="controls offset-2">
    					        <input id="send" name="send" type="submit" value="Send" class="btn btn-primary">
    					    </div>
    					</div>
    					<div class="control-group">
    					    <div class="controls">
    					        <?php echo $result; ?>
    					    </div>
    					</div>
				     </form> 
				</div>
				<div class="span5 pageBox">
					<p class="bold">What happens next?</p>
					<p>After submitting, a representative from our partner, Store Financial, will call the AR/billing contact you listed within 48 hours to complete the enrollment process.</p>
					<p>This personal touch ensures you get all your questions answered, and verifies we have all the correct information needed to process and send payments.</p>
					<p>Once enrollment is complete, your next payment from TEST will be delivered via Store Financial's secure payment network to the AR/billing email address, plus you'll be granted access to our new accounts virtual card payment portal.</p>
				</div>
				
				<div class="span10 pageBox" id="FAQ" style="margin-bottom:25px;">
					<div class="accordion">
						<h4>Frequently Asked Questions</h4>
						<div>
							<div class="accordion">
								<h4>What is the Supplier Payment Program?</h4>
								<div>
									<p>The Supplier Payment Program is an electronic accounts payable process that enables suppliers to receive ongoing payments with a single-use card number via email. The supplier enters the card number into their
			card payment system each time an invoice is paid. The card number is valid for one payment only and expires after each use.</p>
								</div>
								<h4>Why should I enroll?</h4>
								<div>
									<p>Simply stated, our program benefits every supplier by providing faster and more secure payments with rich remittance advice tying back to a specific invoice or work order for easy reconciliation. No more time is
			wasted tracking down payment details or cashing checks. Included in the program is self-service access into an online portal for all payment history and current transaction activity. </p>
								</div>
								<h4>What is a virtual card?</h4>
								<div>
									<p>A virtual card is a single-use digital card issued to a supplier via email. It includes a secure 16-digit payment number that uses the same network as a credit card transaction. Virtual cards have less risk and costs
			associated than issuing check or ACH, plus they’re easily accepted by any supplier already accepting cards.</p>
								</div>
								<h4>How do I process a virtual card?</h4>
								<div>
									<p>Simply enter into your point-of-sale (POS) terminal the six digits provided in your enrollment email, plus the remaining 10 digits provided on each notification. If your POS terminal requires the CVV or expiration
			date, those will also be provided in your payment notification email. Cards will process as soon as the information is entered and you will receive payment within your standard credit card settlement process.</p>
								</div>
								<h4>When will I get my first payment?</h4>
								<div>
									<p>Once enrolled, you will begin receiving virtual card payments on the next payment cycle you have set up with your client.</p>
								</div>
								<h4>What is included in my payment notification?</h4>
								<div>
									<p>You will receive a direct, PCI compliant notification via the email address provided at the time of enrollment. This will contain redemption instructions, vital payment information and remittance detail. Each
			notification will only include the last 10 digits of the card number for security reasons. The first six numbers are provided at the time of enrollment and will always be the same for processing each payment.</p>
								</div>
								<h4>What if a transaction fails?</h4>
								<div>
									<p>If you are unable to process the card, please call Store Financial at 1-866-979-8737 or email <a href="mailto:supplierpayments@storefinancial.com">supplierpayments@storefinancial.com</a>. Please have your card number available for the Store Financial team to be able to
			provide assistance.</p>
								</div>
								<h4>Can I access my payment activity and history online?</h4>
								<div>
									<p>Yes, access to all your payment history and current transaction activity is available through our self-service supplier portal. Once enrollment is completed you will be sent an invitation and instructions for activating your account.</p>
								</div>
								<h4>What level of support will I receive?</h4>
								<div>
									<p>A Store Financial representative is available 24/7 to handle all your inquiries at 1-866-979-8737. Additionally, you can email a member of the supplier payments team at <a href="mailto:supplierpayments@storefinancial.com">supplierpayments@storefinancial.com</a>.</p>
								</div>
								<h4>What if I can’t process credit cards, can I still participate?</h4>
								<div>
									<p>Yes, Store Financial has the ability to set up any supplier with a merchant relationship, which will allow Store Financial virtual cards to be processed and funds to be remitted into your bank account.</p>
								</div>
								<h4>How much does the program cost?</h4>
								<div>
									<p>The cost to you depends on your current contract with your merchant acquiring organization.  Your normal credit card processing fees will apply when the virtual card is processed.  </p>
								</div>
								<h4>What if I’m not the correct person to authorize enrollment, but I know who can?</h4>
								<div>
									<p>Please call Store Financial at 1-866-979-8737 or email <a class="vclink" href="mailto:supplierpayments@storefinancial.com">supplierpayments@storefinancial.com</a>. Be sure to include the name of your client that’s requesting your company’s participation in the program, plus the new contact person’s information. This information will be entered into the supplier payments portal and the new contact will receive a confirmation email to login to their account.</p>
								</div>
							</div>   
						</div>   
					</div><!-- end of accordion -->   
					<div class="clearfix"></div>
				</div><! -- end of span -->
			</div><!-- end of container -->
		</div><!-- end of section -->
		<div class="sectionOne">
			<div class="container">
				<div class="span12 pageBox">
				    <img src="img/smallSFLogo.png" style="display:inline;text-align:center;"/>
				</div>
				<div class="span5 pageBox">
				    <form class="form-horizontal" role="form" name="question" method="post" action="TEST_Enroll.php">
    					<div class="control-group">
    					    <h5>Ask a question</h5>
    					</div>
    					<div class="control-group">
        				    <label for="qemail" class="control-label">Email</label>
        				    <div class="controls">
        				        <input type="email" class="form-control" id="qemail" name="qemail" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['qemail']); ?>">
            					<?php echo "<p class='text-danger'>$errqemail</p>";?>
        				    </div>
    					</div>
    					<div class="control-group">
    					    <label for="qcompany" class="control-label">Company Name</label>
    					    <div class="controls">
    					    	<input type="text" class="form-control" id="qcompany" name="qcompany" placeholder="Smith Inc" value="<?php echo htmlspecialchars($_POST['qcompanyname']); ?>">
    					    	<?php echo "<p class='text-danger'>$errqcompany</p>";?>
    					    </div>
    					</div>
    					 <div class="control-group">
        				    <label for="qquestion" class="control-label">Question</label>
        				    <div class="controls">
            					<textarea class="form-control" rows="4" name="qquestion"><?php echo htmlspecialchars($_POST['qquestion']);?></textarea>
            					<?php echo "<p class='text-danger'>$errqquestion</p>";?>
        				    </div>
   					</div>
    					<div class="control-group">
    					    <div class="controls offset-2">
    					        <input id="ask" name="ask" type="submit" value="Send" class="btn btn-primary">
    					    </div>
    					</div>
    					<div class="control-group">
    					    <div class="controls offset-2">
    					        <?php echo $qresult; ?>
    					    </div>
    					</div>
				     </form> 
				</div>
				<div class="span5 pageBox">
					<p><a href="docs/B2BDocs/SPInfo.pdf" target="_blank">Supplier Payments Information Sheet</a></p>
					<p><a href="docs/B2BDocs/Payment_Notification.pdf" target="_blank">Payment Notification Sample</a></p>
					<!--<p><a>Payment Process Video</a></p>
					<p><a>Supplier Portal Overview Video</a></p>-->
				</div>
			</div><!-- end of container -->
		</div>
	</div><!-- end of pageContent -->
</div><!-- end of content -->
<div class="visible-phone hidden-tablet hidden-desktop">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:white;">
            <div class="container">
                <ul class="nav navbar-nav offset1">
      	            <li><img src="img/TESThero.png" /></li>
                </ul>
            </div>
	</nav>
    </div>
    <div class="visible-phone hidden-tablet hidden-desktop">
	
   	<div class="pageContent">
		<div class="sectionOne">
			<div class="container">	
				<div class="span10 pageBox" style="margin-top:25px;">
					<p>Thank you for your interest in virtual card payments. In addition to faster and more secure payments, you will have complimentary 24/7 access to our new virtual card payment portal with visibility to invoices and payment status. Once you activate your account with Store Financial you will begin receiving your e-payments.</p>
				</div>
			</div><! -- end of container -->
		</div><!-- end of section class -->
		<div class="sectionTwo">
			<div class="container">
				<div class="span10 pageBox">
				    <form class="form-horizontal" name="enroll" role="form" method="post" action="TEST_Enroll.php">
		    		    	<div class="control-group">
		    		    	    <h5>Start the enrollment process</h5>
		    		    	    <p>Please provide AR/billing contact information below:</p>
		    		    	</div>
    					<div class="control-group">
    					    <label for="companyname" class="control-label">Company Name</label>
    					    <div class="controls">
    					    	<input type="text" class="form-control" id="companyname" name="companyname" placeholder="Smith Inc" value="<?php echo htmlspecialchars($_POST['companyname']); ?>">
    					    	<?php echo "<p class='text-danger'>$errCompanyName</p>";?>
    					    </div>
    					</div>
    					<div class="control-group">
    					    <label for="contactName" class="control-label">Contact Name</label>
    					    <div class="controls">
    					        <input type="text" class="form-control" id="contactName" name="contactName" placeholder="John Smith" value="<?php echo htmlspecialchars($_POST['contactName']); ?>">
    					        <?php echo "<p class='text-danger'>$errcontactName</p>";?>
    					    </div>
    					</div>
    					<div class="control-group">
    					    <label for="phone" class="control-label">Contact Phone</label>
    					    <div class="controls">
    					        <input type="text" class="form-control" id="phone" name="phone" placeholder="555-555-5555" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
    					        <?php echo "<p class='text-danger'>$errPhone</p>";?>
    					    </div>
    					</div>
    					<div class="control-group">
        				    <label for="email" class="control-label">Email</label>
        				    <div class="controls">
        				        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            					<?php echo "<p class='text-danger'>$errEmail</p>";?>
        				    </div>
    					</div>
    					<div class="control-group">
    					    <div class="controls offset-2">
    					        <input id="send" name="send" type="submit" value="Send" class="btn btn-primary">
    					    </div>
    					</div>
    					<div class="control-group offset2">
    					    <div class="controls">
    					        <?php echo $result; ?>
    					    </div>
    					</div>
				     </form>
				</div>
			<div>
		</div>
		<div class="sectionTwo">
			<div class="container">
				<div class="span10 pageBox">
					<p class="bold">What happens next?</p>
					<p>After submitting, a representative from our partner, Store Financial, will call the AR/billing contact you listed within 48 hours to complete the enrollment process.</p>
					<p>This personal touch ensures you get all your questions answered, and verifies we have all the correct information needed to process and send payments.</p>
					<p>Once enrollment is complete, your next payment from TEST will be delivered via Store Financial's secure payment network to the AR/billing email address, plus you'll be granted access to our new accounts virtual card payment portal.</p>
				</div>
			</div>
		</div>
		<div class="sectionTwo">
			<div class="container">
				
				<div class="span10 pageBox" id="FAQ" style="margin-bottom:25px;">
					<div class="accordion">
						<h4>Frequently Asked Questions</h4>
						<div>
							<div class="accordion">
								<h4>What is the Supplier Payment Program?</h4>
								<div>
									<p>The Supplier Payment Program is an electronic accounts payable process that enables suppliers to receive ongoing payments with a single-use card number via email. The supplier enters the card number into their
			card payment system each time an invoice is paid. The card number is valid for one payment only and expires after each use.</p>
								</div>
								<h4>Why should I enroll?</h4>
								<div>
									<p>Simply stated, our program benefits every supplier by providing faster and more secure payments with rich remittance advice tying back to a specific invoice or work order for easy reconciliation. No more time is
			wasted tracking down payment details or cashing checks. Included in the program is self-service access into an online portal for all payment history and current transaction activity. </p>
								</div>
								<h4>What is a virtual card?</h4>
								<div>
									<p>A virtual card is a single-use digital card issued to a supplier via email. It includes a secure 16-digit payment number that uses the same network as a credit card transaction. Virtual cards have less risk and costs
			associated than issuing check or ACH, plus they’re easily accepted by any supplier already accepting cards.</p>
								</div>
								<h4>How do I process a virtual card?</h4>
								<div>
									<p>Simply enter into your point-of-sale (POS) terminal the six digits provided in your enrollment email, plus the remaining 10 digits provided on each notification. If your POS terminal requires the CVV or expiration
			date, those will also be provided in your payment notification email. Cards will process as soon as the information is entered and you will receive payment within your standard credit card settlement process.</p>
								</div>
								<h4>When will I get my first payment?</h4>
								<div>
									<p>Once enrolled, you will begin receiving virtual card payments on the next payment cycle you have set up with your client.</p>
								</div>
								<h4>What is included in my payment notification?</h4>
								<div>
									<p>You will receive a direct, PCI compliant notification via the email address provided at the time of enrollment. This will contain redemption instructions, vital payment information and remittance detail. Each
			notification will only include the last 10 digits of the card number for security reasons. The first six numbers are provided at the time of enrollment and will always be the same for processing each payment.</p>
								</div>
								<h4>What if a transaction fails?</h4>
								<div>
									<p>If you are unable to process the card, please call Store Financial at 1-866-979-8737 or email <a href="mailto:supplierpayments@storefinancial.com">supplierpayments@storefinancial.com</a>. Please have your card number available for the Store Financial team to be able to
			provide assistance.</p>
								</div>
								<h4>Can I access my payment activity and history online?</h4>
								<div>
									<p>Yes, access to all your payment history and current transaction activity is available through our self-service supplier portal. Once enrollment is completed you will be sent an invitation and instructions for activating your account.</p>
								</div>
								<h4>What level of support will I receive?</h4>
								<div>
									<p>A Store Financial representative is available 24/7 to handle all your inquiries at 1-866-979-8737. Additionally, you can email a member of the supplier payments team at <a href="mailto:supplierpayments@storefinancial.com">supplierpayments@storefinancial.com</a>.</p>
								</div>
								<h4>What if I can’t process credit cards, can I still participate?</h4>
								<div>
									<p>Yes, Store Financial has the ability to set up any supplier with a merchant relationship, which will allow Store Financial virtual cards to be processed and funds to be remitted into your bank account.</p>
								</div>
								<h4>What if I’m not the correct person to authorize enrollment, but I know who can?</h4>
								<div>
									<p>Please call Store Financial at 1-866-979-8737 or email <a class="vclink" href="mailto:supplierpayments@storefinancial.com">supplierpayments@storefinancial.com</a>. Be sure to include the name of your client that’s requesting your company’s participation in the program, plus the new contact person’s information. This information will be entered into the supplier payments portal and the new contact will receive a confirmation email to login to their account.</p>
								</div>
							</div>   
						</div>   
					</div><!-- end of accordion -->   
					<div class="clearfix"></div>
				</div><! -- end of span -->
			</div>
		</div>
		<div class="sectionOne">
			<div class="container">
				<div class="span12 pageBox">
				    <img src="img/smallSFLogo.png" style="display:inline;text-align:center;"/>
				</div>
				<div class="span5 pageBox">
				    <form class="form-horizontal" role="form" name="question" method="post" action="TEST_Enroll.php">
    					<div class="control-group">
    					    <h5>Ask a question</h5>
    					</div>
    					<div class="control-group">
        				    <label for="qemail" class="control-label">Email</label>
        				    <div class="controls">
        				        <input type="email" class="form-control" id="qemail" name="qemail" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['qemail']); ?>">
            					<?php echo "<p class='text-danger'>$errqemail</p>";?>
        				    </div>
    					</div>
    					<div class="control-group">
    					    <label for="qcompany" class="control-label">Company Name</label>
    					    <div class="controls">
    					    	<input type="text" class="form-control" id="qcompany" name="qcompany" placeholder="Smith Inc" value="<?php echo htmlspecialchars($_POST['qcompanyname']); ?>">
    					    	<?php echo "<p class='text-danger'>$errqcompany</p>";?>
    					    </div>
    					</div>
    					 <div class="control-group">
        				    <label for="qquestion" class="control-label">Question</label>
        				    <div class="controls">
            					<textarea class="form-control" rows="4" name="qquestion"><?php echo htmlspecialchars($_POST['qquestion']);?></textarea>
            					<?php echo "<p class='text-danger'>$errqquestion</p>";?>
        				    </div>
   					</div>
    					<div class="control-group">
    					    <div class="controls offset-2">
    					        <input id="ask" name="ask" type="submit" value="Send" class="btn btn-primary">
    					    </div>
    					</div>
    					<div class="control-group">
    					    <div class="controls offset-2">
    					        <?php echo $qresult; ?>
    					    </div>
    					</div>
				     </form> 
				</div>
				<div class="span5 pageBox">
					<p><a href="docs/B2BDocs/SPInfo.pdf" target="_blank">Supplier Payments Information Sheet</a></p>
					<p><a href="docs/B2BDocs/Payment_Notification.pdf" target="_blank">Payment Notification Sample</a></p>
					<!--<p><a>Payment Process Video</a></p>
					<p><a>Supplier Portal Overview Video</a></p>-->
				</div>
			</div><!-- end of container -->
		</div>
	</div><!-- end of pageContent -->
</div><!-- end of content -->
</body>
</html>