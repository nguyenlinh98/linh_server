<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Public/css/manager.css">
    <link rel="stylesheet" type="text/css" href="Public/css/font-awesome/css/font-awesome.min.css">

  </head>
  <body>
        <div class="container content_form">
            <div class="row" style="position:relative;">
              <div class="col-sm-12 form_register ">
                  <form class="form_thontin_customer"action="index.php?mod=admin&&act=store" method="POST">
                    <div class="column_attr tieude">
                        <h2 class="tittle_tieude"><i class="fa fa-unlock"></i> Đăng ký admin</h2>
                        <small>Please enter your data to register.</small>
                    </div>
                    <hr size="2px" color="#dcdde1">
                     <form class="form_dangky">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="column_attr hoten">
                           <label>Họ và tên:</label>
                           <input type="text" name="name" class="form-control">
                           <small>Your unique username to app</small>
                          </div>
                          <div class="column_attr email">
                           <label>Email:</label>
                           <input type="email" name="email" class="form-control">
                           <small>Your address email to contact</small>
                          </div>
                          <div class="column_attr matkhau">
                             <label>Mật khẩu:</label>
                             <input type="password" name="password" class="form-control">
                             <small>Your hard to guess password</small>
                          </div>
                          <div class="column_attr comform_pass">
                             <label>Xác nhân mat khâu:</label>
                             <input type="password" name="pass" class="form-control">
                             <small>Please repeat your pasword</small>
                          </div>
                          
                        </div>
                        <div class="col-sm-6">
                          <div class="column_attr Repeat Password">
                             <div class="column_attr comform_pass">
                             <label>Số điện thoại:</label>
                             <input type="text" name="phone" class="form-control">
                             <small>Your unique phone to app </small>
                           </div>
                         <div class="column_attr address">
                           <label>Địa chỉ :</label>
                           <input type="text" name="address" class="form-control">
                           <small>Your unique address to app</small>
                        </div>
                        <div class="column_attr chuyenkhoa  ">
                           <label> Chuyên khoa :</label>
                           <select name="department" id="department"  class="form-control">
                            <?php
                                foreach ($department as $department) {
                            ?>
                              <option value="<?php echo $department['id'] ;?>"><?php echo $department['name']; ?></option>
                            <?php
                                 } 
                             ?>
                           </select>
                           
                        </div>
                        <br>
                        <div class="btn_register">
                          <button type="submit" class="btn btn-success">đăng ký </button>
                          <button type="reset" class="btn btn-warning">quay lai</button>
                        </div>
                         <br>
                        </div>
                      </div>
                   </form>
                 </form>
               </div>
            </div>
        </div>
 <!-- jQuery -->
    <script src="Public/js/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="Public/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="Public/js/main.js"></script>
     <script src="Public/js/fontawesome.min.js"></script>
  </body>
</html>