<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Files</title>
</head>
<body>
	<?php
		$Dir = "files";
		$DirOpen = opendir($Dir);
		while ($CurFile = readdir($DirOpen)) {
			if ((strcmp($CurFile, '.') != 0) && strcmp($CurFile, '..') != 0)
				echo "<a href=\"files/" . $CurFile . "\">" . $CurFile . "</a><br />\n";
		}
		closedir($DirOpen);
	?>
</body>
</html>