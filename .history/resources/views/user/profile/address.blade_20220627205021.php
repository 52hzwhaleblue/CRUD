@extends('user.layout')

@section('title')
Thông tin
@endsection

@section('content')
  <!-----------------------infomation------------------ -->
  <div class="profile-wrapper">
    <div class="wrap-content">
        @include('user.partials.profile-left')
        <div class="info-1">
          <div class="heading">Tạo sổ địa chỉ</div>
            <div class="dfHeIP">
              <div class="info">
                 <div class="info-left">
  
                  <div class="khBVOu">
                    <from>
                        <div class="form-name">
                          <div class="form-control">
                            <label class="input-label">Họ và Tên</label>
                            <div>
                              <div class="hisWEc">
                                <input class="input " type="search">
                              </div>
                            </div>
                          </div>
                          <div class="form-control">
                            <label class="input-label">Công ty</label>
                            <div>
                              <div class="hisWEc">
                                  <input type="text" required="" name="telephone" placeholder="Nhập tên công ty" class="Input-sc-17i9bto-0 girQwT" value="">
                          </div>  
                     </div>        
                  </div>
                  <div class="form-control">
                      <label class="input-label">Số điện thoại</label>
                      <div>
                        <div class="hisWEc">
                          <input type="text" required="" name="telephone" placeholder="Nhập số điện thoại" class="Input-sc-17i9bto-0 girQwT" value="">
                    </div> 
                  </div>
                 </div>
                 <div class="form-control">
                  <label class="input-label">Tỉnh/Thành phố</label>
                  <div>
                    <div class="hisWEc">
                      <select required=""><option value="">Chọn Tỉnh/Thành phố</option><option value="294">Hồ Chí Minh</option><option value="297">Hà Nội</option><option value="291">Đà Nẵng</option><option value="278">An Giang</option><option value="280">Bà Rịa - Vũng Tàu</option><option value="282">Bắc Giang</option><option value="281">Bắc Kạn</option><option value="279">Bạc Liêu</option><option value="283">Bắc Ninh</option><option value="284">Bến Tre</option><option value="285">Bình Dương</option><option value="286">Bình Phước</option><option value="287">Bình Thuận</option><option value="316">Bình Định</option><option value="289">Cà Mau</option><option value="290">Cần Thơ</option><option value="288">Cao Bằng</option><option value="293">Gia Lai</option><option value="295">Hà Giang</option><option value="296">Hà Nam</option><option value="299">Hà Tĩnh</option><option value="300">Hải Dương</option><option value="301">Hải Phòng</option><option value="319">Hậu Giang</option><option value="302">Hoà Bình</option><option value="320">Hưng Yên</option><option value="321">Khánh Hòa</option><option value="322">Kiên Giang</option><option value="323">Kon Tum</option><option value="304">Lai Châu</option><option value="306">Lâm Đồng</option><option value="305">Lạng Sơn</option><option value="324">Lào Cai</option><option value="325">Long An</option><option value="326">Nam Định</option><option value="327">Nghệ An</option><option value="307">Ninh Bình</option><option value="328">Ninh Thuận</option><option value="329">Phú Thọ</option><option value="308">Phú Yên</option><option value="309">Quảng Bình</option><option value="310">Quảng Nam</option><option value="311">Quảng Ngãi</option><option value="330">Quảng Ninh</option><option value="312">Quảng Trị</option><option value="313">Sóc Trăng</option><option value="331">Sơn La</option><option value="332">Tây Ninh</option><option value="333">Thái Bình</option><option value="334">Thái Nguyên</option><option value="335">Thanh Hóa</option><option value="303">Thừa Thiên Huế</option><option value="336">Tiền Giang</option><option value="314">Trà Vinh</option><option value="315">Tuyên Quang</option><option value="337">Vĩnh Long</option><option value="338">Vĩnh Phúc</option><option value="339">Yên Bái</option><option value="292">Đắk Lắk</option><option value="340">Đắk Nông</option><option value="341">Điện Biên</option><option value="317">Đồng Nai</option><option value="318">Đồng Tháp</option></select>
                </div> 
              </div>
             </div>
             <div class="form-control">
              <label class="input-label">Quận huyện</label>
              <div>
                <div class="hisWEc">
                  <select required=""><option value="">Chọn Quận/Huyện</option><option value="484">Quận 1</option><option value="485">Quận 2 - TP Thủ Đức</option><option value="486">Quận 3</option><option value="487">Quận 4</option><option value="488">Quận 5</option><option value="489">Quận 6</option><option value="490">Quận 7</option><option value="491">Quận 8</option><option value="492">Quận 9 - TP Thủ Đức</option><option value="493">Quận 10</option><option value="494">Quận 11</option><option value="495">Quận 12</option><option value="496">Quận Bình Tân</option><option value="497">Quận Bình Thạnh</option><option value="498">Quận Gò Vấp</option><option value="499">Quận Phú Nhuận</option><option value="500">Quận Tân Bình</option><option value="501">Quận Tân Phú</option><option value="502">Quận Thủ Đức - TP Thủ Đức</option><option value="503">Huyện Bình Chánh</option><option value="504">Huyện Cần Giờ</option><option value="505">Huyện Củ Chi</option><option value="506">Huyện Hóc Môn</option><option value="507">Huyện Nhà Bè</option></select>
            </div> 
          </div>
         </div>
         <div class="form-control">
          <label class="input-label">Phường xã:</label>
          <div>
            <div class="hisWEc">
              <select required=""><option value="">Chọn Phường/Xã</option><option value="10379">Phường Bến Nghé</option><option value="10380">Phường Bến Thành</option><option value="10381">Phường Cầu Kho</option><option value="10382">Phường Cầu Ông Lãnh</option><option value="10383">Phường Cô Giang</option><option value="10384">Phường Đa Kao</option><option value="10385">Phường Nguyễn Cư Trinh</option><option value="10386">Phường Nguyễn Thái Bình</option><option value="10387">Phường Phạm Ngũ Lão</option><option value="10388">Phường Tân Định</option></select>
          </div> 
         </div>
        </div>
        <div class="form-control">
          <label class="input-label">Địa chỉ:</label>
          <div>
            <div class="hisWEc">
              <textarea required="" name="street" rows="5" placeholder="Nhập địa chỉ"></textarea>
        </div> 
      </div>
     </div>
     <div class="form-control">
      <label class="input-label">Giới tính</label>
      <label class="eQckrx">
      <input type="radio" name="gender" value="male">
      <span class="label">Nhà riêng / Chung cư</span>
      </label><p>
      <label class="eQckrx">
        <input type="radio" name="gender" value="male">
        <span class="label">Cơ quan / Công ty</span>
        </label>
      </div>  
      <div class="form-control">
          <label class="input-label">&nbsp;</label>
          <label class="check"><input type="checkbox">
          </span><span class="label"><p>Đặt làm địa chỉ mặc định</p></span>
      </label>
      </div>  
      <div class="form-control">
          <label class="input-label">&nbsp;</label>
          <button type="submit" class="btn-submit">Cập nhật</button> 
      </label>
      </div> 
             
      </div>
     </div>

       
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
                // Thêm vào giỏ hàng
                $(".LTD").click(function() {
            
                    var id_user = $('.profile-id').data('userid');
                    var email = $('.profile-email').data('useremail');
                    var fullname = $('.profile-name').data('username');
                    alert(fullname);
                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'post',
                        url: '/addToCart',
                        data: {
                            id_user: id_user,
                            email: email,
                            fullname: fullname,
                        },
                    dataType: 'json',
                    });
    
                    })
            });
    </script>
@endsection