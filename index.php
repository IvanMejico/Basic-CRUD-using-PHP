<?php include_once("connect.php") ?>
<?php include("classes/Student.php")?>
<?php include("classes/Errors.php")?>

<?php 
$student = new Student($con); 
$message = "";
?>

<?include("handlers/error_handler.php");?>
<?include("handlers/delete_handler.php");?>
<?include("handlers/update_handler.php");?>
<?include("handlers/submit_handler.php");?>		



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