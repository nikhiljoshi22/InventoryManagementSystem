<!DOCTYPE html>
<html>
<head>
  <title>Orders</title>
</head>
<body bgcolor="#33FFDC">
	<center>
		<a style="font-size: 20px; font-family: sans-serif;" href="trial4Order.php">Sorted By Total Price And Customer Accordingly</a><br><br> 
		<a style="font-size: 20px; font-family: sans-serif;" href="multiple.php">Display products ordered by multiple customers</a><br><br>
		<a style="font-size: 20px; font-family: sans-serif;" href="compare.php">Display products quantity less than limit</a>
	</center><br><br>
  <center>
    <h1>Orders Details</h1>
<?php

require 'connection.php';

$sql = mysqli_query($conn, "select *, (quantity_order * Price) AS Total_Price from orders inner join customer ON orders.cust_id=customer.cust_id  inner join products ON orders.prod_id=products.prod_id")
  or die("Error: " . mysqli_error($conn));

echo "<table border= 5px cellpadding= 10px style=font-size: 20px; font-family: sans-serif; bgcolor = #FFFF00 ";
echo "<tr>
<th>Order ID</th>
<th>Customer Name</th>
<th>Products Name</th>
<th>Quantity</th>
<th>Date</th>
<th>Total_Price</th>
<th colspan = 2 scope = col>Operations</th>
</tr>";

while($row = mysqli_fetch_array( $sql ))

{
echo "<tr>";
echo '<td><b>' . $row[0] . '</b></td>';
echo '<td><b>' . $row[6] . '</b></td>';
echo '<td><b>' . $row[11] .'</b></td>';
echo '<td><b>' . $row[4] .'</b></td>';
echo '<td><b>' . $row[3] .'</b></td>';
echo '<td><b>' . $row['Total_Price'] .'</b></td>';
echo '<td><b><a href="orders_update.php?id=' . $row['Order_id'] . '">EDIT</a></font></b></td>';
echo '<td><b><a href="orders_delete.php?id=' . $row['Order_id'] . '">DELETE</a></font></b></td>';
echo "</tr>";
}

echo "</table>";
?>
