<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('admin.dashboard') }}" class="site_title"><img style="height:40px; margin-right: 15px"
                    src="{{ asset('favicon.png') }}" alt="logo"><span>An Vượng</span></a>
        </div>

        <div class="clearfix"></div>

        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ $admin->image_url }}" alt="minh hoa" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Master {{ $admin->name }} </h2>
            </div>
        </div>

        <br>

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Tổng quan</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard </a>
                    </li>
                    <li><a href="{{ route('admin.users') }}"><i class="fa fa-users"></i> Quản lý người dùng </a>
                    </li>
                    <li><a><i class="fa fa-list"></i> Quản lý danh mục <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.category-add') }}">Thêm danh mục</a></li>
                            <li><a href="{{ route('admin.categories') }}">Danh sách danh mục</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.product-add') }}">Thêm sản phẩm</a></li>
                            <li><a href="{{ route('admin.products') }}">Danh sách sản phẩm</a></li>
                            <li><a href="{{ route('admin.product-serial-add') }}">Thêm serial sản phẩm</a></li>
                            <li><a href="{{ route('admin.product-serials') }}">Danh sách serial sản phẩm</a></li>
                            <li><a href="{{ route('admin.product-image-add') }}">Thêm ảnh sản phẩm</a></li>
                            <li><a href="{{ route('admin.product-images') }}">Danh sách ảnh sản phẩm</a></li>
                            <li><a href="{{ route('admin.product-reviews') }}">Danh sách đánh giá</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-image"></i> Quản lý banner/slide <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.gallery-add') }}">Thêm ảnh</a></li>
                            <li><a href="{{ route('admin.galleries') }}">Danh sách ảnh</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-tags"></i> Quản lý đơn hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.orders') }}">Danh sách đơn hàng</a></li>
                            <li><a href="{{ route('admin.payments') }}">Quản lý thanh toán</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Quản lý bài viết <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.article-add') }}">Thêm bài viết</a></li>
                            <li><a href="{{ route('admin.articles') }}">Danh sách bài viết</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-ticket"></i> Quản lý voucher <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.voucher-add') }}">Tạo voucher</a></li>
                            <li><a href="{{ route('admin.vouchers') }}">Danh sách voucher</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bolt"></i> Quản lý thuộc tính <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.attribute-add') }}">Tạo thuộc tính</a></li>
                            <li><a href="{{ route('admin.attributes') }}">Danh sách thuộc tính</a></li>
                            <li><a href="{{ route('admin.attribute_category-add') }}">Danh mục - thuộc tính</a></li>
                            <li><a href="{{ route('admin.attribute_categories') }}">Danh sách thuộc tính danh mục</a>
                            </li>
                            <li><a href="{{ route('admin.attribute_product-add') }}">Sản phẩm - thuộc tính</a></li>
                            <li><a href="{{ route('admin.attribute_products') }}">Danh sách thuộc tính sản phẩm</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('admin.contacts') }}"><i class="fa fa-comment"></i> Liên hệ </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="sidebar-footer hidden-small" style="display: flex;justify-content: center;">
            <form action="{{ route('admin.logout.post') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" title="Đăng xuất">
                    <span class="glyphicon glyphicon-off"></span> Logout
                </button>
            </form>

        </div>
    </div>
</div>
