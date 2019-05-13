<?php include('Views/admin/layouts/header.php');?>
    <div class="">
      <a href="?mod=department&&act=showAdd" class="btn btn-primary"><i class="fa fa-clipboard"></i>Insert</a>
      <form class="navbar-form navbar-right" action="index.html" method="post" >
        <div class="form_search">
         search: <input type="text" name="name_search" value="" class="form-control">
          <button type="submit" name="button" class="btn btn-default">
             <i class="fa fa-search"></i>
          </button>
        </div>
      </form>
      <table class="table table-hover table-bordered department_table">
          <h2>DANH SÁCH CHUYÊN KHOA</h2>
             <thead>
              <tr>
                <th class="col-md-4">Chuyên khoa</th>
                <th class="col-md-2">Ảnh khoa</th>
                <th class="col-md-4">Hoạt động</th>
              </tr>
             </thead>
             <tbody>
               <?php
                foreach ($department as $department) {
                  ?>
                  <tr>
                    <td><?php echo $department["name"] ?></td>
                    <td class="icon_khoa"><img src="<?php echo $department["image"]; ?>"></td>
                    <td>
                        <a href="?mod=department&&act=showEdit&&id=<?php echo $department['id']?>" class="btn btn-primary btn-lg">
                          <i class="fa fa-wrench "></i>
                        </a>
                        <a href="?mod=department&&act=del&&id=<?php echo $department['id']?>" class="delete btn btn-danger btn-lg">
                          <i class="fa fa-trash"></i>
                        </a>
                    </td>
                  </tr>
                  <?php
                 } 
                ?>
             </tbody>
      </table>
    </div>
<?php include('Views/admin/layouts/footer.php');?>
