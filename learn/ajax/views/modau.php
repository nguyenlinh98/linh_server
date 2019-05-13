<!DOCTYPE html>
<html>
<head>
	<title>  mo dau</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
	<script language="javascript">
		function load_ajax(){
			// tao bien 
			// kiem tra trinh duyet

			var xmlHttp;

			// neu trinh duyet lad IE7+,firefox,chrome, Opera, Safari

			if (window.XMLHttpRequest)
			{
				xmlHttp = new XMLHttpRequest();
			}
			// Nếu trình duyệt là IE6, IE5
			else 
			{	
			   xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			 // khoi tao 1 ham gui ajax
			 xmlHttp.onreadystatechange = function(){
			 	// neu dtuong  tra ve  2 thong so ben duoi la thanh cong
				 if(xmlHttp.readyState ==4 && xmlHttp.status == 200)
				 {
				 	// thay doi nd cua
				 	document.getElementById("content").innerHTML =xmlHttp.responseText;
				 }
			 };
			  // Khai báo với phương thức GET, và url chính là file result.php
                xmlHttp.open("GET", "result.php", true);
                 
                // Cuối cùng là Gửi ajax, sau khi gọi hàm send thì function vừa tạo ở
                // trên (onreadystatechange) sẽ được chạy
                xmlHttp.send();
			 

		}
	</script>
</head>
<body>
  <div id="content">
  	noi dung ajax se dc load o day
  </div>
  <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click"> 
</body>
</html>