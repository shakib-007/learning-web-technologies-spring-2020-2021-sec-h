<!DOCTYPE html>
<html>
<head>  
    <title>gender</title>
</head>
<body>
    <fieldset>
        <legend>GENDER</legend>
        <form method="POST" action="#">
            <input type="radio" name="genderM" value="Male" <?php if(isset($_POST["genderM"])){if($_POST["genderM"] == "Male")echo "checked";}?>>Male
            <input type="radio" name="genderF" value="Female" <?php if(isset($_POST["genderF"])){if($_POST["genderF"] == "Female")echo "checked";}?>>Female
            <input type="radio" name="genderO" value="Other" <?php if(isset($_POST["genderO"])){if($_POST["genderO"] == "Other")echo "checked";}?>>Other
            <br>
            <input type="submit" name="submit" value="Submit"><br>
        </form>
    </fieldset>
</body>
</html>