<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Logical Examples</title>
</head>
<body>
	<?php
		$TrueValue = true;
		$FalseValue = false;
		$ReturnValue = ($TrueValue ? "true" : "false");
		echo "<p>$ReturnValue<br />";
		$ReturnValue = ($FalseValue ? "true" : "false");
		echo "$ReturnValue<br />";
		$ReturnValue = ($TrueValue || $FalseValue ? "true" : "false");
		echo "$ReturnValue<br />";
		$ReturnValue = ($TrueValue && $FalseValue ? "true" : "false");
		echo "$ReturnValue<br />";
		echo "</p>";
	?>
</body>
</html>