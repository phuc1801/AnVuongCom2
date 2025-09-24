<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/slide_product/slide_product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/home_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/slide_product/slide_product_responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>An Vượng Computer</title>
</head>

<body>

    @include('clients.partials.header_client')

    <main>
        <section class="section-part">
            <div class="container section-banner">
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <div id="bannerSlideshow" class="carousel slide banner-slider" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                @foreach ($slides as $key => $slide)
                                    <button type="button" data-bs-target="#bannerSlideshow"
                                        data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                        aria-current="true" aria-label="Slide"></button>
                                @endforeach
                            </div>
                            <div class="carousel-inner">
                                @foreach ($slides as $key => $slide)
                                    <div class="carousel-item banner-item-img {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ $slide->image_url }}" class="banner-main-img"
                                            alt="{{ $slide->name ?: 'Banner' }}">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev custom-control" type="button"
                                data-bs-target="#bannerSlideshow" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next custom-control" type="button"
                                data-bs-target="#bannerSlideshow" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            @foreach ($imageAround->take(2) as $key => $image)
                                <div class="col-md-12 col-6 mb-3">
                                    <img src="{{ $image->image_url }}" class="banner-sub-img"
                                        alt="{{ $image->name ?: 'Sub Banner' }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($imageAround->skip(2) as $key => $image)
                        <div class="col-sm-4 col-12 mt-3">
                            <img src="{{ $image->image_url }}" class="banner-bottom-img"
                                alt="{{ $image->name ?: 'Bottom Banner' }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-part">
            <div class="container">
                <div class="section-product">
                    <div class="filter-product-slide">
                        <div class="section-product-title">
                            <span class="main-title">Nổi bật</span>
                            <span class="sub-title">
                                <i class="fa-solid fa-stamp" style="color: red"></i>Bán chạy nhất
                            </span>
                        </div>
                    </div>
                    <div class="swiper productSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($topSell as $product)
                                <div class="card swiper-slide card-product-outline">
                                    <a class="card-product-link-a"
                                        href="{{ route('products.single', ['slug' => $product->slug, 'id' => $product->id]) }}">
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                            class="card-img-top">
                                        <div class="card-body">
                                            <h6 class="card-title">{{ $product->name }}</h6>
                                            <div class="card-price">
                                                @if ($product->price != $product->real_price)
                                                    <p class="card-real-price">
                                                        {{ number_format($product->real_price, 0, ',', '.') }} đ
                                                    </p>
                                                @endif
                                                <p class="card-sale-price">
                                                    {{ number_format($product->price, 0, ',', '.') }} đ
                                                </p>
                                            </div>
                                            <div class="rating-section">
                                                <div class="stars">
                                                    @php
                                                        $rating = $product->rating_avg;
                                                        $fullStars = floor($rating);
                                                        $decimal = $rating - $fullStars;
                                                        $fractionalStar = null;
                                                        if ($decimal < 0.25) {
                                                            $fullStars = round($rating);
                                                        } elseif ($decimal < 0.4 && $decimal >= 0.25) {
                                                            $fractionalStar = 'quarter-star';
                                                        } elseif ($decimal >= 0.4 && $decimal <= 0.6) {
                                                            $fractionalStar = 'half-star';
                                                        } elseif ($decimal > 0.6 && $decimal <= 0.75) {
                                                            $fractionalStar = 'three-quarter-star';
                                                        } else {
                                                            $fullStars = round($rating);
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
                                                <span class="review-count">{{ $product->rating_count }} đã mua</span>
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
                @foreach ($categoryProducts->take(2) as $categoryProduct)
                    <div class="section-product">
                        <div class="filter-product-slide">
                            <div class="section-product-title">
                                <span class="main-title">{{ $categoryProduct['category']->name }}</span>
                                <span class="sub-title">
                                    <i class="fa-solid fa-truck" style="color: red"></i>Miễn phí giao hàng
                                </span>
                            </div>
                            <span>
                                <a href="{{ route('category.list-products', ['slug' => $categoryProduct['category']->slug, 'id' => $categoryProduct['category']->id]) }}"
                                    class="jump-to-all">Xem tất cả</a>
                            </span>
                        </div>
                        <div class="swiper productSwiper">
                            <div class="swiper-wrapper">
                                @foreach ($categoryProduct['products'] as $product)
                                    <div class="card swiper-slide card-product-laptop">
                                        <a class="card-product-link-a"
                                            href="{{ route('products.single', ['slug' => $product->slug, 'id' => $product->id]) }}">
                                            <img src="{{ $product->image_url }}" alt="minh hoa"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h6 class="card-title">
                                                    {{ $product->name }}
                                                </h6>
                                                <div class="card-price">
                                                    @if ($product->price != $product->real_price)
                                                        <p class="card-real-price">
                                                            {{ number_format($product->real_price, 0, ',', '.') }} đ
                                                        </p>
                                                    @else
                                                        <p class="card-real-price" style="height: 1.5em">
                                                        </p>
                                                    @endif

                                                    <p class="card-sale-price">
                                                        {{ number_format($product->price, 0, ',', '.') }} đ
                                                    </p>
                                                </div>
                                                <div class="rating-section">
                                                    <div class="stars">
                                                        @php
                                                            $rating = $product->rating_avg;
                                                            $fullStars = floor($rating);
                                                            $decimal = $rating - $fullStars;
                                                            $fractionalStar = null;
                                                            if ($decimal < 0.4 && $decimal >= 0.25) {
                                                                $fractionalStar = 'quarter-star';
                                                            } elseif ($decimal >= 0.4 && $decimal <= 0.6) {
                                                                $fractionalStar = 'half-star';
                                                            } elseif ($decimal > 0.6 && $decimal <= 0.75) {
                                                                $fractionalStar = 'three-quarter-star';
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
                                                    <span class="review-count">{{ $product->rating_count }} đã
                                                        mua</span>
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
                @endforeach
                <div class="img-bottom-banner">
                    <div class="row">
                        <div class="img-bottom-banner-left col-md-8 col-sm-7">
                            <img src="{{ asset('img/banner/banner_bottom3.jpg') }}" alt="">
                        </div>
                        <div class="img-bottom-banner-right col-md-4 col-sm-5">
                            <img src="{{ asset('img/banner/banner_bottom1.jpg') }}" alt="">
                            <img src="{{ asset('img/banner/banner_bottom2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @foreach ($categoryProducts->skip(2) as $categoryProduct)
                    <div class="section-product">
                        <div class="filter-product-slide">
                            <div class="section-product-title">
                                <span class="main-title">{{ $categoryProduct['category']->name }}</span>
                                <span class="sub-title">
                                    <i class="fa-solid fa-truck" style="color: red"></i>Miễn phí giao hàng
                                </span>
                            </div>
                            <span>
                                <a href="{{ route('category.list-products', ['slug' => $categoryProduct['category']->slug, 'id' => $categoryProduct['category']->id]) }}"
                                    class="jump-to-all">Xem tất cả</a>
                            </span>
                        </div>
                        <div class="swiper productSwiper">
                            <div class="swiper-wrapper">
                                @foreach ($categoryProduct['products'] as $product)
                                    <div class="card swiper-slide card-product-laptop">
                                        <a class="card-product-link-a"
                                            href="{{ route('products.single', ['slug' => $product->slug, 'id' => $product->id]) }}">
                                            <img src="{{ $product->image_url }}" alt=""
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h6 class="card-title">
                                                    {{ $product->name }}
                                                </h6>
                                                <div class="card-price">
                                                    @if ($product->price != $product->real_price)
                                                        <p class="card-real-price">
                                                            {{ number_format($product->real_price, 0, ',', '.') }} đ
                                                        </p>
                                                    @else
                                                        <p class="card-real-price" style="height: 1.5em">
                                                        </p>
                                                    @endif

                                                    <p class="card-sale-price">
                                                        {{ number_format($product->price, 0, ',', '.') }} đ
                                                    </p>
                                                </div>
                                                <div class="rating-section">
                                                    <div class="stars">
                                                        @php
                                                            $rating = $product->rating_avg;
                                                            $fullStars = floor($rating);
                                                            $decimal = $rating - $fullStars;
                                                            $fractionalStar = null;
                                                            if ($decimal < 0.4 && $decimal >= 0.25) {
                                                                $fractionalStar = 'quarter-star';
                                                            } elseif ($decimal >= 0.4 && $decimal <= 0.6) {
                                                                $fractionalStar = 'half-star';
                                                            } elseif ($decimal > 0.6 && $decimal <= 0.75) {
                                                                $fractionalStar = 'three-quarter-star';
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
                                                    <span class="review-count">{{ $product->rating_count }} đã
                                                        mua</span>
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
                @endforeach
            </div>
        </section>

        <section class="section-part">
            <div class="container">
                <div class="section-break">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 section-break-infor">
                            <i class="fa-solid fa-truck-fast" style="color: #0186e7"></i>
                            <div class="section-break-infor-div">
                                <span style="font-weight: bold">CHÍNH SÁCH GIAO HÀNG</span>
                                <span>Nhận hàng, thanh toán tận nhà</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 section-break-infor">
                            <i class="fa-solid fa-arrows-rotate" style="color: #0186e7"></i>
                            <div class="section-break-infor-div">
                                <span style="font-weight: bold">ĐỔI MỚI 15 NGÀY ĐẦU</span>
                                <span>Áp dụng với sản phẩm Laptop</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 section-break-infor">
                            <i class="fa-solid fa-credit-card" style="color: #0186e7"></i>
                            <div class="section-break-infor-div">
                                <span style="font-weight: bold">THANH TOÁN TIỆN LỢI</span>
                                <span>Trả tiền mặt, CK trả góp 0%</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 section-break-infor">
                            <i class="fa-solid fa-comments" style="color: #0186e7"></i>
                            <div class="section-break-infor-div">
                                <span style="font-weight: bold">HỖ TRỢ NHIỆT TÌNH</span>
                                <span>Tư vấn, giải đáp thắc mắc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-part">
            <div class="container">
                <div class="section-infor">
                    <div class="sale-section-infor">
                        <div class="title-section-infor">
                            <h5>Chuyên trang khuyến mãi</h5>
                            <span><a href="{{ route('blog.user') }}">Xem tất cả</a></span>
                        </div>
                        <div class="body-section-infor">
                            <div class="row">
                                @foreach ($articleDisco as $discount)
                                    <div class="col-sm-6 col-md-3 column-section-infor">
                                        <a class="card-product-link-a" href="#">
                                            <img style="width: 260px;height: 140px;" src="{{ $discount->image_url }}"
                                                alt="{{ $discount->title }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="technology-section-infor">
                        <div class="title-section-infor">
                            <h5>Tin tức công nghệ</h5>
                            <span><a href="{{ route('blog.user') }}">Xem tất cả</a></span>
                        </div>
                        <div class="body-section-infor">
                            <div class="row">
                                @foreach ($articleInfor as $information)
                                    <div class="col-sm-6 col-md-3 column-section-infor">
                                        <a class="card-product-link-a home-article" href="#">
                                            <img style="width: 260px;height: 140px;"
                                                src="{{ $information->image_url }}" alt="{{ $information->title }}">
                                            <p class="title-infor-node">{{ $information->title }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('clients.partials.footer_client')

    {{-- ---------------------------------------------------------------------------------------------- --}}
    <script src="{{ asset('bs5/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="{{ asset('assets/clients/js/swiper_product.js') }}"></script>
    <script src="{{ asset('assets/clients/js/home/home.js') }}"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    @if (session('contact_success'))
        <script>
            toastr.success('{{ session('contact_success') }}');
        </script>
    @endif
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
    {{-- <script>
        window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        });
    </script> --}}
</body>

</html>
