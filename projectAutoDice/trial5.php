<!DOCTYPE html>
<html>
<head>
  <title>Orders</title>
</head>
<body>
  <center>
    <h3>Details of customer</h3>
    <input type="text" required placeholder="Enter Product ID" name="prod_id">
    <button type="submit" name="submit">Submit</button>
<?php

require 'connection.php';

if(isset($_POST['submit'])) {
$cust = $_POST['cust'];	
$cust_Name = $_POST['cust_Name'];

$sql = mysqli_query($conn, "select *,(Quantity * Price) AS Total_Price from orders inner join customer ON orders.cust_id=customer.cust_id  inner join products ON orders.prod_id=products.prod_id WHERE cust='$cust' AND cust_Name = '$cust_Name' ")
  or die("Error: " . mysqli_error($conn));
  $res = mysqli_query($conn,$query);

echo "<table border = '1px' cellpadding='5'>";
echo "<tr>
<th>Order ID</th>
<th>Customer ID</th>
<th>Products ID</th>
</tr>";

while($row = mysqli_fetch_array( $sql ))

{
echo "<tr>";

echo '<td><b>' . $row[6] . '</b></td>';
echo '<td><b>' . $row[11] .'</b></td>';
echo "</tr>";
}
}
echo "</table>";
?>
