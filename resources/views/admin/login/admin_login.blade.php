<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin login</title>

    <link href="{{ asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/build/css/custom.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('admin.login.post') }}" method="POST">
                        @csrf
                        <h1>Đăng nhập</h1>
                        <div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu"
                                required />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary submit" style="color: white">Đăng
                                nhập</button>
                        </div>

                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><img style="height:50px" src="{{ asset('favicon.png') }}" alt="logo"> An Vuong
                                    Computer</h1>
                                <p>©2025 All Rights Reserved. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

<script>
    window.addEventListener("pageshow", function() {
        fetch('/update-cart-item')
            .then(response => response.json())
            .then(data => {
                document.getElementById('cart-count').innerText = data.cart_sum;
            });
    });
</script>

</html>
