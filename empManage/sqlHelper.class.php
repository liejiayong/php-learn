<?php

	class sqlHelper{
		public $host = "localhost";
		public $root = "root";
		public $pwd = "";
		public $db ="table_in_empmanage";
		public $conn;
		
	public function __construct(){
		
		$this->conn = new mysqli($this->host,
				$this->root,$this->pwd,$this->db);
		if(!$this->conn){
			die("数据库连接失败".$conn->errno."--".$conn->error);
		}
	}
	
	
	
	public function execute_dql($sql){
		$res = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $res;
	}
	
	public function execute_dql_free($sql){
		$arr = array();
		$res = mysqli_query($this->conn,$sql) or die(mysqli_error());
		$i = 0;
		while ($row = mysqli_fetch_array($res)){
			$arr[$i++] = $row;
		
		}
		$res->free();
		return $arr;
		
		
	}
	
	public function execute_dml($sql){
		$b = mysqli_query($this->conn, $sql);
		if(!$b){
			return 0;
		}else{
			if($this->conn->affected_rows()>0){
				return 1;
			}else{
				return 2;//表示没有收到影响
			}
			
		}
		

		
	}
	
	
	public function close_connect(){
		if(!empty($this->conn)){
			mysqli_close($this->conn);
		}
		
	}
		
		
	}

?>