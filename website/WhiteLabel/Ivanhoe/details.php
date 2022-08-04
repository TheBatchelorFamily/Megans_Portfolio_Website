<?php $page_title = "Ivanhoe Cambridge Get My Balance"; ?>
<?php $page_description = "Check your balance, register your card and get support."; ?>
<?php $page_keywords = "balance, gift card"; ?>
<?php include("includes/header.php"); ?>


     <div class="row card-wells" style="margin-bottom: 40px">
        
        <div class="span5 pull-left no-print">
        <img src="img/circle.png" />     


<div style="display: inline-block; vertical-align: middle;" class="cardInfoHeader">
    <h3 class="circle25-text-info">I want to…</h3>
</div>

<div class="well well-small">
	<p style="text-transform:uppercase; padding:5px;"><a href="#" target="_blank"><input type="submit" value="View/Print Cardholder Agreement" class="btn btn-primary"/></a><br><br>
	<a href="#" target="_blank"><input type="submit" value="Lost your gift card?" class="btn btn-primary"/</a></p>
				
				<a id="regInfoLink" href="#" data-toggle="popover" data-placement="right" data-html="true" data-content="Internet, mail and phone order purchases may require that we have the name and address of the cardholder on file. <br/><br/>Please note, information entered during registration must match the information entered during your online purchases, if information does not match, your transaction may be declined." data-title='
                    <span class="text-info"><strong>Registration Info</strong></span> <button type="button" id="close" class="close" onclick="$(&apos;#regInfoLink&apos;).popover(&apos;hide&apos;);">&times;</button>' style="display: inline;padding: 0;margin-left: 3px; width:300px;">
					<span class="info-icon-img"></span>
				</a>
			</li>
			</ul>
</div>
        </div>
<div class="span7 pull-right ">
     <img src="img/circle.png" />        
<div style="display: inline-block; vertical-align: middle;" class="cardInfoHeader">
    <h3 class="circle25-text-info">Card Information</h3>
</div>

<div class="control-group well well-small" >
	<div class="control-group">
		<div class="row">			
			<div class="span2">
				<img src="img/CF.png"/>
			</div>
			<div class="span4" id="toggled-items">
				<div class="row balances">
					<strong>
						<div class="row">
							<div class="span2 half">Card Number</div>
							<div class="card-toggled span4 half" id="masked-card">
								**** **** **** 0122   <a class="card-mask-toggler card-toggled" href="#">Show</a>
								<a class="card-mask-toggler card-toggled" style="display: none" href="#">Hide</a>
							</div>
							<div class="card-toggled span4 half" style="display: none;">1000 1600 3319 0122<a class="card-mask-toggler card-toggled" href="#">Show</a>
								<a class="card-mask-toggler card-toggled" style="display: none" href="#">Hide</a>
							</div>

						</div>
						<div class="row">
							<div class="span1 half">Current</div>
							<div class="span2 half">$10.00</div>
						</div>
						<div class="row">
							<div class="span1 half">Available</div>
							<div class="span2 half">$10.00</div>
						</div>
					</strong>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span3 half">Status</div>
		<div class="span2 half">Active</div>
	</div>
	 <div class="row">
		 <div class="span3 half">Activated On</div>
		 <div class="span2 half">2/18/2015</div>
	 </div>
			<div class="row">
			<div class="span3 half">Valid Thru Date</div>
			<div class="span2 half">02/2023</div>
		</div>
				<div class="row">
			<div class="span3 half">Next Maintenance Fee Date</div>
			<div class="span2 half">2/19/2016</div>
		</div>
				<div class="row">
			<div class="span3 half">Maintenance Fee</div>
			<div class="span2 half">$2.50</div>
		</div>
</div>


            <div class="row">
                <div class="span7">
                    <div class="">
						<small>This gift card is issued by Peoples Trust Company.</small>
                    </div>
                </div>
            </div>				
        </div>
    </div>
	<div class="row control-group">
		<div class=" span10">
			
		</div>
	</div>
	<div class="row">
		<div class=" span12">
		<img src="img/circle.png" /> 	
<div style="display: inline-block; vertical-align: middle;">
	<h3 class="circle25-text-info">Transactions</h3>
</div>
<table class="table table-bordered" id="transactionTable">
	<thead>
		<tr>
			<th class="hidden">Date Sort</th>
			<th>Date</th>
			<th>Action</th>
			<th class ="hidden-phone">Note</th>
			<th>Amount</th>			
		</tr>
	</thead>
	<tbody>
			<tr>
				<td class="hidden">635283432310070000</td>
				<td>2/18/2015</td>
				<td>New Card Activation</td>
				<td class="hidden-phone"></td>
				<td>$20.00</td>
			</tr>
			<tr style="background-color:#7b8084;">
				<td class="hidden">635283432315471009</td>
				<td>2/25/2015</td>
				<td>Purchase - Transaction #123489</td>
				<td class="hidden-phone"></td>
				<td>($10.00)</td>
			</tr>
	</tbody>
</table>
		</div>
	</div>

<div id="modalSetPin" class="modal hide fade" data-backdrop="static">
    <form id="formSetPin" action="/Card/SetPin">
        <input name="__RequestVerificationToken" type="hidden" value="6I2t8mQG6Su69m6n81PgbL9uyMary7m2tO8VoDPgfSQqwI4uW_3ETPDhmDW0APGpnxcoZuRSz7NyVZiXqYxOmI6BWzwttbCOhnTHKV2pmQAMphgp0" />
        <input id="ExternalId" name="ExternalId" type="hidden" value="D4PTDM7LDDJC5YJG" />
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1>Set PIN</h1>
        </div>
        <div class="modal-body" style="max-height: none;">
            <p>In order to use your gift card for debit purchases, please enter a 4-digit, numeric PIN in the fields below. Please note that the card cannot be used to receive cash back for purchases.</p><p>If you forget your PIN, please contact Client Support at 800.755.0019. If you believe your PIN has been compromised, change your PIN or contact Client Support.</p><p>In choosing a PIN, for added security, do not select a PIN with three or more consecutive numbers, or based on historically significant dates. You should not use part or variations of any of the following:</p><div class="row-fluid">  <ul class="span5 pull-left" style="padding-left: 20px;">    <li>Social Security Number</li>    <li>Telephone Number</li>    <li>Checking or Savings Account Numbers</li>  </ul>  <ul class="span5 pull-left" style="margin-left: 20px;">    <li>Birthdate</li>    <li>Gift Card Number</li>    <li>Address</li>  </ul></div>
            <div style="clear:both;"></div>
            <div class="form-horizontal">
                <div class="control-group">
                    <label for="SetNewPin" class="control-label">Enter New PIN</label>
                    <div class="controls">
                        <input type="password" class="span2" id="SetNewPin" name="NewPin" size="4" maxlength="4" required/>
                    </div>
                </div>
                <div class="control-group">
                    <label for="SetConfirmPin" class="control-label">Confirm New PIN</label>
                    <div class="controls">
                        <input type="password" class="span2" id="SetConfirmPin" name="ConfirmPin" size="4" maxlength="4" required/>
                    </div>
                </div>
            </div>
            <div id="alertSet" class="hide alert alert-error"></div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
<div id="modalChangePin" class="modal hide fade" data-backdrop="static">
    <form id="formChangePin" method="POST" action="/Card/ChangePin">
        <input name="__RequestVerificationToken" type="hidden" value="kblzBsZ_MMmTvlsQnnZv1dq5aLVjo_tK2otpgxd5gE-uhTv9vGx547Qeb_C0BTOU-0S3MieQiumDw63KLOhmEZI_TeNGUojutYCMfUAgEI_RVwQR0" />
        <input id="ExternalId" name="ExternalId" type="hidden" value="D4PTDM7LDDJC5YJG" />
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h1>Change PIN</h1>
        </div>
        <div class="modal-body" style="max-height: none;">
            <p>In order to use your gift card for debit purchases, please enter a 4-digit, numeric PIN in the fields below. Please note that the card cannot be used to receive cash back for purchases.</p><p>If you forget your PIN, please contact Client Support at 800.755.0019. If you believe your PIN has been compromised, change your PIN or contact Client Support.</p><p>In choosing a PIN, for added security, do not select a PIN with three or more consecutive numbers, or based on historically significant dates. You should not use part or variations of any of the following:</p><div class="row-fluid">  <ul class="span5 pull-left" style="padding-left: 20px;">    <li>Social Security Number</li>    <li>Telephone Number</li>    <li>Checking or Savings Account Numbers</li>  </ul>  <ul class="span5 pull-left" style="margin-left: 20px;">    <li>Birthdate</li>    <li>Gift Card Number</li>    <li>Address</li>  </ul></div>
            <div style="clear:both;"></div>
            <div class="form-horizontal">
                <div class="control-group">
                    <label for="OldPin" class="control-label">Enter Old PIN</label>
                    <div class="controls">
                        <input type="password" class="span2" name="OldPin" size="4" maxlength="4" required/>
                    </div>
                </div>
                <div class="control-group">
                    <label for="ChangeNewPin" class="control-label">Enter New PIN</label>
                    <div class="controls">
                        <input type="password" class="span2" id="ChangeNewPin" name="NewPin" size="4" maxlength="4" required/>
                    </div>
                </div>
                <div class="control-group">
                    <label for="ChangeConfirmPin" class="control-label">Confirm New PIN</label>
                    <div class="controls">
                        <input type="password" class="span2" id="ChangeConfirmPin" name="ConfirmPin" size="4" maxlength="4" required/>
                    </div>
                </div>
            </div>
            <div id="alertChange" class="hide alert alert-error"></div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<?php include("includes/footer.php"); ?>