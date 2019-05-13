<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
        <a href="index.php?mod=user&act=create" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            foreach($data as $row){ 
            ?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td>
                    <a href="index.php?act=show&id=<?php echo $row['id'];?>" class="btn btn-success">Detail</a> 
                     <a href="index.php?mod=user&act=edit&id=<?php echo $row['id'];?>" class="btn btn-warning">Update</a>  
                    <a href="index.php?mod=user&act=delete&id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <?php 
                }
              ?>
            </tbody>
          </table>
    </div>
</body>
</html>