<?php
 	/**
 	  * 
 	  */
 	 class Car 
 	 {
 	 	 var $ten;
 	 	 var $hangxe;
 	 	 var $mausac;
 	 	 var $so_cho;
 	 	
 	 	function chay()
 	 	{
 	 		echo " day la phuong thuc cua class";
 	 	}
 	 } 
 	 // khoi tao 1 dtuong
 	 $oto =new Car();
 	 // call methord of class;
 	  echo $oto->chay();
 	  $oto->ten ='BMW';
 	  $oto->mausac = 'white';
 	  $oto->so_cho =4;
 	  // show inf of car
 	  echo "<br> ten xe:".$oto->ten;
 	  echo "<br> mau xe:".$oto->mausac;
 	  echo "<br>  so ghe trong xe:".$oto->so_cho;
 ?>