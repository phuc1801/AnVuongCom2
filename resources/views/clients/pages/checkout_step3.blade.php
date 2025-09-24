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
    <link rel="stylesheet" href="{{ asset('assets/clients/css/checkout/step3.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Xác nhận đơn hàng</title>

</head>

<body>
    @include('clients.partials.header_client')

    <main>
        <div class="container">
            <div class="card shadow-lg border-0 rounded-3" id="checkout-card">
                @if (!empty($address))
                    <div class="card-body" id="checkout-content">
                        <div class="order-details">
                            <h2>Thông tin đơn hàng</h2>

                            <div class="info-row"><strong>Khách hàng:</strong> {{ $address->name }}</div>
                            <div class="info-row"><strong>Số điện thoại:</strong> {{ $address->phone }}</div>
                            <div class="info-row"><strong>Địa chỉ nhận hàng:</strong> {{ $address->address }}</div>

                            <div><strong>Danh sách sản phẩm:</strong></div>
                            <table class="product-table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderItems as $item)
                                        <tr>
                                            <td>{{ $item->product->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ number_format($item->total_price, 0, ',', '.') }}
                                                đ
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <p style="margin-top: 20px" class="order-timer">
                            Hiệu lực của đơn hàng còn:
                            <span id="timer" class="countdown-timer"></span>
                        </p>
                        <p style="font-style: italic">Lưu ý: <span> Quay trở lại các bước trước sẽ khiến đơn hàng bị
                                hủy!
                            </span> </p>
                        <form id="checkout-form" action="{{ route('addOrder') }}" method="POST">
                            @csrf
                            <input type="hidden" name="transaction_id" id="transaction_id" value="">

                            <div class="payment-options">
                                <h3>Chọn hình thức thanh toán</h3>

                                <label class="payment-option">
                                    <input type="radio" name="payment" value="cash" checked
                                        onclick="showPaymentDetails('cash')">
                                    <i class="fa fa-box"></i> Thanh toán khi giao hàng (COD)
                                </label>

                                <label class="payment-option">
                                    <input type="radio" name="payment" value="paypal"
                                        onclick="showPaymentDetails('paypal')">
                                    <i class="fa fa-university"></i> Thanh toán online qua cổng paypal
                                </label>

                                <div id="paypal-details" class="payment-details" style="display:none">
                                    <img src="{{ asset('assets/clients/media/images/payment/qrpaypal.png') }}"
                                        class="qr-code" alt="Bank QR Code">
                                    <button type="button" class="btn btn-primary btn-fake-scan" data-method="paypal">
                                        ✅ Giả lập quét QR thành công
                                    </button>
                                </div>
                            </div>

                            <div class="summary">
                                <div><strong>Phí vận chuyển:</strong> 50.000đ</div>
                                <div><strong>Giảm giá:</strong>
                                    {{ number_format($totalPrice['discount'], 0, ',', '.') }} đ</div>
                                <div><strong>Tổng tiền:</strong>
                                    <span class="total">{{ number_format($totalPrice['total'], 0, ',', '.') }}
                                        đ</span>
                                </div>
                            </div>

                            <button class="btn-submit">XÁC NHẬN</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script src="{{ asset('assets/clients/js/checkout/step3.js') }}"></script>
    <script>
        const expiredAt = new Date("{{ session('time_is_money') }}");
    </script>
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
