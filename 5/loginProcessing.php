<?php
	require_once ("config.php");
	session_start();
	$login = $_POST['name'];
	$pass = md5($_POST['pass'] . $salt);
//var_dump($login,$pass);exit;
	$stmt = $db->prepare ("SELECT * FROM `users` WHERE `name` =:name AND `pass` =:pass");
	$stmt -> execute (['name' => $login, 'pass' => $pass]);

	if ($stmt -> rowCount () ==1)
	{
		$user = $stmt->fetch();
		$_SESSION['id'] = $user['id'];
		header('Location:read.php');
	}

	echo "<b> Ошибка </b>";