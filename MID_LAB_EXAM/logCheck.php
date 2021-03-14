<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$myfile = fopen('user.json', 'r');
		$data = fread($myfile, filesize('user.json'));
		$userinfo = json_decode($data, true);
		
		$username = $userinfo['user'];
		$password = $userinfo['pass'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{

			if($username == $_POST['username'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				header('location: .php');
			}else{
				echo "invalid user";
			}
		}

	}
?>