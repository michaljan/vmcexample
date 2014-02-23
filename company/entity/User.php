<?php

class User{
	protected $id;
	protected $name;
	protected $password;
	protected $level;
	
	public function setId($id){
		$this->id=$id;
		return $this;
	}
	
	public function getId(){
		return $this->id;
	
	}
	
	public function setName($name){
		$this->name=$name;
		return $this;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setPassword($password){
		$this->password=$password;	
		return $this;
	}
	
	public function getPassword(){
		$this->password=$password;
		return $this;
	}
	
	public function setLevel($level){
		$this->level=$level;
		return $this;
	}
	
	public function getLevel(){
		return $this->level;
	}
	



}
