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
					echo "<pre>\n";
					$Comment = file_get_contents($Dir . "/" . $FileName);
					echo $Comment;
					echo "</pre>\n";
					echo "<hr />\n";
				}
			}
		}
	?>
	<h2>Visitor Feedback</h2>
	<hr />
</body>
</html>