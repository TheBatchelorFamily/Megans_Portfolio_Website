<DOCTYPE html>
<head>
<title>Calculator</title>
<link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/libs/jquery-1.7.2.min.js"></script>
<style>
body {
	background-color:#333333;
	color:white;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: transparent;
}
.input-medium {
	color:#333333;
}
.btn-primary, .btn-primary:hover, .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus {
    color: #fff;
    background-color: #F8900A;
    border-color: #F8900A;
}
</style>
<script>
	$(document).ready(function(){
	$('.number').keyup(function(event) {
      
    // skip for arrow keys
    if(event.which >= 37 && event.which <= 40) return;
    
    // format number
    $(this).val(function(index, value) {
        return value
            .replace(/\D/g, '')
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        ;
    });
});	})
	</script>
</head>

<?php
	if (isset($_POST["calculate"])) {
		$spend = str_replace(",", "",$_POST['spend']);
		$onboardH = 0.5;
		$onboardL = 0.3;
		$interchange = 0.0265;
		$revenueShare = 0.7;
		$rebate = 0;
		
		$rebateHigh = (($spend * $onboardH) * $interchange) * $revenueShare;
		$rebateLow = (($spend * $onboardL) * $interchange) * $revenueShare;
		

		/*$result = $rebateLow.-.$rebateHigh; */
	} 
?>
<body>
    <div class="visible-phone visible-tablet visible-desktop">
	<div class="pageContent">
   	    <div class="container">	
		<div class="row">
		    <div class="span8 offset2 pageBox">
		    	<div class="span7">
		    	<h2 style="text-align:center">Calculate Your Rebate</h2>
		    	<table class="table table-striped">
			<form action="calcResult_Simplified.php" method="post">
			<tbody>
			<tr>
	   	    	    <td>What is the total annual spend of your supplier payments?</td>
	   	    	    <td class="input-prepend"><span class="add-on">$</span><input class="input-medium formInput number" id="spend" name="spend" type="text" value="" required/><input id="calculate" name="calculate" type="submit" value="Calculate" class="btn btn-primary" style="margin-left:15px;"></td>
	   	    	</tr>
			</tbody>
			</form>
			</table>
			</div>
		    </div><!-- end of span -->
	    	</div><!-- end of row-->
    	    </div><!-- end of container -->
    	</div><!-- end of page content -->
    </div><!-- end of content -->
</body>
</html>