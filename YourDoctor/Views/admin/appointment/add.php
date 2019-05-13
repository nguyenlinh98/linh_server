<?php
include("Views/admin/layouts/header.php");
?>
 <style media="screen">
   .form_add{
     width: 450px;
     margin: 50px 100px;
   }
 </style>
 <div class="">
     <div class="row" style="">
      <div class="container">
               <div class="form_add">
         <div class="tittle_form_add">
           <h1>Calendar</h1>
           <small> Add calendar </small>
         </div>
         <div class="form_contend">
           <label> Patient Id</label>
           <input type="text" name="pa_Id" class="form-control"  />
           <label> Department Name</label>
           <select class="form-control" name="day">
             <option value="id_chuyen_khoa">chon chuyen khoa</option>
             <option value="">hô hấp</option>
             <option value="">tim mạch-lão học</option>
             <option value="">nội tiếp-tiểu đường</option>
             <option value="">Tai mũi họng</option>
             <option value="">Sản-phụ khoa</option>
             <option value="">Răng hàm mặt</option>
             <option value="">Nội thận</option>
             <option value="">Nội cơ-xương-khớp</option>
             <option value="">chẩn đoán hình ảnh</option>
             <option value="">Ngoại tổng quát</option>
             <option value="">Ngoại tiết liệu</option>
           </select>
           <label>Doctor</label>
           <select class="form-control">
             <option value="0">Trần Văn Ngọc</option>
             <option value="1">Nguyễn Hồng Phong</option>
             <option value="2">Phạm Khánh Ly</option>
             <option value="0">Trần Văn Ngọc</option>
             <option value="1">Mưu Nhược</option>
             <option value="2">Phạm Tiến Tài</option>
             <option value="0">Trần Văn Ngọc3</option>
             <option value="1">Nguyễn Hồng Phong2</option>
             <option value="2">bình mình</option>
           </select>
           <label>Appionment date</label>
           <input type="date" name="date_Ap" class="form-control">
           <label>Problem</label>
           <textarea name="problem" rows="8" cols="80" class="form-control"
           ></textarea>
           <label>Status</label><br>
           <input type="radio" name="status" value="active">active
           <input type="radio" name="status" value="inactive">Inactive
           <div class="btn_form">
             <button type="button" class=" btn-primary">add</button>
             <button type="button" class=" btn-warning">resert</button>
           </div>
         </div>
       </div>
      </div>
     </div>
 </div>
<?php
include("Views/manager/layouts/footer.php");
?>