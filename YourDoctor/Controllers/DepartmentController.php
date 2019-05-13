<?php
require_once 'Controllers/Controller.php';
require_once 'Models/Deparment.php';
/**
 * 
 */
class DepartmentController extends Controller
{
	protected $redirect = "Location:?mod=department&&act=list";
	protected $department;

	function __construct()
	{
		// $this->loigned();
		 $this->department = new Deparment();
	}
	public function list()
	{
		$department =$this->department->all();
		// print_r($deparment);die;
		require_once("Views/admin/department/list.php");
	}
	public function showAdd()
	 {
	 	require_once("Views/admin/department/add.php");
	 }
	public function add($data)
	{
		$this->logined();
		$type = pathinfo($_FILES["icon"]["name"],PATHINFO_EXTENSION);

		$size = $_FILES["icon"]["size"];
		
		//tao folder uploads de chua file 
		$target_dir = "Uploads/department/";
		//tao link luu file 
		$target_file = $target_dir.basename($_FILES["icon"]["name"]);
		// Kiểm tra kích thước  
		// error 1 : size;
		//    2 : type
		// 3 : failed
		if ($size >10000000) {
			$error['icon'] = 1;
		}
		// kiểm tra loại file
		$file_type_allow = array('png','jpg','jpeg','gif');
		if (!in_array(strtolower($type), $file_type_allow) ) {
			$error['icon'] = 2;
		}
		//print_r($target_file);
		$result = true;
		if (empty($error)) {
			$result = move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file);
			$flage = $this->department->add($_POST['name'],$target_file);
			header("Location:?mod=department&&act=list");
		}
		if ( !$result || !empty($error) ) {
			$error['icon'] = 3;
		}
		// print_r($error);
	}
	// show thông tin trang sua theo id
	 public function showEdit($id)
	 {
	 	$id = $_GET['id'];
	 	$depart = $this->department->edit($id);
	 	require_once("Views/admin/department/edit.php");
	 }
	//delete chuyen khoa
	public function del($id)
	  {
	  	$id = $_GET['id'];
	  	 echo $id;
	  	$this->department->del($id);
	  	header("Location:?mod=department&&act=list");
	  }
	 //update 
	public function update($name,$image,$id)
	{
		$name =$_POST['name'];
		$id =$_POST['id'];
		$type = pathinfo($_FILES["icon"]["name"],PATHINFO_EXTENSION);
		$size = $_FILES["icon"]["size"];
		
		//tao folder uploads de chua file 
		$target_dir = "Uploads/department/";
		//tao link luu file 
		$target_file = $target_dir.basename($_FILES["icon"]["name"]);
		// Kiểm tra kích thước  
		// error 1 : size;
		//    2 : type
		// 3 : failed
		if ($size >10000000) {
			$error['icon'] = 1;
		}
		// kiểm tra loại file
		$file_type_allow = array('png','jpg','jpeg','gif');
		if (!in_array(strtolower($type), $file_type_allow) ) {
			$error['icon'] = 2;
		}
		//print_r($target_file);
		$result = true;
		if (empty($error)) {
			$result = move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file);
			$flage = $this->department->update($name,$target_file,$id);
			header("Location:?mod=department&&act=list");
		}
		if ( !$result || !empty($error) ) {
			$error['icon'] = 3;
		}
		// print_r($error);
	}
	 
}
 ?>