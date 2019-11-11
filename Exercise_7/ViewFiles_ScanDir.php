<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Files</title>
</head>
<body>
	<?php
		$Dir = "files";
		$DirEntries = scandir($Dir);
		foreach ($DirEntries as $Entry){
			if ((strcmp($Entry, '.') != 0) && (strcmp($Entry, '..') != 0))
				echo "<a href=\"files/" . $Entry . "\">" . $Entry . "</a><br />\n";
		}
	?>
</body>
</html>