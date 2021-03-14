<!DOCTYPE html>
<html>
<head>
	<title>Admins Page</title>
</head>
<body>
	<fieldset>
		<?php
		$myfile = fopen('../model/manager.json', 'r');
		$data = fread($myfile, filesize('../model/manager.json'));
		$userinfo = json_decode($data, true);
		?>

		<p>Welcome</p>
		<?php  echo $userinfo['user']; ?>
		<a href="profile.php">Profile</a>
		<a href="changepasword.php">Change Password</a>
		<a href="viewuser.php">View User</a>
		<a href="logout.php">Logout</a>
	</fieldset>
</body>
</html>