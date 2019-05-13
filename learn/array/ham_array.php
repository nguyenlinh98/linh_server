<?php 
// khoi tao
$mang = array('nam','khanh nan','minh','hung','binh','hau');
//  hamf kiem ra su ton tai in_array(Giá trị cần kiểm tra , Tên mảng) trả ve true , flase
var_dump(in_array('nam', $mang));
var_dump(in_array('tung', $mang));

// hàm count(ten mang)
echo "<br> so luong phan tu trong mang:".count($mang);

// hàm array_key_exists(Key, Tên mảng)
// in ra mang k tuan tu
 $info = array();
 $info[]=array(
 	'id' =>1,
 	'name' => 'ta quang tung',
 	'phone' => '943786584',
 	'email' => 'quangtungjoin@gmail.com',	

 );
 if(array_key_exists('id', $info))
 {
 	// echo "id:".$info['id'];
 	echo "thanh cong";
 }
 else{
 	echo "</br> khong ton tai key";
 }
 // ham tim kiem ptu trong mang & tra ve index cua ptu do
 $index=array_search('khanh',$mang );
 if ($index!== false) {
 	echo " <br> vi tri phan tu la:".$index;
 }
 else{
 	echo "khong tim thay ptu";
 }

 // array_count_values(ten mang) dem so luong ptu
 $arr=array(1,2,3,4,'zent',7,9,'school');
 $kq = array_count_values($arr);
 echo "<prev>";
 print_r($kq);
 echo "</prev>";

 // array_push(array name  , ptu them mang1 , pt thu2)
 array_push($mang, "name1","nam2");
  echo "<prev>";
 print_r($mang);
 echo "</prev>";


 // ham xoa ptu cuoi mang array_pop && array_shirft xoa ptu dau mang
 $del = array_pop($mang);
 echo "<br> phan tu bi xoa".$del;
  $shift =array_shift($mang);
  echo "<br> phan tu bi xoa".$shift;
  // xu ly chuoi strpos (chuoi,tu muon tim)
   echo "<br>".strpos($mang, "khanh");
 ?>
