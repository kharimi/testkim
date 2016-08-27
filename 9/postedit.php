<form action="index.php?c=post&a=editSave" method="post">
Текст<input name="data" placeholder="content" value="<?=$data['text'];?>"/>
<input type="hidden" name="id" value="<?=$post['id'];?>"/>
<input type="submit" />
</form>
