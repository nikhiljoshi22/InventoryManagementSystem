<?php

require 'connection.php';

session_start();
if(isset($_POST['submit']))
{
	$prod_Name = $_POST['prod_Name'];
	$quantity = $_POST['quantity'];
	$qua_low_lim = $_POST['qua_low_lim'];
	$price = $_POST['price'];

	$insert_query = "INSERT INTO products VALUES ('','$prod_Name','$quantity','$qua_low_lim','$price')";

	if (mysqli_query($conn, $insert_query)) {
    	mysqli_close($conn);
    	header('Location: products_disp.php'); //If products_disp.php is your main page where you list your all records
    	exit;
	} else {
    echo "Error adding record";
	}
}