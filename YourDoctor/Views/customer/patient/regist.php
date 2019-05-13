

<!DOCTYPE html>
<html>
<head>
	<title>form dang ky</title>
	<link rel="stylesheet" type="text/css" href="Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Public/css/customer.css">
    <link rel="stylesheet" type="text/css" href="Public/css/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap JavaScript -->
<!--     <script src="Public/js/bootstrap.min.js"></script> -->
    <style>
    	#form_register{
			position: absolute;
			display: none;
    	}
    </style>
</head>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				 <form action="index.php?mod=customer&&act=store" method="post">
				 	<div class="col-md-9" id="form_login">
				 		<div>
				 			<div class="tittle">
				 				<h1>ĐĂNG KÝ</h1>
				 			</div>		
				 			
				 				<div class="form-group">
				 					<label for="email">Tài khoản:</label>
				 					<input type="email" name="email" class="form-control" required="">
				 				</div>
				 				<div class="form-group">
				 					<label for="email"> Mật khẩu:</label>
				 					<input type="password" name="password" class="form-control" required>
				 				</div>
				 				<div class="form-group">
				 					<button style="submit" class=" btn btn-primary" id="Sigin"> Tiếp theo</button>
				 					<button style="reset" class=" btn btn-warning">Reset</button>
				 				</div>
				 			
				 		</div>
				 	</div>
				 	<div class="col-md-12" id="form_register">
				 	
				 			<div  class="tittle">
				 				<h1> Thông tin cá nhân</h1>
				 			</div>
				 		       	<div class="col-md-6">
				 		     		<div class="form-group">
				 		     			<label for="name"> Họ tên </label>
				 		     			<input type="text" name="name"  class="form-control">
				 		     		</div>
				 		     	 	<div class="form-group">
				 		     	 		<label for="phone">số điện thoại</label>
				 		     			<input type="text" name="phone"  class="form-control">
				 		     	 	</div>
				 		     		<div class="form-group">
				 		     			<label for="name"> tuổi </label>
				 		     			<input type="text" name="age"  class="form-control">
				 		     		</div>
				 		     	 	<div class="form-group">
				 		     	 		<label for="name"> giới tính </label>
				 		     			<input type="radio" name="sex" value="1">Nam  
				 		     			<input type="radio" name="sex" value="0"> Nữ 
				 		     	 	</div>
				 		     	 	<div class="form-group">
				 		     	 		<button type="submit"  name ="submit"class=" btn btn-primary"> Đăng kí</button>
				 		     	 		<button type="reset" class=" btn btn-warning">Reset</button>
				 		     	 	</div>
				 		     	</div>
				 		     	<div class="col-md-6">
				 		     		<div class="form-group">
				 		     			<label for="">Tỉnh /Thành</label>
				 		     			<select name="dstinhthanh" id="dstinhthanh" class="form-control">
				 		     				<option value=""  selected="selected"></option>
				 		     				<?php foreach ($provinces as $province): ?>
				 		     					<option value="<?php echo $province['id']; ?>" ><?php echo $province['name']; ?></option>
				 		     				<?php endforeach ?>
				 		     				
				 		     			</select>
				 		     		</div>
				 		     		<div class="form-group">
				 		     			<label for="">Huyện/ Quận </label>
				 		     			<select name="dshuyenquan" id="dshuyenquan" class="form-control">
				 		     				<option  value="10100">Kh&#244;ng x&#225;c định</option>
											
				 		     			</select>
				 		     		</div>
				 		     		
				 		     		<div class="form-group">
				 		     		 	<label for="stree">Địa chỉ</label>
				 		     		 	<input type="text" name="address" class="form-control">
				 		     		 </div>
				 		     	</div>
				 	</div>
				 </form>
			</div>
		</div>
	</div> 
	<script type="text/javascript" src="Public/js/jquery.js"></script>
	<script>
		$('#Sigin').click(function(event){
			 
			event.preventDefault();
			$('#form_register').toggle();
			$('#form_login').toggle();
		});

		$('#dstinhthanh').change(function (){
			$.ajax({
				type:'post',
				url : 'index.php?mod=province&&act=districts',
				data : {
					'province_id' : $(this).val(),
				},
				success:function($data){
					$('#dshuyenquan').html($data);
					// $('#dshuyenquan').append($data);
					// $('input[name=name]').val($data);
				}
			});
		});


	</script>

</body>
</html>