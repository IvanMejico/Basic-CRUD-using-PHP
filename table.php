<?php include("connect.php")?>
<?php include("delete.php") ?>

<div class="table-div">
	<h2>Students</h2>
	<form>
		<input type="text" name="search">
		<input type="submit" name="search-btn" value="Search">
	</form>
	<table>
	<tr>
		<th>Student ID</th>
		<th>Course</th>
		<th>Firsname</th>
		<th>Middlename</th>
		<th>Lastname</th>
		<th>Gender</th>
		<th></th>
	</tr>
	<?php 

	$query = "SELECT * FROM students";
	$result = $con->query($query);
	// $con->close();
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["studentid"] . "</td>"
			 	. "<td>" . $row["course"] . "</td>"
			 	. "<td>" . $row["firstname"] . "</td>"
			 	. "<td>" . $row["middlename"] . "</td>"
			 	. "<td>" . $row["lastname"] . "</td>"
			 	. "<td>" . $row["gender"] . "</td>";
			echo "<td>";
			echo "<a href='index.php?delete=".$row['studentid']."'>Edit</a>";
			echo "<a href='index.php?edit=".$row['studentid']."'>Delete</a>";
			echo "</td>";
			echo "</tr>";
		}
	} else {
		echo "0 results";
	}
	
	?>
	</table>
</div>