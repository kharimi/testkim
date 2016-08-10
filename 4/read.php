<?php
//$dir=$_SERVER['DOCUMENT_ROOT'].'/data/';
//$list=scandir($dir);
include_once("db.php");
$data=getPosts();

?>

<ul>
<?php
	foreach ($data as $post) 
	{
		echo "<li>".$post['name']." "."<a href ='remove.php?id=".$post['id']."'>Удалить</a>"."  "."<a href ='edit.php?id=".$post['id']."'>Редактировать</a></li>";


	}
?>
</ul> 