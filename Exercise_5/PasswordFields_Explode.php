<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Password Fields</title>
</head>
<body>
	<?php
		$Record = "jdoe:8W4dS03a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash";
		$PasswordFields = array(
			"login name",
			"optional encrypted password",
			"numerical user ID",
			"numerical group ID",
			"user name or comment field",
			"user home directory",
			"optional user command interpreter");
		$FieldIndex = 0;
		$ExtraFields = 0;
		$Fields = explode(":", $Record);
		foreach ($Fields as $FieldIndex => $FieldValue){
			if ($FieldIndex < count($PasswordFields))
				echo "<p>The {$PasswordFields[$FieldIndex]} is <em>$FieldValue</em></p>\n";
			else {
				++$ExtraFields;
				echo "<p>Extra field # $ExtraFields is <em>$FieldValue</em></p>\n";
			}
		}
	?>
</body>
</html>