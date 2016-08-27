<?php

class AccountController extends BaseController {

	public function index()
	{
		$this->LoadModel('Account');
		$model = new AccountModel();
		if ($model -> isAuthed() === true) {
			$this->reDirectToAction("index","home");
		}

		$data['token'] = $this->makeToken();
		$this->LoadPage('LoginID',$data);
	}
	
	public function authorize()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST' && $this->checkToken($_POST['token']))
		{
			$this->LoadModel('Messages');
			$model = new AccountModel();
			$user = $model -> findByLoginPassword ($_POST['id'], $_POST['pass']);
			
		if ($user === false) {
			    $this -> reDirectToAction('index');
		}

		$_SESSION['user_id'] = $user['id'];
		$this -> reDirectToAction('index','home');

		}
	}



}