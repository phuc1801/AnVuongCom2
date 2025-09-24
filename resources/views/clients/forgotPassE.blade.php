<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An Vượng Tech</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <style>
        body::before {
            background: url('assets/clients/media/images/nen.jpg') center center / cover no-repeat, #000;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/login_logout_forgotPass_resetPass.css') }}">
</head>

<body>
    <div class="wrapper">
        <form action="{{ route('password.email') }}" method="POST" id="forgot-form">
            @csrf
            <h2 class="glow-text">Lấy lại mật khẩu</h2>
            <div>
                Quên mật khẩu? Đừng lo lắng. Chỉ cần cho chúng tôi biết địa chỉ email của tài khoản và chúng tôi sẽ gửi
                cho bạn liên kết đặt lại mật khẩu.
            </div>
            <div class="input-field">
                <input type="email" id="email" name="email" autocomplete="email" value="{{ old('email') }}"
                    required>
                <label for="email">Nhập email</label>
            </div>
            @error('email')
                <div id="error-email" style="color: red;text-align: left">
                    {{ $message }}
                </div>
            @enderror
            <div class="forget">
                <a href="{{ route('login') }}">Quay lại trang đăng nhập</a>
            </div>
            <button class="submit-btn" type="submit">Xác nhận</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/clients/js/login_logout_forgotPass_resetPass.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.input-field input').on('focus', function() {
                const id = $(this).attr('id');
                const errorM = $('#error-' + id);
                if (errorM.length) {
                    errorM.slideUp(500);
                }
            });
        });
    </script>
</body>

</html>
