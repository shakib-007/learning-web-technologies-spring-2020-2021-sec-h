<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table>
			<tr>
			<td>Name:</td>
			<td><input type="text" name="myname" value="">  </td>
			</tr>
			<tr>
			<td>Userame:</td> 		 
			<td><input type="text" name="myname" value="">  </td>
		</tr>
		<tr>
			<td>Password:</td>     
			<td><input type="password" name="password" value=""> </td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name="password" value=""> </td>
		</tr>
</table>
			<fieldset >
			<legend>Gender</legend>
						<input type="radio" name="genderM"> Male
						<input type="radio" name="genderF"> Female
						<input type="radio" name="genderO"> Other
						
			
		   </fieldset>

		   <fieldset >
			<legend>Date Of Birth</legend>
					<table>
						
						<tr>
							<td><input type="text" name="dd" value="" placeholder=""/>/</td>
							<td><input type="text" name="mm" value="" placeholder=""/>/</td>
							<td><input type="text" name="yyy" value="" placeholder=""/></td>
							<td>(dd/mm/yyy)</td>
						</tr>
					</table>
			
		</fieldset>
			<br>
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
		</fieldset>
	</form>
</body>
</html>