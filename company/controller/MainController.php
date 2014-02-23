<?php
require_once('./view/View.php');
require_once('./model/Model.php');


interface controller{
	public function execute($request,$connection);
	public function render();

}

class login implements controller{
	protected $request;
	protected $connection;
	public function execute($request,$connection){
		$view= new view('./view/Login.php');
		$this->view=$view;
		if(!empty($_POST['name']) AND !empty($_POST['password'])){
			$loginModel= new ModelUser($connection);
			$loginModel->login($_POST['name'],$_POST['password']);
			$this->view('./');
		}
		$this->view=$view;
	}

	
	public function render(){
		$this->view->render();
	}
	
}