<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Central Valley Civic Center</title>
</head>
<body>
	<h1>Central Valley Civic Center</h1>
	<h2>Summer Concert Season</h2>
	<?php
		
		$Concerts = array("Jummy Buffett", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
		$Concerts[] = "Bob Dylan";
		$Concerts[] = "Ryan Cabrera";
		$Concerts[2] = "Joe Cocker";
		$Concerts[3] = "Van Morrison";
		echo "<p>The following ", count($Concerts), " concerts are scheduled:</p><p>";
		echo "$Concerts[0]<br />";
		echo "$Concerts[1]<br />";
		echo "$Concerts[2]<br />";
		echo "$Concerts[3]<br />";
		echo "$Concerts[4]<br />";
		echo "$Concerts[5]<br />";
		echo "$Concerts[6]</p>";

	?>
</body>
</html>