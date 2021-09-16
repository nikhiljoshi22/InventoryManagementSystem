<?php
	require 'connection.php';

	$query = "delete from activity where category = 2";
	$res = mysqli_query($conn, $query);

	if($res) {
		echo "Data deleted successfully.";
	} else {
		echo "some error occured.";
	}
?>