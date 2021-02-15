<?php
	$c=0;
	for ($row=1; $row <= 3; $row++) { 
		for ($col=1; $col <=$row; $col++) { 
			echo "*";
		}
		echo "\n";
	}

	echo "\n";

	for ($row=3; $row >= 1; $row--) { 
		for ($col=1; $col <=$row; $col++) { 
			echo $col;
		}
		echo "\n";
	}

	echo "\n";
	

	for ($row=1; $row <= 3; $row++) { 
		for ($col=1; $col <=$row; $col++) { 
			$c++;
			echo chr($c+64);
		}
		echo "\n";
	}
?>