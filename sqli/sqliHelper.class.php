<?php
	class sqliHelper{
		//��������д����������Ϣ������Ҫ����Ҫһ���ļ�
		private static $host = "localhost";
		private static $user = "root";
		private static $password = "";
		private static $db = "test" ;
		
		private $mysqli;
		
	public function __construct(){
		//��ɳ�ʼ��
		$this->mysqli = new MySQLi(self::$host,self::$user,self::$password,self::$db);
		
		if($this->mysqli->connect_error){
			die("����ʧ��".$this->mysqli->connect_error);
		}
		
		//��֤��utf-8��ʽ�������ݿ�
		$this->mysqli->query("set names utf8");
		
		
		
	}
	
	
	public function execute_dql($sql){
		$res = $this->mysqli->query($sql) or die("false".$this->mysqli->error);
		
		return $res;
	}
	
	public function execute_dml($sql){
		
		$res = $this->mysqli->query($sql) or die("false".$this->mysqli->error);
		
		if(!$res){
			
			return 0;
		}else {
			
			if($this->mysqli->affected_rows>0){
				return 1;//success
				
			}else{
				return 2;//��Ӱ��
			}
		}
	}
		
		
		
		
		
	}


?>