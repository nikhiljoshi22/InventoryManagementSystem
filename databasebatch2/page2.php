<?php
	if(isset($_GET['id'])){
		require 'connection.php';

		$query="delete from category where ID=".$_GET['id'];
		mysqli_query($conn, $query);
		header("Location: page1.php?msg=Category removed successfully");
	}
?>