<?php
	require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Activity</title>
</head>
<body>
	<center>
		<form method="post" action="postactivity.php">
			<select name="category">
				<?php
					$query = "select *from category";
					$res = mysqli_query($conn, $query);
					while($row = mysqli_fetch_array($res)) {
				?>
				
						<option value="<?php echo $row['id']; ?>">
							<?php echo $row['title']; ?>
						</option>
				<?php		
					}
				?>
			</select>
			<br><br>
			<input type="text" required placeholder="Enter Activity" name="activity"><br><br>
			<button>Submit Activity</button>
	</center>
</body>
</html>