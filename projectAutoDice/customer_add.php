<!DOCTYPE html>
<html>
<head>
	<title>Add Customer Details</title>
</head>
<body bgcolor="#33FFDC">
	<center>
		<form method="post" action="postcustomer_add.php" style="font-size: 40px; font-family: sans-serif;">
			<h3>Customer Details</h3>
			<input type="text" required placeholder="Enter Name" name="cust_Name" style="font-size: 30px; font-family: sans-serif; background-color: yellow" ><br><br>
			<input style="font-size: 30px; font-family: sans-serif; background-color: yellow" type="Email" required placeholder="Enter Email Id" name="email"><br><br>
			<input style="font-size: 30px; font-family: sans-serif; background-color: yellow" type="integer" required placeholder="Enter Phone Number" name="phoneNo"><br><br>
			<input style="font-size: 30px; font-family: sans-serif; background-color: yellow" type="text" required placeholder="Enter gender" name="gender"><br><br>
			<button name="submit" style="font-size: 40px; font-family: sans-serif; background-color: yellow">Submit</button><br><br>
	</center>
</body>
</html>