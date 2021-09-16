<?php
function valid($prod_id, $prod_Name, $Quantity, $QuantityLowerLimit,$Price, $error)
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
<input type="hidden" name="prod_id" value="<?php echo $prod_id; ?>"/>

<table  border="5px" cellpadding="35px" bgcolor="yellow" style="font-family: sans-serif; ">
<tr style="font-size:30px">
<td>Edit Products Details</td>
</tr>
<tr style="font-size:30px ">
<td>Name</td>
<td><label>
<input style="font-size:20px " type="text" name="prod_Name" value="<?php echo $prod_Name; ?>" />
</label></td>
</tr>

<tr style="font-size:30px">
<td>Quantity</td>
<td><label>
<input style="font-size:20px " type="number" name="Quantity" value="<?php echo $Quantity; ?>" />
</label></td>
</tr>

<tr style="font-size:30px">
<td>QuantityLowerLimit</td>
<td><label>
<input style="font-size:20px " type="number" name="QuantityLowerLimit" value="<?php echo $QuantityLowerLimit; ?>" />
</label></td>
</tr>

<tr style="font-size:30px">
<td>Price</td>
<td><label>
<input style="font-size:20px " type="number" name="Price" value="<?php echo $Price; ?>" />
</label></td>
</tr>

<tr align="Right" style="font-size:30px ">
<td colspan="2"><label>
<input style="font-size:20px " type="submit" name="submit" value="Edit Records">
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

if (is_numeric($_POST['prod_id']))
{

$prod_id = $_POST['prod_id'];
$prod_Name = mysqli_real_escape_string($conn,htmlspecialchars($_POST['prod_Name']));
$Quantity = mysqli_real_escape_string($conn,htmlspecialchars($_POST['Quantity']));
$QuantityLowerLimit = mysqli_real_escape_string($conn,htmlspecialchars($_POST['QuantityLowerLimit']));
$Price = mysqli_real_escape_string($conn,htmlspecialchars($_POST['Price']));


if ($prod_Name == '' || $Quantity == '' || $QuantityLowerLimit == '' || $Price == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($prod_id, $prod_Name, $Quantity, $QuantityLowerLimit,$Price, $error);
}
else
{

mysqli_query($conn, "UPDATE products SET prod_Name='$prod_Name', Quantity='$Quantity' ,QuantityLowerLimit='$QuantityLowerLimit', Price='$Price' WHERE prod_id='$prod_id'");
header("Location: products_disp.php");
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

$prod_id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE prod_id=$prod_id");
$row = mysqli_fetch_array($result);

if($row)
{

$prod_Name = $row['prod_Name'];
$Quantity = $row['Quantity'];
$QuantityLowerLimit = $row['QuantityLowerLimit'];
$Price = $row['Price'];

valid($prod_id, $prod_Name, $Quantity, $QuantityLowerLimit,$Price,'');
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