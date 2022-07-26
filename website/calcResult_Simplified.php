<DOCTYPE html>
<head>
<title>Calculator Result</title>
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
.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-focus {
    color: #fff;
    background-color: #F8900A;
    border-color: #F8900A;
}
</style>
<script>
	$(document).ready(function(){
	$('input.number').keyup(function(event) {
      
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
<body>
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
		echo'<div class="visible-phone visible-tablet visible-desktop">';
		echo'<div class="pageContent">';
   	    	echo'<div class="container">';	
		echo'<div class="row">';
		echo'<div class="span8 offset2 pageBox">';
		echo'<div class="span7">';
		echo'<h2 style="text-align:center">Your Rebate</h2>';
		echo'<table class="table table-striped">';
		echo'<tbody>';
		echo'<tr>';
	   	echo'<td style="text-align:center;">Annual Spend: $'.$spend.'</td>';
	   	echo'</tr>';
	   	echo'<tr>';
	   	echo'<td style="text-align:center;">Rebate Potential: $'.number_format(round($rebateLow)).' - $'.number_format(round($rebateHigh)).'</td>';
	   	echo'</tr>';
		echo'</tbody>';
		echo'</table>';
		echo'</div>';
		echo'</div><!-- end of span -->';
	    	echo'</div><!-- end of row-->';
    	    	echo'</div><!-- end of container -->';
    		echo'</div><!-- end of page content -->';
    		echo'</div><!-- end of content -->';
	} 
?>

    
</body>
</html>