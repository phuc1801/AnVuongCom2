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
        <section>
            <div class="container">
                <img src="{{ asset('img/laptop/banner-laptop.jpg') }}" alt="">
            </div>
        </section>
        <div class="container my-4">

            <h4 class="mb-4">
                Kết quả tìm kiếm
                @if (request('q'))
                    cho từ khóa: <span class="text-primary">"{{ request('q') }}"</span>
                @endif
            </h4>

            <div class="row">
                @forelse($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="product card h-100">
                            <a class="card-product-link-a d-block h-100"
                                href="{{ route('products.single', ['slug' => $product->slug, 'id' => $product->id]) }}">

                                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}"
                                    style="max-height: 200px; object-fit: cover;">

                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-truncate">{{ $product->name }}</h5>

                                    <p class="card-text mb-2">
                                        @if ($product->real_price)
                                            <s class="text-muted"> {{ number_format($product->real_price) }} VNĐ</s>
                                            <br>
                                        @endif
                                        <span class="text-danger fw-bold">
                                            {{ number_format($product->price ?? $product->price) }} VNĐ
                                        </span>
                                    </p>

                                    <div class="rating-section mt-auto">
                                        <div class="stars">
                                            @php
                                                $rating = $product->rating_avg ?? 0;
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
                                                    <svg class="star-background" viewBox="0 0 24 24" width="16"
                                                        height="16">
                                                        <path
                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                    </svg>
                                                    @if ($i < $fullStars || ($i == $fullStars && $fractionalStar))
                                                        <svg class="star-fill" viewBox="0 0 24 24" width="16"
                                                            height="16">
                                                            <path
                                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                                        </svg>
                                                    @endif
                                                </span>
                                            @endfor
                                        </div>
                                        <span class="review-count ms-2 small text-muted">
                                            {{ $product->rating_count ?? 0 }} đã mua
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-muted">Không có sản phẩm nào phù hợp.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-3">
                {!! $products->withQueryString()->links() !!}
            </div>

        </div>
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

</body>

</html>
