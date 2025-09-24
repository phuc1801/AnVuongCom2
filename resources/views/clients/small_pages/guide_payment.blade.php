@extends('clients.layout.another')

@section('title', 'Hướng dẫn thanh toán')

@section('content')

    <div class="card shadow-sm border-0 p-4">
        <h2 class="page-title">Hướng dẫn thanh toán</h2>
        <p class="text-muted">Chúng tôi cung cấp nhiều phương thức thanh toán an toàn và tiện lợi:</p>

        <h5 class="mt-3 method"><i class="fa-solid fa-hand-holding-dollar"></i> 1. Thanh toán khi nhận hàng (COD)</h5>
        <p>Thanh toán trực tiếp cho nhân viên giao hàng khi nhận sản phẩm. Phù hợp cho khách hàng muốn kiểm tra hàng trước
            khi trả tiền.</p>

        <h5 class="mt-3 method"><i class="fa-solid fa-building-columns"></i> 2. Chuyển khoản ngân hàng</h5>
        <p>Bạn có thể chuyển khoản vào tài khoản công ty. Sau khi chuyển, vui lòng giữ lại mã giao dịch và thông báo cho
            chúng tôi để xử lý nhanh.</p>
        <p class="text-muted">* Lưu ý: đơn hàng sẽ được xử lý sau khi xác nhận đã nhận được chuyển khoản.</p>

        <h5 class="mt-3 method"><i class="fa-solid fa-wallet"></i> 3. Thanh toán online / ví điện tử</h5>
        <p>Hỗ trợ thanh toán qua VNPay, Momo, ZaloPay và cổng thanh toán thẻ. Giao dịch được mã hóa bảo mật.</p>

        <h5 class="mt-3 method"><i class="fa-solid fa-credit-card"></i> 4. Thanh toán trả góp</h5>
        <p>Hỗ trợ trả góp qua thẻ tín dụng và công ty tài chính (áp dụng điều kiện). Thủ tục nhanh, chỉ cần CMND/CCCD và xác
            minh thu nhập theo yêu cầu.</p>

        <h5 class="mt-3">Các lưu ý khi thanh toán</h5>
        <ul>
            <li>Giữ biên lai và mã giao dịch để đối chiếu khi cần.</li>
            <li>Với thanh toán chuyển khoản, ghi rõ mã đơn hàng trong nội dung.</li>
            <li>Phát sinh phí chuyển tiền liên ngân hàng tùy phía khách hàng.</li>
        </ul>

        <p class="text-muted mt-3">Nếu gặp sự cố thanh toán, liên hệ <strong>cskh@anvuong.com</strong> hoặc hotline
            <strong>1900.5555</strong>.</p>
    </div>

@endsection
