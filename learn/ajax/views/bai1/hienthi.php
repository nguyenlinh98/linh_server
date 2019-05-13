<!DOCTYPE html>
<html>
<head>
	<title>  mo dau</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
	<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<script language="javascript">
		function loadForm(){
			$.ajax({
				url:"result.php",
				type :"post",
				dataType:"text",
				data:{

				},
				success:function(result){
					$('#cont').html(result);
				}
			});
		}
	</script>

</head>
<body>
   <div id="cont">
   	  noi dung hien thi
   </div>
    <input type="button" name="btnClick" id="btnClick" onclick="loadForm()" value="ok">
</body>
</html>