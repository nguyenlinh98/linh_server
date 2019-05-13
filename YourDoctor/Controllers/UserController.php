
<?php

	require_once ('Controllers/Controller.php');
	require_once 'Models/Deparment.php';
	require_once('Models/Admins.php');
 /**
  * 
  */
 class UserController extends Controller
 { 	
 	protected $redirect = 'Location:?mod=admin&act=showLogin';
 	//phuong thuc khoi tao
 	public function __construct ()
 	{
 		
 		$this->logined();
 		 $this->department = new Deparment();
 		 $this->admin = new Admins();

 	}

 	public function show($admin_id)
 	{
 		require_once('Views/admin/profile.php');
 	}

 	public function showPatient($id)
 	{
 		// echo 'ok';
 	 // 	$this->loginedPatient();
 	 	require_once('Views/customer/patient/list.php');
 	} 
 	public function showRegister()
 	{	
 		$department= $this->department->all();
 		include_once 'Views/admin/register.php';

 	}
 	public function store()
 	{
 		$data = $_POST;
 		$admin = $this->admin->addAdmin($_POST);
 		 die($admin['MAX(id)']);
 		// $detail  = $this->admin->addDetail($data, $admin['MAX(id)']);
 		// print_r( $admin['MAX(id)']);
 	}

  
 }


 ?>