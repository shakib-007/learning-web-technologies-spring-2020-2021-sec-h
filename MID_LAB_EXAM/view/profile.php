<!DOCTYPE html>
<html>
<head>
	<title>Admins Page</title>
</head>
<body>
	<fieldset>
		<?php
			$myfile = fopen('user.json', 'r');
			$data = fread($myfile, filesize('user.json'));
			$userinfo = json_decode($data, true);
		?>

		<table border="1">
			<tr>
				<td align="center" colspan="2">Profile</td>

			</tr>
			<tr>
				<td>Id</td>
				<td><?php echo $userinfo['id']  ?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $userinfo['name']  ?></td>
			</tr>
			<tr>
				<td>User Type</td>
				<td><?php echo $userinfo['option']  ?></td>
			</tr>
			<tr>
				<td colspan="2"> 
					<a href="admin.php">Go Home</a>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>