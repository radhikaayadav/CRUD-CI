<!DOCTYPE html>
<html>
<head>
	<title>View Proposals</title>
</head>
<body align="center">
	<button>
		<a href="<?php echo base_url().'index.php/quote/index'?>">BACK</a>
    </button>
	<button>
		<a href="<?php echo base_url().'index.php/quote/create_proposal/'?>"> CREATE PROPOSAL</a>
		
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
<h2> PROPOSAL TABLE </h2>
<table border="5px" cellpadding = "10px" align="center" >
	<tr>
		<th>PROPOSAL ID</th>
		<th>QUOTE ID</th>
		<th>PROPOSAL DETAILS</th>
		<th>EDIT</th>
		<th> DELETE</th>
	</tr>
	<?php if(!empty($proposal)){ foreach($proposal as $proposal){?>
    <tr>
    	<td><?php echo $proposal['proposal_id']?></td>
    	<td><?php echo $proposal['quote_id']?></td>
    	<td><?php echo $proposal['proposal_details']?></td>
    	<td>
    		<button> 
    			<a href="<?php echo base_url().'index.php/quote/edit_proposal/'.$proposal['proposal_id']?>">EDIT</a>
    		</button>
    	</td>
    	<td>
    		<button>
    			<a href="<?php echo base_url().'index.php/quote/delete_proposal/'.$proposal['proposal_id']?>">DELETE</a>
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