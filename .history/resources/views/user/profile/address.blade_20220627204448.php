@extends('user.layout')

@section('title')
Thông tin
@endsection

@section('content')
  <!-----------------------infomation------------------ -->
  <div class="profile-wrapper">
    <div class="wrap-content">
        @include('user.partials.profile-left')


       
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