<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>customer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Public/css/customer.css">
    <link rel="stylesheet" type="text/css" href="Public/css/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
           <li class="dropdown">
                 <a class="navbar-brand dropdown-toggle" data-toggle="dropdown" href="#">Chuyên khoa</a>
                 <div class="dropdown-menu clear">
                  <div class="row container">
                      <div class="dropdown-item">
                        <div class="col-sm-2">
                          <a class="" href="#">hô hấp</a>
                        </div>
                        <div class="col-sm-2">
                          <a class="" href="#">tim mạch-lão học</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="" href="#">nội tiếp-tiểu đường</a>
                        </div>
                        <div class="col-sm-2">
                          <a href="#">Tai mũi họng</a>
                        </div>
                        <div class="col-sm-2">
                          <a href="#">Sản-phụ khoa</a>
                        </div>
                        <div class="col-sm-2">
                          <a href="#">Răng hàm mặt</a>
                        </div>
                        <div class="col-sm-2">
                          <a href="#">Nội thận</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#">Nội cơ-xương-khớp</a>
                        </div>
                        <div class="col-sm-2">
                          <a href="#">chẩn đoán hình ảnh</a>
                        </div>
                        <div class="col-sm-2">
                          <a href="#">Ngoại tổng quát</a>
                        </div>
                        <div class="col-sm-2">
                          <a href="#">Ngoại tiết liệu</a>
                        </div>
                      </div>
                  </div>
                </div>
             </li>
             <li class="active">
             <a href="#">trang chủ</a>
            </li>
            <li>
            <a href="#">dịch vụ y khoa</a>
           </li>
            <!-- gioithieu -->
            <li class="dropdown dropdown-defauilt">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">giới thiệu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">giới thiệu phòng khám</a></li>
                <li><a href="#">tiêu chuẩn chất lượng</a></li>
                <li><a href="#">đội ngũ bác sỹ</a></li>
                <li><a href="">kỹ thuật điều trị</a></li>
                <li><a href="#">tiện nghi</a></li>
              </ul>
            </li>
             <li class="dropdown dropdown-defauilt">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> phong kham dien tu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">XEM HỒ SƠ ĐIỆN TỬ</a></li>
                <li><a href="#">GIỚI THIỆU PHÒNG KHÁM ĐIỆN TỬ</a></li>
              </ul>
            </li>
            <li class="dropdown">
             <a class="drop-toggle" data-toggle="dropdown" href="#">Lịch khám và đặt lịch</a>
               <ul class="dropdown-menu">
                 <li><a href="#">lịch khám</a></li>
                 <li><a href="#">đặt lịch</a></li>
               </ul>
            </li>
            <li class="dropdown">
             <a class="drop-toggle" data-toggle="dropdown" href="#">liên hệ</a>
               <ul class="dropdown-menu">
                 <li><a href="#">tuyển dụng</a></li>
               </ul>
            </li>
            <!-- search -->
           <li>
             <form class="navbar-form" action="/process_search.php">
               <div class="input_group">
                 <input type="text"class="form-control" name="search" placeholder="Search">
                 <button class="btn btn-default" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
              </form>
           </li>
         </ul>
    </nav>
<?php  include("Views/customer/layouts/carousel.php");?>