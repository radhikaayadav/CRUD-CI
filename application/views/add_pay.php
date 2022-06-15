<!DOCTYPE html>
<html>
<head>
	<title>ADD PAYMENT DETAILS</title>
</head>
<body>
	<h1>ADD PAYMENT DETAILS</h1>
	<form method="post" action="<?php echo  base_url().'index.php/quote/create_payment';?>">
		
	    <label> Enter Quote ID:</label>
		<input type="text" name="quote_id" value="<?php echo set_value('quote_id');?>">
		<?php echo form_error('quote_id');?>
		<br><br>
		<label> Enter Proposal ID:</label>
		<input type="text" name="proposal_id" value="<?php echo set_value('quote_id');?>">
		<?php echo form_error('proposal_id');?>
		<br><br>
		<label> Enter Amount:</label>
		<input type="text" name="amount" value="<?php echo set_value('amount');?>">
		<?php echo form_error('amount');?>
		<br><br>
		<input type="submit" name="createpay" value="CREATE PAYMENT">
		<button>
			<a href="<?php echo base_url().'index.php/quote/payment_index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>