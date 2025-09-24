<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hóa đơn mua hàng</title>
</head>

<body
    style="font-family: Arial, sans-serif; font-size: 16px; color: #333; line-height: 1.6; margin: 0; padding: 20px; background-color: #f9f9f9;">
    <div style="max-width: 700px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px;">
        <p>Chào <strong>{{ $order->shippingAddress->name }}</strong>,</p>
        <p>Cảm ơn bạn đã đặt hàng tại <strong>An Vượng Computer</strong>. Dưới đây là chi tiết hóa đơn của bạn.</p>

        <h2 style="text-align: center; background: #28a745; color: #fff; padding: 10px; border-radius: 5px;">Hóa đơn mua
            hàng</h2>
        <p style="text-align: right; font-size: 14px; color: #777;">Ngày tạo:
            {{ $order->created_at->format('d/m/Y H:i') }}</p>

        <table style="width: 100%; margin-bottom: 20px;">
            <tr>
                <td>
                    <strong>Từ</strong>
                    <p> An Vượng Computer<br>
                        209 Tôn Đức Thắng, Lam Sơn, Lê Chân, Hải Phòng
                        <br>Hải Phòng
                        <br>SĐT: 123456789
                        <br>Email: cskh@anvuong.com
                    </p>
                </td>
                <td>
                    <strong>Đến:</strong>
                    <p>{{ $order->shippingAddress->name }}<br>
                        {{ $order->shippingAddress->address }}<br>
                        {{ $order->shippingAddress->city }}<br>
                        SĐT: {{ $order->shippingAddress->phone }}</p>
                </td>
                <td>
                    <strong>
                        Thông tin khách hàng
                    </strong>
                    <p><b>Order ID:</b>{{ $order->id }}</p>
                    <b>Email:</b>{{ $order->user->email }}
                    <b>Tài khoản:</b>{{ $order->user->name }}
                </td>
            </tr>
        </table>

        <h3 style="margin-bottom: 10px;">Chi tiết đơn hàng:</h3>
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background: #28a745; color: #fff;">
                    <th style="padding: 10px; text-align: left;">Ảnh</th>
                    <th style="padding: 10px; text-align: left;">Sản phẩm</th>
                    <th style="padding: 10px; text-align: right;">Giá</th>
                    <th style="padding: 10px; text-align: center;">Số lượng</th>
                    <th style="padding: 10px; text-align: center;">Serial number</th>
                    <th style="padding: 10px; text-align: right;">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderItems as $item)
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 10px;"><img src="{{ $item->product->image_url }}" width="50"
                                style="border-radius: 5px;"></td>
                        <td style="padding: 10px;">{{ $item->product->name }}</td>
                        <td style="padding: 10px; text-align: right;">
                            {{ number_format($item->product->price, 0, ',', '.') }}
                            đ
                        </td>
                        <td style="padding: 10px; text-align: center;">{{ $item->quantity }}</td>
                        <td style="padding: 10px; text-align: center;">
                            @foreach ($item->orderItemDetails as $detail)
                                {{ $detail->productSerial->serial_number }}
                                <br>
                            @endforeach
                        </td>
                        <td style="padding: 10px; text-align: right;">
                            {{ number_format($item->total_price, 0, ',', '.') }} đ</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3 style="margin-top: 20px;">Phương thức thanh toán:</h3>
        <p
            style="background: {{ $order->payment->method == 'paypal' ? 'blue' : 'green' }}; color: #fff; padding: 10px; text-align: center; border-radius: 5px;">
            {{ $order->payment->method == 'paypal' ? 'Thanh toán bằng PayPal' : 'Thanh toán khi nhận hàng' }}
        </p>
        <p style="font-size: 14px; color: #777;">Nếu là PayPal, thanh toán đã được xử lý trực tuyến. Nếu là thanh toán
            khi nhận hàng, khách hàng sẽ thanh toán khi nhận sản phẩm.</p>

        <h3 style="margin-top: 20px;">Tóm tắt thanh toán:</h3>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px;"><strong>Tiền hàng</strong></td>
                <td style="padding: 10px; text-align: right;">
                    {{ number_format($order->orderItems->sum('total_price'), 0, ',', '.') }} đ</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><strong>Giảm giá</strong></td>
                <td style="padding: 10px; text-align: right;">
                    {{ number_format(optional($order->coupon)->value ?? 0, 0, ',', '.') }}
                    đ</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><strong>Shipping</strong></td>
                <td style="padding: 10px; text-align: right;">50.000 đ</td>
            </tr>
            <tr style="background: #28a745; color: #fff;">
                <td style="padding: 10px;"><strong>Tổng tiền</strong></td>
                <td style="padding: 10px; text-align: right;">{{ number_format($order->total_price, 0, ',', '.') }} đ
                </td>
            </tr>
        </table>

        <p style="text-align: center; font-size: 14px; color: #777; margin-top: 20px;">Cảm ơn bạn đã mua hàng! Nếu có
            bất kỳ câu hỏi nào, hãy liên hệ với chúng tôi.</p>
    </div>
</body>

</html>
