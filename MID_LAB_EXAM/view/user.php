<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
</head>
<body>
	<fieldset>
		<?php
			$myfile = fopen('user.json', 'r');
			$data = fread($myfile, filesize('user.json'));
			$userinfo = json_decode($data, true);
		?>

		<p>Welcome</p>
		<?php  echo $userinfo['user']; ?>
		<a href="profile.php">Profile</a>
		<a href="changepasword.php">Change Password</a>
		
		<a href="logout.php">Logout</a>
	</fieldset>
</body>
</html>