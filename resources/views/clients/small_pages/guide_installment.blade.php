@extends('clients.layout.another')

@section('title', 'Hướng dẫn trả góp')

@section('content')

    <div class="card shadow-sm border-0 rounded-3 p-4">
        <h2 class="ps-3 mb-3">Hướng dẫn trả góp</h2>
        <p class="text-muted">An Vượng Shop hỗ trợ trả góp linh hoạt thông qua thẻ tín dụng hoặc công ty tài chính đối tác.
        </p>

        <h5 class="mt-3">1. Điều kiện tham gia trả góp</h5>
        <ul class="mb-3">
            <li>Khách hàng từ <span class="fw-bold">20 tuổi</span> trở lên, có CMND/CCCD hoặc hộ chiếu.</li>
            <li>Đơn hàng tối thiểu: <span class="fw-bold">3.000.000đ</span> (có thể thay đổi theo chương trình).</li>
            <li>Cần cung cấp thông tin chứng minh thu nhập nếu yêu cầu bởi công ty tài chính.</li>
        </ul>

        <h5 class="mt-3">2. Hình thức trả góp</h5>
        <ol class="mb-3">
            <li>Trả góp bằng thẻ tín dụng (<span class="fw-bold">0% lãi suất</span> cho một số ngân hàng/ chương trình).</li>
            <li>Trả góp qua công ty tài chính: lãi suất ưu đãi theo gói và thời hạn (6, 9, 12, 18 tháng).</li>
        </ol>

        <h5 class="mt-3">3. Thủ tục &amp; giấy tờ</h5>
        <p class="text-muted">Chuẩn bị CMND/CCCD/Hộ chiếu, sổ hộ khẩu (nếu cần), sao kê lương hoặc hợp đồng lao động (nếu
            được yêu cầu). Thủ tục thường hoàn tất trong ngày (tùy đối tượng).</p>

        <h5 class="mt-3">4. Quy trình đăng ký</h5>
        <ol class="mb-3">
            <li>Chọn sản phẩm và hình thức trả góp tại trang thanh toán hoặc liên hệ nhân viên bán hàng.</li>
            <li>Nộp hồ sơ theo yêu cầu đối tác tài chính hoặc xác thực thẻ tín dụng.</li>
            <li>Sau khi được duyệt, bạn ký hợp đồng trả góp và nhận hàng theo cam kết.</li>
        </ol>

        <h5 class="mt-3">5. Lưu ý</h5>
        <p class="text-muted">Phí và lãi suất tùy theo chính sách từng công ty tài chính/ ngân hàng. An Vượng Shop sẽ cung
            cấp đầy đủ thông tin và minh bạch về các khoản phát sinh khi khách hàng chọn trả góp.</p>

        <p class="text-muted mt-3">Để được tư vấn trả góp chi tiết theo sản phẩm, vui lòng liên hệ hotline:
            <strong>1900.5555</strong> hoặc đến trực tiếp cửa hàng.</p>
    </div>

@endsection
