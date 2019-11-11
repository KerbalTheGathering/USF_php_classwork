<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Books and Authors</title>
</head>
<body>
	<?php
		$Books = array("The Adventures of Huckleberry Finn",
					"Nineteen Eighty-Four",
					"Alice's Adventures in Wonderland",
					"The Cat in the Hat");
		$Authors = array("Mark Twain",
						"George Orwell",
						"Lewis Carroll",
						"Dr. Suess");
		$RealNames = array("Samuel Clemens", 
						"Eric Blair",
						"Charles Dodson",
						"Theodor Geisel");
		for($i = 0; $i < count($Books); ++$i)
			echo "<p>The Real name of {$Authors[$i]}, ".
				"the author of \"{$Books[$i]}\", ".
				"is {$RealNames[$i]}.</p>";
	?>
</body>
</html>