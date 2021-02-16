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

<!DOCTYPE html>
<html>
<head>
	<title>gender</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset >
			<legend>Gender</legend>
						<input type="radio" name="genderM"> Male
						<input type="radio" name="genderF"> Female
						<input type="radio" name="genderO"> Other
						<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
		
	</form>
</body>
</html>