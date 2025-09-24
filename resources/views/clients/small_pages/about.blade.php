@extends('clients.layout.another')

@section('title', 'Giới thiệu An Vượng')

@section('content')

    <div class="row g-4">

        {{-- Cột trái: Nội dung chính --}}
        <div class="col-lg-8">
            <div class="section-card">
                <h3>Giới thiệu</h3>
                <p class="text-muted">
                    An Vượng Shop được thành lập với sứ mệnh trở thành đối tác công nghệ tin cậy
                    cho cá nhân và doanh nghiệp. Chúng tôi phân phối đa dạng máy tính xách tay, máy
                    tính để bàn, linh kiện, thiết bị mạng và camera an ninh từ các thương hiệu uy tín.
                </p>

                <h5 class="mt-4">Tầm nhìn &amp; sứ mệnh</h5>
                <p>
                    Chúng tôi hướng tới trở thành hệ thống bán lẻ công nghệ hàng đầu, cung cấp sản phẩm
                    chính hãng, dịch vụ hậu mãi và giải pháp công nghệ đáng tin cậy.
                </p>

                <h5 class="mt-3">Lĩnh vực hoạt động</h5>
                <ul>
                    <li>Cung cấp laptop, PC, workstation cho cá nhân và doanh nghiệp.</li>
                    <li>Bán linh kiện PC: CPU, RAM, SSD, Mainboard, VGA, PSU, Case.</li>
                    <li>Phân phối camera giám sát, thiết bị mạng, máy in.</li>
                    <li>Dịch vụ bảo hành, sửa chữa, nâng cấp và lắp đặt hệ thống.</li>
                </ul>

                <h5 class="mt-3">Đội ngũ &amp; cơ sở</h5>
                <p>
                    Đội ngũ kỹ thuật giàu kinh nghiệm, nhân viên tư vấn nhiệt tình, cùng hệ thống kho hàng
                    phân phối tại nhiều tỉnh thành giúp tối ưu thời gian giao nhận cho khách hàng.
                </p>

                <h5 class="mt-3">Cam kết với khách hàng</h5>
                <ol>
                    <li>Sản phẩm chính hãng, có nguồn gốc rõ ràng.</li>
                    <li>Bảo hành minh bạch theo chính sách nhà sản xuất hoặc An Vượng Shop.</li>
                    <li>Hỗ trợ kỹ thuật nhanh chóng qua hotline và cửa hàng.</li>
                    <li>Thanh toán linh hoạt — COD, chuyển khoản, ví điện tử.</li>
                </ol>

                <h5 class="mt-4">Khách hàng tiêu biểu &amp; đối tác</h5>
                <p class="text-muted">
                    Chúng tôi phục vụ hàng nghìn khách hàng cá nhân, trường học, doanh nghiệp vừa và nhỏ,
                    và đồng hành cùng nhiều nhà cung cấp linh kiện, hãng sản xuất trong nước và quốc tế.
                </p>
            </div>

            <div class="section-card mt-4">
                <h4>Thông tin liên hệ</h4>
                <p><strong>Địa chỉ:</strong> 209 Tôn Đức Thắng, phường Lam Sơn, quận Lê Chân, TP. Hải Phòng</p>
                <p><strong>Hotline:</strong> <a href="tel:19005555">1900.5555</a></p>
                <p><strong>Email:</strong> <a href="mailto:cskh@anvuong.com">cskh@anvuong.com</a></p>
                <p class="text-muted">
                    Thời gian làm việc: Thứ 2 – Thứ 7: 08:00 – 19:00. Chủ nhật: 09:00 – 17:00.
                </p>
            </div>
        </div>

        {{-- Cột phải: Sidebar --}}
        <aside class="col-lg-4">
            <div class="section-card">
                <h6>Điểm mạnh của chúng tôi</h6>
                <ul>
                    <li>Kho hàng lớn — giao nhanh.</li>
                    <li>Tư vấn kỹ thuật miễn phí.</li>
                    <li>Chính sách đổi / trả rõ ràng.</li>
                    <li>Ưu đãi cho doanh nghiệp và khách hàng thân thiết.</li>
                </ul>
            </div>

            <div class="section-card mt-3">
                <h6>Hợp tác cung cấp</h6>
                <p class="text-muted">
                    Nếu bạn là nhà phân phối, doanh nghiệp tìm đối tác cung cấp thiết bị,
                    vui lòng liên hệ bộ phận bán hàng để nhận báo giá và hợp tác lâu dài.
                </p>
                <a href="{{ url('lien-he') }}" class="btn btn-success btn-sm">Liên hệ ngay</a>
            </div>
        </aside>
    </div>

@endsection
