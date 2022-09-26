<!DOCTYPE html>
<html>
<head>
	<title>View Products</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNf "/>
</head>

	<button>
		<a href="<?php echo base_url().'index.php/products/create/'?>"> CREATE PRODUCT</a>
		
	</button>
	<body align="center">
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
<table class=class="table table-striped" border="5px" cellpadding = "10px" align="center" >
	<tr>
		<th scope="col">ID</th>
		<th scope="col">TITLE</th>
		<th scope="col">DESCRIPTION</th>
		<th scope="col">PRICE</th>
		<th scope="col">IMAGE</th>
		<th scope="col">EMAIL</th>
		<th scope="col">EDIT</th>
		<th scope="col">DELETE</th>
	</tr>
	<?php if(!empty($product)){ foreach($product as $product){?>
    <tr>
    	 <th scope="row"><?php echo $product['id']?></th>
    	
    	<td><?php echo $product['title']?></td>
    	<td><?php echo $product['description']?></td>
    	<td><?php echo $product['price']?></td>
    	<td><?php echo $product['image']?></td>
    	<td><?php echo $product['email']?></td>
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