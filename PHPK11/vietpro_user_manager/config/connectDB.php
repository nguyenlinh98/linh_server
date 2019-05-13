<?php 
 $dbhost = "localhost";
 $dbuser = "root";
 $password = "";
 $dbname = "qlthanhvien";

	$conn =mysqli_connect($dbhost,$dbuser,$password,$dbname);
	if ($conn) {
		mysqli_set_charset($conn,'utf8');
		// mysqli_query($conn,"SET NAMES'utf8'");
	}
	else {
		die("ban da ket noi khong thanh cong CSDL");
	}
 ?>