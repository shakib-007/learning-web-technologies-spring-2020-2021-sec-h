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
				<td align="center" colspan="3">users</td>

			</tr>
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>User Type</td>
				
			</tr>
			<tr>
				<td><?php echo $userinfo['id']  ?></td>
				<td><?php echo $userinfo['name']  ?></td>
				<td><?php echo $userinfo['option']  ?></td>
			</tr>
			<tr>
				<td><?php echo $userinfo['id']  ?></td>
				<td><?php echo $userinfo['name']  ?></td>
				<td><?php echo $userinfo['option']  ?></td>
				
			</tr>
			<tr>
				<td><?php echo $userinfo['id']  ?></td>
				<td><?php echo $userinfo['name']  ?></td>
				<td><?php echo $userinfo['option']  ?></td>
			</tr>
			<tr>
				<td colspan="3"> 
					<a href="admin.php">Go Home</a>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>