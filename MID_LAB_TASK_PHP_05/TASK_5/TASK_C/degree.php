<!DOCTYPE html>
<html>
<head>
	<title>degree</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>DEGREE</legend>
						
							<input type="checkbox" name="ssc" <?php if(isset($_POST["ssc"])){echo "checked";}?>> SSC
							<input type="checkbox" name="hsc" <?php if(isset($_POST["hsc"])){echo "checked";}?>> HSC
							<input type="checkbox" name="bsc" <?php if(isset($_POST["bsc"])){echo "checked";}?>> BSc 
						    <input type="checkbox" name="msc" <?php if(isset($_POST["msc"])){echo "checked";}?>> MSc 
						<br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>