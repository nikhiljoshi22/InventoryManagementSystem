<?php
	require 'connection.php';

	$query = "update category set title = 'Hobbies' where id = 5";
	$res = mysqli_query($conn, $query);
	if($res) {
		echo "Data updated successfully";
	} else {
		echo "Some error occured";
	}
?>
