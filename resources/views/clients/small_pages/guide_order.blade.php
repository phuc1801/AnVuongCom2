@extends('clients.layout.another')

@section('title', 'Hướng dẫn đặt hàng')

@section('content')

    <div class="card shadow-sm border-0 p-4">
        <h2 class="page-title">Hướng dẫn mua hàng</h2>
        <p class="text-muted">Mua hàng tại An Vượng Shop rất đơn giản: bạn có thể mua trực tiếp tại cửa hàng, đặt online qua
            website hoặc đặt qua điện thoại. Dưới đây là hướng dẫn chi tiết từng bước.</p>

        <h5 class="step"><i class="fa-solid fa-search"></i> 1. Tìm sản phẩm</h5>
        <p>Sử dụng thanh tìm kiếm, danh mục hoặc bộ lọc theo giá, thương hiệu, cấu hình để chọn sản phẩm phù hợp. Mỗi sản
            phẩm có mô tả, hình ảnh, thông số kỹ thuật rõ ràng.</p>

        <h5 class="step"><i class="fa-solid fa-cart-plus"></i> 2. Thêm vào giỏ &amp; kiểm tra giỏ hàng</h5>
        <p>Khi tìm được sản phẩm, chọn số lượng, cấu hình (nếu có) và nhấn “Thêm vào giỏ”. Kiểm tra danh sách sản phẩm trong
            giỏ trước khi thanh toán.</p>

        <h5 class="step"><i class="fa-solid fa-credit-card"></i> 3. Thanh toán &amp; chọn hình thức giao hàng</h5>
        <p>Chọn phương thức thanh toán: COD, chuyển khoản, hoặc thanh toán online. Nhập địa chỉ giao hàng, lựa chọn thời
            gian nhận (nếu có) và kiểm tra phí vận chuyển.</p>

        <h5 class="step"><i class="fa-solid fa-check-circle"></i> 4. Xác nhận đơn hàng &amp; liên hệ xác thực</h5>
        <p>Sau khi hoàn tất đặt hàng, hệ thống sẽ gửi email/xác nhận. Bộ phận CSKH có thể gọi lại để xác minh, đặc biệt với
            đơn hàng giá trị lớn hoặc giao tới vùng khó.</p>

        <h5 class="step"><i class="fa-solid fa-box-open"></i> 5. Nhận hàng &amp; kiểm tra</h5>
        <p>Khi giao hàng, hãy kiểm tra bao bì và sản phẩm trước khi ký nhận. Nếu có bất thường (vết rách, thiếu phụ kiện,
            hỏng hóc), từ chối nhận và liên hệ ngay hotline.</p>

        <h5 class="step"><i class="fa-solid fa-rotate-left"></i> 6. Hủy &amp; đổi trả</h5>
        <p>An Vượng Shop chấp nhận hủy đơn trước khi hàng được chuyển. Chính sách đổi trả tuân theo điều kiện sản phẩm chưa
            bóc tem, chưa sử dụng và trong thời gian quy định (tham khảo trang đổi trả).</p>

        <h5 class="step"><i class="fa-solid fa-triangle-exclamation"></i> 7. Lưu ý đặc biệt</h5>
        <div class="note-box">
            <ul class="mb-0">
                <li>Luôn giữ hóa đơn/phiếu bảo hành để được hỗ trợ khi cần.</li>
                <li>Với đơn hàng doanh nghiệp, liên hệ bộ phận bán hàng để xuất hóa đơn VAT.</li>
            </ul>
        </div>

        <p class="mt-3 text-muted">Nếu cần hỗ trợ trực tiếp khi mua hàng: hotline <strong>1900.5555</strong> hoặc chat trực
            tiếp trên website.</p>
    </div>

@endsection
