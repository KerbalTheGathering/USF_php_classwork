<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Dice Roll If</title>
</head>
<body>
	<?php
		$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
		$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

		function CheckForDoubles($Die1, $Die2) {
			global $FaceNamesSingular;
			global $FaceNamesPlural;
			$ReturnValue = false;
			if($Die1 == $Die2) {// Doubles
				echo "The roll was double ",
						$FaceNamesPlural[$Die1 - 1], ".<br />";
				$ReturnValue = true;
			}
			else {// Not Doubles
				echo "The roll was a ",
						$FaceNamesSingular[$Die1 - 1], " and a ",
						$FaceNamesSingular[$Die2 - 1], ".<br />";
				$ReturnValue = false;
			}
			return $ReturnValue;
		}

		function DisplayScoreText($Score, $Doubles) {
			if($Doubles) { //Doubles were rolled
				if ($Score == 2) //Double ones
					echo "You rolled snake eyes!<br />";
				if ($Score == 12)//Double sixes
					echo "You rolled boxcars!<br />";
			}
			else { //Doubles were not rolled
				if ($Score == 3)
					echo "You rolled a loose deuce!<br />";
				if ($Score == 5)
					echo "You rolled a fever five!<br />";
				if ($Score == 7)
					echo "You rolled a natural!<br />";
				if ($Score == 9)
					echo "You rolled a nina!<br />";
				if ($Score == 11)
					echo "You rolled a yo!<br />";
			}
			
		}

		$Dice = array();
		$Dice[0] = rand(1,6);
		$Dice[1] = rand(1,6);
		$Score = $Dice[0] + $Dice[1];
		echo "<p>";
		echo "The total score for the roll was $Score.<br />";
		$Doubles = CheckForDoubles($Dice[0], $Dice[1]);
		DisplayScoreText($Score, $Doubles);
		echo "</p>";
	?>
</body>
</html>