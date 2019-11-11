<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Two Functions</title>
</head>
<body>
	<?php
		function displayMessage($FirstMessage)	{
			echo "<p>$FirstMessage</p>";
		}

		function returnMessage()	{
			return "<p>This message was returned from a function.</p>";
		}

		displayMessage("This message was displayed from a function.");
		$ReturnValue = returnMessage();
		echo $ReturnValue;
	?>
</body>
</html>