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
	$mysqli = new mysqli("localhost","root","","kim_db")
}