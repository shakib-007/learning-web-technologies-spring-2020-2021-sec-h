<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Room</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <h1 align="left">Tourism Management System</h1>
                <a href="index.html">Home</a>|
                <a href="roomdetails.php">Back</a>|
                <a href="../controller/logout.php">Logout</a>
            </td>
        </tr>
        
        <tr height="500px">
            <td align="center">
             <form method="POST" action="confirm.php">
                <fieldset style="width: 50%">
                    <legend>Book Room</legend>
                    <table>
                        <tr>
                            <td>Customer Name:</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><input type="text" name="number"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><textarea rows="5" cols="15"></textarea></td>
                        </tr>
                        <tr>
                            <td>Room Id:</td>
                            <td><input type="text" name="id"></td>
                        </tr>
                    <tr>
                        <td>Choose Room Type:</td>
                        <td>
                        <select name="choose">
                            <option value="Single Bed">Single Bed</option>
                            <option value="Double Bed">Double Bed</option>
                            
                        </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Confirm">
                            <a href="checkavailability.php"> Check Room Availbility</a>
                        </td>
                    </tr>
                     </table>
                </fieldset>
           </form>
            </td>

        </tr>
        <tr height = "30px">
            <td colspan="2">
                <center> Copyright@2017 </center>
            </td>
        </tr>
    </table>
</body>
</html>
<?php
	}else{
		echo "you didnot register";
		header('location: managerLogin.html');
	}
?>