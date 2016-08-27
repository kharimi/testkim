<?php
$salt = "dsggdfdf";

function connection()
{
	$config = [
	'host' =>'localhost',
	'dbname' =>'kim_db',
	'user' =>'root',
	'password' =>'',
	'encoding' =>'utf8',
	];
	static $connection;
	if (empty($connection))  {
		$connection = new PDO(
			"mysql:host={$config['host']};dbname={$config['dbname']}",
			$config ['user'],
			$config ['password'],
			[	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$config ['encoding']}"
			]);

		return $connection;
		}
		$db = connection();
		//...
	}

function makeToken()
{
	session_start();
	$salt ="epic727";
	$id = session_id();
	$token = md5($salt . $id);
	$_SESSION['afr'] = $token;
	return $token;
}
function checkToken()
{
	$clientToken = $_POST['_aft'];
	$serverToken = $_SESSION['afr'];

	return ($serverToken == $clientToken);
}
