<?php
    $title= "Room Infrmation";
    include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room Information</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <h1 align="left">Tourism Management System</h1>
                <a href="index.html">Home</a>|
                
                <a href="../controller/logout.php">Logout</a> |
                <a href="managerDashboard.php">Back</a>
            </td>
        </tr>
        <tr>
        	<td><img src="../assests/single.jpg" width="250" height="250"></td>
        	<td><p>
        		<h3><b>Single Bed</b></h3><br>
        		This is for single person.<br>
        		Price per Night: 5000
        	</p>
        	</td>
        	
        </tr>
        <tr>
        	<td><img src="../assests/double.jpg" width="250" height="250"></td>
        	<td><p>
        		<h3><b>Double Bed</b></h3><br>
        		This is for 2 or 3 person.<br>
        		Price per Night: 7000
        	</p>
        	</td>
        	
        </tr>
        <tr height = "30px">
        	<td colspan="2" align="center">
        		<h3><a href="bookroom.php">Book Room</a></h3>
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
