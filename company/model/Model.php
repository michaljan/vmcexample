<?php
require_once('./entity/User.php');


class ModelUser{
	protected $connection;
	public function __construct(PDO $connection){
		$this->connection=$connection;
	}
	public function login($name,$password){
		$dbQuery='SELECT * FROM company.user WHERE name=:name AND password=:password';
		$dbStatement=$this->connection->prepare($dbQuery);
		$dbStatement->setFetchMode(PDO::FETCH_CLASS,'User');
		$dbStatement->execute(array(':name'=>$name,':password'=>$password));
		$userData=$dbStatement->fetch(PDO::FETCH_CLASS);
		if(!empty($userData)){
			$_SESSION['name']=$userData->getName();
			$_SESSION['level']=$userData->getLevel();
			return true;
		}
		else{
			return false;
		}
	}

}