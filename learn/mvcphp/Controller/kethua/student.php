<?php 
require_once 'person.php';
 /**
  * 
  */
 class student extends person
 {
 	public $id_student;
 	public $class;
 	public $kieutoc;
 	public $mauda;
 	public $phongcach;

 	function __construct()
 	{
 		$this->showInf();
 		parent::showInf();
 	}
 }
 ?>