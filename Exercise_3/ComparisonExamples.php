<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Comparison Examples</title>
</head>
<body>
	<?php
		$Value1 = "first text string";
		$Value2 = "second text string";
		$ReturnValue = ($Value1 == $Value2 ? "true" : "false");
		echo '<p>$Value1 equal to $Value2: ', $ReturnValue, "<br />";
		$Value1 = 50;
		$Value2 = 75;
		$ReturnValue = ($Value1 == $Value2 ? "true" : "false");
		echo '$Value1 equal to $Value2: ', $ReturnValue, "<br />";
		$ReturnValue = ($Value1 != $Value2 ? "true" : "false");
		echo '$Value1 not equal to $Value2: ', $ReturnValue, "<br />";
		$ReturnValue = ($Value1 <> $Value2 ? "true" : "false");
		echo '$Value1 not equal to $Value2: ', $ReturnValue, "<br />";
		$ReturnValue = ($Value1 > $Value2 ? "true" : "false");
		echo '$Value1 greater than $Value2: ', $ReturnValue, "<br />";
		$ReturnValue = ($Value1 < $Value2 ? "true" : "false");
		echo '$Value1 less than $Value2: ', $ReturnValue, "<br />";
		$ReturnValue = ($Value1 >= $Value2 ? "true" : "false");
		echo '$Value1 greater then or equal to $Value2: ', $ReturnValue, "<br />";
		$ReturnValue = ($Value1 <= $Value2 ? "true" : "false");
		echo '$Value1 sless than or equal to $Value2: ', $ReturnValue, "<br />";
		$Value1 = 25;
		$Value2 = 25;
		$ReturnValue = ($Value1 === $Value2 ? "true" : "false");
		echo '$Value1 equal to $Value2 AND the same data type: ', $ReturnValue, "<br />";
		$ReturnValue = ($Value1 !== $Value2 ? "true" : "false");
		echo '$Value1 not equal to $Value2 AND not the same data type: ', $ReturnValue, "</p>";
	?>
</body>
</html>