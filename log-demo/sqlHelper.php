<?php
	class sqlHelper{
		public $host = "localhost";
		public $root = "root";
		public $pwd = "";
		public $db ="log";
		public $conn;
		
		function __construct(){
			
			$this->conn = mysqli_connect($this->host,$this->root,$this->pwd,$this->db);
			
			if (!$this->conn){
				die("sql link error".$conn->errno."---".$conn->error);
			}
		}
		
		/**
		 * 查询
		 * @param unknown $sql
		 */
		function execute_dql($sql){
			$res = mysqli_query($this->conn, $sql) or die();
			return $res;
		}
		
		/**
		 * create user
		 * @param unknown $sql
		 */
		function create_admin($sql){			
			mysqli_query($this->conn, $sql)or die(mysqli_error($link));
		}
		
		function close_connect(){
			if (!empty($this->conn)){
				mysqli_close($this->conn);
			}
		}
		
		
	}


?>