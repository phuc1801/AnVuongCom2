<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>Tra cứu bảo hành</title>
</head>

<body>
    @include('clients.partials.header_client')

    <main>
        <div class="container d-flex justify-content-center mt-4">
            <div class="container-child p-4 bg-white shadow rounded" style="max-width: 500px; width: 100%;">
                <h2 class="text-center mb-4">Tra cứu bảo hành</h2>

                <form id="serialForm" data-route="{{ route('check.warranty') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" id="serialNumber" name="serial_number" placeholder="Nhập Serial Number"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="{{ config('captcha.sitekey') }}"></div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Tra cứu</button>
                    <div id="serialResult" class="mt-3"></div>
                </form>
            </div>
        </div>
    </main>

    @include('clients.partials.footer_client')

    <script src="{{ asset('bs5/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/clients/js/searchWarranty/searchWarranty.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
