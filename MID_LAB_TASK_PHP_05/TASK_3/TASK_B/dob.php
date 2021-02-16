<?php
	
	
	
	if(isset($_POST['submit']))
	{

		echo $_POST['dd']."/";
		echo $_POST['mm']."/";
		echo $_POST['yyy'];
				
					
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>dob</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset >
			<legend>Date Of Birth</legend>
					<table>
						<tr>
							<td>dd</td>
							<td>mm</td>
							<td>yyy</td>
						</tr>
						<tr>
							<td><input type="text" name="dd" value="" placeholder=""/>/</td>
							<td><input type="text" name="mm" value="" placeholder=""/>/</td>
							<td><input type="text" name="yyy" value="" placeholder=""/></td>
						</tr>
					</table>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>