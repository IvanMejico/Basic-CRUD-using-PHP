
<?php
$con= new mysqli("localhost","root","","ol_act");
// Check connection
if ($con->connect_error){
 	die("Connection failed: " . $con->connect_error);
}

?>