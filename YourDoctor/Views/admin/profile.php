

<?php include('Views/admin/layouts/header.php');?>
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Hồ sơ cá nhân</h3>
        </div>
        <div class="panel-body">
        <!-- user detail -->
        <div class="col-sm-3">
          <div class="box">
            <div class="box-header">
                <img src="Uploads/images/anh1.jpg" class="img-circle" >
            </div>
            <div class="box-content">
              <div class="name_user">
                <h4> Hwang Min Hyun</h4>
                <p><i class="fa fa-map-marker"></i>Korea</p>
              </div>     
               <hr  color="#b2bec3" size="4px">
              <div class="user_des">
                  <div class="text-left container">
                    <div class="row">
                        <p class="">Address : Hoàng Mai, Hà Nôi</p>
                    </div>
                    <div class="row ">
                      <p>Phone : 02894839758</p>
                    </div>
                  </div>
                  <div class="text-left">
                      <p>
                        bác sĩ chuyên khoa nội có kinh nghiêm cao
                        chuyên ngành nội tiêt  và cac tiêu phẫu
                        bác sĩ chuyên khoa nội có kinh nghiêm cao
                      </p>
                  </div>
              </div>
            </div>
            <!-- <div class="">
              <div class="col-md-4">
                <a href="#" class="" >
                  <h5> <i class="fa fa-users">241</i>project </h5>
                   
                </a>
              </div>
            
              <div class="col-md-4">
                <a href="#" class="" >
                  <h5>last onlie <i>20 min</i></h5>
                 
                </a>
              </div>
            </div> -->
          </div>
        </div>
        <!-- end user detail -->
        <div class="col-sm-9">
            
            <div class="panel panel-default">
                <div class="panel-heading">Upload ảnh đại diện</div>
                <div class="panel-body">
                    <form action="" method="POST" onsubmit="return false;" id="formUpAvt" enctype="multipart/form-data">
                        <div class="form-group box-current-img">
                            <p><strong>Ảnh hiện tại</strong></p>
                            <img src="Uploads/images/anh1.jpg" width="80" height="80">
                        </div>
                        <div class="alert alert-info">
                          Vui lòng chọn file ảnh có đuôi .jpg, .png, .gif và có dung lượng dưới 5MB.
                        </div>
                        <div class="form-group">
                            <label>Chọn hình ảnh</label>
                            <input type="file" class="form-control" id="img_avt" name="img_avt" onchange="preUpAvt();">
                        </div>
                        <div class="form-group box-pre-img hidden">
                            <p><strong>Ảnh xem trước</strong></p>
                        </div>            
                        <div class="form-group hidden box-progress-bar">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary pull-right" type="submit">Upload</button>
                            
                        </div>
                        <div class="clearfix"></div><br>
                        <div class="alert alert-danger hidden"></div>
                    </form>
                </div>
            </div>
        </div>
      </div> 
      </div>
      
    </div>
<?php include('Views/admin/layouts/footer.php');?>
