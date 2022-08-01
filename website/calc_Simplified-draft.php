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
});
	$(".payment").each(function(){$(this).keyup(function(){calculateSum();});});
	});
	function calculateSum(){
		var sum=0;
		var sump=0;
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
		    	<h2 style="text-align:center">Calculate Your Rebate</h2>
		    	<table class="table table-striped">
			<form action="calcResult_Simplified-draft.php" method="post">
			<tbody>
			<tr>
	   	    	    <td>What is the total annual spend of your supplier payments?</td>
	   	    	    <td class="input-prepend"><span class="add-on">$</span><input class="input-medium formInput number" id="spend" name="spend" type="text" value="" required/></td>
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
			    <td></td>
			    <td><span>Payment type total:  </span><span id="sumpayment">0</span></td>
	   	    	</tr>
	   	    	<tr>
	   	    	    <td>How many check payments per year?</td>
	   	    	    <td><input class="input-medium formInput number" id="checksPerYear" name="checksPerYear" type="text" value="" /><input id="calculate" name="calculate" type="submit" value="Calculate" class="btn btn-primary" style="margin-left:15px;"></td>
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