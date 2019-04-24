<?php
	if (isset($_GET['delete'])) {
		$studentid = $_GET['delete'];
		$query = "DELETE FROM students WHERE studentid='$studentid'";
		if($con->query($query)) {
			echo "$studentid  ";
			echo "deleted";
		} else {
			echo "$studentid  ";
			echo "not deleted";
		}
	}
?>