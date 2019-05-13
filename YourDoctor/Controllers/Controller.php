<?php 
	/**
	 * 
	 */
abstract class Controller
	{
		//dieu huong vao trang quan tri 
		protected $redirectTologin;
		//dieu huong vao trang dang
		protected $redirect;
		/*
		* Method to check user has logined
		* return true ; if user has logined
		* else redirect to logining form
		**/
		protected function logined()
 		{
 			// kiem tra xem neu chua dang nhap thi dieu huong trang login form
	 		 if (!isset($_SESSION['login']) ) {
	 		 	//thanh dieu huong
			    header($this->redirectTologin);
			  }
 		}

 		/*
		* Method to check user has logouted
		* return true ; if user has logouted
		* else redirect to logining form
		**/
		protected function logouted()
 		{
	 		 ///neu dang nhap thi vao trang quan tri
			  if ( isset($_SESSION['login']) ) {
			    	header($this->redirect);
			  }

 		}

	}
?>