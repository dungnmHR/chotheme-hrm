 <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <img alt="image" class="img-circle" src="{{asset('assets/img/user-default.png')}}" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                    <span class="clear"> <span class="block m-t-xs"> <small class="font-bold">{{Auth::user()->email}}</small>
                    </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{route('show-user',[1])}}">Thông tin</a></li>
                        <li><a href="#">Thay đổi mật khẩu</a></li>                       
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();  
                                document.getElementById('logout-form').submit();">Đăng xuất</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                            </form>

                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    DNM
                </div>
            </li>
            <li class="landing_link">
                <a target="_blank" href="#"><i class="fa fa-star"></i> <span class="nav-label">Website</span> </a>
            </li>
            <li class={{$flag == "gallery" ? "active" : ""}}>
                <a href="{{route('gallery')}}"><i class="fa fa-picture-o"></i> <span class="nav-label">Thư viện</span>  </a>
            </li>
            <li class={{$flag == "dashboard" ? "active" : ""}}>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Bảng tin</span></span></a>
            </li>
            <li class={{$flag == "user_l" || $flag == "user_n" ? "active" : ""}}>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Người dùng</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "user_l" ? "active" : ""}}><a href="{{route('list-user')}}">Danh sách người dùng</a></li>
                    <li class={{$flag == "user_n" ? "active" : ""}}><a href="{{route('create-user')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li class={{$flag == "themes_l" || $flag == "themes_n" ? "active" : ""}}>
                <a href="#"><i class="fa fa-archive"></i> <span class="nav-label">Themes</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "themes_l" ? "active" : ""}}><a href="{{route('list-item')}}">Danh sách Themes</a></li>
                    <li class={{$flag == "themes_n" ? "active" : ""}}><a href="{{route('create-item')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li class={{$flag == "trans_l" || $flag == "trans_n" ? "active" : ""}}>
                <a href="#"><i class="fa fa-exchange"></i> <span class="nav-label">Giao dịch</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "trans_l" ? "active" : ""}}><a href="{{route('list-trans')}}">Tất cả giao dịch</a></li>
                    <li class={{$flag == "trans_n" ? "active" : ""}}><a href="{{route('create-trans')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li class={{$flag == "product_l" || $flag == "product_n" ? "active" : ""}}>
                <a href="#"><i class="fa fa-star"></i> <span class="nav-label">Sản phẩm</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "product_l" ? "active" : ""}}><a href="{{route('list-product')}}">Danh sách sản phẩm</a></li>
                    <li class={{$flag == "product_n" ? "active" : ""}}><a href="{{route('create-product')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li class={{$flag == "menu"  ? "active" : ""}}>
                <a href="{{route('list-menu')}}">
                    <i class="fa fa-bars"></i> <span class="nav-label">Menu</span>
                </a>
            </li>
            <li class={{$flag == "banner_l" || $flag == "banner_n" ? "active" : ""}}>
                <a href="#"><i class="fa fa-file-image-o"></i> <span class="nav-label">Banner</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "banner_l" ? "active" : ""}}><a href="{{route('list-banner')}}">Danh sách banner</a></li>
                    <li class={{$flag == "banner_n" ? "active" : ""}}><a href="{{route('create-banner')}}">Thêm mới</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>