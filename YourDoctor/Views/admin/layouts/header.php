
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
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><h3 style="margin-top: 0px;
    color: aliceblue;">HEATHY ADMIN</h3></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
            </form>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li style="text-align: right;"><a href="?mod=user&act=show&&admin_id=5"><span class="fa fa-user"></span> User Profile</a></li>
                <li><a href="#"><span class="fa fa-cog"></span>Setting</a></li>
                <li><a href="?mod=user&act=logout"><span class="fa fa-sign-out"></span>Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
<?php  include("Views/admin/layouts/nav.php");?>

    