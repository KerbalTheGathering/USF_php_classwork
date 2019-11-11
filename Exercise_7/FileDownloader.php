<?php
		$Dir = "files";
		if (isset($_GET['filename'])) {
			$FileToGet = $dir . "/" . stripslashes($_Get['filename']);
			if (is_readable($FileToGet)){
				header("Content-Description: File Transter");
				header("Content-Type: application/force-download");
				header("Content-Disposition: attachment; filename=\"" . $GET['filename'] . "\"");
				header("Content-Transfer-Encoding: base 64");
				header("Content-Length: " . filesize($FileToGet));
				readfile($FileToGet);
				$ShowErrorPage = FALSE;
			}
			else {
				$ErrorMsg = "Cannot read \"$FileToGet\"";
				$ShowErrorPage = TRUE;
			}
		}
		else {
			$ErrorMsg = "No filename specified";
			$ShowErrorPage = TRUE;
		}
		if ($ShowErrorPage) {
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head>
	<title>File Download Error</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8959-1" />
</head>
<body>
	<p>There was an error downloading "<?php echo htmlentities($_GET['filename']); ?>"</p>
	<p><?php echo htmlentities($ErrorMsg); ?></p>
</body>
</html>

<?php
}
?>