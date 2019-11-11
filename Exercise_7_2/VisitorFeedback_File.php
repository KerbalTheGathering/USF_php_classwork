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
					$Comment = file($Dir . "/" . $FileName);
					echo "From: " . htmlentities($Comment[0]) . "<br />\n";
					echo "Email Address: " . htmlentities($Comment[1]) . "<br />\n";
					echo "Date: " . htmlentities($Comment[2]) . "<br />\n";
					$CommentLines = count($Comment);
					echo "Comment:<br />\n";
					for ($i = 3; $i < $CommentLines; ++$i){
						echo htmlentities($Comment[$i]) . "<br />\n";
					}
					echo "<hr />\n";
				}
			}
		}
	?>
	<h2>Visitor Feedback</h2>
	<hr />
</body>
</html>