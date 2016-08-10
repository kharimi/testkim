<?php

$mysqli = new mysqli("localhost","root","","kim_db");
if (mysqli_connect_errno()) {
	echo "Connect failed: ".mysqli_connecn_error();
	exit();
}

/*if (!$result=$mysqli->query("INSERT INTO `messages` (`name`) VALUES ('my first query')"))
{
echo "Error on line ".__LINE__.": ".$mysqli->error;
exit;
}*/
/*if (!$result=$mysqli->query("INSERT INTO `messages` (`name`) VALUES ('my second query')"))
{
echo "Error on line ".__LINE__.": ".$mysqli->error;
exit;
}*/
/*if (!$result=$mysqli->query("SELECT * FROM `messages`"))
{
echo "Error on line ".__LINE__.": ".$mysqli->error;
exit;
}
while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
	var_dump($row."<br/>");
}*/
function addPost($text)
{
	$mysqli = new mysqli("localhost","root","","kim_db");
	$mysqli->query("INSERT INTO `messages` (`name`) VALUES ('$text')");
	return ($mysqli->error == NULL);
}
function getPosts()
{
	$mysqli = new mysqli("localhost","root","","kim_db");
	$result=$mysqli->query("SELECT * FROM `messages`");
	$data = [];
	while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
	{
		$data[]= $row;
	}
	return $data;
}
function removePost($id)
{
	$mysqli = new mysqli("localhost","root","","kim_db");
	$mysqli->query("DELETE FROM `messages` WHERE `id`=".$id);
	return ($mysqli->error == NULL);
}

function getPost($id)
{
	$mysqli = new mysqli("localhost","root","","kim_db");
	$result=$mysqli->query("SELECT * FROM `messages` WHERE `id`=".$id);
			if ($mysqli->error == NULL)
			{
					return $result ->fetch_array(MYSQLI_ASSOC);
			}
			return false;

}
// dkfj;sdfkdf;agag
function updatePost($id,$text)
{
	$mysqli = new mysqli("localhost","root","","kim_db");

	$result=$mysqli->query("UPDATE `messages` SET `name` = '$text' WHERE `id`=$id");
	return ($mysqli->error == NULL);
}