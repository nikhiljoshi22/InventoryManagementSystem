<?php
	require 'connection.php';
	$query = "select *from category inner join activity on category.id = activity.category";
	$res = mysqli_query($conn, $query);
?>
<div style="margin: auto; width: 500px; font-size: 22px;">
<?php
	while($row = mysqli_fetch_array($res)) {
		echo $row[1]."-".$row[3]."<br>";
	}
?>
</div>