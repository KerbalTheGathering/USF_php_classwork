<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Presidential Terms</title>
</head>
<body>
	<?php
		$Presidents = array(
			"George Washington",
			"John Adams",
			"Thoms Jefferson",
			"James Madison",
			"James Monroe");
		$YearsInOffice = array(
			"1978 to 1797",
			"1797 to 1801",
			"1801 to 1809",
			"1809 to 1817",
			"1817 to 1825");
		$OutputTemplate = "<p>President [NAME] served from [TERM]</p>\n";

		foreach ($Presidents as $Sequence => $Name){
			$TempString = str_replace("[NAME]", $Name, $OutputTemplate);
			$OutputString = str_replace("[TERM]", $YearsInOffice[$Sequence], $TempString);
			echo $OutputString;
		}
	?>
</body>
</html>