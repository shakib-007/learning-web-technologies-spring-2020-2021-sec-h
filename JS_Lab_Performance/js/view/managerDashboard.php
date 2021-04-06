<?php
	$title= "Manager Dashboard";
	include('header.php');
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
            <td align="right">
                <h1 align="left">Tourism Management System</h1>
                <a href="../controller/logout.php">Logout</a>
            </td>
        </tr>
		<tr height ="500px">
			<td align="left" width="500px"><h3 align="center">Logged in as Manager</h3>
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
		</tr>
		<tr height = "30px">
            <td colspan="2">
                <center> Copyright@2021 </center>
            </td>
        </tr>
		
	</table>
</body>
</html>