<?php include('Views/admin/layouts/header.php');?>
     <div class="container">
       <div class="row">
         <div class="col-sm-6">
           <form class="name_medical" action="?mod=department&act=update" method="post" enctype='multipart/form-data'>
             <h2>SỬA THÔNG TIN CHUYÊN KHOA</h2>
            
               <label for="">ID chuyên khoa :</label>
               <input type="text" name="id" class="form-control" value="<?php echo $depart["id"]; ?>">
                <label for="">Chuyên khoa</label>
               <input type="text" name="name" class="form-control" value="<?php echo $depart["name"]; ?>">
               <div class="form-group">
                 <label for="incon">Chọn file:</label>
                 <input type="file" name="icon">
                 <p class="help-block">Example block-level help text here.</p>
               </div>
               <div class="group-form">
                  <button type="submit" class="btn btn-primary">Sửa</button>
               </div>
           </form>
         </div>
       </div>
     </div>
<?php include('Views/admin/layouts/footter.php');?>