<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/login/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/login_logout_forgotPass_resetPass.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

</head>

<body>
    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}" id="login-form">
            @csrf
            <h2 class="glow-text">Đăng nhập</h2>
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
            <div class="input-field password-wrapper">
                <input type="password" id="password" name="password" required>
                <label for="password">Nhập mật khẩu</label>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
            @error('password')
                <div id="error-password" style="color: red;text-align: left">
                    {{ $message }}
                </div>
            @enderror
            <div class="forget">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember">
                    <p>Ghi nhớ tài khoản</p>
                </label>
                <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
            </div>
            <button class="submit-btn" type="submit">Đăng nhập</button>
            <div class="another-login-type">
                <div class="another-login-type-child">
                    <div class="title-another-login-type"></div>
                    <div class="middle-title-another-login-type">Hoặc đăng nhập bằng</div>
                    <div class="title-another-login-type"></div>
                </div>
                <div class="another-login-type-child">
                    <div class="gg-login">
                        <a class="gg-login-a" href="{{ route('google.login') }}">
                            <img src="{{ asset('assets/clients/media/images/social-brand/logo-google.svg') }}"
                                alt="google">
                            Google
                        </a>
                    </div>
                </div>
            </div>
            <div class="register">
                <p>Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký nào!</a></p>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/clients/js/login_logout_forgotPass_resetPass.js') }}"></script>
    <script src="{{ asset('assets/clients/js/custom.js') }}"></script>
    <script src="{{ asset('assets/clients/js/login/login.js') }}"></script>

</body>

</html>
