<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
	<title>Visitor Comments</title>
</head>
<body>
	<?php
		$Dir = "comments";
		if (is_dir($Dir)) {
			if (isset($_POST['save'])){
				if (empty($_POST['name']))
					$SaveString = "Unknown Visitor\n";
				else
					$SaveString .= stripslashes($_POST['name']) . "\n";
				$SaveString .= stripslashes($_POST['email']) . "\n";
				$SaveString .= date('r') . "\n";
				$SaveString .= stripslashes($_POST['comment']);
				$CurrentTime = microtime();
				$TimeArray = explode(" ", $CurrentTime);
				$TimeStamp = (float)$TimeArray[1] + (float)$TimeArray[0];
				/*File name is " Comment.seconds.microseconds.txt */
				$SaveFileName = "$Dir/Comment.$TimeStamp.txt";
				$fp = fopen($SaveFileName, "wb");
				if ($fp === FALSE){
					echo "There was an error creating \"" .
							htmlentities($SaveFileName) . "\".<br />\n";
				}
				else {
					if(flock($fp, LOCK_EX)){
						if (fwrite($fp, $SaveString)>0)
							echo "Successfully wrote to file \"" .
								htmlentities($SaveFileName) .
								"\".<br />\n";
						else
							echo "There was an error writing to file \"" .
								htmlentities($SaveFileName) .
								"\".<br />\n";
						flock($fp, LOCK_UN);
					}
					else {
						echo "There was an " .
								"error locking file \"" .
								htmlentities($SaveFileName) .
								"<br />\n";
					}
					fclose($fp);
				}
			}
		}
	?>

	<h2>Visitor Comments</h2>
	<form action="VisitorComments_flock.php" method="POST">
		Your name: <input type="text" name="name" /><br />
		Your email: <input type="text" name="email" /><br />
		<textarea name="comment" rows="6" cols="100"></textarea><br />
		<input type="submit" name="save" value="Submit your comment" /><br />
	</form>
</body>
</html>