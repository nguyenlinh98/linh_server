<?php 
	include_once 'model/User.php';

	class UserController{

		private $model;

		public function __construct() {
			$this->model = new User();
		}

		public function index(){
			$data = $this->model->All();

			foreach ($data as $key => $value) {
				if($value['gender']==1){
					$data[$key]['gender'] = "Nam";
				}else{
					$data[$key]['gender'] = "Nữ";
				}
			}

			include_once('view/user/list.php');
	 		
	 	}

	 	public function show($id){
	 		$row = $this->model->find($id);

			include_once('view/user/detail.php');
	 			 
	 	}

	 	public function create(){
	 		include_once('view/user/add.php');
	 	}

	 	public function store(){
	 		// Bước 1: Lấy thông tin người dùng gửi lên

        	$data['name'] = $_POST['name'];
        	$data['mobile'] = $_POST['mobile'];
        	$data['email'] = $_POST['email'];
        	$data['password'] = md5($_POST['password']);
        	$data['gender'] = $_POST['gender'];
        	$data['address'] = $_POST['address'];

	 		// Bước 2: Insert vào db
	 		
	 		$this->model->create($data);

	 		header('Location: index.php?mod=user');
	 	}

	 	public function edit(){
	 		// Lấy id người dùng click sửa
	 		$id = $_GET['id'];
	 		// Load thông tin của id cần sửa
	 		$user = $this->model->find($id);
	 		// Tiền xử lý dữ liệu
	 		$male_select = '';
	 		$female_select = '';
	 		$other_select = '';
	 		if($user['gender'] == 1){
	 			$male_select = 'checked';
	 		}else if($user['gender'] == 0){
	 			$female_select = 'checked';
	 		}else{
	 			$other_select = 'checked';
	 		}
	 		// Gọi view để đổ dữ liệu lên form
	 		include_once('view/user/edit.php');
	 	}

	 	public function update(){
	 		// Bước 1: Lấy thông tin người dùng gửi lên

        	$data['name'] = $_POST['name'];
        	$data['mobile'] = $_POST['mobile'];
        	$data['email'] = $_POST['email'];
        	$data['password'] = $_POST['password'];
        	$data['gender'] = $_POST['gender'];
        	$data['address'] = $_POST['address'];
        	$data['id'] = $_POST['id'];

	 		// Bước 2: Insert vào db
	 		
	 		$this->model->update($data);

	 		header('Location: index.php?mod=user');
	 	}

	 	public function destroy(){
	 		$id = $_GET['id'];

	 		$this->model->delete($id);

	 		header('Location: index.php?mod=user');

	 	}
	}
 ?>