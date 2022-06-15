<!DOCTYPE html>
<html>
<head>
	<title>Edit Quote</title>
</head>
<body>
	<h1> UPDATE QUOTE</h1>
	<form method="post" action="<?php echo base_url().'index.php/quote/edit_quote/'.$quote['quote_id'];?>">
		<label> Enter Quote Name :</label>
		<input type="text" name="name" value="<?php echo set_value('name',$quote['name']);?>">
		<?php echo form_error('name');?>
		<brr><br>
	    <label> Enter Premium Amount :</label>
		<input type="text" name="premium_amount" value="<?php echo set_value('premium_amount',$quote['premium_amount']);?>">
		<?php echo form_error('premium_amount');?>
		<br><br>
		<input type="submit" name="createquote" value="UPDATE QUOTE">
		<button>
			<a href="<?php echo base_url().'index.php/quote/quote_index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>