<?php 
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['btn-update']) && isset($_POST['gender'])) {
			$old_id = $_POST['old_id'];
			$studentid = $_POST['studentid'];
			$course = $_POST['course'];
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];


			//UPDATE DATA FROM THE DATABASE
			if (count($errors->errorArray)!=0) {
				$message = $student->updateStudent($studentid, $course, $firstname, $middlename, $lastname, $gender, $old_id);
			}
		}
	}
?>