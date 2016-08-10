<?php
$db = new PDO ('mysql:host=localhost;dbname=kim_db','root','',[
	PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
	PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
	]
	);
$salt = "dsggdfdf";