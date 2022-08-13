 <?php
     if (isset($_POST["send"])) {
   	    $name = $_POST['name'];
     	$email = $_POST['email'];
		$description = $_POST['description'];
       	$from = 'Website Contact Form'; 
       	$to = 'meganlennek@gmail.com'; 
       	$subject = 'Contact Form Website';
        
       	$body = "From: $name\n Email: $email\n Interest: $description\n ";
 
    	// Check if name has been entered and is valid
    	if (!$_POST['name']) {
        	$errname = 'Please enter your name';
        }
        	
          
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        	$erremail = 'Please enter a valid email address';
        }
        	 
		// If there are no errors, send the email
		if (!$errname && !$erremail) {
    			if (mail ($to, $subject, $body, $from)) {
        			$result='<div class="alert alert-success">Thank You for your contact form submission!</div>';
    			} else {
        			$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    			}
		}
    	    }

	?>
