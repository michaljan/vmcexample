<?php

class view{
	protected $fileName=null;
	protected $data=null;
	function __construct($fileName){
		$this->fileName=$fileName;
	}
	function render(){
		require_once($this->fileName);
	
	}
	
	public function setData($name,$data){
		$this->data[$name]=$data;
	}
	
	
	

}