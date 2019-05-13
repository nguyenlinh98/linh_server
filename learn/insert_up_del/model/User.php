<?php 
	include_once 'Connection.php';

	class User{

		private $conn;

		public function __construct() {
			$connection = new Connection();
			$this->conn = $connection->conn;
		}

		public function All(){ // Phương thức lấy toàn bộ dữ liệu
			//Mảng chứa dữ liệu trả về
			$data = array();

			// Cau lenh truy van co so du lieu
			$query = "SELECT * FROM users";

			// Thuc thi cau lenh truy van co so du lieu
			$result = $this->conn->query($query);
			
			while($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data;
		}

		public function find($id){
			// Cau lenh truy van co so du lieu
			$query = "SELECT * FROM users where id = " .$id;

			// Thuc thi cau lenh truy van co so du lieu
			$result = $this->conn->query($query);

			return $result->fetch_assoc();
		}

		public function create($data){
			$query = "INSERT INTO users(id,name,mobile,email,password,gender,address) values ('','".$data['name']."','".$data['mobile']."','".$data['email']."','".$data['password']."','".$data['gender']."','".$data['address']."')";

			$result = $this->conn->query($query);
		}

		public function update($data){
			if(empty($data['password'])){
				$query = "UPDATE users SET name='".$data['name']."', email = '".$data['email']."', mobile='".$data['mobile']."', address='".$data['address']."', gender='".$data['gender']."' WHERE id = '".$data['id']."'";
			}else{
				$data['password'] = md5($data['password']);
				
				$query = "UPDATE users SET name='".$data['name']."', email = '".$data['email']."', mobile='".$data['mobile']."', address='".$data['address']."', gender='".$data['gender']."', password='".$data['password']."' WHERE id = '".$data['id']."'";
			}

			$result = $this->conn->query($query);
		}

		public function delete($id){
			$query = "DELETE FROM users WHERE id = " . $id;
			$this->conn->query($query);
		}
	}


?>