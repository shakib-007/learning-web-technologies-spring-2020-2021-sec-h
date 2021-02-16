<?php
		
	if(isset($_POST['submit']))
	{

		$email = $_POST['email'];
				
			echo $email;		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
			Name: <input type="email" name="email" value="">  <br>
			
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>