<?php
	
	
	
	if(isset($_POST['submit']))
	{

		$name = $_POST['myname'];
		$password=$_POST['password'];
				
			if(count($name)>='2'&&count($password)>='8'){
				echo "success!!";
			}	
			else
			{
				echo "try again!!";
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>LOGIN</legend>
			Userame : <input type="text" name="myname" value="">  <br>
			Password: <input type="password" name="password" value=""> <br>
			<input type="checkbox" name="check"> Remember Me
			<br>
				<input type="submit" name="submit" value="Submit"> Forget Password?
		</fieldset>
	</form>
</body>
</html>