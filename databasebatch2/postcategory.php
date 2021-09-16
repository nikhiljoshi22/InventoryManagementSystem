<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$category = $_POST['category'];


		$hostname = "localhost";
		$username = "root";
		$password = "";
		$database = "databasetutorialb2";


		$conn = mysqli_connect($hostname, $username, $password, $database);

		$query = "insert into category(title) values ('$category')";

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