@extends('clients.layout.another')

@section('title', 'Chính sách đổi trả')

@section('content')

    <div class="card shadow-sm border-0 p-4">
        <h1 class="mb-4 ps-3 fw-bold border-start border-4 border-primary">
            Chính sách đổi trả sản phẩm
        </h1>

        <p>
            Tại <strong>An Vượng Shop</strong>, chúng tôi luôn mong muốn khách hàng hài lòng tuyệt đối khi mua sắm.
            Vì vậy, chúng tôi xây dựng chính sách đổi trả rõ ràng, minh bạch nhằm bảo vệ quyền lợi khách hàng và nâng cao
            chất lượng dịch vụ.
        </p>

        <h5 class="mt-4 fw-bold text-primary">1. Điều kiện đổi trả</h5>
        <ul class="ms-3">
            <li>Sản phẩm còn nguyên vẹn, đầy đủ hộp, phụ kiện, tem/phiếu bảo hành.</li>
            <li>Sản phẩm chưa bị tác động bởi bên ngoài như trầy xước, nứt vỡ, vào nước...</li>
            <li>Thời gian yêu cầu đổi trả trong vòng <strong>7 ngày</strong> kể từ ngày nhận hàng.</li>
            <li>Hóa đơn mua hàng hoặc thông tin đặt hàng phải trùng khớp với sản phẩm đổi trả.</li>
        </ul>

        <h5 class="mt-4 fw-bold text-primary">2. Các trường hợp được đổi trả</h5>
        <ul class="ms-3">
            <li>Sản phẩm giao không đúng mẫu mã, chủng loại, số lượng như trong đơn hàng.</li>
            <li>Sản phẩm bị lỗi kỹ thuật do nhà sản xuất.</li>
            <li>Sản phẩm bị hư hỏng trong quá trình vận chuyển (có xác nhận từ đơn vị vận chuyển).</li>
        </ul>

        <h5 class="mt-4 fw-bold text-primary">3. Quy trình đổi trả</h5>
        <ol class="ms-3">
            <li>Khách hàng liên hệ Hotline hoặc Email CSKH để thông báo tình trạng sản phẩm.</li>
            <li>Đóng gói sản phẩm kèm hóa đơn, phụ kiện đầy đủ và gửi về An Vượng Shop.</li>
            <li>Chúng tôi kiểm tra, xác nhận tình trạng sản phẩm.</li>
            <li>Tiến hành đổi sản phẩm mới hoặc hoàn tiền theo yêu cầu.</li>
        </ol>

        <h5 class="mt-4 fw-bold text-primary">4. Thời gian xử lý</h5>
        <p>Trong vòng <strong>3 - 5 ngày làm việc</strong> kể từ khi nhận được sản phẩm trả về.</p>

        <h5 class="mt-4 fw-bold text-primary">5. Phí đổi trả</h5>
        <ul class="ms-3">
            <li><strong>Miễn phí</strong> đổi trả nếu lỗi thuộc về nhà sản xuất hoặc do An Vượng Shop.</li>
            <li>Nếu khách hàng muốn đổi sản phẩm khác (không phải lỗi của Shop), chi phí vận chuyển hai chiều sẽ do khách
                hàng thanh toán.</li>
        </ul>

        <div class="alert alert-info mt-4">
            📌 <strong>Lưu ý:</strong> Chính sách đổi trả không áp dụng cho các sản phẩm khuyến mãi, giảm giá đặc biệt
            hoặc sản phẩm được mua theo chương trình “xả hàng, thanh lý”.
        </div>
    </div>

@endsection
