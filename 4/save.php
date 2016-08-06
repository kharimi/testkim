<?php
	$path=dirname(__FILE__);
	$h=fopen($path.'/data/newFile2.txt', 'w');
	fwrite($h,$_POST['data']);
	fclose($h);	