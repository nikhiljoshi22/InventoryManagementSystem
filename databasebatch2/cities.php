<?php
	require 'connection.php';
	$query="select *from city";
	$res=mysqli_query($conn, $query);
?>
<table style="width: 100%;" border="1" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<th>City</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($row=mysqli_fetch_array($res)){
		?>
			<tr>
				<td><?php echo $row['title']; ?></td>
				<td><a href="editcity.php?id=<?php echo $row['id']; ?>">Edit</a></td>
				<td><a href="deletecity.php?id=<?php echo $row['id']; ?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</tbody>
</table>