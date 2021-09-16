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
		<form method="post" action="postcityadd.php">
			<?php
				if(isset($_GET['message'])){
					echo $_GET['message']."<br>";
				}
			?>
			<input type="text" placeholder="Enter City Name" name="city"><br><br>
			<button>Add City</button>
		</form>
	</center>
</body>
</html>