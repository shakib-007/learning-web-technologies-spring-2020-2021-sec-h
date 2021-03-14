
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="../controller/regCheck.php">
        <fieldset style="width: 30%">
              <legend>REGISTRATION</legend>
              <table>
                <tr>
                  <td>Id</td>
                  <td>:<input type="text" name="id" value="">  </td>
                </tr>
                
                 
                <tr>
                  <td>Password</td>     
                  <td>:<input type="password" name="password" value=""> </td>
                </tr>
               
                <tr>
                  <td>Confirm Password</td>
                  <td>:<input type="password" name="conpass" value=""> </td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td>:<input type="text" name="name" value="">  </td>
                </tr>
                
           </table>
            <p>User Type</p>
            <hr>
                  <input type="radio" name="option"> User
                  <input type="radio" name="option"> Admin
                
                  
            
            <br>
          
              <input type="submit" name="submit" value="Signup">
              <a href="login.php">Sign In</a>
        
         
        </form>
</body>
</html>