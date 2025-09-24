<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/contact/contact.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>An Vượng Computer</title>

</head>

<body>
    @include('clients.partials.header_client')

    <main>
        <div class="container" style="display: flex;justify-content: center;margin-top: 20px">
            <div class="form-container">
                <h2>ANVUONG - XIN HÂN HẠNH ĐƯỢC HỖ TRỢ QUÝ KHÁCH HÀNG</h2>
                <form action="{{ route('addContact') }}" method="POST">
                    @csrf

                    <label for="topic">Quý khách đang quan tâm về:</label>
                    <select id="topic" name="topic" required>
                        <option value="">Chọn chủ đề</option>
                        <option value="baohanh">Bảo hành</option>
                        <option value="muahang">Mua hàng</option>
                        <option value="hotro">Hỗ trợ kỹ thuật</option>
                    </select>

                    <label for="content">Nội dung:</label>
                    <textarea id="content" name="content" placeholder="Xin quý khách vui lòng mô tả chi tiết"></textarea>

                    <label for="name">Họ và tên:</label>
                    <input type="text" id="name" name="name" placeholder="Nhập họ tên" required>

                    <div class="row contact-row">
                        <div class="col contact-col">
                            <label for="email">Địa chỉ Email:</label>
                            <input type="email" id="email" name="email" placeholder="Nhập Email" required>
                        </div>
                        <div class="col contact-col">
                            <label for="phone">Số điện thoại:</label>
                            <input type="text" id="phone" name="phone" placeholder="Nhập sđt" required>
                        </div>
                    </div>

                    <button type="submit">GỬI LIÊN HỆ</button>
                </form>
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
                // Số lượng giỏ hàng
                .then(response => response.json())
                .then(data => {
                    document.getElementById('cart-count').innerText = data.cart_sum;
                });
        });
    </script>
</body>

</html>
