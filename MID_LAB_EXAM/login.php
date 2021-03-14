<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="logCheck.php">
                    <fieldset style="width: 20% " >
                        <legend>LOGIN</legend>
                        <table >
                            <tr>
                                <td>User Name</td>
                                <td>:<input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:<input type="password" name="password"></td>
                            </tr>
                        </table>
                        
                        <input type="submit" name="submit" value="Login">
                        <a href="registration.php">Register</a>
                    </fieldset>
                </form>
</body>
</html>