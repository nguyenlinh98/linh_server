<?php

require_once 'Controllers/Controller.php';
require_once 'Models/Customer.php';
require_once 'Models/Province.php';
	 
       /**
	   * 
	   */
	  class LoginCustomerController extends Controller
	  { 
	  	protected $email = 'admin@gmail.com';
	  	protected $password ='123456' ;
	  	protected $redriect = 'Location:index.php?mod=customer&&act=show&&id=156';
	  	public $customer;

	  	function __construct()
	  	{
	  		$this->customer = new Customer();
	  		$this->province = new Province();

	  	}
	  	public function show()
	  	{  	
	  		// print_r($_SESSION);
	  		require_once 'Views/customer/patient/list.php';
	  	}
	  	public  function  list(){
	  		$this->logined();
	  		header('Location:index.php?mod=customer&&act=show&&id=156');
	  	}
	  	// show form login
	  	public function showLogin()
	  	{	
	  		// $this->loginedPatient();
	  		require_once 'Views/customer/patient/login.php';
	  	}
	  	// register
	  	public function  showFormRegister(){
	  		$provinces = $this->province->all();
	  		require_once 'Views/customer/patient/regist.php';
	  	}
	  	//store
	  	public function store()
	  	{
	  		$data = $_POST;
	  		
	  		$customer = $this->customer->addCustomers($data);
	  		$detail = $this->customer->addDetail($data,$customer['id']);
	  		
	  		print_r($detail);
	  		header('Location:?mod=customer&act=showLogin');
	  	}
	  	//end store
	  	// login
	  	public function login() {
	 		if( isset($_POST['email']) &&(isset($_POST['password'])))
	 		{
	 			if(($_POST['email']==$this->email)&&($_POST['password']==$this->password)){
	 				
	 		        $_SESSION['login'] = true;
	 		        echo "thanh cong";	
	 		         header($this->redriect);
	 		        // echo "thanh cong";

	 			} else {

	 				header('Location:?mod=customer&act=showLogin');
	 			}
	 		}
	 		else{
	 			header('Location:?mod=customer&act=showLogin');
	 		}
 		}
 		//end login

 		

	} 
 ?>