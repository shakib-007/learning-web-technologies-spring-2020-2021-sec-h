<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: managerLogin.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>