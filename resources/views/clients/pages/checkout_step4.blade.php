<!DOCTYPE html>
<html lang="vi">

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
    <link rel="stylesheet" href="{{ asset('assets/clients/css/checkout/step4.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Mua sắm thành công</title>

</head>

<body>

    @include('clients.partials.header_client')

    <main>
        <div class="container d-flex flex-column align-items-center mt-4">
            <div class="success-card">
                <i class="fas fa-check-circle check-icon"></i>

                <h2 class="fw-bold text-success mt-2">Đặt hàng thành công!</h2>
                <p class="text-secondary mt-3">
                    Hóa đơn sẽ được gửi về <span class="fw-semibold">Email</span> của bạn.
                </p>
                <p class="note">
                    Bạn có thể huỷ đơn trong mục <em>Đơn hàng của tôi</em> trước khi đóng gói.
                </p>

                <div class="d-flex gap-3 justify-content-center mt-4">
                    <a href="/" class="btn btn-primary btn-home">
                        🏠 Về trang chủ
                    </a>
                </div>
            </div>
        </div>
    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
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
