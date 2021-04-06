<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>

	<table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="right" colspan="2">
                <h1 align="left">Tourism Management System</h1>
                <a href="../controller/logout.php">Logout</a>|
                <a href="managerDashboard.php">Back</a>
            </td>
        </tr>
        <tr height = "500px">
            				<td align="left" width="300px" >
               
                            		<h3>Logged in as Manager</h3>
                            		<hr size="1">
                            		<ul>
										<li><a href="managerDashboard.php">Dashboard</a></li>
                                        <li><a href="viewprofile.php">View Profile</a></li>
                                        <li><a href="editprofile.php">Edit Profile</a></li>
                                       
                                        <li><a href="customerDetails.php">Customer Details</a></li>
                                        <li><a href="roomdetails.php">Room Details</a></li>
                                        <li><a href="customerList.html">View Customer List</a></li>
                                        <li><a href="../controller/logout.php">Logout</a></li>
									</ul>
                            	
                                                                                                    
           					 </td>
            				 <td height="300px" colspan="2" align="center">
                                    <br>
                                    <fieldset style="width: 30%">
                                        <legend> PROFILE </legend>
                                        <table>
                                            <tr>
                                                <?php
                                                    $myfile = fopen('../model/manager.json', 'r');
                                                    $data = fread($myfile, filesize('../model/manager.json'));
                                                    $userinfo = json_decode($data, true);

                                                ?>
                                                <td>
                                                    Name:
                                                </td>
                                                <td colspan="2">
                                                    <?php echo $userinfo['name'] ?>
                                                </td>

                                                
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email:
                                                </td>
                                                <td>
                                                    <?php echo $userinfo['email'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Gender:
                                                </td>
                                                <td>
                                                    <?php echo $userinfo['gender'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Date of Birth:
                                                </td>
                                                <td>
                                                    <?php 
                                                    echo $userinfo['date'].'/'. $userinfo['month'].'/'.$userinfo['year'] 

                                                    ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="2"><hr></td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="2"> 
                                                    <a href="editProfile.php"> Edit Profile </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                    <br> 
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