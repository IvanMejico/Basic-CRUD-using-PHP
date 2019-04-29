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
			$message = $student->addStudent($studentid, $course, $firstname, $middlename, $lastname, $gender);
		}
	}
?>