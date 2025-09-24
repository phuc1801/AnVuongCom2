<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    {{-- @vite(['resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/slide_product/slide_product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/article/article_laptop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/list_product/filter_list_product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/list_product/mau.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/slide_product/slide_product_responsive.css') }}">
    <title>@yield('title', 'Laptop An Vượng')</title>
</head>

<body>
    @include('clients.partials.header_client')
    {{-- Breadcrumb --}}
    <div class="container">
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i>
                        <span>Home</span></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $thisCategory->name }}
                </li>
            </ol>
        </nav>
    </div>

    <main>
        <section>
            {{-- Banner sản phẩm --}}
            <div class="container">
                <img src="{{ asset('img/laptop/banner-laptop.jpg') }}" alt="">
            </div>
        </section>
        <section>
            {{-- Sản phẩm mới --}}
            <div class="container">
                <div class="section-outline">
                    <div class="swiper productSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($outlineProducts as $outline)
                                <div class="card swiper-slide card-product-outline">
                                    <a class="card-product-link-a"
                                        href="{{ route('products.single', ['slug' => $outline->slug, 'id' => $outline->id]) }}">
                                        <img src="{{ $outline->image_url }}" alt="{{ $outline->name }}"
                                            class="card-img-top">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                {{ $outline->name }}
                                            </h6>
                                            <div class="card-price">
                                                @if ($outline->price != $outline->real_price)
                                                    <p class="card-real-price">
                                                        {{ number_format($outline->real_price, 0, ',', '.') }} đ
                                                    </p>
                                                @else
                                                    <p class="card-real-price" style="height: 1.5em">
                                                    </p>
                                                @endif

                                                <p class="card-sale-price">
                                                    {{ number_format($outline->price, 0, ',', '.') }} đ
                                                </p>
                                            </div>
                                            <div class="rating-section">
                                                <div class="stars">
                                                    @php
                                                        $rating = $outline->rating_avg;
                                                        $fullStars = floor($rating);
                                                        $decimal = $rating - $fullStars;
                                                        $fractionalStar = null;
                                                        if ($decimal < 0.25) {
                                                            $fullStars = 4;
                                                        } elseif ($decimal < 0.4 && $decimal >= 0.25) {
                                                            $fractionalStar = 'quarter-star';
                                                        } elseif ($decimal >= 0.4 && $decimal <= 0.6) {
                                                            $fractionalStar = 'half-star';
                                                        } elseif ($decimal > 0.6 && $decimal <= 0.75) {
                                                            $fractionalStar = 'three-quarter-star';
                                                        } else {
                                                            $fullStars = 5;
                                                        }
                                                    @endphp
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <span
                                                            class="@if ($i < $fullStars) filled @elseif($i == $fullStars && $fractionalStar) {{ $fractionalStar }} @else empty @endif">
                                                            <svg class="star-background" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                            </svg>
                                                            @if ($i < $fullStars || ($i == $fullStars && $fractionalStar))
                                                                <svg class="star-fill" viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                                </svg>
                                                            @endif
                                                        </span>
                                                    @endfor
                                                </div>
                                                <span class="review-count">{{ $outline->rating_count }} đã mua</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev custom-control-button-np"></div>
                        <div class="swiper-button-next custom-control-button-np"></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <button class="btn btn-primary mb-3 btn-filter" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas">
                    Lọc sản phẩm
                </button>

                <div class="filter-section mb-4">
                    <h2 class="mb-4">Chọn theo tiêu chí</h2>
                    <form id="filterFormDesktop" class="filterFormAll" method="GET"
                        data-endpoint="{{ route('category.list-products', ['slug' => $slug, 'id' => $id]) }}">
                        @csrf
                        <div class="row g-2 mb-3 filter-row">
                            @foreach ($filter as $nameF => $valueF)
                                <div class="col-auto">
                                    <div class="dropdown" data-filter-name="{{ $nameF }}">
                                        <button class="btn btn-outline-secondary filter-btn" type="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                            aria-expanded="false">
                                            <i class="bi bi-funnel"></i> {{ $nameF }}
                                        </button>
                                        <ul class="dropdown-menu">
                                            @foreach ($valueF as $value)
                                                <li><label class="dropdown-item"><input type="checkbox"
                                                            name="filters[{{ $nameF }}][]"
                                                            value="{{ $value }}"> {{ $value }}</label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-auto">
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary filter-btn" type="button"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bi bi-cash"></i> Mức giá
                                    </button>
                                    <div class="dropdown-menu p-3" style="min-width: 300px;">
                                        <label class="form-label fw-bold">Hãy chọn mức giá phù hợp với bạn</label>
                                        <div class="d-flex align-items-center mb-2">
                                            <input type="text" id="price-min-desktop" class="form-control me-2"
                                                style="max-width: 120px;">
                                            <span>-</span>
                                            <input type="text" id="price-max-desktop" class="form-control ms-2"
                                                style="max-width: 120px;">
                                        </div>
                                        <div class="range-slider position-relative"
                                            style="height: 5px; background: #ddd; border-radius: 5px;">
                                            <div id="desktop-progress" class="progress"
                                                style="position:absolute; height: 5px; background:red; border-radius: 5px;">
                                            </div>
                                            <input type="range" class="range-min" id="range-min-desktop"
                                                name="price_min" min="0" max="100000000" step="1000"
                                                value="0">
                                            <input type="range" class="range-max" id="range-max-desktop"
                                                name="price_max" min="0" max="100000000" step="1000"
                                                value="100000000">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" id="filter-btn-desktop" class="btn btn-primary me-2">Hiển
                                    thị</button>
                                <button type="button" id="clearFiltersDesktop" class="btn btn-secondary">Bỏ lọc
                                    nhanh</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="offcanvas offcanvas-start filter-offcanvas" tabindex="-1" id="filterOffcanvas"
                    aria-labelledby="filterOffcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="filterOffcanvasLabel">Chọn theo tiêu chí</h5>
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form id="filterFormMobile" class="filterFormAll" method="GET"
                            data-endpoint="{{ route('category.list-products', ['slug' => $slug, 'id' => $id]) }}">
                            @csrf
                            <div class="row g-2 mb-3 filter-row">
                                @foreach ($filter as $nameF => $valueF)
                                    <div class="col-auto">
                                        <div class="dropdown" data-filter-name="{{ $nameF }}">
                                            <button class="btn btn-outline-secondary filter-btn" type="button"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false">
                                                <i class="bi bi-funnel"></i> {{ $nameF }}
                                            </button>
                                            <ul class="dropdown-menu">
                                                @foreach ($valueF as $value)
                                                    <li><label class="dropdown-item"><input type="checkbox"
                                                                name="filters[{{ $nameF }}][]"
                                                                value="{{ $value }}">
                                                            {{ $value }}</label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary filter-btn" type="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                            aria-expanded="false">
                                            <i class="bi bi-cash"></i> Mức giá
                                        </button>
                                        <div class="dropdown-menu p-3" style="min-width: 300px;">
                                            <label class="form-label fw-bold">Hãy chọn mức giá phù hợp với bạn</label>
                                            <div class="d-flex align-items-center mb-2">
                                                <input type="text" id="price-min-mobile" class="form-control me-2"
                                                    style="max-width: 120px;">
                                                <span>-</span>
                                                <input type="text" id="price-max-mobile" class="form-control ms-2"
                                                    style="max-width: 120px;">
                                            </div>
                                            <div class="range-slider position-relative"
                                                style="height: 5px; background: #ddd; border-radius: 5px;">
                                                <div id="mobile-progress" class="progress"
                                                    style="position:absolute; height: 5px; background:red; border-radius: 5px;">
                                                </div>
                                                <input type="range" class="range-min" id="range-min-mobile"
                                                    name="price_min" min="0" max="100000000" step="1000"
                                                    value="0">
                                                <input type="range" class="range-max" id="range-max-mobile"
                                                    name="price_max" min="0" max="100000000" step="1000"
                                                    value="100000000">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-3">
                                    <button type="submit" id="filter-btn-mobile" class="btn btn-primary me-2">Hiển
                                        thị</button>
                                    <button type="button" id="clearFiltersMobile" class="btn btn-secondary">Bỏ lọc
                                        nhanh</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-auto">
                        <label class="form-label fw-bold">Đang lọc theo</label>
                        <button class="btn btn-primary btn-sm" id="selected-filters">Chưa
                            chọn</button>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-auto">
                        <label class="form-label fw-bold">Sắp xếp theo</label>
                        <select id="sortOption" class="form-select">
                            <option value="default">Nổi bật</option>
                            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Tên từ A-Z
                            </option>
                            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Tên từ
                                Z-A</option>
                            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Giá tăng
                                dần</option>
                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Giá
                                giảm dần
                            </option>
                        </select>
                    </div>
                </div>
                <div id="product-list">
                    @include('clients.partials.filter_list_product')
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                @include('clients.partials.article_laptop')
            </div>
        </section>

    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/clients/js/swiper_product.js') }}"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script src="{{ asset('assets/clients/js/article/article_laptop.js') }}"></script>
    <script src="{{ asset('assets/clients/js/list_product/filter_list_product.js') }}"></script>
    <script>
        window.addEventListener("pageshow", function() {
            fetch('/update-cart-item')
                // Số lượng giỏ hàng
                .then(response => response.json())
                .then(data => {
                    document.getElementById('cart-count').innerText = data.cart_sum;
                });
        });
    </script>

</html>
