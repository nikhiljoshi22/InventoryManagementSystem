<?php
	if(!isset($_GET['id'])){
		header("Location: index.php");
	}

	require 'connection.php';
	$query="select *from city where id=".$_GET['id'];
	$res=mysqli_query($conn, $query);
	$row=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add City</title>
	<style type="text/css">
		html,body{
			font-size: 24px;
		}
		input, button{
			font-size: 24px;
			height: 40px;
		}
	</style>
</head>
<body>
	<center>
		<form method="post" action="updatecity.php?id=<?php echo $_GET['id']; ?>">
			<?php
				if(isset($_GET['message'])){
					echo $_GET['message']."<br>";
				}
			?>
			<input type="text" value="<?php echo $row['title']; ?>" placeholder="Enter City Name" name="city"><br><br>
			<button>Add City</button>
		</form>
	</center>
</body>
</html>