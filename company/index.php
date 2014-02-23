<?php


require_once('./view/View.php');
require_once('./controller/MainController.php');

try{
	$connection=new PDO("mysql:dbname=company;host=localhost",'root','Password123',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}	
catch(PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}

if (empty($GET['controller'])){
	$controller='login';

}
else{
	$controller=$_GET('controller');
}


if (class_exists($controller)){
 $controller=new $controller;
 $controller->execute($_REQUEST,$connection);
 $controller->render();
 

}



