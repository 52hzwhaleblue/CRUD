@extends('user.layout')

@section('title')
Thông tin
@endsection

@section('content')
<div class="profile-wrapper">
    <div class="wrap-content">
        @include('user.partials.profile-left')


       

        <div class="profile-right">
            <span class="info-title2">Số điện thoại và Email</span>
            <div class="ICUBE">
                <div class="list-item">
                    <div class="info">
                        <img src="{{ asset('frontend/assets/img/phone.png') }}" class="icon1">
                        <div class="detail">
                            <span>Số điện thoại</span>
                            <span>0984937129</span>
                        </div>
                    </div>
                    <div class="status">
                        <button class="button active">Cập nhật</button>
                    </div>
                </div>
                <div class="list-item">
                    <div class="info">
                        <img src="{{ asset('frontend/assets/img/email.png') }}" class="icon1">
                        <div class="detail">
                            <span>Địa chỉ email</span>
                            <span>a@gmail.com</span>
                        </div>
                    </div>
                    <div class="status">
                        <button class="button active">Cập nhật</button>
                    </div>
                </div>
                <span class="info-title2">Bảo mật</span>
                <div class="list-item">
                    <div class="info">
                        <img src="{{ asset('frontend/assets/img/lock.png') }}" class="icon1">
                        <span>Thiết lập mật khẩu</span>
                    </div>
                    <div class="status">
                        <button class="button active">Cập nhật</button>
                    </div>
                </div>
                <span class="info-title2">Liên kết mạng xã hội</span>
                <div class="list-item">
                    <div class="info">
                        <img src="{{ asset('frontend/assets/img/facebook.png') }}" class="icon1">
                        <span>Facebook</span>
                    </div>
                    <div class="status">
                        <button class="button active">Liên kết</button>
                    </div>
                </div>
                <div class="list-item">
                    <div class="info">
                        <img src="{{ asset('frontend/assets/img/google.png') }}" class="icon1">
                        <span>Google</span>
                    </div>
                    <div class="status">
                        <button class="button active">Liên kết</button>
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