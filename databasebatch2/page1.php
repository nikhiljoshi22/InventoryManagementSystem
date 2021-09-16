<?php
	$query="select *from category";
	$res=mysqli_query($conn, $query);
?>
		<table>
			<thead>
				<tr>
					<th>Sr No.</th>
					<th>Title</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$counter=(($pg-1)*20);
				while($row=mysqli_fetch_array($res)){
					$counter++;
				?>
					<tr>
					<td><?php echo $counter; ?></td>
					<td><?php echo $row['TITLE']; ?></td>
					<td><a href="edit-category?id=<?php echo $row['ID']; ?>">Edit</a></td>
					<td><a href="deletepages/deletecategory?id=<?php echo $row['ID']; ?>">Delete</a></td>
					</tr>
			<?php
				}
			?>
			</tbody>
		</table>