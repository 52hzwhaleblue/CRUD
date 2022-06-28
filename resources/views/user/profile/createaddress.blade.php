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
                {{  auth()->user()->name  }}
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
         <div class="heading">Sổ địa chỉ</div>
          <div class="dfHeIP">
                <div class="new">
                  <a href="">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path></svg>
                    <span>Thêm địa chỉ mới</span>
                  </a>    
            </div>
            <div class="item">
                <div class="info1">
                    <div class="name">
                        {{  auth()->user()->name }}
                      <span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg></span>
                      <span>Địa chỉ mặc định</span>
                    </div>
                    <div class="address">
                      <span>Địa chỉ:</span>
                      {{  auth()->user()->address }}
                    </div>
                    <div class="phone">
                      <span>Điện thoại:</span>
                      {{  auth()->user()->phone }}
                    </div>
                </div>
                <div class="action">
                  <a class="edit" href="/address.html">Chỉnh sửa</a>
                </div>
            </div>
        </div>
      </div>
   </div>
@endsection