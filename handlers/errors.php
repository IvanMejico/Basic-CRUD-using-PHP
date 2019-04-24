<?php
	$error['studentid'] = "";
	$error['firstname'] = "";
	$error['middlename'] = "";
	$error['lastname'] = "";
	$error['gender'] = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (empty($_POST['studentid'])) {
			$error['studentid'] = "ID required!";
		}
		if (empty($_POST['firstname'])) {
			$error['firstname'] = "Firstname Required";
		}
		if (empty($_POST['middlename'])) {
			$error['middlename'] = "Middlename Required";
		}
		if (empty($_POST['lastname'])) {
			$error['lastname'] = "Lastname Required";
		}
		if (empty($_POST['gender'])) {
			$error['gender'] = "Gender Required";
		}
	}
?>