<header>
    <div class="top-header">
        <div class="container">
            <img src="{{ $topBanner->image_url }}" alt="">
        </div>
    </div>
    <div id="header_navbar" class="bottom-header">
        <div class="container">
            <div class="bottom-header-container-div">
                <button class="custom-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                    aria-controls="offcanvasMenu" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="logo-div">
                    <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('img/logo/image.png') }}"
                            alt="logo" class="logo-img"></a>
                </div>
                <div class="search-form logo-div test">
                    <form action="{{ route('search') }}" method="GET" class="search-form-container">
                        <div class="search-input-wrapper">
                            <input class="search-form-box" type="search" name="q" id="searchInput"
                                placeholder="Tìm kiếm sản phẩm..." aria-label="Tìm kiếm sản phẩm"
                                value="{{ request('q') }}">
                            <button type="submit" class="search-btn">
                                <i class="fa fa-magnifying-glass search-icon"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="bottom-header-div-i bottom-header-container-div-child mobile-div-res">
                    <i class="fa-solid fa-phone-volume" style="color: white;"></i>
                    <span class="span-header-fa">
                        <span>0123-456-789</span>
                        <span>0987-654-321</span>
                    </span>
                </div>
                <div class="bottom-header-div-i bottom-header-container-div-child mobile-div-res">
                    <a href="{{ route('blog.user') }}">
                        <i class="fa-solid fa-circle-info" style="color: white;"></i>
                        <span>Tin tức</span>
                    </a>
                </div>
                <div class="bottom-header-div-i bottom-header-container-div-child">
                    <a href="@auth{{ route('checkout.step1') }}@else{{ route('login') }} @endauth" class="cart-link">
                        <div class="cart-icon-wrapper" id="cart-icon">
                            <i class="fa-solid fa-cart-shopping" style="color: white;"></i>
                            <span class="cart-count" id="cart-count">
                                {{ $countItem }}
                            </span>
                        </div>
                        <span class="login-button">Giỏ hàng</span>
                    </a>
                </div>
                <div class="bottom-header-div-i bottom-header-container-div-child mobile-div-res">
                    @guest
                        <a href="{{ route('login') }}">
                            <i class="fa-solid fa-user-astronaut" style="color: white;"></i>
                            <span class="span-header-fa">
                                <span>Đăng kí &</span>
                                <span>Đăng nhập</span>
                            </span>
                        </a>
                    @endguest

                    @auth
                        <a href="{{ route('user.dashboard') }}">
                            <i class="fa-solid fa-gauge" style="color: white;"></i>
                            <span class="span-header-fa">
                                <span>{{ Auth::user()->name }}</span>
                            </span>
                        </a>
                    @endauth
                </div>
            </div>
            <nav class="nav-header navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            @foreach ($categories as $category)
                                @if (!$category->parent_id)
                                    @if ($category->children->count())
                                        <li class="nav-item dropdown">
                                            <span class="nav-link dropdown-toggle"
                                                aria-expanded="false">{{ $category->name }}</span>
                                            <ul class="dropdown-menu" aria-labelledby="accessoriesMenu">
                                                @foreach ($category->children as $child)
                                                    <li><a href="{{ route('category.list-products', ['slug' => $child->slug, 'id' => $child->id]) }}"
                                                            class="dropdown-item">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" aria-expanded="false"
                                                href="{{ route('category.list-products', ['slug' => $category->slug, 'id' => $category->id]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('second.hand') }}">Thu cũ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                @foreach ($categories as $category)
                    @if (!$category->parent_id)
                        <li class="nav-item {{ $category->children->count() ? 'dropdown' : '' }}">
                            <a class="nav-link {{ $category->children->count() ? 'dropdown-toggle' : '' }}"
                                aria-expanded="false"
                                href="{{ route('category.list-products', ['slug' => $category->slug, 'id' => $category->id]) }}">
                                <span class="offcanvas-span">
                                    @if ($category->icon)
                                        <i class="{{ $category->icon }}"></i>
                                    @endif
                                    {{ $category->name }}
                                </span></a>
                            @if ($category->children->count())
                                <ul class="dropdown-menu" aria-labelledby="accessoriesMenu">
                                    @foreach ($category->children as $child)
                                        <li><a href="{{ route('category.list-products', ['slug' => $child->slug, 'id' => $child->id]) }}"
                                                class="dropdown-item">{{ $child->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>

        </div>
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Thông tin khác</h5>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link offcanvas-span"><i class="fa-solid fa-phone-volume"
                            style="color: white;"></i>0123-456-789</span>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="offcanvas-span"><i class="fa-solid fa-circle-info" style="color: white;"></i>Tin
                            tức</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="offcanvas-span"><i class="fa-solid fa-shield-heart"
                                style="color: white;"></i>Tra
                            cứu bảo hành</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="offcanvas-span"><i class="fa-solid fa-screwdriver-wrench"
                                style="color: white"></i>Dịch vụ sửa chữa</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<sub>
    <div class="sticky-banner-left-right">
        <div class="banner-left">
            <img src="{{ $leftBanner->image_url }}" alt="{{ $leftBanner->name }}">
        </div>
        <div class="banner-right">
            <img src="{{ $rightBanner->image_url }}" alt="{{ $rightBanner->name }}">
        </div>
    </div>
</sub>
