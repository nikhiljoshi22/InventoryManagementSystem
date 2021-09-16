<?php
function valid($id, $cust_id, $prod_id, $date_of_order,$quantity_order, $error)
{
?>
<center>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Records</title>
</head>
<body bgcolor="#33FFDC">
<?php

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="5px" cellpadding="35px" bgcolor="yellow" style="font-family: sans-serif; ">
<tr style="font-size:30px">
<td align="Right">Edit Order Details</td>
</tr>
<tr>
<td style="font-size:30px">Customer ID</td>
<td><label>
<input style="font-size:20px" type="text" name="cust_id" value="<?php echo $cust_id; ?>" />
</label></td>
</tr>

<tr style="font-size:30px">
<td>Product ID</td>
<td><label>
<input style="font-size:20px" type="text" name="prod_id" value="<?php echo $prod_id; ?>" />
</label></td>
</tr>

<tr style="font-size:30px">
<td>Date</td>
<td><label>
<input style="font-size:20px" name="date_of_order"  type="text"  readonly="" value="<?php $date_of_order = date('yy-m-d'); echo $date_of_order;?>" />
</label></td>
</tr>

<tr style="font-size:30px">
<td>Quantity</td>
<td><label>
<input style="font-size:20px" type="text" name="quantity_order" value="<?php echo $quantity_order; ?>" />
</label></td>
</tr>

<tr align="Right" style="font-size:30px">
<td colspan="2"><label>
<input style="font-size:20px" type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}

require 'connection.php';

if (isset($_POST['submit']))
{

if (is_numeric($_POST['id']))
{

$id = $_POST['id'];
$cust_id = mysqli_real_escape_string($conn,htmlspecialchars($_POST['cust_id']));
$prod_id = mysqli_real_escape_string($conn,htmlspecialchars($_POST['prod_id']));
$date_of_order = mysqli_real_escape_string($conn,htmlspecialchars($_POST['date_of_order']));
$quantity_order = mysqli_real_escape_string($conn,htmlspecialchars($_POST['quantity_order']));



if ($cust_id == '' || $prod_id == '' || $date_of_order == '' || $quantity_order == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $cust_id, $prod_id, $date_of_order,$quantity_order, $error);
}
else
{

mysqli_query($conn, "UPDATE orders SET cust_id='$cust_id', prod_id='$prod_id', date_of_order='$date_of_order', quantity_order='$quantity_order' WHERE Order_id='$id'");
header("Location: orders_disp.php");
}
}
else
{

echo 'Error!';
}
}
else

{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM orders WHERE Order_id=$id");
$row = mysqli_fetch_array($result);

if($row)
{

$cust_id = $row['cust_id'];
$prod_id = $row['prod_id'];
$date_of_order = $row['date_of_order'];
$quantity_order = $row['quantity_order'];

valid($id, $cust_id, $prod_id, $date_of_order,$quantity_order,'');
}
else
{
echo "No results!";
}
}
else

{
echo 'Error!';
}
}
?>
</center>