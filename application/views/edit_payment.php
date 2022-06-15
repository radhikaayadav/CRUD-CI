<!DOCTYPE html>
<html>
<head>
	<title>Edit Payment</title>
</head>
<body>
	<h1> UPDATE PAYMENT</h1>
	<form method="post" action="<?php echo base_url().'index.php/quote/edit_payment/'.$payment['pay_id'];?>">
		<label> Enter Quote ID:</label>
		<input type="number" name="quote_id" value="<?php echo set_value('quote_id',$payment['quote_id']);?>">
		<?php echo form_error('quote_id');?>
		<brr><br>
	    <label> Enter Proposal ID:</label>
		<input type="number" name="proposal_id" value="<?php echo set_value('proposal_id',$payment['proposal_id']);?>">
		<?php echo form_error('proposal_id');?>
		<br><br>
		<label> Enter Amount:</label>
		<input type="number" name="amount" value="<?php echo set_value('amount',$payment['amount']);?>">
		<?php echo form_error('amount');?>
		<br><br>
		<input type="submit" name="createproposal" value="UPDATE PAYMENT">
		<button>
			<a href="<?php echo base_url().'index.php/quote/payment_index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>