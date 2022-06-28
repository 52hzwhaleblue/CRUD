@extends('user.layout')

@section('title')
Thông tin
@endsection

@section('content')
@extends('user.layout')

@section('title')
Thông tin
@endsection

@section('content')
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
                <div class="form-name">
                    <div class="mb-3">
                        <label class="input-label">UserID</label>
                        <div>
                            <div class="hisWEc profile-id" data-userid="{{ auth()->user()->id }}">
                                <input class="input " type="text" value="{{ auth()->user()->id }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="profile-name" data-username="{{ auth()->user()->name }}">
                        <label class="input-label">Name</label>
                        <div>
                            <div class="hisWEc">
                                <input class="input " type="text" value="{{ auth()->user()->name }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="profile-email" data-useremail="{{ auth()->user()->email }}">
                        <label class="input-label">Email</label>
                        <div>
                            <div class="hisWEc">
                                <input class="input " type="text" value="{{ auth()->user()->email }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="input-label">Ngày sinh</label>
                        <div class="bvIJNZ">
                            <select name="day">
                                <option value="0">Ngày</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>

                            </select>
                            <select name="month">
                                <option value="0">Tháng</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="year">
                                <option value="0">Năm</option>
                                <option value="1">2021</option>
                                <option value="2">2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="input-label">Giới tính</label>
                        <label class="eQckrx">
                            <input type="radio" name="gender" value="male">
                            <span class="label">Nam</span>
                        </label>
                        <label class="eQckrx">
                            <input type="radio" name="gender" value="male">
                            <span class="label">Nữ</span>
                        </label>
                        <label class="eQckrx">
                            <input type="radio" name="gender" value="male">
                            <span class="label">Khác</span>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input-label">Quốc tịch</label>
                        <div>
                            <div class="hisWEc">
                                <input class="input with-icon-right" name="nationality" maxlength="128"
                                    placeholder="Chọn quốc tịch" readonly="" value="">
                                <svg class="icon-right" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.30806 6.43306C3.55214 6.18898 3.94786 6.18898 4.19194 6.43306L10 12.2411L15.8081 6.43306C16.0521 6.18898 16.4479 6.18898 16.6919 6.43306C16.936 6.67714 16.936 7.07286 16.6919 7.31694L10.4419 13.5669C10.1979 13.811 9.80214 13.811 9.55806 13.5669L3.30806 7.31694C3.06398 7.07286 3.06398 6.67714 3.30806 6.43306Z"
                                        fill="#808089"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="input-label">&nbsp;</label>
                        <button type="submit" class="cqEaiM btn-submit LTD">Lưu và thay
                            đổi</button>
                    </div>
                </div>
            </from>
        </div>

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
@endsection