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
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Chọn địa chỉ giao hàng</title>

</head>

<body>
    @include('clients.partials.header_client')

    <main>
        <p>{{ session('couponProduct') }}</p>
        <div class="container">
            <div class="card shadow-lg rounded-4" id="checkout-card">
                <div class="">
                    <div class="card-body" id="checkout-content">
                        <p style="text-align: center; color: red">Vui lòng kiểm tra kỹ thông tin vì ở bước tiếp
                            theo chúng tôi sẽ khởi tạo đơn hàng cho bạn
                            và bạn không thể thay đổi thông tin nhận hàng nữa</p>
                        <form id="order-info-form" action="{{ route('addShippingAddress') }}" method="POST">
                            @csrf
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" name="shipping_method" id="shipping-home"
                                    value="home" checked>
                                <label for="shipping-home" class="form-check-label fw-semibold">Giao hàng tận
                                    nơi</label>
                            </div>
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3 border-bottom pb-2">Thông tin giao hàng</h5>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shipping_option"
                                            id="option-new" value="new" checked>
                                        <label class="form-check-label fw-semibold" for="option-new">
                                            Nhập địa chỉ mới
                                        </label>
                                    </div>
                                    @if (!$shippingAddresses->isEmpty())
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shipping_option"
                                                id="option-saved" value="saved">
                                            <label class="form-check-label fw-semibold" for="option-saved">
                                                Chọn địa chỉ có sẵn
                                            </label>
                                        </div>
                                    @endif
                                </div>

                                <div class="address-new-container p-3 rounded-3 border mb-3">
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <label for="name-new" class="form-label">Họ tên</label>
                                            <input type="text" id="name-new" name="name_new" class="form-control"
                                                value="{{ old('name_new') }}" placeholder="Nhập họ tên" required>
                                            <span id="name-new-error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone-new" class="form-label">Số điện thoại</label>
                                            <input type="tel" id="phone-new" name="phone_new" class="form-control"
                                                value="{{ old('phone_new') }}" placeholder="Nhập số điện thoại"
                                                required>
                                            <span id="phone-new-error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tỉnh/Thành phố</label>
                                            <select class="form-select" name="city" id="city" required>
                                            </select>
                                            <span id="city-error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Quận/Huyện</label>
                                            <select class="form-select" name="district" id="district" required>
                                            </select>
                                            <span id="district-error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Xã/Phường</label>
                                            <select class="form-select" name="ward" id="ward" required>
                                            </select>
                                            <span id="district-error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Số nhà, tên đường</label>
                                            <input type="text" class="form-control" id="street" name="street"
                                                placeholder="Số nhà, đường" required>
                                        </div>
                                        <input type="hidden" id="full_address" name="address">
                                    </div>
                                </div>

                                @if (!$shippingAddresses->isEmpty())
                                    <div class="address-saved-container p-3 rounded-3 border mb-3">
                                        <div class="list-group mb-3">
                                            @foreach ($shippingAddresses as $index => $address)
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-2" type="radio"
                                                        name="saved_address" value="{{ $address->id }}"
                                                        data-name="{{ $address->name }}"
                                                        data-phone="{{ $address->phone }}"
                                                        {{ $index === 0 ? 'checked' : '' }}>
                                                    {{ $address->address }}
                                                </label>
                                            @endforeach
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="name-saved" class="form-label">Họ tên</label>
                                                <input type="text" id="name-saved" name="name_saved"
                                                    class="form-control"
                                                    value="{{ $shippingAddresses[0]->name ?? '' }}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone-saved" class="form-label">Số điện thoại</label>
                                                <input type="tel" id="phone-saved" name="phone_saved"
                                                    class="form-control"
                                                    value="{{ $shippingAddresses[0]->phone ?? '' }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="mb-4">
                                <label for="note" class="form-label">Ghi chú (không bắt buộc)</label>
                                <input class="form-control" type="text" id="note" name="note"
                                    placeholder="Lưu ý, yêu cầu khác...">
                            </div>

                            <div class="d-grid">
                                <button type="submit" id="next-btn" class="btn btn-danger btn-lg"
                                    data-next="payment">
                                    Tiếp tục
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script src="{{ asset('assets/clients/js/checkout/step2.js') }}"></script>
    @if (session('toastr_errors'))
        <script>
            @foreach (session('toastr_errors') as $error)
                toastr.error('{{ $error }}');
            @endforeach
        </script>
    @endif
    <script>
        window.addEventListener("pageshow", function() {
            fetch('/update-cart-item')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('cart-count').innerText = data.cart_sum;
                });
        });
    </script>
</body>

</html>
