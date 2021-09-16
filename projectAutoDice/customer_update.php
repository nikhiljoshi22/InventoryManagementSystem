<?php
function valid($cust_id, $cust_Name, $Email_ID, $Phone_Number,$Gender, $error)
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
<input type="hidden" name="cust_id" value="<?php echo $cust_id; ?>"/>

<table border="5px" cellpadding="35px" bgcolor="yellow" style="font-family: sans-serif; ">
<thead>
<tr>
<th align="center" style="font-size:30px ">Edit Customer Details</th>
</tr>
</thead>
<tr>
<td style="font-size:30px ">Name</td>
<td><label>
<input style="font-size:20px " type="text" name="cust_Name" value="<?php echo $cust_Name; ?>" />
</label></td>
</tr>

<tr style="font-size:30px ">
<td>Email</td>
<td><label>
<input  style="font-size:20px " type="text" name="Email_ID" value="<?php echo $Email_ID; ?>" />
</label></td>
</tr>

<tr  style="font-size:30px ">
<td>Phone Number</td>
<td><label>
<input  style="font-size:20px " type="text" name="Phone_Number" value="<?php echo $Phone_Number; ?>" />
</label></td>
</tr>

<tr  style="font-size:30px ">
<td>Gender</td>
<td><label>
<input  style="font-size:20px " type="text" name="Gender" value="<?php echo $Gender; ?>" />
</label></td>
</tr>

<tr  style="font-size:30px " align="Right">
<td colspan="2"><label>
<input  style="font-size:20px " type="submit" name="submit" value="Edit Records">
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

if (is_numeric($_POST['cust_id']))
{

$cust_id = $_POST['cust_id'];
$cust_Name = mysqli_real_escape_string($conn,htmlspecialchars($_POST['cust_Name']));
$Email_ID = mysqli_real_escape_string($conn,htmlspecialchars($_POST['Email_ID']));
$Phone_Number = mysqli_real_escape_string($conn,htmlspecialchars($_POST['Phone_Number']));
$Gender = mysqli_real_escape_string($conn,htmlspecialchars($_POST['Gender']));


if ($cust_Name == '' || $Email_ID == '' || $Phone_Number == '' || $Gender == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($cust_id, $cust_Name, $Email_ID, $Phone_Number,$Gender, $error);
}
else
{

mysqli_query($conn, "UPDATE customer SET cust_Name='$cust_Name', Email_ID='$Email_ID' ,Phone_Number='$Phone_Number', Gender='$Gender' WHERE cust_id='$cust_id'");
header("Location: customer_disp.php");
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

$cust_id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM customer WHERE cust_id=$cust_id");
$row = mysqli_fetch_array($result);

if($row)
{

$cust_Name = $row['cust_Name'];
$Email_ID = $row['Email_ID'];
$Phone_Number = $row['Phone_Number'];
$Gender = $row['Gender'];

valid($cust_id, $cust_Name, $Email_ID, $Phone_Number,$Gender,'');
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