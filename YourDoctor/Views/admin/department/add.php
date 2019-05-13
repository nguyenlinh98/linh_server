
<?php include('Views/admin/layouts/header.php');?>
<div class="container">
      <div class="row">
        <div class="col-sm-6 insert">
          <form class="name_medical" action="?mod=department&&act=add" method="post" enctype='multipart/form-data'>
            <h2>FORM INSERT MEDICAL</h2>
            <label for="name">Medical</label>
            <input type="text" name="name" class="form-control">
            <div class="form-group">
              <label for="icon">File input</label>
              <input type="file" name="icon">
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="group-form">
               <button type="submit" class="btn btn-default">Insert</button>
            </div>
            <br>
          </form>
        </div>
      </div>
</div>
<?php include('Views/admin/layouts/footter.php');?>
