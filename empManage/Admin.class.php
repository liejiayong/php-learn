<?php

	/**
	 * @author liejy
	 *
	 */
	class Admin{
		private $id;
		private  $pwd;
		private  $name;
		
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getPwd(){
			return $this->pwd;
		}
		
		public function setPwd($pwd){
			$this->pwd = $pwd;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function setName($name){
			$this->name = $name;
		}
	}
	
	?>