<?php
	$path=dirname(__FILE__).'/data/'.$_POST['filename'];
	file_put_contents($path,$_POST['data']);
header('Location:read.php');