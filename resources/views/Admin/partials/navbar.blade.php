<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href="index-2.html"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dashboard</span></a>
        </li>


        {{-- Quản lý bài viết --}}
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span
                    class="app-menu__label">Quản lý bài viết</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('blog.index') }}"><i class="icon fa fa-circle-o"></i>
                        Blog</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('news.index') }}"><i
                            class="icon fa fa-circle-o"></i>News</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('criteria.index') }}"><i
                            class="icon fa fa-circle-o"></i>Tiêu chí</a>
                </li>
            </ul>
        </li>

        {{-- Quản lý sản phẩm --}}
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span
                    class="app-menu__label">Quản lý sản phẩm</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('product_list.index') }}"><i
                            class="icon fa fa-circle-o"></i> Danh mục cấp 1</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('product_cat.index') }}"><i class="icon fa fa-circle-o"></i>
                        Danh mục cấp 2</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('product.index') }}"><i class="icon fa fa-circle-o"></i>
                        Tất cả sản phẩm</a>
                </li>
            </ul>
        </li>

        {{-- Quản lý hình ảnh - video --}}
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span
                    class="app-menu__label">Quản lý hình ảnh - video</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('slide.index') }}"><i class="icon fa fa-circle-o"></i>
                        Slideshow</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('video.index') }}"><i class="icon fa fa-circle-o"></i>
                        Video</a>
                </li>
            </ul>
        </li>


        {{-- Quản lý đơn hàng --}}

        <a class="app-menu__item" href="{{ route('ordermanagement.index') }}"><i
                class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Quản lý đơn hàng</span><i
                class="treeview-indicator fa fa-angle-right"></i></a>

    </ul>
</aside>