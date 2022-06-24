<!-- header -->
<div class="header-wrapper">
    <div class="wrap-content">
        <div class="header-left">
            <div class="logo">
                <a href="{{ route('user.index') }}">
                    <img src="https://cdn.shopify.com/s/files/1/0563/5827/3071/files/logo.png?v=1646210955"
                        alt="" />
                </a>
            </div>
        </div>

        <div class="header-right">
            <div class="menu">
                <ul>
                    <li class="
                <?php if($com == '' || $com == 'user.index') {?>
                    active
                ">
                        <?php } ?>

                        <a href="{{ route('user.index') }}">@lang('auth.home')</a>
                    </li>
                    @if (count($splist))
                        @foreach ($splist as $k => $v)
                            <li>
                                <a href="">{{ $v->name }}</a>

                                <ul>
                                    @foreach ($spcat as $k => $v)
                                        <li>
                                            <a href="">{{ $v->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    @endif
                    <li>
                        <a href="{{ route('user.products') }}">Products</a>
                    </li>
                    <li><a href="{{ route('user.shop') }}">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="cart">
                <a href="{{ route('user.login') }}"> <i class="fa-solid fa-user"></i></a>
            </div>
            <div class="cart">
                <a href="{{ route('checkout.cart') }}"><i class="fa-solid fa-bag-shopping"></i></a>
                
            </div>
            @auth
                <div onclick="location.href='http://127.0.0.1:8000/profile'" class="header-user d-flex justify-content-center">
                    <img src="{{ auth()->user()->avatar }}" alt="profile-pic"
                        style="border-radius:50%; width:50px;height:50px;">
                </div>
            @endauth
        </div>
    </div>
</div>
