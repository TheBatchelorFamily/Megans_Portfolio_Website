<?php $page_title = "Payment Optimization Calculator Result | Payment Card Innovation | Electronic Payments, Electronic Cards, and Commercial Payments"; ?>
<?php $page_description = "We develop electronic card and commercial payment solutions that allow clients to control the use, enable redemption, and automate settlement for card programs including gift, incentive, reward, membership, discount and more."; ?>
<?php $page_keywords = "electronic cards, electronic payments, virtual cards, gift cards, program management, payment processing, payment card, card payments"; ?>
<?php include("includes/header-calc.php"); ?>
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
		$(".payment").each(function(){if(!isNaN(this.value)&&this.value.length!=0){sump+=parseFloat(this.value);}});$("#sumpayment").html(sump);
	}
	</script>
	<script type="text/javascript">
		$(window).load(function(){
			$('#myModal').modal('show');
		});
	</script>
	<script>
    	function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}
    </script>
	<?php
				
	//variables from form
	$spend          = '';
	$term1          = '';
	$term2          = '';
	$term3          = '';
	$term4          = '';
	$term5          = '';
	$check          = '';
	$ach            = '';
	$wire           = '';
	$pCard          = '';
	$checksPerMonth = '';
	$achPerMonth    = '';
	
	
	//variables for adjustments - reuse originals for form
	$spendAdj          = '';
	$term1Adj          = '';
	$term2Adj          = '';
	$term3Adj          = '';
	$term4Adj          = '';
	$term5Adj          = '';
	$checkAdj          = '';
	$achAdj            = '';
	$wireAdj           = '';
	$pCardAdj          = '';
	$checksPerMonthAdj = '';
	$achPerMonthAdj    = '';
	
	
	//variables for calculations
	$checkSpendT1 = '';
	$checkSpendT2 = '';
	$checkSpendT3 = '';
	$checkSpendT4 = '';
	$checkSpendT5 = '';
	$achSpendT1 = '';
	$achSpendT2 = '';
	$achSpendT3 = '';
	$achSpendT4 = '';
	$achSpendT5 = '';
	$checkEstTerm1 = '';
	$checkEstTerm2 = '';
	$checkEstTerm3 = '';
	$checkEstTerm4 = '';
	$checkEstTerm5 = ''; 
	$achEstTerm1 = '';
	$achEstTerm2 = '';
	$achEstTerm3 = '';
	$achEstTerm4 = '';
	$achEstTerm5 = '';
	$wireEstTerm1 = '';
	$wireEstTerm2 = '';
	$wireEstTerm3 = '';
	$wireEstTerm4 = '';
	$wireEstTerm5 = '';
	$pCardEstTerm1 = '';
	$pCardEstTerm2 = '';
	$pCardEstTerm3 = '';
	$pCardEstTerm4 = '';
	$pCardEstTerm5 = '';

	
	//Average Interchange Level variables
	$checkAvgIntLevelTerm1 = '';
	$checkAvgIntLevelTerm2 = '';
	$checkAvgIntLevelTerm3 = '';
	$checkAvgIntLevelTerm4 = '';
	$checkAvgIntLevelTerm5 = '';
	$achAvgIntLevelTerm1 = '';
	$achAvgIntLevelTerm2 = '';
	$achAvgIntLevelTerm3 = '';
	$achAvgIntLevelTerm4 = '';
	$achAvgIntLevelTerm5 = '';
	$wireAvgIntLevelTerm1 = '';
	$wireAvgIntLevelTerm2 = '';
	$wireAvgIntLevelTerm3 = '';
	$wireAvgIntLevelTerm4 = '';
	$wireAvgIntLevelTerm5 = '';
	$pCardAvgIntLevelTerm1 = '';
	$pCardAvgIntLevelTerm2 = '';
	$pCardAvgIntLevelTerm3 = '';
	$pCardAvgIntLevelTerm4 = '';
	$pCardAvgIntLevelTerm5 = '';

	
	//Net Interchange Level variables
	$checkNetIntLevelTerm1 = '';
	$checkNetIntLevelTerm2 = '';
	$checkNetIntLevelTerm3 = '';
	$checkNetIntLevelTerm4 = '';
	$checkNetIntLevelTerm5 = '';
	$achNetIntLevelTerm1 = '';
	$achNetIntLevelTerm2 = '';
	$achNetIntLevelTerm3 = '';
	$achNetIntLevelTerm4 = '';
	$achNetIntLevelTerm5 = '';
	$wireNetIntLevelTerm1 = '';
	$wireNetIntLevelTerm2 = '';
	$wireNetIntLevelTerm3 = '';
	$wireNetIntLevelTerm4 = '';
	$wireNetIntLevelTerm5 = '';
	$pCardNetIntLevelTerm1 = '';
	$pCardNetIntLevelTerm2 = '';
	$pCardNetIntLevelTerm3 = '';
	$pCardNetIntLevelTerm4 = '';
	$pCardNetIntLevelTerm5 = '';

	
	//variables for Totals
	$checkTotalSpend = '';
	$achTotalSpend = '';
	$totalEstConvert = '';
	$totalCheckCon = '';
	$totalAchCon   = '';
	$totalWireCon  = '';
	$totalPCardCon = '';
	$totalConvert  = '';
	$totalCheckAvgInt = '';
	$totalAchAvgInt   = '';
	$totalWireAvgInt  = '';
	$totalPCardAvgInt = '';
	$totalAvgIntLevel = '';
	$totalCheckNetInt = '';
	$totalAchNetInt   = '';
	$totalWireNetInt  = '';
	$totalPCardNetInt = '';
	$totalNetIntLevel = '';
	$termTotal = '';
	$paymentTotal = '';
	
	//Final numbers variables
	$estSpendEnrolled         = '';
	$estAnnualRebate          = '';
	$estAnnualRebateRange     = '';
	$estAnnualRebateH         = '';
	$estAnnualRebateL         = '';
	$checkAvgPayment          = '';
	$achAvgPayment            = '';
	$costSavingsCheck         = '';
	$costSavingsAch           = '';
	$oppCostEarlyPayment      = '';
	$estPaymentOpBenefitH     = '';
	$estPaymentOpBenefitL     = '';
	$estPaymentOpBenefitRange = '';
	$estPaymentOpBenefit      = '';
	
	//test variable
	$test = '';
	
	//functions
	//Function to Calculate % of Spend in each category
		function CalcPerSpend($a, $b, $c) {
			$percentage = $a * $b;
			$spend = $percentage * $c;
			return $spend;
		}
		
		//Function to Calculate Estimated Spend on Converts to V-Card
		function CalcConvert($d, $i, $j, $k) {
			$spend = CalcPerSpend($i, $j, $k);
			$convert = $spend * $d;
			return $convert;
		}
		
		//Function to Calculate Gross Interchange Revenue for each category
		function CalcAvgIntLevel($e, $f) {
			$grossIntRev = $e * $f;
			return $grossIntRev;
		}
		
		//Function to Calculate Net Interchange Revenue
		function CalcNetIntLevel ($g, $h) {
			$netRate = $h - .0011;
			$netTotal = $netRate * $g;
			return $netTotal;
		}
		//Function to sanitize form data
		function nullnegcheck(a){
			if(a == null || a < 0) {
				a = 0;
				return a;
			}
			else{
				return a;
			}
		}
	if (isset($_POST['spend']) && isset($_POST['term1']) && isset($_POST['term2']) && isset($_POST['term3']) && isset($_POST['term4']) 
    && isset($_POST['term5']) && isset($_POST['check']) && isset($_POST['ach']) && isset($_POST['wire']) && isset($_POST['pCard'])) {
    
		$unSpend = $_POST['spend'];
		$unCPM = $_POST['checksPerMonth'];
		$unAPM = $_POST['achPerMonth'];
		
		//Get form info into variables
		$spend          = str_replace(",", "",$_POST['spend']);
		$term1          = nullnegcheck($_POST['term1']);
		$term2          = nullnegcheck($_POST['term2']);
		$term3          = nullnegcheck($_POST['term3']);
		$term4          = nullnegcheck($_POST['term4']);
		$term5          = nullnegcheck($_POST['term5']);
		$check          = nullnegcheck($_POST['check']);
		$ach            = nullnegcheck($_POST['ach']);
		$wire 		    = nullnegcheck($_POST['wire']);
		$pCard          = nullnegcheck($_POST['pCard']);
		$checksPerMonth = nullnegcheck(str_replace(",", "",$_POST['checksPerMonth'])); 
		$achPerMonth    = nullnegcheck(str_replace(",", "",$_POST['achPerMonth']));
		
		$termTotal = ($term1 + $term2 + $term3 + $term4 + $term5);
		$paymentTotal = ($check + $ach + $wire + $pCard);
		
		//Adjust spend to 80%
		$spendAdj = $spend * .85;
		
		//Adjust terms and categories to percentages
		$term1Adj = $term1 / 100;
		$term2Adj = $term2 / 100;
		$term3Adj = $term3 / 100;
		$term4Adj = $term4 / 100;
		$term5Adj = $term5 / 100;
		$checkAdj = $check / 100;
		$achAdj = $ach / 100;
		$wireAdj = $wire / 100;
		$pCardAdj = $pCard / 100;
		
		//Calculate Total Spend for Checks and ACH for Cost Savings
		$checkSpendT1 = ($checkAdj * $term1Adj) * $spendAdj;
		$checkSpendT2 = ($checkAdj * $term2Adj) * $spendAdj;
		$checkSpendT3 = ($checkAdj * $term3Adj) * $spendAdj;
		$checkSpendT4 = ($checkAdj * $term4Adj) * $spendAdj;
		$checkSpendT5 = ($checkAdj * $term5Adj) * $spendAdj;
		$checkTotalSpend = ($checkSpendT1 + $checkSpendT2 +$checkSpendT3 + $checkSpendT4 + $checkSpendT5);
		
		$achSpendT1 = ($achAdj * $term1Adj) * $spendAdj;
		$achSpendT2 = ($achAdj * $term2Adj) * $spendAdj;
		$achSpendT3 = ($achAdj * $term3Adj) * $spendAdj;
		$achSpendT4 = ($achAdj * $term4Adj) * $spendAdj;
		$achSpendT5 = ($achAdj * $term5Adj) * $spendAdj;
		$achTotalSpend = ($achSpendT1 + $achSpendT2 +$achSpendT3 + $achSpendT4 + $achSpendT5);
		
		//Calculate Estimated Spend on Converts to V-Card
		$checkEstTerm1 = CalcConvert(.1, $checkAdj, $term1Adj, $spendAdj);
		$checkEstTerm2 = CalcConvert(.4, $checkAdj, $term2Adj, $spendAdj);
		$checkEstTerm3 = CalcConvert(.5, $checkAdj, $term3Adj, $spendAdj);
		$checkEstTerm4 = CalcConvert(.65, $checkAdj, $term4Adj, $spendAdj);
		$checkEstTerm5 = CalcConvert(.75, $checkAdj, $term5Adj, $spendAdj);
		$achEstTerm1 = CalcConvert(.1, $achAdj, $term1Adj, $spendAdj);
		$achEstTerm2 = CalcConvert(.3, $achAdj, $term2Adj, $spendAdj);
		$achEstTerm3 = CalcConvert(.4, $achAdj, $term3Adj, $spendAdj);
		$achEstTerm4 = CalcConvert(.5, $achAdj, $term4Adj, $spendAdj);
		$achEstTerm5 = CalcConvert(.6, $achAdj, $term5Adj, $spendAdj);
		$wireEstTerm1 = CalcConvert(.05, $wireAdj, $term1Adj, $spendAdj);
		$wireEstTerm2 = CalcConvert(.1, $wireAdj, $term2Adj, $spendAdj);
		$wireEstTerm3 = CalcConvert(.2, $wireAdj, $term3Adj, $spendAdj);
		$wireEstTerm4 = CalcConvert(.25, $wireAdj, $term4Adj, $spendAdj);
		$wireEstTerm5 = CalcConvert(.35, $wireAdj, $term5Adj, $spendAdj);
		$pCardEstTerm1 = CalcConvert(.5, $pCardAdj, $term1Adj, $spendAdj);
		$pCardEstTerm2 = CalcConvert(.5, $pCardAdj, $term2Adj, $spendAdj);
		$pCardEstTerm3 = CalcConvert(.5, $pCardAdj, $term3Adj, $spendAdj);
		$pCardEstTerm4 = CalcConvert(.5, $pCardAdj, $term4Adj, $spendAdj);
		$pCardEstTerm5 = CalcConvert(.5, $pCardAdj, $term5Adj, $spendAdj);

		
		//Total all payment type converts
		$totalCheckCon = ($checkEstTerm1 + $checkEstTerm2 + $checkEstTerm3 + $checkEstTerm4 + $checkEstTerm5);
		$totalAchCon = ($achEstTerm1 + $achEstTerm2 + $achEstTerm3 + $achEstTerm4 + $achEstTerm5);
		$totalWireCon = ($wireEstTerm1 + $wireEstTerm2 + $wireEstTerm3 + $wireEstTerm4 + $wireEstTerm5);
		$totalPCardCon = ($pCardEstTerm1 + $pCardEstTerm2 + $pCardEstTerm3 + $pCardEstTerm4 + $pCardEstTerm5);
		
		$totalConvert = ($totalCheckCon + $totalAchCon + $totalWireCon + $totalPCardCon);
		$estSpendEnrolled = $totalConvert / $spendAdj;
		
		//Calculate Avg Interchange Levels
		$checkAvgIntLevelTerm1 = CalcAvgIntLevel ($checkEstTerm1, .015);
		$checkAvgIntLevelTerm2 = CalcAvgIntLevel ($checkEstTerm2, .017);
		$checkAvgIntLevelTerm3 = CalcAvgIntLevel ($checkEstTerm3, .02);
		$checkAvgIntLevelTerm4 = CalcAvgIntLevel ($checkEstTerm4, .0225);
		$checkAvgIntLevelTerm5 = CalcAvgIntLevel ($checkEstTerm5, .025);
		$achAvgIntLevelTerm1 = CalcAvgIntLevel ($achEstTerm1, .01);
		$achAvgIntLevelTerm2 = CalcAvgIntLevel ($achEstTerm2, .0125);
		$achAvgIntLevelTerm3 = CalcAvgIntLevel ($achEstTerm3, .015);
		$achAvgIntLevelTerm4 = CalcAvgIntLevel ($achEstTerm4, .02);
		$achAvgIntLevelTerm5 = CalcAvgIntLevel ($achEstTerm5, .022);
		$wireAvgIntLevelTerm1 = CalcAvgIntLevel ($wireEstTerm1, .01);
		$wireAvgIntLevelTerm2 = CalcAvgIntLevel ($wireEstTerm2, .0125);
		$wireAvgIntLevelTerm3 = CalcAvgIntLevel ($wireEstTerm3, .014);
		$wireAvgIntLevelTerm4 = CalcAvgIntLevel ($wireEstTerm4, .015);
		$wireAvgIntLevelTerm5 = CalcAvgIntLevel ($wireEstTerm5, .017);
		$pCardAvgIntLevelTerm1 = CalcAvgIntLevel ($pCardEstTerm1, .02);
		$pCardAvgIntLevelTerm2 = CalcAvgIntLevel ($pCardEstTerm2, .02);
		$pCardAvgIntLevelTerm3 = CalcAvgIntLevel ($pCardEstTerm3, .0225);
		$pCardAvgIntLevelTerm4 = CalcAvgIntLevel ($pCardEstTerm4, .024);
		$pCardAvgIntLevelTerm5 = CalcAvgIntLevel ($pCardEstTerm5, .025);
		
		//Total all payment types Avg Interchange Levels
		$totalCheckAvgInt = ($checkAvgIntLevelTerm1 + $checkAvgIntLevelTerm2 + $checkAvgIntLevelTerm3 + $checkAvgIntLevelTerm4 + $checkAvgIntLevelTerm5);
		$totalAchAvgInt   = ($achAvgIntLevelTerm1 + $achAvgIntLevelTerm2 + $achAvgIntLevelTerm3 + $achAvgIntLevelTerm4 + $achAvgIntLevelTerm5);
		$totalWireAvgInt  = ($wireAvgIntLevelTerm1 + $wireAvgIntLevelTerm2 + $wireAvgIntLevelTerm3 + $wireAvgIntLevelTerm4 + $wireAvgIntLevelTerm5);
		$totalPCardAvgInt = ($pCardAvgIntLevelTerm1 + $pCardAvgIntLevelTerm2 + $pCardAvgIntLevelTerm3 + $pCardAvgIntLevelTerm4 + $pCardAvgIntLevelTerm5);
		
		$totalAvgIntLevel = ($totalCheckAvgInt + $totalAchAvgInt + $totalWireAvgInt + $totalPCardAvgInt);
		
		//Calculate Net Interchange Levels
		$checkNetIntLevelTerm1 = CalcNetIntLevel ($checkEstTerm1, .015);
		$checkNetIntLevelTerm2 = CalcNetIntLevel ($checkEstTerm2, .017);
		$checkNetIntLevelTerm3 = CalcNetIntLevel ($checkEstTerm3, .02);
		$checkNetIntLevelTerm4 = CalcNetIntLevel ($checkEstTerm4, .0225);
		$checkNetIntLevelTerm5 = CalcNetIntLevel ($checkEstTerm5, .025);
		$achNetIntLevelTerm1 = CalcNetIntLevel ($achEstTerm1, .01);
		$achNetIntLevelTerm2 = CalcNetIntLevel ($achEstTerm2, .0125);
		$achNetIntLevelTerm3 = CalcNetIntLevel ($achEstTerm3, .015);
		$achNetIntLevelTerm4 = CalcNetIntLevel ($achEstTerm4, .02);
		$achNetIntLevelTerm5 = CalcNetIntLevel ($achEstTerm5, .022);
		$wireNetIntLevelTerm1 = CalcNetIntLevel ($wireEstTerm1, .01);
		$wireNetIntLevelTerm2 = CalcNetIntLevel ($wireEstTerm2, .0125);
		$wireNetIntLevelTerm3 = CalcNetIntLevel ($wireEstTerm3, .014);
		$wireNetIntLevelTerm4 = CalcNetIntLevel ($wireEstTerm4, .015);
		$wireNetIntLevelTerm5 = CalcNetIntLevel ($wireEstTerm5, .017);
		$pCardNetIntLevelTerm1 = CalcNetIntLevel ($pCardEstTerm1, .02);
		$pCardNetIntLevelTerm2 = CalcNetIntLevel ($pCardEstTerm2, .02);
		$pCardNetIntLevelTerm3 = CalcNetIntLevel ($pCardEstTerm3, .0225);
		$pCardNetIntLevelTerm4 = CalcNetIntLevel ($pCardEstTerm4, .024);
		$pCardNetIntLevelTerm5 = CalcNetIntLevel ($pCardEstTerm5, .025);
		
		//Total all payment types Net Interchange Levels
		$totalCheckNetInt = ($checkNetIntLevelTerm1 + $checkNetIntLevelTerm2 + $checkNetIntLevelTerm3 + $checkNetIntLevelTerm4 + $checkNetIntLevelTerm5);
		$totalAchNetInt   = ($achNetIntLevelTerm1 + $achNetIntLevelTerm2 + $achNetIntLevelTerm3 + $achNetIntLevelTerm4 + $achNetIntLevelTerm5);
		$totalWireNetInt  = ($wireNetIntLevelTerm1 + $wireNetIntLevelTerm2 + $wireNetIntLevelTerm3 + $wireNetIntLevelTerm4 + $wireNetIntLevelTerm5);
		$totalPCardNetInt = ($pCardNetIntLevelTerm1 + $pCardNetIntLevelTerm2 + $pCardNetIntLevelTerm3 + $pCardNetIntLevelTerm4 + $pCardNetIntLevelTerm5);
		
		$totalNetIntLevel = ($totalCheckNetInt + $totalAchNetInt + $totalWireNetInt + $totalPCardNetInt);
		
		//Calculate Estimated Annual Rebate
		$estAnnualRebate = $totalNetIntLevel * .70;
		$estAnnualRebateRange = $estAnnualRebate * .1;
		$estAnnualRebateH = $estAnnualRebate + $estAnnualRebateRange;
		$estAnnualRebateL = $estAnnualRebate - $estAnnualRebateRange;
		
		//Calculate Cost Savings for Checks and ACH
		if (isset($_POST['checksPerMonth']) && isset($_POST['achPerMonth'])) {
			$checkAvgPayment = $checkTotalSpend / ($checksPerMonth * 12);
			$achAvgPayment = $achTotalSpend / ($achPerMonth * 12);
			$costSavingsCheck = ($totalCheckCon / $checkAvgPayment)  * 5;
			$costSavingsAch = ($totalAchCon / $achAvgPayment);
		}
		else {
			$costSavingsCheck = 0;
			$costSavingsAch = 0;
		}
		
		//Calculate Opportunity Cost of Early Payment 
		$oppCostEarlyPayment = (.50 * $estSpendEnrolled) * (15 / 365);
		
		//Calculate Estimated Payment Optimization Benefit and Ranges
		$estPaymentOpBenefit  = ($estAnnualRebate + $costSavingsCheck + $costSavingsAch) - $oppCostEarlyPayment;
		$estPaymentOpBenefitRange = $estPaymentOpBenefit * .10;
		$estPaymentOpBenefitH = $estPaymentOpBenefit + $estPaymentOpBenefitRange;
		$estPaymentOpBenefitL = $estPaymentOpBenefit - $estPaymentOpBenefitRange;
		/*round($estAnnualRebateL);
		round($estAnnualRebateH);
		round($estPaymentOpBenefitL);
		round($estPaymentOpBenefitH);*/
		
		//output to customer
		echo '<div class="visible-print">';

		
		echo '<div class="pageContent">';
   	    	echo '<div class="container">';	
		echo '<div class="row">';
		echo '<div class="span8 offset2 pageBox">';
		echo '<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color:#333333;">';
		echo '<div class="modal-header">';
		echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
		echo '<h3 id="myModalLabel">Supplier Payment Results</h3>';
		echo '</div>'; //end of modal header
		if ($termTotal != 100 || $paymentTotal != 100) {
			echo '<div class="modal-body">';
			echo '<div><p style="color:red;">Either total term structure and/or payment types total does not equal 100. Please check your numbers and please try again.</p></div>';
			echo '</div>'; //end of modal body
			echo '<div class="modal-footer" style="background-color:#333333;">';
			echo '<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>';
    			//echo '<button class="btn btn-primary">Save changes</button>';
    			echo '</div>'; //end of modal footer
			echo '</div>';//ends modal
		}
		else {
			echo '<div class="modal-body">';
			echo '<div id="pOResults">';
			echo '<div><p>Annual Rebate:<span class="pull-right"> $'.number_format(round($estAnnualRebateL)).' - $'.number_format(round($estAnnualRebateH)).'</span></p></div>';
			echo '<div><p>Cost Savings Check Payments:<span class="pull-right"> $'.number_format(round($costSavingsCheck)).'</span></p></div>';
			echo '<div><p>Cost Savings ACH Payments:<span class="pull-right"> $'.number_format(round($costSavingsAch)).'</span></p></div>';
			echo '<div><p>Payment Optimization Benefit:<span class="pull-right bold" id="resultsHighlight"> $'.number_format(round($estPaymentOpBenefitL)).' - $'.number_format(round($estPaymentOpBenefitH)).'</span></p></div>';
			echo '</div>';
			echo '<br>';
			echo '<div><p>Would you like to receive an email and more information about your Payment Optimization Benefit? Please complete the contact form below and one of our payment experts will contact you.</p></div>';
			echo '<br>';
			echo '<form action="contactFormCalc.php" method="post">';
		 	echo '<div class="form-horizontal">';
		 	echo '<div class="row">';
		 	//echo '<div class="span4 offset3">';
		 	echo '<div class="control-group">';
		 	echo '<label class="control-label" for="name">Your Name:</label>';
		 	echo '<div class="controls">';
		 	echo '<input class="text-box single-line" data-val="true" data-val-length="Name exceeds 50 characters." data-val-length-max="50" data-val-regex="Your name is not in the correct format." data-val-regex-pattern="^[a-zA-Z |&#39;|\.|,|\s|:]+$" id="name" name="name" type="text" value="" required/>';
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	echo '<div class="control-group">';
		 	echo '<label class="control-label" for="company">Company:</label>';
		 	echo '<div class="controls">';
		 	echo '<input class="text-box single-line" data-val="true" data-val-length="Company name exceeds 50 characters." data-val-length-max="50" data-val-regex="Your compnay name is not in the correct format." data-val-regex-pattern="^[a-zA-Z |&#39;|\.|,|\s|:]+$" id="name" name="company" type="text" value="" required/>';
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	echo '<div class="control-group">';
		 	echo '<label class="control-label" for="email">Email:</label>';
		 	echo '<div class="controls">';
		 	echo '<input class="text-box single-line" data-val="true" data-val-length="The email must be between 7 and 50 characters and contain only alphanumeric characters." data-val-length-max="50" data-val-minlength="Email must be between 7 and 50 characters and contain only alphanumeric characters." data-val-minlength-min="7" data-val-regexwithoptions="Please enter a valid email address." data-val-regexwithoptions-flags="i" data-val-regexwithoptions-pattern="^((([a-z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$" data-val-required="The Email field is required." id="email" name="email" type="email" value="" required/>';
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	echo '<div class="control-group">';
		 	echo '<div class="controls">';
		 	echo '<input type="hidden" value="'.$spend.'" name="inputSpend" />';
		 	echo '<input type="hidden" value="'.$term1.'" name="inputTerm1" />';
		 	echo '<input type="hidden" value="'.$term2.'" name="inputTerm2" />';
		 	echo '<input type="hidden" value="'.$term3.'" name="inputTerm3" />';
		 	echo '<input type="hidden" value="'.$term4.'" name="inputTerm4" />';
		 	echo '<input type="hidden" value="'.$term5.'" name="inputTerm5" />';
		 	echo '<input type="hidden" value="'.$check.'" name="inputCheck" />';
		 	echo '<input type="hidden" value="'.$ach.'" name="inputACH" />';
		 	echo '<input type="hidden" value="'.$wire.'" name="inputWire" />';
		 	echo '<input type="hidden" value="'.$pCard.'" name="inputCard" />';
		 	echo '<input type="hidden" value="'.$checksPerMonth.'" name="inputCPerMonth" />';
		 	echo '<input type="hidden" value="'.$achPerMonth.'" name="inputAPerMonth" />';
		 	echo '<input type="hidden" value="'.number_format(round($estAnnualRebateL)).'" name="inputRebateLow" />';
		 	echo '<input type="hidden" value="'.number_format(round($estAnnualRebateH)).'" name="inputRebateHigh" />';
		 	echo '<input type="hidden" value="'.number_format(round($costSavingsCheck)).'" name="inputSavingC" />';
		 	echo '<input type="hidden" value="'.number_format(round($costSavingsAch)).'" name="inputSavingA" />';
		 	echo '<input type="hidden" value="'.number_format(round($estPaymentOpBenefitL)).'" name="inputPOBL" />';
		 	echo '<input type="hidden" value="'.number_format(round($estPaymentOpBenefitH)).'" name="inputPOBH" />';
		 	echo '</div>'; //end of controls
		 	echo '</div>'; //end of control group
		 	echo '<div class="control-group">';
		 	echo '<div class="controls">';
		 	echo '<div class="offset1">';
		 	echo '<input type="submit" value="Submit" class="btn btn-default" />';
		 	echo '</div>';//end of offset1
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	//echo '</div>';//end of span
		 	echo '</div>';//end of row
		 	echo '</div>';// end of form-horizontal
		 	echo '</form>';
			echo '</div>'; //end of modal body
			echo '<div class="modal-footer" style="background-color:#333333;">';
			echo '<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>';
    			//echo '<a href="calcContact.php"><button class="btn btn-primary">Print Results</button></a>';
    			echo '</div>'; //end of modal footer
			echo '</div>';//ends modal
		}
		echo '<div><h2>Previous Entry:</h2></div>';
        	echo '<div class="span7">';
	   	echo '<table class="table table-striped">';
	   	echo '<tbody><tr>';
	   	echo '<td>What is the total annual volume of your supplier payments?</td>';
	   	echo '<td>$'.$unSpend.'</td>';
	   	echo '</tr>';
	   	echo '<tr>';
	   	echo '<td>What is the term structure for your supplier payments (should add up to 100%)?</td>';
	   	echo '<td></td>';
	   	echo '</tr>';
	   	echo '<tr>';
	   	echo '<td style="text-align:right;">Net due on receipt</td>';
	   	if ($term1 == null || $term1 == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$term1.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td style="text-align:right;">16 to 30 days</td>';
		if ($term2 == null || $term2 == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$term2.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td style="text-align:right;">31 to 45 days</td>';
		if ($term3 == null || $term3 == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$term3.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td style="text-align:right;">46 to 60 days</td>';
		if ($term4 == null || $term4 == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$term4.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td style="text-align:right;">Over 60 days</td>';
		if ($term5 == null || $term5 == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
	   		echo '<td>'.$term5.'%</td>';
	   	}
	   	echo '</tr>';
	   	echo '<tr>';
	   	echo '<td>What are the percentages for each payment type(should add up to 100%)?:</td>';
	   	echo '<td></td>';
	   	echo '</tr>';
		echo '<td style="text-align:right;">Check</td>';
		if ($check == null || $check == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$check.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td style="text-align:right;">ACH</td>';
		if ($ach == null || $ach == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$ach.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td style="text-align:right;">Wire</td>';
		if ($wire == null || $wire == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$wire.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td style="text-align:right;">P-Card/V-Card</td>';
		if ($pCard == null || $pCard == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$pCard.'%</td>';
		}
		echo '</tr>';
		echo '<tr>';
	  	echo '<td>How many check payments each month?</td>';
	  	if ($unCPM == null || $term3 == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$unCPM.'</td>';
		}
		echo '</tr>';
		echo '<tr>';
		echo '<td>How many ACH payments each month?</td>';
		if ($unAPM == null || $unAPM == 0) {
	   		echo '<td>0%</td>';
	   	}
	   	else {
			echo '<td>'.$unAPM.'</td>';
		}
		echo '</tr>';
		echo '</tr></tbody>';
		echo '</table>';
		echo '<div id="pOResults">';
		echo '<div><p>Annual Rebate:<span class="pull-right"> $'.number_format(round($estAnnualRebateL)).' - $'.number_format(round($estAnnualRebateH)).'</span></p></div>';
		echo '<div><p>Cost Savings Check Payments:<span class="pull-right"> $'.number_format(round($costSavingsCheck)).'</span></p></div>';
		echo '<div><p>Cost Savings ACH Payments:<span class="pull-right"> $'.number_format(round($costSavingsAch)).'</span></p></div>';
		echo '<div><p>Payment Optimization Benefit:<span class="pull-right bold" id="resultsHighlight"> $'.number_format(round($estPaymentOpBenefitL)).' - $'.number_format(round($estPaymentOpBenefitH)).'</span></p></div>';
		echo '</div>';
		echo '<br>';
		echo '<a href="calc.php"><button class="btn btn-primary" >Recalculate</button></a>';
		echo '<br>';
		echo '<div><p>Want an email with your results and more info about capitilizing on your Payment Optimization Benefit? Fill out the contact form below and one of our specialists will contact you.</p></div>';
		
		echo '<br>';
		echo '<form action="contactFormCalc.php" method="post">';
		 	echo '<div class="form-horizontal">';
		 	echo '<div class="row">';
		 	//echo '<div class="span4 offset3">';
		 	echo '<div class="control-group">';
		 	echo '<label class="control-label" for="name">Your Name:</label>';
		 	echo '<div class="controls">';
		 	echo '<input class="text-box single-line" data-val="true" data-val-length="Name exceeds 50 characters." data-val-length-max="50" data-val-regex="Your name is not in the correct format." data-val-regex-pattern="^[a-zA-Z |&#39;|\.|,|\s|:]+$" id="name" name="name" type="text" value="" required/>';
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	echo '<div class="control-group">';
		 	echo '<label class="control-label" for="company">Company:</label>';
		 	echo '<div class="controls">';
		 	echo '<input class="text-box single-line" data-val="true" data-val-length="Company name exceeds 50 characters." data-val-length-max="50" data-val-regex="Your compnay name is not in the correct format." data-val-regex-pattern="^[a-zA-Z |&#39;|\.|,|\s|:]+$" id="name" name="company" type="text" value="" required/>';
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	echo '<div class="control-group">';
		 	echo '<label class="control-label" for="email">Email:</label>';
		 	echo '<div class="controls">';
		 	echo '<input class="text-box single-line" data-val="true" data-val-length="The email must be between 7 and 50 characters and contain only alphanumeric characters." data-val-length-max="50" data-val-minlength="Email must be between 7 and 50 characters and contain only alphanumeric characters." data-val-minlength-min="7" data-val-regexwithoptions="Please enter a valid email address." data-val-regexwithoptions-flags="i" data-val-regexwithoptions-pattern="^((([a-z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$" data-val-required="The Email field is required." id="email" name="email" type="email" value="" required/>';
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	echo '<div class="control-group">';
		 	echo '<div class="controls">';
		 	echo '<input type="hidden" value="'.$spend.'" name="inputSpend" />';
		 	echo '<input type="hidden" value="'.$term1.'" name="inputTerm1" />';
		 	echo '<input type="hidden" value="'.$term2.'" name="inputTerm2" />';
		 	echo '<input type="hidden" value="'.$term3.'" name="inputTerm3" />';
		 	echo '<input type="hidden" value="'.$term4.'" name="inputTerm4" />';
		 	echo '<input type="hidden" value="'.$term5.'" name="inputTerm5" />';
		 	echo '<input type="hidden" value="'.$check.'" name="inputCheck" />';
		 	echo '<input type="hidden" value="'.$ach.'" name="inputACH" />';
		 	echo '<input type="hidden" value="'.$wire.'" name="inputWire" />';
		 	echo '<input type="hidden" value="'.$pCard.'" name="inputCard" />';
		 	echo '<input type="hidden" value="'.$checksPerMonth.'" name="inputCPerMonth" />';
		 	echo '<input type="hidden" value="'.$achPerMonth.'" name="inputAPerMonth" />';
		 	echo '<input type="hidden" value="'.number_format(round($estAnnualRebateL)).'" name="inputRebateLow" />';
		 	echo '<input type="hidden" value="'.number_format(round($estAnnualRebateH)).'" name="inputRebateHigh" />';
		 	echo '<input type="hidden" value="'.number_format(round($costSavingsCheck)).'" name="inputSavingC" />';
		 	echo '<input type="hidden" value="'.number_format(round($costSavingsAch)).'" name="inputSavingA" />';
		 	echo '<input type="hidden" value="'.number_format(round($estPaymentOpBenefitL)).'" name="inputPOBL" />';
		 	echo '<input type="hidden" value="'.number_format(round($estPaymentOpBenefitH)).'" name="inputPOBH" />';
		 	echo '</div>'; //end of controls
		 	echo '</div>'; //end of control group
		 	echo '<div class="control-group">';
		 	echo '<div class="controls">';
		 	//echo '<div class="offset1">';
		 	echo '<input type="submit" value="Submit" class="btn btn-default" />';
		 	//echo '</div>';//end of offset1
		 	echo '</div>';//end of controls
		 	echo '</div>';//end of control group
		 	//echo '</div>';//end of span
		 	echo '</div>';//end of row
		 	echo '</div>';// end of form-horizontal
		 	echo '</form>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		//echo '</form>';
 } ?>
		    </div><!-- end of span -->
	    	</div><!-- end of row-->
    	    </div><!-- end of container -->
    	</div><!-- end of page content -->
    </div><!-- end of content -->
</body>
</html>