<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/checkout/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/checkout/step1.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Giỏ hàng</title>

</head>

<body>
    @include('clients.partials.header_client')

    <main>
        <div class="container my-4">
            <div class="card shadow-lg border-0 rounded-3" id="checkout-card">
                <div class="card-header bg-light">
                    <a href="/" class="text-decoration-none">
                        <i class="fa-solid fa-arrow-left me-2"></i> Mua thêm sản phẩm khác
                    </a>
                </div>

                <div class="card-body" id="checkout-content">
                    <form id="cart-form" action="{{ route('updateCart') }}" method="POST">
                        @csrf
                        <div class="div-product-cart-render">
                            @forelse ($cartItems as $item)
                                <div class="border-bottom pb-3 mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 col-4">
                                            <div class="position-relative">
                                                <img src="{{ $item->product->image_url }}"
                                                    class="img-fluid rounded shadow-sm" alt="">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger position-absolute top-0 end-0 m-1 trash-btn"
                                                    data-cart-id="{{ $item->id }}">
                                                    <i class="fa-solid fa-trash"></i> Xóa
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-8">
                                            <h6 class="mb-1">{{ $item->product->name }}</h6>
                                            <p class="text-muted mb-1">Trong kho còn:
                                                <strong>{{ $item->product->quantity }}</strong>
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="text-danger fw-bold mb-0 sale-price"
                                                        data-price="{{ $item->product->price }}">
                                                        {{ number_format($item->product->price, 0, ',', '.') }} đ
                                                    </p>
                                                    <small class="text-muted text-decoration-line-through real-price">
                                                        {{ number_format($item->product->real_price, 0, ',', '.') }} đ
                                                    </small>
                                                </div>
                                                <div class="updown_quantity">
                                                    <div class="input-group input-group-sm">
                                                        <button type="button"
                                                            class="btn btn-outline-secondary minus-btn"><i
                                                                class="fa-solid fa-minus"></i></button>
                                                        <input type="number" name="quantities[{{ $item->id }}]"
                                                            class="form-control text-center quantity-input"
                                                            min="1" max="{{ $item->product->quantity }}"
                                                            value="{{ $item->number }}">
                                                        <button type="button"
                                                            class="btn btn-outline-secondary plus-btn"><i
                                                                class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="mt-2 mb-0 text-end fw-bold product-total">
                                                Thành tiền:
                                                <span class="product-total-value">
                                                    {{ number_format($item->product->price * $item->number, 0, ',', '.') }}
                                                    đ
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div>Chưa có sản phầm nào trong giỏ hàng</div>
                            @endforelse
                        </div>

                        <div class="div-coupon my-3">
                            <span id="open-span-coupon"
                                class="span-coupon d-inline-flex align-items-center text-primary" role="button">
                                <i class="fa-solid fa-ticket me-2"></i> Sử dụng mã giảm giá
                                <i id="bluesky" class="fa-brands fa-bluesky ms-2"></i>
                            </span>
                            <div class="div-coupon-div">
                                <div class="input-group input-group-sm">
                                    <input name="coupon_code" class="form-control text-discount" type="text"
                                        placeholder="Nhập mã giảm giá">
                                    <button type="button" class="btn btn-outline-primary apply-discount">Áp
                                        dụng</button>
                                </div>
                                <div class="coupon-result mt-2" style="display:none;"></div>
                            </div>
                        </div>

                        <input type="hidden" name="coupon_code" id="coupon_code" value="">

                        <div class="cash-total pt-3">
                            <div class="d-flex justify-content-between">
                                <span>Phí vận chuyển:</span>
                                <span class="shipping-fee">50.000 đ</span>
                            </div>
                            <div class="d-flex justify-content-between fw-bold mt-2">
                                <span>Tổng tiền:</span>
                                <span class="final-total"></span>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" id="next-btn" class="btn btn-danger btn-lg px-4"
                                data-next="order-info">
                                Đặt hàng ngay
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script src="{{ asset('assets/clients/js/checkout/step1.js') }}"></script>
    @if (session('toastr'))
        <script>
            toastr.{{ session('toastr.type') }}("{{ session('toastr.message') }}");
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
