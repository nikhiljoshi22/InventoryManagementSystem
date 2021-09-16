<?php

require 'connection.php';

session_start();
if(isset($_POST['submit']))
{
	$name = $_POST['cust_Name'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
	$gender = $_POST['gender'];


	$insert_query = "INSERT INTO customer VALUES ('','$name','$email','$phoneNo','$gender')";

	if (mysqli_query($conn, $insert_query)) {
    	mysqli_close($conn);
    	header('Location: customer_disp.php'); //If customer_disp.php is your main page where you list your all records
    	exit;
	} else {
    echo "Error adding record";
	}
}

?>