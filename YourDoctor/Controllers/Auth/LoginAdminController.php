<?php
require_once 'Controllers/Controller.php';
/**
 * 
 */
class LoginAdminController extends Controller
{
	
	protected $email = "admin@gmail.com";
	protected $password = '123456';
 	protected $redirectTologin = 'Location:?mod=admin&&act=showLogin';
 	protected $redirect = 'Location:?mod=admin&&act=show&&admin_id=5';

 // 	public function __construct()
	// {
		
	// }

	public function login() {

		$this->logouted();
 		if( isset($_POST['email']) &&(isset($_POST['password'])))
 		{
 			
 			if(($_POST['email']==$this->email)&&($_POST['password']==$this->password)){
 				
 		        $_SESSION['login'] = true;	
 		        header($this->redirect);

 			} else {

 				header('Location:?mod=admin&&act=showLogin');
 			}
 		}
 		else{
 			header('Location:?mod=admin&&act=showLogin');
 		}
 	}

 	// show login
 	public function showLogin()
 	{
 		$this->logouted();
 		//neu dang nhap  roi thi chuyen ve admin 
 		
 		//neu chua thi hien thi form dang nhap
 		include_once 'Views/admin/login.php';
 	}
 	public function logout() 
 	{
 		$this->logined();
 		unset($_SESSION['login']);
 		header('Location:?mod=admin&&act=login');
 	}


}
?>