<center>
	<body bgcolor="#33FFDC">
		
	
<?php

require 'connection.php';

session_start();
if(isset($_POST['submit']))
{
	$prod_Name = $_POST['prod_Name'];
	
	$query = mysqli_query($conn, "select *from orders inner join customer ON orders.cust_id=customer.cust_id  inner join products ON orders.prod_id=products.prod_id WHERE prod_Name = '$prod_Name' ")
  or die("Error: " . mysqli_error($conn));
	echo "<table border= 5px cellpadding= 10px style=font-size: 20px; font-family: sans-serif; bgcolor = #FFFF00 ";
	echo "<tr>
	<th>Product Name</th>
	<th>Customer Name</th>
	</tr>";

	while($row = mysqli_fetch_array( $query ))

	{
	echo "<tr>";
	echo '<td><b>' . $row['prod_Name'] . '</b></td>';
	echo '<td><b>' . $row['cust_Name'] . '</b></td>';
	echo "</tr>";

	}
}
?>
</body>
</center>