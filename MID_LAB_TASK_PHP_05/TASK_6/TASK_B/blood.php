<?php
    if(isset($_POST['submit']))
    {
        if($_POST['blood'] != "null")
        {           
            echo $_POST['blood'];
        }
        
    }
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>blood</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset >
			<legend>BLOOD GROUP</legend>
			
						<select name="blood">
							<option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="AB+">AB+</option>
						</select>
					<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>