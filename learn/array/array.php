<?php
// mang 1 chieu
// cach khai bao tuan tu
$mang =array(); // khởi tạo một mảng gán vào biến $arr_name
$arrayName = array('linh','nguyenlinh' );
$arrayName1 = array('key' => beo);
// c2 khai bao
$arr_name= array();
$arr_name[]='chuong1';
$arr_name[]='chuong3';
$arr_name[]=2;
// cach khai bao khong tuan tu
$name = array();
$name['name'] = 'linh';
$name['tuoi'] = '20';
$name['ho']='nguyen ';

// in mang
//dug var-dump or print_r
// var_dump($mang);
// print_r($arrayName);
// // in mang theo dinh dang
// echo "<prev>";
// print_r($arr_name);
// echo "</prev>";
echo "<prev>";
print_r($name['ho'].$name['name'].$name['tuoi']);
echo "</prev>";
// doc toan bo phan tu
foreach ($name as $key => $value) {
	echo "<br>".$key.":".$value;
	//for &count	
	}
for($i =0 ;$i < count($arr_name); $i++)
	{
		echo "<br> phan tu thu :".$i;
	}
// mang 2 chieu
	$array2 = array();
	$array2[0][0]= 'zend';
	$array2[0][1] = 'group';
	$array2[1][0] = '123';
	$array2[1][1] = 2;
	// in mang theo dinhb dang 
	echo "<prev>";
		print_r($array2);
	echo "</prev>";
	echo "-.-.-.-.-.-..-.-.-.-.-.-.-.-.-.-.-.-.-.-.-....-.-.-.-.-.-.-.-..-";
//Đọc phần tử mảng
 echo "<br> phan tu thu 0,0:".$array2[0][0];
 echo "<br> phan tu thu 0,1:".$array2[0][1];
 echo "<br> phan tu thu 1,0:".$array2[1][0];
 echo "<br> phan tu thu 1,1:".$array2[1][1];
 // khai bao mang 2 chieu nang cao
$nangcao = array();
$nangcao[] = array(
	'id' => '1',
	'name' => 'tuan',
	'phone' => '12345976',
	'email' => 'ajdf@gmail.com',
);
$nangcao[] = array(
	'id'=>'2',
	'name' => 'hung',
	'phone' => '12345976',
	'email' => 'ajdf@gmail.com',
);
foreach ($nangcao as $key => $profile) {
	echo "<br>---------------.------.-";
	echo "<br> thong tin sinh vien thu".($key+1);
	echo "<br>ma so sinh vien:".$profile['id'];
	echo "<br> ten sinh vien:".$profile['name'];
	echo "<br> so dien thoai sinh vien:".$profile['phone'];
}


 ?>
