<!DOCTYPE html>
<html>
<head>
	<title>Edit product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1> UPDATE PRODUCT</h1>
	<form method="post" action="<?php echo  base_url().'index.php/products/edit/'.$product['id'];?>">
		<div class="form-group">
      <label for="p_name"> Enter Product Name :</label>
      <input type="text" class="form-control" id="p_name" name="title" value="<?php echo set_value('title',$product['product_name']);?>" >
    </div>

    
<div class="form-group">
      <label for="p_name"> Enter Description :</label>
      <input type="text" class="form-control" id="description"  name="description" value="<?php echo set_value('description',$product['product_desccription']);?>" >
    </div>


    <div class="form-group">
      <label for="p_name">Enter Price :</label>
      <input type="text" class="form-control" id="price"  name="Price" value="<?php echo set_value('price',$product['product_price']);?>" >
    </div>

    	 <div class="form-group">
      <label for="p_name">Image :</label>
      <input type="file" class="form-control" id="image"  name="image"  value="<?php echo set_value('title',$product['product_image']);?>" >
    </div>


		<input type="submit" name="createproduct" value="UPDATE">
		<button>
			<a href="<?php echo base_url().'index.php/products/index'?>">CANCEL</a>
		</button>

	</form>

</body>
</html>