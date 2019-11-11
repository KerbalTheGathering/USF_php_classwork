<!DOCTYPE html>
<html>
<head>
	<title>What do you know about the Chinese zodiac signs?</title>
</head>
<body>
	<h2>What do you know about the Chinese zodic signs?</h2>
	<?php
		echo "<label for='name'>Your Name:</label>";
		echo "<input type='text' name='name' id='name'<br />\n";
		echo "<label for='emailAddress'>Your Email Address</label>";
		echo "<input type='email' name='emailAddress' id='emailAddress'><br />\n";
		echo "<p>Your name and email address are required</p><br /><br />\n\n";
		echo "<p>You must answer all 10 questions before the quiz will be graded.</p>\n";
		echo "1) The Chinese zodiac associates a sign with each month.<br />";
		echo "<input type='radio' name='qOne' value=\"True\">";
		echo "<input type='radio' name='qOne' value=\"False\"><br />";
	?>
</body>
</html>