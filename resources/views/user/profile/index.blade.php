@extends('user.layout')

@section('title')
    Thông tin
@endsection

@section('content')
    <div class="profile-wrapper">
        <div class="wrap-content">
            <div class="profile-left">
                <div class="profile-owner">
                    <img src="{{ asset('frontend/assets/img/avatar.png') }}">
                    <div class="profile-info">
                        <p>Tài khoản của</p>
                        <strong>Minh Long</strong>
                    </div>
                </div>

                <div class="proflie-fetures">
                    <div class="profile-feture">
                        <ul class="abc">
                            <li>
                                <a class="is-active" href="">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8
                                                    1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                        </path>
                                    </svg>
                                    <span>Thông tin tài khoản</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-active" href="">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z">
                                        </path>
                                    </svg>
                                    <span>Thông báo của tôi</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-active" href="">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z">
                                        </path>
                                    </svg>
                                    <span>Quản lí đơn hàng</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-active" href="">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z">
                                        </path>
                                    </svg>
                                    <span>Số địa chỉ</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-active" href="">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z">
                                        </path>
                                    </svg>
                                    <span>Thông tin thanh toán</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="profile-mid">
                <span class="info-title">Thông tin cá nhân</span>
                <from>

                    <div class="form-avatar">
                        <div class="iRBxWb">
                            <div>
                                <div class="avatar-view">
                                    <ing src="images/avatar.png">
                                        <div class="edit">
                                            <img src="images/edit.png">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-name">
                        <div class="">
                            <label class="input-label">Họ & Tên</label>
                            <div>
                                <div class="hisWEc">
                                    <input class="input " type="search">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="input-label">Nick name</label>
                            <div>
                                <div class="hisWEc">
                                    <input class="input " type="search">
                                </div>
                            </div>
                        </div>
                        <div class="">
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
                        <div class="">
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
                        <div class="">
                            <label class="input-label">Quốc tịch</label>
                            <div>
                                <div class="hisWEc">
                                    <input class="input with-icon-right" name="nationality" maxlength="128"
                                        placeholder="Chọn quốc tịch" readonly="" value="">
                                    <svg class="icon-right" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.30806 6.43306C3.55214 6.18898 3.94786 6.18898 4.19194 6.43306L10 12.2411L15.8081 6.43306C16.0521 6.18898 16.4479 6.18898 16.6919 6.43306C16.936 6.67714 16.936 7.07286 16.6919 7.31694L10.4419 13.5669C10.1979 13.811 9.80214 13.811 9.55806 13.5669L3.30806 7.31694C3.06398 7.07286 3.06398 6.67714 3.30806 6.43306Z"
                                            fill="#808089"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="input-label">&nbsp;</label>
                            <button type="submit" class="cqEaiM btn-submit">Lưu và thay
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
    @endsection
