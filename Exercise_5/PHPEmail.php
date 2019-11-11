<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>E-Mail Validator</title>
</head>
<body>
	<?php
		$EmailAddressees = array(
			"john.smith@php.test",
			"mary.smith.mail.php.example",
			"john.jones@php.invalid",
			"alan.smithee@test",
			"jsmith456@example.com",
			"jsmith456@test",
			"mjones@example",
			"mjones@example.net",
			"jane.a.doe@example.org"
		);

		function validateAddress($Address){
			if(strpos($Address, '@') !== FALSE &&
				strpos($Address,
				'.') !== FALSE)
					return TRUE;
			else
				return FALSE;
		}

		foreach ($EmailAddressees as $Address) {
			if (validateAddress($Address) == FALSE)
				echo "<p>The e-mail address <em>$Address</em>
						does not appear to be valid.</p>\n";
		}
	?>
</body>
</html>