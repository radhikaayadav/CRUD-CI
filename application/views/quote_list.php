<!DOCTYPE html>
<html>
<head>
	<title>View Quotes</title>
</head>
<body align="center">
	<button>
		<a href="<?php echo base_url().'index.php/quote/index'?>">BACK</a>
    </button>
	<button>
		<a href="<?php echo base_url().'index.php/quote/create_quote/'?>"> CREATE QUOTE</a>
		
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
<h2> QUOTE TABLE </h2>
<table border="5px" cellpadding = "10px" align="center" >
	<tr>
		<th>QUOTE ID</th>
		<th>QUOTE NAME</th>
		<th>PREMIUM AMOUNT</th>
		<th>EDIT</th>
		<th> DELETE</th>
	</tr>
	<?php if(!empty($quote)){ foreach($quote as $quote){?>
    <tr>
    	<td><?php echo $quote['quote_id']?></td>
    	<td><?php echo $quote['name']?></td>
    	<td><?php echo $quote['premium_amount']?></td>
    	<td>
    		<button> 
    			<a href="<?php echo base_url().'index.php/quote/edit_quote/'.$quote['quote_id']?>">EDIT</a>
    		</button>
    	</td>
    	<td>
    		<button>
    			<a href="<?php echo base_url().'index.php/quote/delete_quote/'.$quote['quote_id']?>">DELETE</a>
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