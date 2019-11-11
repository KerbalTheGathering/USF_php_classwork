<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Arithmetic Examples</title>
</head>
<body>
	<?php
		$Number = 100;
		$Result = 0;
		$Result = $Number + 50;
		echo '<p>$Result after addition = ', $Result, "<br />";
		$Result = $Number / 4;
		echo '$Result after division = ', $Result, "<br />";
		$Result = $Number - 25;
		echo '$Result after division = ', $Result, "<br />";
		$Result = $Number * 2;
		echo '$Result after multiplication = ', $Result, "<br />";
		$Result = ++$Number;
		echo '$Result after increment = ', $Result, "</p>";
	?>
</body>
</html>