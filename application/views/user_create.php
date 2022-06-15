<!DOCTYPE html>
<html>
<head>
	<title>User Overview</title>
	<link rel="stylesheet" type="text/css" href="<?php echo 'public/css/bootstrap.min.css'; ?>">
	<script type="text/javascript" src="<?php echo 'public/js/bootstrap.min.js'; ?>"></script>
</head>
<body>
	
<div>
	<div class="container-fluid">
		<div class="row bg-dark">
			<div class="navbar navbar-dark">
				<div class="navbar-brand">
					<h1>USER CREATION</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div>
<form class="border top-30">
<div class="container-fluid ">
	<div class="row">
		<div class="form-group">
			<div class="form-control">
				<label> First Name :</label>
			
				<input type="text" name="first_name">
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="form-group">
			<div class="form-control">
				<label> Last Name :</label>
			
				<input type="text" name="last_name">
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="form-group">
			
				<button class="btn btn-primary" id="submit_user">ADD USER</button>
				<button class="btn btn-secondary"> CANCEL</button>
			
		</div>
	</div>
</div>

</form>
</div>
<script type="text/javascript" src="public/js_events/user_create.js"></script>
</body>
</html>
