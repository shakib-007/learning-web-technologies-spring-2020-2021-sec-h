<?php
	
	
	
	if(isset($_POST['submit']))
	{

		if(isset($_POST['genderM'])){
			echo "Male";
		}
		elseif(isset($_POST['genderF'])){
			echo "Female";
		}
		elseif(isset($_POST['genderO'])){
			echo "Other";
		}
	}
?>