<?php
include_once("db.php");
//$id=$_GET['id'];
removePost($_GET['id']);
header('Location:read.php');

