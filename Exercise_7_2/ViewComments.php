<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Files</title>
</head>
<body>
	<?php
		$Dir = "comments";
		$DirEntries = scandir($Dir);
		echo "<table border='1' width='100%' >\n";
		echo "<tr><th colspan='4'>Directory listing for <strong>" . htmlentities($Dir). "</strong></th></tr>\n";
		echo "<tr>";
		echo "<th><strong><em>Name</em></strong></th>";
		echo "<th><strong><em>Owner ID</em></strong></th>";
		echo "<th><strong><em>Permissions</em></strong></th>";
		echo "<th><strong><em>Size</em></strong></th>";
		
		foreach ($DirEntries as $Entry){
			if ((strcmp($Entry, '.') != 0) && (strcmp($Entry, '..') != 0)){
				$FullEntryName=$Dir . "/" . $Entry;
				echo "<tr><td>";
				if (is_file($FullEntryName))
					echo "<a href=\"FileDownloader.php?filename=$Entry\">" . htmlentities($Entry). "</a>\n";
				else
					echo htmlentities($Entry);
				echo "</td><td align='center'>" . fileowner($FullEntryName);
				if(is_file($FullEntryName)) {
					$perms = fileperms($FullEntryName);
					$perms = decoct($perms % 01000);
					echo "</td><td align='center'>0$perms";
					echo "</td><td align='right'>" . number_format(filesize($FullEntryName), 0) . " bytes";
				}
				else
					echo "</td><td colspan='2 align='center'>&lt;DIR&gt;";
				echo "</td></tr>\n";
			}
		}
		echo "</table>\n";
	?>
</body>
</html>