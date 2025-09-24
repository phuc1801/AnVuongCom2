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
        <form action="{{ route('post-register') }}" method="POST" id="register-form">
            @csrf
            <h2 class="glow-text">Tạo tài khoản</h2>
            <div class="input-field">
                <input type="text" name="name" id="name" autocomplete="name" value="{{ old('name') }}"
                    required>
                <label for="name">Nhập họ tên</label>
            </div>
            @error('name')
                <div id="error-name" style="color: red;text-align: left">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-field">
                <input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}"
                    required>
                <label for="email">Nhập email</label>
            </div>
            @error('email')
                <div id="error-email" style="color: red;text-align: left">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-field">
                <input type="phone" name="phone" id="phone" autocomplete="phone" value="{{ old('phone') }}"
                    required>
                <label for="phone">Nhập số điện thoại</label>
            </div>
            @error('phone')
                <div id="error-phone" style="color: red;text-align: left">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-field">
                <input type="password" name="password" id="password" autocomplete="off" required
                    oninput="
                        const val = this.value;
                        const textEl = document.getElementById('text');
                        if (val === '') {
                            textEl.innerText = '';
                        } else {
                            const isStrong = val.length >= 8 &&
                                            /[a-z]/.test(val) &&
                                            /[A-Z]/.test(val) &&
                                            /[^a-zA-Z0-9]/.test(val);
                            textEl.innerText = isStrong ? 'good' : 'bad';
                        }
                    ">
                <label for="password">Nhập mật khẩu</label>
            </div>
            @if ($errors->has('password'))
                <div id="error-password">
                    @foreach ($errors->get('password') as $msg)
                        <div style="color: red;text-align: left">- {{ $msg }}</div>
                    @endforeach
                </div>
            @endif
            <small id="rule-password">
                Mật khẩu phải có ít nhất 8 kí tự gồm 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt
                (<code>@$!%*?&amp;</code>) <span id="text" style="color: yellow;font-weight:bold"></span>
            </small>
            <div class="input-field">
                <input type="password" name="password_confirmation" id="re-password" autocomplete="off" required>
                <label for="re-password">Nhập lại mật khẩu</label>
            </div>
            <button class="submit-btn" type="submit">Tạo tài khoản</button>
            <div class="register">
                Bằng cách tiếp tục, bạn đồng ý với <a href="#" style="font-style: italic">Điều khoản sử dụng</a>
                và <a href="#" style="font-style: italic">Thông báo về quyền riêng tư</a> của An Vượng
                <p style="margin-top: 10px">Đã có tài khoản rồi? <a href="{{ route('login') }}">Đăng nhập nào!</a></p>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/clients/js/login_logout_forgotPass_resetPass.js') }}"></script>
    <script src="{{ asset('assets/clients/js/custom.js') }}"></script>
    <script src="{{ asset('assets/clients/js/login/register.js') }}"></script>

</body>

</html>
