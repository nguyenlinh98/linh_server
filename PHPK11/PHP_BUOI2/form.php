<?php
 /* form : dinh dang nhap lieu
 - ung dung php :login,register,timkiem,cart gio hang,them , sua xoa
  cac bc lam viec voi form 
  b1: kiem tra cac thuoc tinh trong the form 
  	 action  dich den cua du lieu chi dung trong search
	 method  phuong thuc truyen du lieu trong form	
	  	-post: an du lieu ,bao mat thog tin , ko SEO dc ()	
	  	-get :hien thi data, ko bao mat,SEO duoc (form search)
	b2:kiem tra thuoc tinh nam trong cac truong con cua form 
	b3: cu pap truyen du lieu len server	
	b4: thuc thi tra ve client		
	* check nguoi dung da check nut submit hay chua			

  enctype=""  lam viec vs du lieu da phuong tien

  BAI TAP: cho 1 form login (email,password)
  sau khi  an nut dang nhap thi in ra thong tin  da nhap 
 *
 */ 
   if(isset($_POST['login']))
   	{
   		 $email = $_POST['email'];
		 $password = $_POST['password'];
		 echo "Email:".$email;
   	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>form dang nhap</title>
 	<link rel="stylesheet" type="text/css" href="Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Public/css/font-awesome/css/font-awesome.min.css">
 </head>
 <body>
 	  <div class="col-md-5">
 	  	<form action="#" method="post" name="" enctype="">
 	  		<h2>Đăng nhập</h2>
	 		<label for="email">Email:</label>
	 		<input type="email" name="email" placeholder="example@gmail.com" class="form-control" required="required">
	 		<label for="password">Password:</label>
	 		<input type="password" name="password" class="form-control" placeholder="********" min="4" max="12">
	 		<br>
	 		<input type="submit" name="login" class="btn btn-primary">
 	</form>
 	  </div>
  
 </body>
 </html>