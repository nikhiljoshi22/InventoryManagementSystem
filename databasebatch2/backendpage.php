<center>
<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
	
		$num = $_POST['num'];
		$i=1;
		do {

			echo "$num X $i = " .($num*$i);
			echo "<br>";
			$i++;
		}while($i<=10);
	}	
?>
</center>