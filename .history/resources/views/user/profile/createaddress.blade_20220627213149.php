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