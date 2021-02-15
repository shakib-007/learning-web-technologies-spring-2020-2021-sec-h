<?php
	$firstNum=34;
	$secondNum=87;
	$thirdNum=23;

	if ($firstNum>$secondNum && $firstNum>$thirdNum) {
		echo "Largest number is : ".$firstNum;
	}
	elseif ($secondNum>$firstNum && $secondNum>$thirdNum) {
		echo "Largest number is : ".$secondNum;
	}
	elseif ($thirdNum>$firstNum && $thirdNum>$secondNum) {
		echo "Largest number is : ".$thirdNum;
	}

?>