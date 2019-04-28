<?php 
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if (isset($_POST['btn-submit']) && isset($_POST['gender'])) {

			$studentid = $_POST['studentid'];
			$course = $_POST['course'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];


			//UPDATE DATA FROM THE DATABASE
			$message = $student->updateStudent($studentid, $course, $firstname, $middlename, $lastname, $gender);
		}  else {
			echo "not submitted";	
		}	
	}
?>