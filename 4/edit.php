<?php
	$filename=dirname(__FILE__).'/data/'.$_GET['file'];
	$data=file_get_contents($filename);
	?>
<meta charset="utf-8">
<form action="save1.php" method="post">
Текст<input name="data" value="<?=$data;?>">
Имя файла: <input name="filename" value="<?=$_GET['file'];?>">
<input type="submit">
</form>
