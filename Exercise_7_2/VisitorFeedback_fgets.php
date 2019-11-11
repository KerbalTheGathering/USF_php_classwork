<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
	<title>Visitor Feedback</title>
</head>
<body>
	<?php
		$Dir = "comments";
		if (is_dir($Dir)) {
			$CommentFiles = scandir($Dir);
			foreach ($CommentFiles as $FileName) {
				if(($FileName != ".") && ($FileName != "..")) {
					echo "From <strong>$FileName</strong><br />";
					$fp = fopen($Dir . "/" . $FileName, "rb");
					if($fp === FALSE)
						echo "There was an error reading file \"" . $FileName . "\".<br />\n";
					else {
						echo "From <strong>$FileName</strong><br />";
						$From = fgets($fp);
						echo "From: " . htmlentities($From) . "<br />\n";
						$Email = fgets($fp);
						echo "Email Address: " . htmlentities($Email) . "<br />\n";
						$Date = fgets($fp);
						echo "Date: " . htmlentities($Date) . "<br />\n";
						echo "Comment:<br />\n";
						$Comment = "";
						while (!feof($fp)) {
							$Comment .= fgets($fp);
						}
						echo htmlentities($Comment) . "<br />\n";
						echo "<hr />\n";
					}
				}
			}
		}
	?>
	<h2>Visitor Feedback</h2>
	<hr />
</body>
</html>