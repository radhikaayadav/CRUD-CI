<!DOCTYPE html>
<html>
<head>
	<title>View Payments</title>
</head>
<body align="center">
	<button>
		<a href="<?php echo base_url().'index.php/quote/index'?>">BACK</a>
    </button>
	<button>
		<a href="<?php echo base_url().'index.php/quote/create_payment/'?>"> CREATE PAYMENT</a>
		
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
<h2> PAYMENT TABLE </h2>
<table border="5px" cellpadding = "10px" align="center" >
	<tr>
		<th>PAY ID</th>
		<th>QUOTE ID</th>
		<th>PROPOSAL ID</th>
		<th>AMOUNT</th>
		<th>EDIT</th>
		<th> DELETE</th>
	</tr>
	<?php if(!empty($payment)){ foreach($payment as $payment){?>
    <tr>
    	<td><?php echo $payment['pay_id']?></td>
    	<td><?php echo $payment['quote_id']?></td>
    	<td><?php echo $payment['proposal_id']?></td>
    	<td><?php echo $payment['amount']?></td>
    	<td>
    		<button> 
    			<a href="<?php echo base_url().'index.php/quote/edit_payment/'.$payment['pay_id']?>">EDIT</a>
    		</button>
    	</td>
    	<td>
    		<button>
    			<a href="<?php echo base_url().'index.php/quote/delete_payment/'.$payment['pay_id']?>">DELETE</a>
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