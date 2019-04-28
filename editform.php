<?php 
	//perhaps handle errors later
	$studentid = $_GET['edit'];
	$query = "SELECT * FROM students WHERE studentid='$studentid'";
	$result = $con->query($query);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	} else {
		echo "not okay";
	}

	$bscpe='';
	$bsce='';
	$bsme='';
	$bsece='';
	$bsee='';
	$male='';
	$female='';
	$other='';
	switch ($row['course']) {
		case 'bscpe':
			$bscpe="selected";
			break;
		case 'bsce':
			$bsce="selected";
			break;
		case 'bsme':
			$bsme="selected";
			break;
		case 'bsece':
			$bsece="selected";
			break;
		case 'bsee':
			$bsee="selected";
			break;
		default:
			break;
	}

	switch ($row['gender']) {
		case 'male':
			$male="checked='checked'";
			break;
		case 'female':
			$female="checked='checked'";
			break;
		case 'other':
			$other="checked='checked'";
		
		default:
			break;
	}
?>
		<div class="input-div">
			<div class="main-panel">
				<h1>Edit Student</h1>
				<form method="POST" action="index.php">
					<select name="course" target="self">
						<option value="bscpe" <?php echo $bscpe ?>>BSCpE</option>
						<option value="bsce" <?php echo $bsce ?>>BSCE</option>
						<option value="bsme" <?php echo $bsme ?>>BSME</option>
						<option value="bsee" <?php echo $bsee ?>>BSEE</option>
						<option value="bsece" <?php echo $bsece ?>>BSECE</option>
					</select>

					<p>
						<span class="errormessage"><?php echo $error['studentid'] ?></span>
						<input type="text" name="studentid" placeholder="Student ID" value=<?php echo $row['studentid'] ?>>
					</p>
					<p>
						<span class="errormessage"><?php echo $error['firstname'] ?></span>
						<input type="text" name="firstname" placeholder="First Name" value=<?php echo $row['firstname']?>>
					</p>
					<p>
						<span class="errormessage"><?php echo $error['middlename'] ?></span>
						<input type="text" name="middlename" placeholder="Middle Name" value=<?php echo $row['middlename']?>>
					</p>
					<p>
						<span class="errormessage"><?php echo $error['lastname'] ?></span>
						<input type="text" name="lastname" placeholder="Last Name" value=<?php echo $row['lastname']?>>
					</p>

					<p>
					<span class="errormessage"><?php echo $error['gender'] ?></span>
					<input type="radio" name="gender" value="male" <?php echo $male ?> >Male
					<input type="radio" name="gender" value="female" <?php echo $female ?> >Female
					<input type="radio" name="gender" value="other" <?php echo $other ?> >Other
					</p>
					<p class="p-submit"><input type="submit" name="btn-submit" value="Submit"></p>
				</form>
				<a href="../ol_labactivity" id="cancel">Cancel</a>

				<div>
					
				</div>
			</div>
			<?php include('footer.php') ?>
		</div>

<?php include("handlers/update.php");?>