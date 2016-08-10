<?php
	session_start();
	if (is_numeric($_SESSION['id']))
	{
	header('Location:read.php');	
	}

	echo '<meta charset="utf-8" />';
	echo '<form action="loginProcessing.php" method="post" />';
	echo '<input type="text" name ="name" />';
	echo '<input type="password" name ="pass" />';
	echo '<button>OK</button>';
	echo '</form>';
