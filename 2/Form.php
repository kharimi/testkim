<?php 
$name=$_POST['name']; 
$birthday=strtotime($_POST['birthday']); 
$today=time(); 
$diff=$today-$birthday; 
$result=round($diff /60/60/24) . "days"; 
echo $name. ", бла".$result." дней"; 
?>