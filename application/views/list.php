<!DOCTYPE html>
<html>
<head>
	<title>View Products</title>
</head>
<body align="center">
	<button>
		<a href="<?php echo base_url().'index.php/products/create/'?>"> CREATE PRODUCT</a>
		
	</button>
<?php 
$success =$this->session->userdata('success');
if($success!= "")
{
	echo $success;
}
$failure =$this->session->userdata('failure');
if($failure!= "")
{
	echo $failure;
}

?>
<h2> PRODUCT TABLE </h2>
<table border="5px" cellpadding = "10px" align="center" >
	<tr>
		<th>ID</th>
		<th>TITLE</th>
		<th>DESCRIPTION</th>
		<th>PRICE</th>
		<th>IMAGE</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	<?php if(!empty($product)){ foreach($product as $product){?>
    <tr>
    	<td><?php echo $product['id']?></td>
    	<td><?php echo $product['title']?></td>
    	<td><?php echo $product['description']?></td>
    	<td><?php echo $product['price']?></td>
    	<td><?php echo $product['image']?></td>
    	<td>
    	<td>
    		<button> 
    			<a href="<?php echo base_url().'index.php/products/edit/'.$product['id']?>">EDIT</a>
    		</button>
    	</td>
    	<td>
    		<button>
    			<a href="<?php echo base_url().'index.php/products/delete/'.$product['id']?>">DELETE</a>
    		</button>
    	</td>
    </tr>
	<?php } } else { ?>
		<tr>
			<td colspan="5">Records not found</td>
		</tr>
	    <?php } ?>
</table>
</body>
</html>