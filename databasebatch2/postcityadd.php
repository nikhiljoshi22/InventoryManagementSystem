<?php
	require 'connection.php';

	$city=$_POST['city'];

	$query="insert into city(title) values('$city')";
	$res=mysqli_query($conn, $query);
	$message="";
	if($res){
		$message="City Added Successfully";
	}else{
		$message="Some error Occurred";
	}



	header("Location: index.php?message=$message");
?>