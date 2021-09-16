<?php
	require 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Category</title>
</head>
<body>
	<center>
		<h3>Categories</h3>
		<?php
			$query = "select *from category";
			$res = mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($res)) {
				echo "<h3>".$row['title']."</h3>";

				$q = "select *from activity where category=".$row['id'];
				$rs = mysqli_query($conn, $q);

				while($rw = mysqli_fetch_array($rs)) {
					echo $rw['title']."<br>";
				}
				if(mysqli_num_rows($rs)==0){
				echo "No activity added";
				}
			}				
		?>
	</center>
</body>
</html>