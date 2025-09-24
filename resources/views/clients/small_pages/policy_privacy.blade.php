@extends('clients.layout.another')

@section('title', 'Chính sách bảo mật')

@section('content')

    <div class="card shadow-sm border-0 p-4">
        <h2 class="mb-4 ps-2 border-start border-3 border-primary">
            Chính sách bảo mật
        </h2>
        <p class="text-muted">
            An Vượng Shop cam kết bảo vệ thông tin cá nhân của khách hàng. Chính sách này giải thích cách chúng tôi thu
            thập, sử dụng và bảo vệ dữ liệu cá nhân.
        </p>

        <h5 class="mt-4">1. Thông tin thu thập</h5>
        <p>Chúng tôi có thể thu thập các loại thông tin sau khi bạn sử dụng dịch vụ:</p>
        <ul class="ms-3">
            <li>Thông tin liên hệ: tên, địa chỉ giao hàng, email, số điện thoại.</li>
            <li>Thông tin giao dịch: chi tiết đơn hàng, phương thức thanh toán, lịch sử mua hàng.</li>
            <li>Thông tin kỹ thuật: IP, loại trình duyệt, thiết bị.</li>
        </ul>

        <h5 class="mt-4">2. Mục đích sử dụng</h5>
        <p>Thông tin được sử dụng để:</p>
        <ul class="ms-3">
            <li>Xử lý đơn hàng và giao nhận.</li>
            <li>Cung cấp dịch vụ chăm sóc khách hàng và hỗ trợ kỹ thuật.</li>
            <li>Gửi thông báo khuyến mãi (nếu bạn đồng ý).</li>
            <li>Cải thiện trải nghiệm người dùng trên website.</li>
        </ul>

        <h5 class="mt-4">3. Chia sẻ thông tin với bên thứ ba</h5>
        <p>
            Chúng tôi chỉ chia sẻ thông tin với các bên liên quan khi cần thiết để thực hiện đơn hàng
            (ví dụ: đơn vị vận chuyển, đơn vị thanh toán) và chỉ theo mục đích đã nêu.
            Chúng tôi không bán dữ liệu khách hàng cho bên thứ ba.
        </p>

        <h5 class="mt-4">4. Bảo mật &amp; lưu trữ</h5>
        <p>
            Chúng tôi áp dụng các biện pháp kỹ thuật và quản lý để bảo vệ dữ liệu, bao gồm mã hóa,
            kiểm soát truy cập và quy trình sao lưu định kỳ.
            Dữ liệu cá nhân lưu trữ trong thời gian phù hợp với mục đích thu thập và theo quy định pháp luật.
        </p>

        <h5 class="mt-4">5. Quyền của khách hàng</h5>
        <p>
            Khách hàng có quyền truy cập, chỉnh sửa hoặc yêu cầu xóa thông tin cá nhân.
            Để thực hiện, vui lòng liên hệ:
            <a href="mailto:cskh@anvuong.com">cskh@anvuong.com</a>.
        </p>

        <h5 class="mt-4">6. Cookie &amp; theo dõi</h5>
        <p>
            Website sử dụng cookie để cải thiện trải nghiệm người dùng.
            Bạn có thể điều chỉnh cài đặt cookie qua trình duyệt.
        </p>

        <h5 class="mt-4">7. Liên hệ</h5>
        <p>
            Mọi câu hỏi liên quan đến chính sách bảo mật, vui lòng liên hệ
            <strong>cskh@anvuong.com</strong> hoặc hotline <strong>1900.5555</strong>.
        </p>
    </div>

@endsection
