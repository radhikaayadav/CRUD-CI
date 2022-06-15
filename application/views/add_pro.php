<!DOCTYPE html>
<html>
<head>
	<title>ADD PROPOSAL</title>
</head>
<body>
	<h1>ADD PROPOSAL</h1>
	<form method="post" action="<?php echo  base_url().'index.php/quote/create_proposal';?>">
		
	    <label> Enter Quote ID:</label>
		<input type="text" name="quote_id" value="<?php echo set_value('quote_id');?>">
		<?php echo form_error('quote_id');?>
		<br><br>
		<label> Enter Proposal Details :</label>
		<input type="text" name="proposal_details" value="<?php echo set_value('proposal_details');?>">
		<?php echo form_error('proposal_details');?>
		<br><br>
		<input type="submit" name="createpro" value="CREATE PROPOSAL">
		<button>
			<a href="<?php echo base_url().'index.php/quote/proposal_index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>