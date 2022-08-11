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
});
	$(".term").each(function(){$(this).keyup(function(){calculateSum();});});
	$(".payment").each(function(){$(this).keyup(function(){calculateSum();});});
	});
	function calculateSum(){
		var sum=0;
		var sump=0;
		$(".term").each(function(){if(!isNaN(this.value)&&this.value.length!=0){sum+=parseFloat(this.value);}});$("#sumterm").html(sum);
		var wrongSum = sum;
		if(wrongSum>100 || wrongSum<100){
		    var wrong = document.getElementById("sumterm");
		    wrong.style.color="red";
		}
		else {
		    var wrong = document.getElementById("sumterm");
		    wrong.style.color="green";
		}
		$(".payment").each(function(){if(!isNaN(this.value)&&this.value.length!=0){sump+=parseFloat(this.value);}});$("#sumpayment").html(sump);
		var wrongSump = sump;
		if(wrongSump>100 || wrongSump<100){
		    var wrongp = document.getElementById("sumpayment");
		    wrongp.style.color="red";
		}
		else {
		    var wrongp = document.getElementById("sumpayment");
		    wrongp.style.color="green";
		}
	}
	</script>
</head>


<body>
    <div class="visible-phone visible-tablet visible-desktop">
	<div class="pageContent">
   	    <div class="container">	
		<div class="row">
		    <div class="span8 offset2 pageBox">
		    	<div class="span7">
		    	<table class="table table-striped">
			<form action="calcResult.php" method="post">
			<tbody>
			<tr>
	   	    	    <td>What is the total annual volume of your supplier payments?</td>
	   	    	    <td class="input-prepend"><span class="add-on">$</span><input class="input-medium formInput number" id="spend" name="spend" type="text" value="" /></td>
	   	    	</tr>
	   	    	<tr>
	   	    	    <td>What is the term structure for your supplier payments (should add up to 100%)?</td>
	   	    	    <td></td>
	   	    	</tr>
	   	    	<tr>
	   	    	    <td style="text-align:right;">Net due on receipt</td>
	   	    	    <td class="input-append"><input class="input-medium formInput term" id="term1" name="term1" type="text" value=""  /><span class="add-on">%</span></td>
			</tr>
			<tr>
			    <td style="text-align:right;">1 to 30 days</td>
			    <td class="input-append"><input class="input-medium formInput term" id="term2" name="term2" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>
			   <td style="text-align:right;">31 to 45 days</td>
			   <td class="input-append"><input class="input-medium formInput term" id="term3" name="term3" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>
			    <td style="text-align:right;">46 to 60 days</td>
			    <td class="input-append"><input class="input-medium formInput term" id="term4" name="term4" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>
			    <td style="text-align:right;">Over 60 days</td>
			    <td class="input-append"><input class="input-medium formInput term" id="term5" name="term5" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>
			    <td></td>
	   	    	    <td><span>Term structure total:  </span><span id="sumterm">0</span></td>
	   	    	</tr>
	   	    	<tr>
	   	    	    <td>What are the percentages for each payment type(should add up to 100%)?:</td>
	   	    	    <td></td>
	   	    	</tr>
	   	    	<tr>  
			    <td style="text-align:right;">Check</td>
			    <td class="input-append"><input class="input-medium formInput payment" id="check" name="check" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>
			    <td style="text-align:right;">ACH</td>
			    <td class="input-append"><input class="input-medium formInput payment" id="ach" name="ach" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>	
			    <td style="text-align:right;">Wire</td>
			    <td class="input-append"><input class="input-medium formInput payment" id="wire" name="wire" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>
			    <td style="text-align:right;">P-Card/V-Card</td>
			    <td class="input-append"><input class="input-medium formInput payment" id="pCard" name="pCard" type="text" value="" /><span class="add-on">%</span></td>
			</tr>
			<tr>
			    <td></td>
			    <td><span>Payment type total:  </span><span id="sumpayment">0</span></td>
	   	    	</tr>
	   	    	<tr>
	   	    	    <td>How many check payments each month?</td>
	   	    	    <td><input class="input-medium formInput number" id="checksPerMonth" name="checksPerMonth" type="text" value="" /></td>
	   	    	</tr>
			<tr>
			    <td>How many ACH payments each month?</td>
			    <td><input class="input-medium formInput number" id="achPerMonth" name="achPerMonth" type="text" value="" /></td>
			</tr>
			<tr>
			    <td></td>
		 	    <td><input type="submit" value="See Results" class="btn btn-default" /></td>
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