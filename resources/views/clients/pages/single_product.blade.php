<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/slide_product/slide_product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/single_product/single_product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/home_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/slide_product/slide_product_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/single_product/single_product_responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Chi tiết sản phẩm</title>
</head>

<body>
    @include('clients.partials.header_client')

    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i>
                        <span>Home</span></a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('category.list-products', ['slug' => $product->category->slug, 'id' => $product->category->id]) }}">{{ $product->category->name }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
            </ol>
        </nav>
    </div>

    <main>
        <section class="section-part">
            <div class="container">
                <div class="section-part-div">
                    <div class="row">
                        <div class="col-md-7">
                            {{-- Image --}}
                            <div class="swiper bigImageSwiper">
                                <div class="swiper-wrapper bigImageSwiper-wrapper">
                                    @foreach ($product->image_urls as $image)
                                        <div class="swiper-slide div-slide-bigImage"><img src="{{ $image }}"
                                                alt="{{ $product->name }}"></div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev control-custom-btn-two"></div>
                                <div class="swiper-button-next control-custom-btn-two"></div>
                            </div>
                            <div class="swiper smallImageSwiper">
                                <div class="swiper-wrapper smallImageSwiper-wrapper"
                                    data-total="{{ count($product->image_urls) }}">
                                    @foreach ($product->image_urls as $image)
                                        <div class="swiper-slide div-slide-smallImage"><img src="{{ $image }}"
                                                alt="{{ $product->name }}"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="product-name">
                                <h6>{{ $product->name }}</h6>
                                <p>
                                    <span>{{ number_format($product->price, 0, ',', '.') }} đ</span>
                                    @if ($product->price !== $product->real_price)
                                        <span>{{ number_format($product->real_price, 0, ',', '.') }} đ</span>
                                        @if ($product->real_price > 0)
                                            <span>-{{ round((((float) $product->real_price - (float) $product->price) * 100) / (float) $product->real_price) }}%</span>
                                        @endif
                                    @endif
                                    <span style="margin-left: 10px">Kho: {{ $product->quantity }}</span>
                                </p>
                                @if ($product->category->name === 'Laptop' || $product->category->name === 'PC')
                                    <div class="gift-div">
                                        <div class="gift-sale">
                                            <span><i class="fa-solid fa-gift"></i> Quà tặng khuyến mãi</span>
                                        </div>
                                        <div class="name-gift-sale">
                                            <div class="promotion-list">
                                                <div class="promotion-item">
                                                    <span class="index">1</span>
                                                    <span>Tặng ngay 1 x Lót chuột trị giá 149.000₫</span>
                                                </div>
                                                <div class="promotion-item">
                                                    <span class="index">2</span>
                                                    <span>Tặng ngay 1 x Đế Tản Nhiệt trị giá 230.000₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($product->quantity !== 0 && $product->status !== 'out_stock')
                                    <div class="buy-or-add">
                                        <button class="buy-btn" id="buy-now" data-product-id="{{ $product->id }}">
                                            <span>Đặt mua ngay</span>
                                            <span>Nhanh chóng, thuận tiện</span>
                                        </button>
                                        <div class="installment-or-add">
                                            <button class="add-btn" id="add-to-cart"
                                                data-product-id="{{ $product->id }}">
                                                <span>Cho vào giỏ</span>
                                                <span class="check-respon-span">Tiếp tục mua sắm</span>
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <div class="out-of-stock-notice">
                                        <i class="fas fa-exclamation-triangle"></i> Hết hàng
                                    </div>
                                    <p style="margin-top: 10px;color: blue;">Chúng tôi sẽ
                                        cập nhật sản
                                        phẩm sớm nhất có
                                        thể</p>
                                @endif
                                <div class="policy-div">
                                    <ul class="list-policy">
                                        <li>Bảo hành chính hãng 36 tháng</li>
                                        <li>Hỗ trợ đổi mới trong 7 ngày</li>
                                        <li>Miễn phí giao hàng Hải Phòng</li>
                                        <li>Giá sản phẩm đã bao gồm thuế VAT</li>
                                        <li>Quà tặng số lượng có hạn! Mua ngay nào!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="section-part">
            <div class="container">
                <div class="section-outline">
                    <div class="swiper productSwiper">
                        <div class="section-outline-title">
                            <span class="title-span">Sản phẩm khác</span>
                        </div>
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

        <section class="section-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-info section-part-div">
                            <div class="product-info-title">
                                <span>Thông số kỹ thuật</span>
                            </div>
                            <div class="product-info-body">
                                <div id="text-decoration" class="text-decoration">
                                    <table class="product-info-body-table">
                                        @foreach ($product->attributes as $attribute)
                                            <tr>
                                                <td class="column-title-td">{{ $attribute->name }}</td>
                                                <td class="column-body-td">{{ $attribute->pivot->value }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <button id="read_more" class="read-more"><span id="read_more_text">Xem thêm</span> <i
                                        id="read_more_icon" class="fa-solid fa-angles-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="technical-info section-part-div">
                            <div class="technical-info-title">
                                <span>Tin tức công nghệ</span>
                            </div>
                            <div class="technical-info-body">
                                @foreach ($articles as $article)
                                    <div class="technical-info-body-div">
                                        <a class="card-product-link-a article" href="{{ route('blog.detail') }}">
                                            <img src="{{ $article->image_url }}" alt="minh hoa bai viet">
                                            <span>{{ $article->title }}</span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

        </div>

        <section class="section-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-part-div">
                            <div class="rating-star-title">Đánh giá {{ $product->name }}</div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="rating-star-summary">
                                        <h2>{{ $product->rating_avg }}/5</h2>
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
                                        <div>
                                            <p>{{ $product->rating_count }} đánh giá</p>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $totalRatings = array_sum($product->rating_sum);
                                @endphp
                                <div class="col-md-9">
                                    <div class="rating-star-count">
                                        @foreach ($product->rating_sum as $star => $count)
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="rating-star-count-span">{{ $star }} <i
                                                        class="fa-solid fa-star text-warning"></i></span>
                                                <div class="progress flex-grow-1" style="height: 10px">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: {{ $totalRatings ? ($count / $totalRatings) * 100 : 0 }}%">
                                                    </div>
                                                </div>
                                                <span class="comment-rating-count">{{ $count }} đánh giá</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 div_break">
                        <div class="div_break_div">
                            <img src="{{ $gallery->image_url }}" alt="minh hoa banner">
                        </div>
                    </div>
                </div>
                <div class="customer-comment">
                    <div class="section-part-div">
                        @foreach ($product->reviews as $review)
                            @if ($review->status === 1)
                                <div class="customer-comment-div-son">
                                    <div class="d-flex align-items-center mb-2">
                                        @php
                                            $initial = mb_substr($review->user->name, 0, 1, 'UTF-8');
                                        @endphp
                                        <img src="https://placehold.co/40x40?text={{ $initial }}"
                                            class="rounded-circle me-2" alt="Avatar">
                                        {{-- https://placehold.co/40x40/ffffff/ffffff?text=%20 --}}
                                        <div>
                                            <strong>{{ $review->user->name }}</strong>
                                            <span class="badge bg-danger ms-2">Đã mua hàng tại An Vượng</span>
                                            <div>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i
                                                        class="fa-solid fa-star {{ $i <= round($review->rating) ? 'text-warning' : 'text-muted' }}"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-1">{{ $review->comment }}</p>
                                    <small class="text-muted">{{ $review->created_at->format('d/m/Y') }}</small>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('clients.partials.footer_client')
    <script src="{{ asset('bs5/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/clients/js/swiper_product.js') }}"></script>
    <script>
        window.Laravel = {
            addCartUrl: "{{ route('addCart') }}",
            csrfToken: "{{ csrf_token() }}"
        };
    </script>
    <script src="{{ asset('assets/clients/js/single_product/single_product.js') }}"></script>
    <script src="{{ asset('assets/clients/js/home/home.js') }}"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
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

</body>

</html>
