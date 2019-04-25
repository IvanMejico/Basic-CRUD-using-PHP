<?php 
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if (isset($_POST['btn-submit']) && isset($_POST['gender'])) {

			$studentid = $_POST['studentid'];
			$course = $_POST['course'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];


			//INSERT DATA TO DATABASE
			$query = "INSERT INTO students(studentid, course, firstname, middlename, lastname, gender) VALUES('$studentid', '$course', '$firstname', '$middlename', '$lastname', '$gender')";
			if ($con->query($query)) {
				echo "submitted";
			}
			// echo "<span>Course: $course </span><br>
			// 			<span>Student ID: $studentid </span><br>
			// 			<span>Firstname: $firstname </span><br>
			// 			<span>Middlename: $middlename </span><br>
			// 			<span>Lastname: $lastname </span><br>
			// 			<span>Gender: $gender </span><br>";

			// UPDATE table_name
			// SET column1 = value1, column2 = value2, ...
			// WHERE condition;

			
		}  else {
			echo "not submitted";	
		}	
	}
?>