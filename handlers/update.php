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
			$query = "UPDATE students SET studentid='$studentid', course='$course', firstname='$firstname', middlename='$middlename', lastname='$lastname', gender='$gender' WHERE studentid=$studentid";
			if ($con->query($query)) {
				echo "submitted";
			}			
		}  else {
			echo "not submitted";	
		}	
	}
?>