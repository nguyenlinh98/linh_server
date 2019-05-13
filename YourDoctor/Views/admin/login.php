<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Public/css/manager.css">
    <link rel="stylesheet" type="text/css" href="Public/css/font-awesome/css/font-awesome.min.css">
</head>
  <body>
    <div class="">

      <div class="backgroup_image">
        <img src="Uploads/images/backgroup2.jpg" alt=""style="height:1128px">
      </div>
      <div class="form container">
          <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12 form">
              <div class="contend_login">
                <!-- form login -->
                <form action="index.php?mod=admin&&act=login" method="POST">
                    <div class="tittle_login">
                      <h1 style="text-align:center; color:black;">ĐĂNG NHẬP</h1>
                    </div>
                    <br><br>
                    <div class="column_attr_user">
                      <label for="account">email:</label>
                      <input type="Email" name="email" class="form-control" placeholder="Email....">
                    </div>
                    <div class="column_attr_pass">
                      <label for="pass">Password:</label>
                      <input type="password" name="password" class="form-control" placeholder="password...">
                    </div>
                    <div class="row container-fluid">
                       <div class="checkbox col-md-6">
                         <label><input type="checkbox"> Remember me</label>
                       </div>
                       <div class="col-md-6">
                           <button type="submit" class=" btn btn-primary login right" style="margin: 5px;">đăng nhập</button>
                       </div>

                     </div>
                    <div class="column_lay_user">
                      <a href="#">Forgot username?</a>
                    </div>
                   <div class="column_lay_pass">
                     <a href="#">Forgot password?</a>
                   </div>
                   <br><br>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
<?php include('Views/admin/layouts/footer.php');?>
