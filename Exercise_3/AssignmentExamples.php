<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Assignment Examples</title>
</head>
<body>
	<?php
		$ChangingVar = 100;
		$ChangingVar += 50;
		echo "<p>";
		echo "Variable after addition assignment = $ChangingVar<br />";
		$ChangingVar -= 30;
		echo "Variable after subtraction assignment = $ChangingVar<br />";
		$ChangingVar /= 3;
		echo "Variable after division assignment = $ChangingVar<br />";
		$ChangingVar *= 8;
		echo "Variable after multiplication assignment = $ChangingVar<br />";
		$ChangingVar %= 300;
		echo "Variable after modulus assignment = $ChangingVar</p>";
	?>
</body>
</html>