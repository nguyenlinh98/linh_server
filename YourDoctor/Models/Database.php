<?php 

/**
 * 
 */
 abstract class Database
	{
		private $servername = 'localhost';
		private $username = 'root';
		private $password = '';
		private $dbname = "hospital";
		private $conn;

		protected function connect()
		{
			//connect db
			$this->conn = mysqli_connect($this->servername, $this->username, $this->password,$this->dbname);
			$this->conn->set_charset(utf8);// doc dl sang tv
			// check connect
			if($this->conn->connect_error)
			{
				die("fail_connect:".$this->conn->connect->error);
			}
				
		}

		protected function query($query)
		{
			//reconnect database
			$this->connect();
			$query_con = mysqli_query($this->conn,$query);
			if (!$query_con)
			{
			  throw new Exception(mysqli_error($this->conn) . " <br/>SQL(".$query.")", 1);
			}
			//close databe;
			mysqli_close();
			return $query_con;
		}
	}
	
 ?>