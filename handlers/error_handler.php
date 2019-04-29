<?php
	$errors = new Errors();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (empty($_POST['studentid'])) {
			array_push($errors->errorArray, Errors::$IDERROR);
		}
		if (empty($_POST['firstname'])) {
			array_push($errors->errorArray, Errors::$FIRSTNAMEERROR);
		}
		if (empty($_POST['middlename'])) {
			array_push($errors->errorArray, Errors::$MIDDLENAMEERROR);
		}
		if (empty($_POST['lastname'])) {
			array_push($errors->errorArray, Errors::$LASTNAMEERROR);
		}
	}
?>