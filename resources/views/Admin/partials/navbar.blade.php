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
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span
                    class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i>
                        Bootstrap Elements</a>
                </li>
                <li>
                    <a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank"
                        rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a>
                </li>
                <li>
                    <a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a>
                </li>
                <li>
                    <a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Charts</span></a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span
                    class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form
                        Components</a>
                </li>
                <li>
                    <a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom
                        Components</a>
                </li>
                <li>
                    <a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form
                        Samples</a>
                </li>
                <li>
                    <a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form
                        Notifications</a>
                </li>
            </ul>
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
                            class="icon fa fa-circle-o"></i> Product List</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('product_cat.index') }}"><i
                            class="icon fa fa-circle-o"></i>
                        Product Cat</a>
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

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i>
                        Lockscreen Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice
                        Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar
                        Page</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a>
                </li>
                <li>
                    <a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
