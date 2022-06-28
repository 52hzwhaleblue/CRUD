@extends('user.layout')

@section('title')
Thông tin
@endsection

@section('content')
  <!-----------------------infomation------------------ -->
  <div class="profile-wrapper">
    <div class="wrap-content">
        @include('user.partials.profile-left')


        <div class="profile-mid">
            <span class="info-title">Thông tin cá nhân</span>
            <from>
                <div class="form-avatar">
                    <div class="iRBxWb">
                        <div onclick="location.href='http://127.0.0.1:8000/profile'"
                            class="header-user d-flex justify-content-center">
                            <img src="{{ auth()->user()->avatar }}" alt="profile-pic"
                                style="border-radius:50%; width:100px;height:100px;">
                        </div>
                    </div>
                </div>
                <div class="info-1">
                    <div class="heading">Sổ địa chỉ</div>
                     <div class="dfHeIP">
                           <div class="new">
                             <a href="/address.html">
                               <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path></svg>
                               <span>Thêm địa chỉ mới</span>
                             </a>    
                       </div>
                       <div class="item">
                           <div class="info1">
                               <div class="name">
                                 TRẦN QUANG TUẤN
                                 <span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg></span>
                                 <span>Địa chỉ mặc định</span>
                               </div>
                               <div class="address">
                                 <span>Địa chỉ:</span>
                                 350/18/68C Lê Đức Thọ,phường 6,Quận gò vấp, Phường 06, Quận Gò Vấp, Hồ Chí Minh
                               </div>
                               <div class="phone">
                                 <span>Điện thoại:</span>
                                 0984937129
                               </div>
                           </div>
                           <div class="action">
                             <a class="edit" href="/address.html">Chỉnh sửa</a>
                           </div>
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