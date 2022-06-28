@extends('user.layout')

@section('title')
Thông tin
@endsection

@section('content')
  <!-----------------------infomation------------------ -->
  <div class="container">
    <div class="a1">
     <a href=""> <span>Trang chủ</span></a> 
       <i class="fa-solid fa-angle-right"></i>
       <span>Thông tin tài khoản</span>
    </div>
    <div class="icon">
            <img src="images/avatar.png">
            <div class="info">
                <p>Tài khoản của</p>
                <strong>Trần Tuấn</strong>
            </div>
    </div>
    <ul class="abc">
        <li>
        <a class="is-active" href="">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" 
        viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 
        1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
        <span>Thông tin tài khoản</span>
       </a>
       </li>
       <li>
        <a class="is-active" href="">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" 
            viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"></path></svg>
        <span>Thông báo của tôi</span>
       </a>
       </li>
       <li>
        <a class="is-active" href="">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" 
            viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z"></path></svg>
        <span>Quản lí đơn hàng</span>
       </a>
       </li>
       <li>
        <a class="is-active" href="">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
             viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
             <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path></svg>
        <span>Số địa chỉ</span>
       </a>
       </li>
       <li>
        <a class="is-active" href="">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" 
            viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"></path></svg>
        <span>Thông tin thanh toán</span>
       </a>
       </li>
    </ul>
    <div class="info">
      <div class="info-1">
        <div class="heading">Tạo sổ địa chỉ</div>
          <div class="dfHeIP">
            <div class="info">
               <div class="info-left">

                <div class="khBVOu">
                  <from>
                      <div class="form-name">
                        <div class="form-control1">
                          <label class="input-label">Họ và Tên</label>
                          <div>
                            <div class="hisWEc">
                              <input class="input " type="search">
                            </div>
                          </div>
                        </div>
                        <div class="form-control1">
                          <label class="input-label">Công ty</label>
                          <div>
                            <div class="hisWEc">
                                <input type="text" required="" name="telephone" placeholder="Nhập tên công ty" class="Input-sc-17i9bto-0 girQwT" value="">
                        </div>  
                   </div>        
                </div>
                <div class="form-control1">
                    <label class="input-label">Số điện thoại</label>
                    <div>
                      <div class="hisWEc">
                        <input type="text" required="" name="telephone" placeholder="Nhập số điện thoại" class="Input-sc-17i9bto-0 girQwT" value="">
                  </div> 
                </div>
               </div>
               <div class="form-control1">
                <label class="input-label">Tỉnh/Thành phố</label>
                <div>
                  <div class="hisWEc">
                    <select required=""><option value="">Chọn Tỉnh/Thành phố</option><option value="294">Hồ Chí Minh</option><option value="297">Hà Nội</option><option value="291">Đà Nẵng</option><option value="278">An Giang</option><option value="280">Bà Rịa - Vũng Tàu</option><option value="282">Bắc Giang</option><option value="281">Bắc Kạn</option><option value="279">Bạc Liêu</option><option value="283">Bắc Ninh</option><option value="284">Bến Tre</option><option value="285">Bình Dương</option><option value="286">Bình Phước</option><option value="287">Bình Thuận</option><option value="316">Bình Định</option><option value="289">Cà Mau</option><option value="290">Cần Thơ</option><option value="288">Cao Bằng</option><option value="293">Gia Lai</option><option value="295">Hà Giang</option><option value="296">Hà Nam</option><option value="299">Hà Tĩnh</option><option value="300">Hải Dương</option><option value="301">Hải Phòng</option><option value="319">Hậu Giang</option><option value="302">Hoà Bình</option><option value="320">Hưng Yên</option><option value="321">Khánh Hòa</option><option value="322">Kiên Giang</option><option value="323">Kon Tum</option><option value="304">Lai Châu</option><option value="306">Lâm Đồng</option><option value="305">Lạng Sơn</option><option value="324">Lào Cai</option><option value="325">Long An</option><option value="326">Nam Định</option><option value="327">Nghệ An</option><option value="307">Ninh Bình</option><option value="328">Ninh Thuận</option><option value="329">Phú Thọ</option><option value="308">Phú Yên</option><option value="309">Quảng Bình</option><option value="310">Quảng Nam</option><option value="311">Quảng Ngãi</option><option value="330">Quảng Ninh</option><option value="312">Quảng Trị</option><option value="313">Sóc Trăng</option><option value="331">Sơn La</option><option value="332">Tây Ninh</option><option value="333">Thái Bình</option><option value="334">Thái Nguyên</option><option value="335">Thanh Hóa</option><option value="303">Thừa Thiên Huế</option><option value="336">Tiền Giang</option><option value="314">Trà Vinh</option><option value="315">Tuyên Quang</option><option value="337">Vĩnh Long</option><option value="338">Vĩnh Phúc</option><option value="339">Yên Bái</option><option value="292">Đắk Lắk</option><option value="340">Đắk Nông</option><option value="341">Điện Biên</option><option value="317">Đồng Nai</option><option value="318">Đồng Tháp</option></select>
              </div> 
            </div>
           </div>
           <div class="form-control1">
            <label class="input-label">Quận huyện</label>
            <div>
              <div class="hisWEc">
                <select required=""><option value="">Chọn Quận/Huyện</option><option value="484">Quận 1</option><option value="485">Quận 2 - TP Thủ Đức</option><option value="486">Quận 3</option><option value="487">Quận 4</option><option value="488">Quận 5</option><option value="489">Quận 6</option><option value="490">Quận 7</option><option value="491">Quận 8</option><option value="492">Quận 9 - TP Thủ Đức</option><option value="493">Quận 10</option><option value="494">Quận 11</option><option value="495">Quận 12</option><option value="496">Quận Bình Tân</option><option value="497">Quận Bình Thạnh</option><option value="498">Quận Gò Vấp</option><option value="499">Quận Phú Nhuận</option><option value="500">Quận Tân Bình</option><option value="501">Quận Tân Phú</option><option value="502">Quận Thủ Đức - TP Thủ Đức</option><option value="503">Huyện Bình Chánh</option><option value="504">Huyện Cần Giờ</option><option value="505">Huyện Củ Chi</option><option value="506">Huyện Hóc Môn</option><option value="507">Huyện Nhà Bè</option></select>
          </div> 
        </div>
       </div>
       <div class="form-control1">
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
@endsection