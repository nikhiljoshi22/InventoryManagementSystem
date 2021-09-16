<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		require 'connection.php';
		
		$category = $_POST['category'];
		$activity = $_POST['activity'];

		$query = "insert into activity(title, category) values ('$activity',$category)";

		$res = mysqli_query($conn, $query);

		echo "<center>";
		if($res) {
			echo "Data is added successfully";
		}else {
			echo "Some error occured";
		}
		echo "</center>";
	}	

?>