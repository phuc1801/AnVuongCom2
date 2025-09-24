<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kích hoạt tài khoản</title>
    <style>
        .active{
            padding: 10px;
            background-color: lightblue;
            border: 1px solid transparent;
            border-radius: 20px;
        }
        .regard{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h1>Xin chào</h1>
    <p>Cảm ơn bạn đã đăng ký tại website của chúng tôi. Để kích hoạt tài khoản của bạn, vui lòng nhấp vào liên kết dưới đây:</p>
    <a href="{{url('/activate/'.$token)}}" class="active">Kích hoạt</a>
    <p class="regard">Trân trọng!</p>
    <p>Đội ngũ hỗ trợ.</p>
</body>
</html>
