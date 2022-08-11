<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fierce Kitti Designs</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Stylesheets -->
    <link href="css/bs.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn`t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    	body {background-color:white; color:black;}
    </style>

</head>

    <body>

         
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
        <div class="container">	
	        <form class="form-horizontal col-sm-12 col-xs-12" name="contact" role="form" method="post" action="form.php">
		   <div class="form-group">
		   	<br>
		   </div>
		   <div class="form-group">
		  	<?php echo $result; ?>
    		  </div>
		   <div class="form-group">
    			<label for="name" class="sr-only">Name</label>
    			<input type="text" class="form-control" id="name" name="name" placeholder="John Smith" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
    			<?php echo "<p class='text-danger'>$errname</p>";?>
    		   </div>
    		   <div class="form-group">
        	      <label for="email" class="sr-only">Email</label>
        	      <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
        	      <?php echo "<p class='text-danger'>$errEmail</p>";?>
    		   </div>
		   <div class="form-group">
        		<label for="description" class="sr-only">Question:</label>
       		        <textarea class="form-control" cols= 30 rows="5" name="description"><?php echo htmlspecialchars($_POST['description']);?></textarea>
   		   </div>
		   <div class="form-group">
		   	<input id="send" name="send" type="submit" value="Send" class="btn btn-primary btn-lg" style="margin-top:5px;">
		  </div>
    	       </form> 
	   </div>
    </body>
</html>