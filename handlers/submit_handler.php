<?php 
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['btn-submit'])) {
			$studentid = $_POST['studentid'];
			$course = $_POST['course'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];

			//If there are errors then don't submit the form
			if (count($errors->errorArray)==0) {
				$message = $student->addStudent($studentid, $course, $firstname, $middlename, $lastname, $gender);
			}
		}
	}
?>