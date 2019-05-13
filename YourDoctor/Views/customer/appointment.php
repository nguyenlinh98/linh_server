<?php
include('Views/customer/layouts/header.php');
?>
      <form action="/actionxuly.php">
        <div class="column_attr tieude">
          <h2> Make an Appointment</h2>
          </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
              <form class="form_thontin_customer">
                <div class="column_attr tieude">
                    <h2 class="tt_ca_nhan">Thông tin cá nhân</h2>
                </div>
                <div class="column_attr hoten">
                  <label>họ và tên</label>
                  <input type="text" name="nuberphone" class="form-control">
                </div>
              <div class="column_attr gioitinh">
                <label>giới tính</label>
                <select class="form-control">
                  <option value="0">chọn giới tính</option>
                  <option value="1">nam</option>
                  <option value="2">nữ</option>
                </select>
              </div>
                <div class="column_attr namsinh">
                <label>năm sinh</label>
                <select class="form-control" name="year">
                  <option value="">chọn năm sinh</option>
                  <option value="">2016</option>
                  <option value="">2015</option>
                  <option value="">2014</option>
                  <option value="">2013</option>
                  <option value="">2012</option>
                  <option value="">2011</option>
                  <option value="">2010</option>
                  <option value="">2009</option>
                  <option value="">2008</option>
                  <option value="">2007</option>
                  <option value="">2006</option>
                  <option value="">2005</option>
                  <option value="">2005</option>
                  <option value="">2004</option>
                  <option value="">2003</option>
                  <option value="">2002</option>
                  <option value="">2001</option>
                  <option value="">2000</option>
                  <option value="">1998</option>
                  <option value="">1997</option>
                  <option value="">1996</option>
                  <option value="">1995</option>
                  <option value="">1994</option>
                  <option value="">1993</option>
                  <option value="">1992</option>
                  <option value="">1991</option>
                  <option value="">1990</option>
                  <option value="">1989</option>
                  <option value="">1988</option>
                  <option value="">1987</option>
                  <option value="">1986</option>
                  <option value="">1985</option>
                  <option value="">1984</option>
                  <option value="">1983</option>
                  <option value="">1982</option>
                  <option value="">1981</option>
                  <option value="">1980</option>
                  <option value="">1979</option>
                  <option value="">1978</option>
                  <option value="">1977</option>
                  <option value="">1976</option>
                  <option value="">1975</option>
                  <option value="">1974</option>
                  <option value="">1973</option>
                  <option value="">1972</option>
                </select>
              </div>
              <div class="column_attr dienthoai">
                <label>số điện thoại</label>
                <input type="text" name="nuberphone" class="form-control">
              </div>
              <div class="column_attr email">
                <lable>Email:</label>
                  <input type="email" name="email" class="form-control">
              </div>
              <div class="colum_attr benhvien">
                  <label for="">bạn đã tới bệnh viện chúng tôi?</label>
                <select class="form-control">
                  <option>đã tới</option>
                  <option>chưa tới</option>
                </select>
              </div>
              <div class="colum_attr dangky">
                  <label for="">đăng ký cho:</label>
                <select class="form-control">
                  <option>bản thân</option>
                  <option>gia đình</option>
                  <option>bạn bè</option>
                </select>
              </div>
              </form>
            </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
                <form>
                  <div class="">
                      <h2 class="tt_dat_lich">thông tin đặt lịch</h2>
                  </div>
                  <div class="column_attr namsinh">
                  <label>chuyên khoa</label>
                  <select class="form-control" name="year">
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
                </div>
                <div class="column_attr gioitinh">
                  <label>bác sỹ</label>
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
                </div>
                <div class="column_atrr ngaydat">
                  <label>Ngày đến:</label>
                  <div class='row'>
                    <div class="col-sm-4">
                      <select class="form-control">
                        <option value="day">1</option>
                        <option value="day">2</option>
                        <option value="day">3</option>
                        <option value="day">4</option>
                        <option value="day">5</option>
                        <option value="day">6</option>
                        <option value="day">7 </option>
                        <option value="day">8</option>
                        <option value="day">9</option>
                        <option value="day">7</option>
                        <option value="day">8</option>
                        <option value="day">9</option>
                        <option value="day">10</option>
                        <option value="day">11</option>
                        <option value="day">12</option>
                        <option value="day">13</option>
                        <option value="day">14</option>
                        <option value="day">15</option>
                        <option value="day">16</option>
                        <option value="day">17</option>
                        <option value="day">18</option>
                        <option value="day">19</option>
                        <option value="day">20</option>
                        <option value="day">21</option>
                        <option value="day">23</option>
                        <option value="day">24</option>
                        <option value="day">25</option>
                        <option value="day">27</option>
                        <option value="day">28</option>
                        <option value="day">29</option>
                        <option value="day">30</option>
                        <option value="day">31</option>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <select class="form-control">
                        <option value="moth">1</option>
                        <option value="moth">2</option>
                        <option value="moth">3</option>
                        <option value="moth">4</option>
                        <option value="moth">5</option>
                        <option value="moth">6</option>
                        <option value="moth">7 </option>
                        <option value="moth">8</option>
                        <option value="moth">9</option>
                        <option value="moth">7</option>
                        <option value="moth">8</option>
                        <option value="moth">9</option>
                        <option value="moth">10</option>
                        <option value="moth">11</option>
                        <option value="moth">12</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select class="form-control">
                        <option value="date_year">2019</option>
                      </select>
                    </div>
                  </div>
                  <div class="column_attr time">
                    <label for="">khung giờ đặt lịch</label>
                    <select class="form-control">
                      <option value="time">8:30AM </option>
                      <option value="time">9:30AM </option>
                      <option value="time">10:30AM</option>
                      <option value="time">1:30PM </option>
                      <option value="time">2:30PM </option>
                      <option value="time">3:30PM </option>
                      <option value="time">4:30PM</option>
                      <option value="time">5:30PM</option>
                      <option value="time">6:30PM </option>

                    </select>
                  </div>
                  <div class="colum_attr dangky">
                      <label for="">triệu chứng:</label>
                       <textarea col="5" rows="10" class="form-control"></textarea>
                  </div>
                </form>
              </div>
            </div>
       </div>
       <div class="row">
         <div class="col-sm-7">
           <div class="formnoidung">
             <div class="column_atrr tieude">
               <h3>Xin quý khách vui lòng lưu ý:</h3>
             </div>
             <div class="noidung">
               <ol>
                 <li>Việc đặt hẹn trên website của Phòng khám Đa khoa Ngọc Minh nhằm phục vụ cho việc lập kế hoạch,
                   chúng tôi sẽ liên lạc qua số điện thoại quý khách cung cấp trong thời gian sớm nhất để xác nhận
                    lịch hẹn.
                  </li>
                   <li>Quý khách có thể đặt lịch khám qua hệ thống của chúng tôi để xác định trước ngày giờ và bác sĩ
                      khám bệnh nhằm giảm bớt thời gian chờ đợi và chủ động với công việc của chính mình.
                  </li>
                   <li>Phòng khám Đa khoa Your Doctor, nhân viên và cũng như các bác sĩ của phòng khám, người đã nhận đặt hẹn
                     với quý khách trên trang web của phòng khám, sẽ chưa đồng ý cung cấp bất kỳ dịch vụ y tế, chẩn đoán
                     hay thủ thuật điều trị nào cho đến khi quý khách đến đăng ký trực tiếp tại Phòng khám Đa khoa  Your Doctor.
                   </li>
                 </ol>
             </div>
             <div class="btn_datlich">
               <input type="submit" name="btn_datlich" value="dặt lịch" class="btn btn-primary">
             </div>
           </div>
         </div>
       </div>
      <form>
<?php
include('Views/customer/layouts/footer.php');
?>