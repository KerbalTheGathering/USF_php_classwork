<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>E-Mail Validator</title>
</head>
<body>
	<?php
		$EmailAddressees = array(
			"john.smith@php.test",
			"mary.smith.mail.php.example",
			"john.jones@php.invalid",
			"alan.smithee@test",
			"jsmith456@example.com",
			"jsmith456@test",
			"mjones@example",
			"mjones@example.net",
			"jane.a.doe@example.org"
		);

		function validateAddress($Address){
			if(strpos($Address, '@') !== FALSE &&
				strpos($Address,
				'.') !== FALSE)
					return TRUE;
			else
				return FALSE;
		}

		function sortAddresses($Addresses){
			$SortedAddresses = array();
			$iLimit = count($Addresses)-1; /*Set the upper limit for the outer loop*/
			$jLimit = count($Addresses); /*Set the upper limit for the inner loop*/
			for($i = 0; $i<$iLimit; ++$i){
				$CurrentAddress = $Addresses[$i];
				for ($j = $i+1; $j<$jLimit; ++$j){
					if ($CurrentAddress > $Addresses[$j]){
						$TempVal = $Addresses[$j];
						$Addresses[$j] = $CurrentAddress;
						$CurrentAddress = $TempVal;
					}
				}
				$SortedAddresses[] = $CurrentAddress;
			}
			return($SortedAddresses);
		}

		$SortedAddresses = sortAddresses($EmailAddressees);
		$SortedAddressList = implode(", ", $SortedAddresses);
		echo "<p>Sorted Addresses: $SortedAddressList</p>\n";

		foreach ($SortedAddresses as $Address) {
			if (validateAddress($Address) == FALSE)
				echo "<p>The e-mail address <em>$Address</em>
						does not appear to be valid.</p>\n";
		}
	?>
</body>
</html>