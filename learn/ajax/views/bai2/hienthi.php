<!DOCTYPE html>
<html>
<head>
	<title> hien thi</title>

</head>
<body>
<div id="result">
	  form hien thi
</div>
<input type="text" name="name" id="name">
<input type="button" name="btnClick" id="btnClick" onclick="loadForm()" value="Click">

<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<script language="javascript">
		function loadForm(){
			$.ajax({
				url:"result.php",// gui ajax den file result.php
				type: "post",// chon phuong thuc gui la post
				dataType: "text",// du lieu tra ve dang text
				data:{// dsach cac thuoc tinh se gui di
					name:$('#name').val()
				},
				success : function(result){
					// neu thanh cong  thi tra ve div(result)
					$('#result').html(result);
				}
			});
			// khai bao doi tuong
			// var obj ={
			// 	url:"result.php";
			// 	type
			// }
		}
	</script>
</body>
</html>