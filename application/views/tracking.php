<!DOCTYPE html>
<html>
<head>
	<title>history</title>
</head>
<body align="center">
    <button>
		<a href="<?php echo base_url().'index.php/quote/index'?>">BACK</a>
    </button>
	

<h2> TRACKING TABLE </h2>
<table border="5px" cellpadding = "2px" align="center" >
	<tr>
		<th>ID</th>
		<th>TABLE NAME</th>
		<th>ACTION PERFORMED</th>
		<th>DATE TIME</th>
		<th>QUOTE ID</th>
		<th>QUOTE NAME</th>
		<th>PREMIUM AMOUNT</th>
		<th>PROPOSAL ID</th>
		<th>PROPOSAL DETAILS</th>
		<th>PAY ID</th>
		<th> AMOUNT</th>
	</tr>
	<?php if(!empty($history)){ foreach($history as $history){?>
    <tr>
    	<td><?php echo $history['id']?></td>
    	<td><?php echo $history['table_name']?></td>
    	<td><?php echo $history['action']?></td>
    	<td><?php echo $history['dt_datetime']?></td>
    	<td><?php if($history['quote_id'] == 0)
    		{
    		echo '';
    	    }
    		else
    		{
    			echo $history['quote_id'];
    		}?></td>
    	<td><?php echo $history['name']?></td>
    	<td><?php if($history['premium_amount'] == 0)
    		{
    		echo '';
    	    }
    		else
    		{
    			echo $history['premium_amount'];
    		}?></td>
    	<td><?php if($history['proposal_id'] == 0)
    		{
    		echo '';
    	    }
    		else
    		{
    			echo $history['proposal_id'];
    		}?></td>
    	<td><?php echo $history['proposal_details']?></td>
    	<td><?php if($history['pay_id'] == 0)
    		{
    		echo '';
    	    }
    		else
    		{
    			echo $history['pay_id'];
    		}?></td>
    	<td><?php if($history['amount'] == 0)
    		{
    		echo '';
    	    }
    		else
    		{
    			echo $history['amount'];
    		}?></td>
    		
    </tr>
	<?php } } else { ?>
		<tr>
			<td colspan="11">Records not found</td>
		</tr>
	    <?php } ?>
</table>
</body>
</html>