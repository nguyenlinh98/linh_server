<?php
	// vd : kiem tra so 20 la so chan la so le
$so =20;
if ($so %2 ==0) {
	echo "so chan";
}else{
	echo "so le";
}
// $b+=$a ->$b=$b+$a;
// bt:tinh tong cac so chan tu 0->1000
$tong =0 ;
 for($i = 0; $i<=1000 ;$i ++)
 {
 	if($i %2 == 0){
 		$tong +=$i;
 	}
 }
  echo "<br>tong:". $tong;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <h1>hello</h1>

</body>
</html>