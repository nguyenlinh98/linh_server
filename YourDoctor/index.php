<?php
session_start(); 

	require_once('Controllers/UserController.php');
	require_once('Controllers/Auth/LoginAdminController.php');
	require_once('Helpers/ErrorFunction.php');
	require_once 'Controllers/Auth/LoginCustomerController.php';
	require_once('Controllers/ProvinceController.php');
	require_once('Controllers/DoctorController.php');
	require_once 'Controllers/DepartmentController.php';

 	try {
 		
	 	if(isset($_GET['mod'])){
	 		if(isset($_GET['act'])){

	 			switch ($_GET['mod']) {
	 				//thao tac voi controller
	 				case 'admin':
		 				$admin = new UserController();
		 				$act= $_GET['act'];

	 						switch ($_GET['act']) {
	 							case 'login':
	 								$control = new LoginAdminController ();
	 								$control->login();
	 								break;
	 							case 'logout':
	 							  	$control = new LoginAdminController();
	 								$control->logout();
	 								break;
	 							case 'showLogin':
	 								$control = new LoginAdminController();
	 								$control->showLogin();
	 								break;
	 							case 'show':
	 								if (isset($_GET['admin_id'])) {

	 									$admin->show($_GET['admin_id']);
	 								}
	 								else {
	 									notDefined(' value '.'admin_id ');
	 								}
	 								break;
	 							case 'showRegister':

	 									$admin->showRegister();
	 								break;
	 							case 'store':
	 								  $admin->store();
	 								break;
	 							default:
	 								# code...
	 								break;
	 						}
	 					# code...
	 					break;
	 				// case patient 

	 				case 'customer':
	 					$customer = new LoginCustomerController();
	 					$act = $_GET["act"];
	 					switch ($act) {
	 						case 'dangky':

	 							$customer->showFormRegister();
	 							break;
	 						case 'showLogin':
	 							$customer->showLogin();
	 							break;
	 						case 'list':
	 							$patient->list();
	 							break;
	 						case 'login';
	 						 	$customer->login();
	 							break;
	 						case 'store':
	 						
	 							$customer->store();
	 							// $patient->showFormLogin();
	 							break;
	 						case 'show':
	 						 if (isset($_GET['id'])) {
		 						$user = new UserController() ;
		 						$user->showPatient($_GET['id']);
	 							}
	 							else {
	 								notDefined(' value '.'id ');
	 							}
	 							break;
	 						default:
	 							# code...
	 							break;
	 					}
	 				break;
	 					// povince
	 				case 'province':
	 					$province = new ProvinceController();
	 					$act = $_GET["act"];
	 					switch ($act) {
	 						case 'list':
	 							$province->list();
	 							break;
	 						case 'districts':
	 							
	 							if (isset($_POST['province_id'])) {
	 								$province->districts($_POST['province_id']);
	 							}
	 								
	 							break;
	 						default:
	 						# code...
	 							break;
	 					}
	 				break;
	 				case 'doctor':
	 					$doctor =  new DoctorController();
	 					$act = $_GET['act'];
	 					switch ($act) {
	 						case 'list':
	 							$doctor->list();
	 							break;
	 						case 'showadd':
	 							$doctor->showadd();
	 							# code...
	 							break;
	 						case 'add':
	 							$doctor->add();
	 							break;
	 						
	 						default:
	 							# code...
	 							break;
	 					}
	 					break;
	 				case 'department':
	 					$department = new DepartmentController();
	 					$act = $_GET['act'];
	 					switch ($act) {
	 						case 'list':
	 							$department->list();
	 							break;
	 						case 'showAdd':
	 							$department->showAdd();
	 							break;
	 						case 'add':
	 							$department->add();
	 							break;
	 						case'showEdit':
	 							if (isset($_GET['id'])) {
	 									$department->showEdit($_GET['id']);
	 								}
	 								else {
	 									notDefined(' value '.'id ');
	 								}
	 							break;
	 						case 'del':
	 							if (isset($_GET['id'])) {
	 									$department->del($_GET['id']);
	 								}
	 								else {
	 									notDefined(' value '.'id ');
	 								}
	 						break;
	 						case 'update':
	 							$department->update($_POST);
	 							break;
	 						default:
	 							# code...
	 							break;
	 					}
	 					break;
	 				default:
	 					# code...
	 					break;
	 			}
	 		} 
	 		else {
	 			 notDefined(' method');
	 		}

	 	}
	 	else {
	 		 notDefined(' method');
	 	}

 	} catch (Exception $e) {
 		die($e->getMessage());
 	}
?>
