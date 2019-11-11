<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Scholarship Form</title>
</head>
<body>
	<?php
		function redisplayForm($firstName, $lastName){
			?>
			<h2 style="text-align: center">Scholarship Form</h2>
			<form name="cholarship" action="process_Scholarship.php" method="post">
				<p>First Name: <input type="text" name="fName" value="<?php echo $firstName; ?>" /></p>
				<p>Last Name: <input type="text" name="lName" value="<?php echo $lastName; ?>" /></p>
				<p><input type="reset" value="Clear Form" />&nbsp;&nbsp;<input type="submit" name="Submit" value="Send Form" /></p>
			</form>
			<?php
		}

		function displayRequired($fieldName){
			echo "The field \"$fieldName\" is required.<br />\n";
		}

		function validateInput($data, $fieldName){
			global $errorCount;
			if (empty($data)){
				displayRequired($fieldName);
				++$errorCount;
				$retval = "";
			} else { //Only clean up the input if it isn't empty
				$retval = trim($data);
				$retval = stripslashes($retval);
			}
			return($retval);
		}

		$errorCount = 0;
		$firstName = validateInput($_POST['fName'], "First name");
		$lastName = validateInput($_POST['lName'], "Last name");
		if ($errorCount>0){
			echo "Please re-enter the information below.<br />\n";
			redisplayForm($firstName, $lastName);
		}
		else{ //Send an email
			$To = "gbloome@mail.usf.edu";
			$Subject = "Scholarship Form Results";
			$Message = "Student Name: " . $firstName . " " . $lastName;
			$result = mail($To, $Subject, $Message);
			if($result)
				$resultMsg = "Your message was successfully sent.";
			else
				$resultMsg = "There was a problem sending your message.";
			?>
			<h2 style="text-align: center">Scholarship Form</h2>
			<p style="line-height: 200%">Thank you for filling out the scholarship form<?php
				if(!empty($firstName))
					echo ", $firstName"
				?>. <?php echo $resultMsg; ?></p>
			<?php
		}
	?>
</body>
</html>