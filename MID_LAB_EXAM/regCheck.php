<?php
	if(isset($_POST['submit']))
	{
		
		
		

			if($_POST['password']==$_POST['conpass'])
			{
				$data=[
					'user'=>$_POST['username'],
					'pass'=>$_POST['password'],
					'name'=>$_POST['name'],
					'id'=>$_POST['id'],
					
				];
				$user = json_encode($data);
				$myfile = fopen('user.json', 'w');
				$dataa = fwrite($myfile, $user);
				
				header('location: ../view/login.php');
			}else{
				echo "password & confirm password mismatch..";
			}
		}
		
		
		/*$myfile = fopen('../model/manager.json', 'r');
		$data = fread($myfile, filesize('../model/manager.json'));
		$userinfo = json_decode($data, true);*/
	}
?>