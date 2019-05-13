<?php 
 /**
 knoi db
  *
  */
 class database
 {
 	
 	private $serverName ='localhost';
 	private $userName = 'root';
 	private $password = '';
 	private $dbName = 'hospital';
 	private $conn;
 	function __construct(argument)
 	{
 		$this->conn =new PDO($this->serverName,$this->userName,$this->password,$this->dbName);
 	}

 }
 ?>