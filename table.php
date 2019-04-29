<div class="right-div">
	<div class="table-div">
		<div>
			<h2>Students</h2>
		</div>
		<div class="form-div">
			<form class="search-form" method="GET">
				<input type="text" name="search">
				<button type="submit" name="search-btn" value="search">Search</button>
			</form>
			<a href="../ol_labactivity" class="refresh">Refresh</a>
		</div>
		<div class="table-inner-div">			
			<?php echo $message; ?>
			<table>
			<tr>
				<th>Student ID</th>
				<th>Course</th>
				<th>Firstname</th>
				<th>Middlename</th>
				<th>Lastname</th>
				<th>Gender</th>
				<th></th>
			</tr>
			<?php 
			//DISPAY TABLE
			if (isset($_GET['search-btn'])) {
				$key = $_GET['search'];
				$query = "SELECT * FROM students WHERE studentid LIKE '%".$key."%' OR firstname LIKE '%".
					$key."%' OR middlename LIKE '%".$key."%' OR lastname LIKE '%".$key."%'";
			} else {
				$query = "SELECT * FROM students";	
			}
			$student->getTable($query);
			?>
			</table>
		</div>
	</div>
</div>