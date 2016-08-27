<meta charset="utf-8">
<form action="postedit.php" method="post">
Текст<input name="data" placeholder="content" value="<?=$post['text'];?>"/>
<input type="hidden" name="id" value="<?=$post['id'];?>"/>
<input type="submit" />
</form>
