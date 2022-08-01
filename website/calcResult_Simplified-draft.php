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
		$check = $_POST['check'] / 100;
		$ach = $_POST['ach'] /100;
		$wire = $_POST['wire'] /100;
		$checksPerYear = str_replace(",", "",$_POST['checksPerYear']);
		$achHigh = 0.15;
		$achLow = 0.1;
		$checkHigh = 0.35;
		$checkLow = 0.3;
		$wireHigh = 0.1;
		$wireLow = 0.05;
		$interchange = 0.015;
		
		$checkTotalH = $spend * $check * $checkHigh * $interchange;
		$achTotalH = $spend * $ach * $achHigh * $interchange;
		$wireTotalH = $spend * $wire * $wireHigh * $interchange;
		
		$checkTotalL = $spend * $check * $checkLow * $interchange;
		$achTotalL = $spend * $ach * $achLow * $interchange;
		$wireTotalL = $spend * $wire * $wireLow * $interchange;
		
		$checkSavings = $checksPerYear * 5;
		
		$rebateHigh = $checkTotalH + $achTotalH + $wireTotalH;
		$rebateLow = $checkTotalL + $achTotalL + $wireTotalL;
		

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
	   	echo'<td style="text-align:center;">Annual Spend: $'.$english_format_number = number_format($spend).'</td>';
	   	echo'</tr>';
	   	echo'<tr>';
	   	echo'<td style="text-align:center;">Check Cost Savings: $'.$english_format_number = number_format($checkSavings).'</td>';
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