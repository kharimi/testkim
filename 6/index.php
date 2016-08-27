<?php
	session_start();
	require_once ("db.php");
	require_once ("config.php");

	//routing
	//

	$controller = strtolower ($_GET['c']);
	$action = strtolower ($_GET ['a']);

	switch ($controller) {
		case 'post':
			switch ($action) {
				case 'add':
					postAdd();
					break;
				case 'addSave':
				postAddSave ();
				break;
				case 'read':
				postRead ();
				break;
				case 'edit':
				postEdit ();
				break;
				case 'editSave':
				postEditSave ();
				break;
			}
			break;
			default:
			index();
			break;

	}



function postEdit()
{

	echo template("template.php", [
		'body' => template("postedit.php",[
		'data' => getPost($_GET['id'])
			])
		]);
}

function postEditSave()
{
updatePost($_POST['id'],$_POST['text']);
postRead();
}




function postRead()
{

	echo template("template.php", [
		'body' => template("postread.php",[
		'data' => getPosts()
			])
		]);
}








function postAdd()
{
	echo template("template.php", [
		'body' => template("postAdd.php",[
			'_aft' => makeToken()
			])
		]);
}

function postAddSave()
{
	if(checkToken()){
			if(addPost($_POST['text'])){
				index();
		}
		else {
			errorPage(__FUNCTION__);
			}
		}
		else {
			errorPage(__FUNCTION__ . "token");
			} 	
}

function errorPage($msg) {
	echo "error:{$msg}";
}

function template($name, array $vars = [])
{
	if(!is_file($name)){
		throw new exception ("Could not load template file{$name}");
		}
		//var_dump($name);exit;
		ob_start();
		extract($vars);
		require($name);
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
}
function index() {
	postAdd();
}