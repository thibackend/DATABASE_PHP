<?php
include "conn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Person List</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 8px;
			cursor: pointer;
			border-radius: 4px;
		}
		button a {
			color: white;
			text-decoration: none;
		}
		.action-links {
			display: flex;
			justify-content: space-between;
		}
		.action-links a {
			background-color: #4CAF50;
			color: white;
			padding: 4px 8px;
			border-radius: 4px;
			text-decoration: none;
			margin-right: 8px;
		}
	</style>
</head>
<body>
	<a href="add.php"><button> ADD</button></a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql="SELECT *FROM Person;";
			$result =mysqli_query($conn,$sql);

			while ($rows =mysqli_fetch_assoc($result)) {
			?> 
			<tr>
				<td><?php echo $rows["id"];?> </td>
				<td><?php echo $rows["name"];?></td>
				<td><?php echo $rows["gender"];?></td>
				<td><?php echo $rows["address"];?></td>
				<td class="action-links">
					<a href="update.php?id=<?php echo $rows["id"];?>">Update</a>
					<a href="delete.php?id=<?php echo $rows["id"];?>">Delete</a>
				</td>
			</tr>
			<?php } mysqli_close($conn);?> 
		</tbody>
	</table>
</body>
</html>
