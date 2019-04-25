<?php include_once("connect.php") ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lab Activity</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<?php include("header.php")?>
		<?php 
			if (isset($_GET['edit'])) {
				include("editform.php");
			} else {
				include("addform.php");
			}
		?>
		<?php include("table.php") ?>
		<?php $con->close(); ?>
	</body>
</html>