<?php
	
	
	
	if(isset($_POST['submit']))
	{

		if(isset($_POST['ssc'])){
			echo "SSC";
		}
		elseif(isset($_POST['hsc'])){
			echo "HSC";
		}
		elseif(isset($_POST['bsc'])){
			echo "BSc";
		}
		elseif(isset($_POST['msc'])){
			echo "MSc";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>degree</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DEGREE</legend>
						
							<input type="checkbox" name="ssc"> SSC
							<input type="checkbox" name="hsc"> HSC
							<input type="checkbox" name="bsc"> BSc 
						    <input type="checkbox" name="msc"> MSc 
						<br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>