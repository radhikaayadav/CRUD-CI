<!DOCTYPE html>
<html>
<head>
	<title>Create product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>ADD PRODUCT</h1>
	
	<form method="post" action="<?php echo  base_url().'index.php/products/create';?>" >
 	<div class="form-group">
      <label for="p_name"> Enter Product Name :</label>
      <input type="text" class="form-control" id="p_name" placeholder="Enter product name" name="title" >
    
    </div>

    <div class="form-group">
      <label for="Description"> Enter Description :</label>
      <input type="text" class="form-control" id="Description" placeholder="Enter product name" name="description" >
      
    </div>

     <div class="form-group">
      <label for="Price"> Enter Price :</label>
      <input type="text" class="form-control" id="Price" placeholder="Enter product name" name="price" >
      
    </div>


     <div class="form-group">
      <label for="file">Upload image :</label>
      <input type="file" class="form-control"  name="image" multiple/>
      
    </div>
  
  <input type="submit" class="btn btn-primary" name="createproduct" value="CREATE">
  <button>
			<a href="<?php echo base_url().'index.php/products/index'?>">CANCEL</a>
		</button>
</form>

</body>
</html>