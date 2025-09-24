@extends('clients.layout.another')

@section('title', 'Chính sách bảo hành')

@section('content')

    <div class="card shadow-sm border-0 p-4">
        <h2 class="mb-4 ps-3 border-start border-4 border-primary">
            Chính sách bảo hành
        </h2>
        <div class="lh-lg">
            <p>
                An Vượng Shop cam kết bảo hành theo quy định của nhà sản xuất và các điều kiện bổ sung do cửa hàng áp dụng.
                Văn bản này mô tả chi tiết quyền lợi của khách hàng, điều kiện bảo hành và quy trình thực hiện.
            </p>

            <h5 class="mt-4 fw-bold text-primary">1. Phạm vi áp dụng</h5>
            <p>
                Áp dụng cho các sản phẩm mua tại hệ thống An Vượng Shop hoặc các kênh bán hàng trực tuyến chính thức.
            </p>

            <h5 class="mt-4 fw-bold text-primary">2. Thời hạn &amp; hình thức bảo hành</h5>
            <ul class="ms-3">
                <li>Thời hạn bảo hành tùy theo từng loại sản phẩm: <strong>12 tháng</strong> hoặc theo chính sách nhà sản
                    xuất (một số sản phẩm có bảo hành 24/36 tháng).</li>
                <li>Bảo hành chính hãng hoặc tại cửa hàng An Vượng Shop (nếu có thỏa thuận).</li>
                <li>Một số linh kiện (ví dụ: pin, sạc) có thời hạn ngắn hơn — thông tin sẽ được ghi rõ trên phiếu bảo hành.
                </li>
            </ul>

            <h5 class="mt-4 fw-bold text-primary">3. Điều kiện được bảo hành</h5>
            <ol class="ms-3">
                <li>Sản phẩm còn trong thời hạn bảo hành.</li>
                <li>Tem, phiếu bảo hành còn nguyên vẹn.</li>
                <li>Sản phẩm không bị hư hỏng do tác động vật lý, hoá chất, cháy nổ, ngấm nước, sửa chữa bởi bên thứ 3 không
                    ủy quyền.</li>
            </ol>

            <h5 class="mt-4 fw-bold text-primary">4. Những trường hợp không bảo hành</h5>
            <p>
                Hư hỏng do: rơi vỡ, vào nước, chập cháy, can thiệp phần cứng trái phép, hao mòn tự nhiên, biến dạng vật lý
                hoặc dấu hiệu đã tháo sửa.
            </p>

            <h5 class="mt-4 fw-bold text-primary">5. Quy trình bảo hành</h5>
            <ol class="ms-3">
                <li>Liên hệ hotline hoặc mang sản phẩm đến trung tâm bảo hành.</li>
                <li>Nhân viên tiếp nhận kiểm tra, lập phiếu tiếp nhận.</li>
                <li>Lỗi trong phạm vi bảo hành: sửa chữa miễn phí hoặc đổi mới.</li>
                <li>Nếu cần thay linh kiện, thông báo chi tiết chi phí &amp; thời gian.</li>
            </ol>

            <h5 class="mt-4 fw-bold text-primary">6. Bảo hành đổi mới</h5>
            <p>
                Sản phẩm lỗi kỹ thuật nặng không khắc phục được có thể được đổi mới (tùy tình trạng và tồn kho).
            </p>

            <h5 class="mt-4 fw-bold text-primary">7. Bảo hành mở rộng &amp; nâng cấp</h5>
            <p>
                Khách hàng có thể đăng ký gói bảo hành mở rộng (có phí) để gia hạn thời gian và mở rộng phạm vi bảo hiểm.
            </p>

            <h5 class="mt-4 fw-bold text-primary">8. Thông tin liên hệ bảo hành</h5>
            <p>
                <strong>Hotline:</strong> <a href="tel:19003333">1900.3333</a><br>
                <strong>Email:</strong> <a href="mailto:bh@anvuong.com">bh@anvuong.com</a>
            </p>

            <div class="alert alert-info mt-4">
                📌 <strong>Lưu ý:</strong> An Vượng Shop bảo lưu quyền thay đổi nội dung chính sách bảo hành mà không cần
                báo trước,
                nhưng sẽ công bố công khai trên website.
            </div>
        </div>
    </div>

@endsection
