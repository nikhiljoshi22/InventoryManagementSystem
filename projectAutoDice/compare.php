<!DOCTYPE html>
<html>
<head>
	<title>Products which are less</title>
</head>
<body bgcolor="#33FFDC">
	<center><h1>Products which are less than Quantity Lower Limit</h1></center>
</body>
</html>
<center>
	<?php

	require 'connection.php';

	$sql = "SELECT prod_Name , Quantity , QuantityLowerLimit FROM products WHERE (Quantity <= QuantityLowerLimit)";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($result)) {
		?> 
		<table  border="5px" cellpadding="50px" bgcolor="yellow" style="font-family: sans-serif;">
			<tr style="font-size: 20px">
				<td>Product Name</td>
				<td>Quantity</td>
				<td>Quantity Lower Limit</td>
			</tr>
			<tr style="font-size: 20px">
	          <td align="center"><?php echo $row['prod_Name']; ?></td>
	          <td align="center"><?php echo $row['Quantity']; ?></td>
	          <td align="center"><?php echo $row['QuantityLowerLimit']; ?></td>
	          
	      </tr>
		

	 <?php
  
  }

?>
</center>