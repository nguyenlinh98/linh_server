<?php
require_once 'Controllers/Controller.php'; 
 /**
  * 
  */
 class DoctorController extends Controller
 {
 	protected $redirect = "Location:?mod=doctor&&act=list";

 	function __construct()
 	{
 		$this->logined();
 	}
 	public function list()
    {
    	require_once("Views/admin/doctor/list.php");
 	}
 	 public function showadd()
 	 {
 	 	require_once 'Views/admin/doctor/add.php';
 	 }
 	 public function add($data)
 	 {
 	 	$data =$_POST;
 	 	print_r($data);
 	 }
 }
 ?>