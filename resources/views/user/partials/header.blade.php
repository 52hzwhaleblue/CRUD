<!-- header -->
<div class="header-wrapper">
    <div class="wrap-content">
        <div class="header-left">
            <div class="logo">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" />
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
                </ul>
            </div>

            <div class="cart">
                <a href="{{ route('user.login') }}"> <i class="fa-solid fa-user"></i></a>
            </div>
            <div class="cart">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
        </div>


    </div>
</div>
