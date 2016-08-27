<?php
require_once ("config.php");
	session_start();
	$name = $_POST['name'];
	$pass = md5($_POST['pass'] . $salt);
	$stmt = $db->prepare("INSERT INTO `users` (`name`,`pass`) VALUES (:name,:pass)");
	$stmt -> execute(['name' => $name, 'pass' => $pass]);
	$id = $db->lastInsertId();

	$_SESSION['id'] = $id;
header("Location:read.php");