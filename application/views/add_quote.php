<!DOCTYPE html>
<html>
<head>
	<title>ADD QUOTE</title>
</head>
<body>
	<h1>ADD QUOTE</h1>
	<form method="post" action="<?php echo  base_url().'index.php/quote/create_quote';?>">
		
	    <label> Enter Quote Name :</label>
		<input type="text" name="name" value="<?php echo set_value('name');?>">
		<?php echo form_error('name');?>
		<br><br>
		<label> Enter Premium Amount :</label>
		<input type="text" name="premium_amount" value="<?php echo set_value('premium_amount');?>">
		<?php echo form_error('premium_amount');?>
		<br><br>
		<input type="submit" name="createquote" value="CREATE QUOTE">
		<button>
			<a href="<?php echo base_url().'index.php/quote/quote_index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>