<?php
include("Views/admin/layouts/header.php");
?>
 <div class="">
       <div class=""><h1> ALL DOTOR</h1></div>
        <div class="table-responsive">
          <a type="button" class="btn btn-primary button_add" href="?mod=doctor&&act=showadd">Add new <span class="glyphicon-plus"></span></a>
          <div class="form_search">
              <form action="#" method="get" accept-charset="utf-8">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                  </div>
                  <div class="col-md-6 col-sm-12 search">
                    <div class="navbar-form navbar-right">
                      search:<input type="text" name="seach_form_doctor" class="form-control">
                    </div>
                  </div>
                </div>
            </form>
          </div>
          <div class="all_doctor">
               <table class="table table-hover table-bordered">
                <thead class="tittle_doctor">
                  <tr class="row">
                    <th class="col-sm-2">Name</th>
                    <th class="col-sm-2">Department</th>
                    <th class="col-sm-2">Mobile</th>
                    <th class="col-sm-2">Email</th>
                    <th class="col-sm-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="Uploads/images/doctor1.png"class="img-circle avatar">
                    </td>
                    <td>Hoàng Anh</td>
                    <td>khoa tim mạch</td>
                    <td>78937858283</td>
                     <td>abc@gmail.com</td>
                     <td>
                      <a href="Views/manager/department/edit.php" class="btn btn-primary btn-lg">
                        <i class="fa fa-wrench "></i>
                      </a>
                      <a href="#" class="delete btn btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="Uploads/images/doctor2.jpg"class="img-circle avatar">
                    </td>
                    <td>Hoàng Anh</td>
                    <td>khoa tim mạch</td>
                    <td>78937858283</td>
                    <td>abc@gmail.com</td>
                    <td>
                      <a href="Views/manager/department/edit.php" class="btn btn-primary btn-lg">
                        <i class="fa fa-wrench "></i>
                      </a>
                      <a href="#" class="delete btn btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="Uploads/images/doctor2.jpg"class="img-circle avatar" >
                    </td>
                    <td>Hoàng Anh</td>
                    <td>khoa tim mạch</td>
                    <td>78937858283</td>
                     <td>abc@gmail.com</td>
                    <td>
                      <a href="Views/manager/department/edit.php" class="btn btn-primary btn-lg">
                        <i class="fa fa-wrench "></i>
                      </a>
                      <a href="#" class="delete btn btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="Uploads/images/doctor1.png"class="img-circle avatar">
                    </td>
                    <td>Hoàng Anh</td>
                    <td>khoa tim mạch</td>
                    <td>78937858283</td>
                    <td>abc@gmail.com</td>
                    <td>
                      <a href="Views/manager/department/edit.php" class="btn btn-primary btn-lg">
                        <i class="fa fa-wrench "></i>
                      </a>
                      <a href="#" class="delete btn btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="Uploads/images/doctor10.jpg"class="img-circle avatar">
                    </td>
                    <td>Hoàng Anh</td>
                    <td>khoa tim mạch</td>
                    <td>78937858283</td>
                    <td>abc@gmail.com</td>
                    <td>
                      <a href="Views/manager/department/edit.php" class="btn btn-primary btn-lg">
                        <i class="fa fa-wrench "></i>
                      </a>
                      <a href="#" class="delete btn btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="Uploads/images/doctor10.jpg"class="img-circle avatar">
                    </td>
                    <td>Hoàng Anh</td>
                    <td>khoa tim mạch</td>
                    <td>78937858283</td>
                    <td>abc@gmail.com</td>
                    <td>
                      <a href="Views/manager/department/edit.php" class="btn btn-primary btn-lg">
                        <i class="fa fa-wrench "></i>
                      </a>
                      <a href="#" class="delete btn btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
               </table>
          </div>
        </div>
    </div>   
<?php
  include("Views/admin/layouts/footer.php");
?>