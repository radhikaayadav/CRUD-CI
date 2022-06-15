<!DOCTYPE html>
<html>
<head>
	<title>Edit Proposal</title>
</head>
<body>
	<h1> UPDATE PROPOSAL</h1>
	<form method="post" action="<?php echo base_url().'index.php/quote/edit_proposal/'.$proposal['proposal_id'];?>">
		<label> Enter Quote ID:</label>
		<input type="text" name="quote_id" value="<?php echo set_value('quote_id',$proposal['quote_id']);?>">
		<?php echo form_error('quote_id');?>
		<brr><br>
	    <label> Enter Proposal Details :</label>
		<input type="text" name="proposal_details" value="<?php echo set_value('proposal_details',$proposal['proposal_details']);?>">
		<?php echo form_error('proposal_details');?>
		<br><br>
		<input type="submit" name="createproposal" value="UPDATE PROPOSAL">
		<button>
			<a href="<?php echo base_url().'index.php/quote/proposal_index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>