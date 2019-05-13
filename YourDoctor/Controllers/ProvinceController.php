<?php
  /**
    * 
    */
  require_once 'Controllers/Controller.php';
  require_once 'Models/Province.php';

  class ProvinceController extends Controller
   {
      public $province;

      function __construct()
      {
        $this->province = new Province();
      } 
      /*
      * method to show all provinces
      **/
   		public function list()
   		{
     			$provinces = $this->province->all();
          echo ("<pre>");
          print_r($provinces);
          echo ("<\pre>");
   		}

      public function districts($province_id)
      {
        $districts = $this->province->districts($province_id);
        require_once 'Views/province/districts-render.php';
        echo "<pre>";
        print_r($districts);
        echo "<\pre>";
      }
   } 
 ?>