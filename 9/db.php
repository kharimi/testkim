<?php

include_once ("config.php");

function addPost($text)
{
$db = connection();
$stmt = $db->prepare("INSERT INTO `messages` SET name =?, `datetime` = NOW()");
$stmt -> execute ([$text]);
	return ($stmt->errorCode () [0] == "00000");
}

function getPosts()
{
$db = connection();
	$result=$db->query("SELECT * FROM `messages`");
	$data = [];
	while ($row = $result->fetch()) 
	{
		$data[]= $row;
	}
	return $data;
}
function removePost($id)
{
$db = connection();
$stmt = $db->prepare("DELETE FROM `messages` WHERE id =?");
$stmt -> execute ([$id]);
	return ($stmt->errorCode () [0] == "00000");
}

function getPost($id)
{
	$db = connection();
	$stmt = $db->prepare("SELECT * FROM `messages` WHERE id =?");
	$stmt -> execute ([$id]);
			if ($stmt->errorCode ()[0] == "00000")
			{
					return $stmt ->fetch();
			}
			return false;

}
// dkfj;sdfkdf;agag
function updatePost($id,$text)
{
	$db = connection();
	$stmt = $db->prepare("UPDATE `messages` SET `name` = :name WHERE `id`=:id");
	$stmt -> execute (['id' => $id, 'name'=>$text]);
	return ($stmt->errorCode () [0] == "00000");
}