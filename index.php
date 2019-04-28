<?php include_once("connect.php") ?>
<?php include("classes/Student.php")?>

<?php 
$student = new Student($con); 
$message = "";
?>

<?include("handlers/errors.php");?>
<?include("handlers/submit.php");?>
<?include("handlers/update.php");?>
<?include("handlers/delete.php");?>



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