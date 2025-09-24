@extends('clients.layout.another')

@section('title', 'In hóa đơn điện tử (VAT)')

@section('content')

    <div class="card shadow-sm border-0 rounded-3 p-4">
        <h2 class="ps-3 mb-3">In hóa đơn điện tử (VAT)</h2>
        <p class="text-muted">An Vượng Shop hỗ trợ xuất hóa đơn điện tử cho khách hàng doanh nghiệp và cá nhân có nhu cầu.
        </p>

        <h5 class="mt-3">1. Thông tin cần cung cấp</h5>
        <ul class="mb-3">
            <li>Tên công ty/khách hàng</li>
            <li>Mã số thuế (đối với doanh nghiệp)</li>
            <li>Địa chỉ trụ sở/địa chỉ nhận hóa đơn</li>
            <li>Email nhận hóa đơn (<span class="fw-bold">bắt buộc</span>)</li>
        </ul>

        <h5 class="mt-3">2. Thời gian xuất hóa đơn</h5>
        <p class="text-muted">Hóa đơn điện tử sẽ được phát hành trong vòng <span class="fw-bold">24 giờ</span> sau khi đơn
            hàng hoàn tất và thông tin khách hàng cung cấp đầy đủ.</p>

        <h5 class="mt-3">3. Quy trình yêu cầu</h5>
        <ol class="mb-3">
            <li>Đặt hàng và chọn “Yêu cầu xuất hóa đơn VAT”.</li>
            <li>Điền thông tin xuất hóa đơn đầy đủ trên form hoặc gửi email tới <a href="mailto:cskh@anvuong.com"
                    class="fw-bold">cskh@anvuong.com</a>.</li>
            <li>Nhận hóa đơn qua email dưới dạng file PDF/XML (theo quy định).</li>
        </ol>

        <h5 class="mt-3">4. Lưu ý</h5>
        <p class="text-muted">Vui lòng kiểm tra kỹ thông tin trước khi gửi. An Vượng Shop <span class="fw-bold">không chịu
                trách nhiệm</span> điều chỉnh sai sót nếu thông tin do khách hàng cung cấp không chính xác.</p>

        <p class="text-muted mt-3">Trường hợp cần hỗ trợ xuất hóa đơn hàng loạt cho doanh nghiệp, vui lòng liên hệ <span
                class="fw-bold">phòng kinh doanh</span> để được tư vấn và cung cấp dịch vụ xuất hóa đơn định kỳ.</p>
    </div>

@endsection
