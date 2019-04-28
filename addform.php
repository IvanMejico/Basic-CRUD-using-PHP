<?php 
	//perhaps handle errors later
	include("handlers/errors.php");
	
?>
		<div class="input-div">
			<div class="main-panel">
				<h1>Add Student</h1>
				<form method="POST" action="index.php">
					<select name="course" target="self">
						<option value="bscpe">BSCpE</option>
						<option value="bsce">BSCE</option>
						<option value="bsme">BSME</option>
						<option value="bsme">BSEE</option>
						<option value="bsece">BSECE</option>
					</select>

					<p>
						<span class="errormessage"><?php echo $error['studentid'] ?></span>
						<input type="text" name="studentid" placeholder="Student ID" >
					</p>
					<p>
						<span class="errormessage"><?php echo $error['firstname'] ?></span>
						<input type="text" name="firstname" placeholder="First Name" >
					</p>
					<p>
						<span class="errormessage"><?php echo $error['middlename'] ?></span>
						<input type="text" name="middlename" placeholder="Middle Name" >
					</p>
					<p>
						<span class="errormessage"><?php echo $error['lastname'] ?></span>
						<input type="text" name="lastname" placeholder="Last Name" >
					</p>

					<p>
					<span class="errormessage"><?php echo $error['gender'] ?></span>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
					<input type="radio" name="gender" value="other">Other
					</p>
					<p><input type="submit" name="btn-submit" value="Submit"></p>
				</form>
			</div>
			<?php include("footer.php")?>
		</div>

<?php include("handlers/submit.php");?>