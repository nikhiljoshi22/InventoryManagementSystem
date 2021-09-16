<!DOCTYPE html>
<html>
<head>
	<title>Add product Details</title>
</head>
<body bgcolor="#33FFDC">
	<center>
		<form method="post" action="postproducts_add.php" style="font-size: 40px; font-family: sans-serif;">
			<h3 >Product Details</h3>
			<input style="font-size: 30px; font-family: sans-serif; background-color: yellow"  type="text" required placeholder="Enter name of product" name="prod_Name"><br><br>
			<input style="font-size: 30px; font-family: sans-serif; background-color: yellow"  type="number" required placeholder="Enter Quantity" name="quantity"><br><br>
			<input style="font-size: 30px; font-family: sans-serif; background-color: yellow"  type="number" required placeholder="Enter minimum quantity" name="qua_low_lim"><br><br>
			<input style="font-size: 30px; font-family: sans-serif; background-color: yellow"  type="number" required placeholder="Enter price of product" name="price"><br><br>
			<button style="font-size: 30px; font-family: sans-serif; background-color: yellow"  name="submit">Submit</button>
	</center>
</body>
</html>