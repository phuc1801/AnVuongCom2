<!DOCTYPE html>
<html lang="vi">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
<link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
<title>Nên mua iPad hay Laptop? So sánh, tư vấn chọn tối ưu mọi nhu cầu</title>
<link rel="stylesheet" href="{{ asset('assets/clients/css/article/chitiet.css') }}">

</head>

<body>

    @include('clients.partials.header_client')

    <main class="point">

        <div class="container">

            <h1>Nên mua iPad hay Laptop? So sánh, tư vấn chọn tối ưu mọi nhu cầu</h1>
            <p>
                Lựa chọn giữa iPad và laptop luôn là một quyết định khó khăn, đặc biệt với học sinh, sinh viên và người
                đi
                làm.
                Để giúp bạn đưa ra lựa chọn đúng đắn nhất, GEARVN sẽ phân tích chi tiết ưu nhược điểm của từng loại và
                đưa
                ra
                lời khuyên phù hợp.
            </p>

            <h2>Những điểm chính:</h2>
            <ul>
                <li>iPad nổi bật với tính di động, trải nghiệm cảm ứng và sáng tạo, lý tưởng cho việc ghi chú, đọc tài
                    liệu
                    và
                    các nhu cầu giải trí.</li>
                <li>Laptop là lựa chọn hàng đầu cho hiệu năng cao, xử lý đa nhiệm và chạy các phần mềm chuyên ngành như
                    lập
                    trình, đồ họa, gaming.</li>
                <li>Nhu cầu sử dụng là yếu tố quyết định: Sinh viên kỹ thuật, thiết kế cần laptop; trong khi các ngành
                    xã
                    hội,
                    kinh tế có thể ưu tiên iPad.</li>
                <li>Laptop vượt trội về khả năng nâng cấp (RAM, SSD) và đa dạng cổng kết nối, điều mà iPad còn nhiều hạn
                    chế.
                </li>
                <li>Lựa chọn đúng thiết bị giúp tối ưu hóa hiệu suất công việc, học tập và tránh lãng phí chi phí đầu tư
                    vào
                    các
                    tính năng không cần thiết.</li>
            </ul>

            <h2>1. Ưu điểm và nhược điểm của từng thiết bị</h2>

            <section id="ipad">
                <h3>1.1. iPad</h3>
                <ul>
                    <li><strong>Tính di động vượt trội:</strong> Với thiết kế mỏng, nhẹ và nhỏ gọn, bạn có thể dễ dàng
                        mang
                        iPad
                        đi bất cứ đâu mà không cảm thấy cồng kềnh. Đây là người bạn đồng hành lý tưởng cho các buổi học,
                        cuộc
                        họp hay chuyến công tác.</li>
                    <li><strong>Trải nghiệm cảm ứng trực quan:</strong> Màn hình cảm ứng của iPad cực kỳ nhạy và mượt
                        mà,
                        mang
                        lại trải nghiệm tương tác tự nhiên. Các thao tác như lướt web, đọc sách, xem phim hay chơi game
                        đều
                        trở
                        nên thú vị hơn.</li>
                    <li><strong>Hệ sinh thái Apple và Apple Pencil:</strong> Khi kết hợp với Apple Pencil, iPad biến
                        thành
                        một
                        cuốn sổ tay kỹ thuật số hoặc một bảng vẽ chuyên nghiệp. Hệ sinh thái Apple cũng cho phép đồng bộ
                        dữ
                        liệu
                        liền mạch giữa các thiết bị.</li>
                    <li><strong>Thời lượng pin ấn tượng:</strong> Hầu hết các dòng iPad đều có thể hoạt động liên tục từ
                        8 -
                        10
                        giờ, đủ sức đáp ứng một ngày dài học tập và làm việc mà không cần cắm sạc thường xuyên.</li>
                    <li><strong>Khởi động tức thì:</strong> Chỉ với một nút bấm, iPad gần như sẵn sàng hoạt động ngay
                        lập
                        tức,
                        giúp bạn không bỏ lỡ bất kỳ khoảnh khắc hay ý tưởng bất chợt nào.</li>
                </ul>

                <img src="{{ asset('assets/clients/media/images/baiviet/nenmua.jpg') }}"
                    alt="So sánh nên mua iPad hay Laptop">

                <h3>1.1.2. Nhược điểm của iPad</h3>
                <ul>
                    <li><strong>Khả năng đa nhiệm hạn chế:</strong> Dù đã được cải thiện, khả năng chạy nhiều cửa sổ
                        cùng
                        lúc
                        trên iPadOS vẫn chưa thể linh hoạt và mạnh mẽ như trên laptop.</li>
                    <li><strong>Hệ điều hành giới hạn phần mềm:</strong> iPadOS không hỗ trợ các phần mềm chuyên ngành
                        phức
                        tạp
                        như AutoCAD, bộ Adobe đầy đủ hay các môi trường lập trình chuyên sâu.</li>
                    <li><strong>Chi phí phụ kiện cao:</strong> Để biến iPad thành công cụ làm việc thực thụ, bạn thường
                        phải
                        đầu
                        tư thêm bàn phím, chuột và bút cảm ứng, làm tăng tổng chi phí.</li>
                    <li><strong>Khó nâng cấp và sửa chữa:</strong> iPad được thiết kế nguyên khối nên việc nâng cấp RAM
                        hay
                        bộ
                        nhớ trong là không thể. Chi phí sửa chữa cũng thường cao hơn laptop.</li>
                </ul>
            </section>

            <section id="laptop">
                <h2>1.2. Laptop</h2>
                <section id="laptop-advantages">
                    <h3>1.2.1. Ưu điểm của Laptop</h3>
                    <ul>
                        <li><strong>Hiệu năng xử lý vượt trội:</strong> Laptop được trang bị CPU mạnh mẽ, RAM dung lượng
                            lớn
                            và
                            tùy chọn card đồ họa rời, giúp xử lý mượt mà các tác vụ nặng như lập trình, thiết kế 3D,
                            chỉnh
                            sửa
                            video hay chơi game cấu hình cao.</li>
                        <li><strong>Khả năng đa nhiệm đỉnh cao:</strong> Với hệ điều hành Windows hoặc macOS, bạn có thể
                            mở
                            hàng
                            chục tab trình duyệt và nhiều phần mềm cùng lúc mà không lo giật lag, tối ưu hóa năng suất
                            làm
                            việc.
                        </li>
                        <li><strong>Bàn phím và touchpad tích hợp:</strong> Bàn phím vật lý mang lại cảm giác gõ chân
                            thực
                            và
                            tốc độ nhập liệu nhanh hơn. Touchpad tích hợp cũng giúp thao tác điều khiển chính xác mà
                            không
                            cần
                            chuột rời.</li>
                        <li><strong>Đa dạng cổng kết nối:</strong> Laptop thường được trang bị đầy đủ các cổng kết nối
                            phổ
                            biến
                            như USB-A, USB-C, HDMI, khe cắm thẻ nhớ, giúp bạn dễ dàng kết nối với các thiết bị ngoại vi
                            khác.
                        </li>
                        <li><strong>Dễ dàng nâng cấp và sửa chữa:</strong> Hầu hết các mẫu laptop đều cho phép người
                            dùng
                            nâng
                            cấp RAM và ổ cứng SSD để cải thiện hiệu năng, giúp kéo dài vòng đời sản phẩm.</li>
                    </ul>
                </section>
                <img src="{{ asset('assets/clients/media/images/baiviet/nenmua2.jpg') }}" alt="nemua">
            </section>

            <section id="laptop-disadvantages">
                <h3>1.2.2. Nhược điểm của Laptop</h3>
                <ul>
                    <li><strong>Kém di động hơn:</strong> So với iPad, laptop có kích thước lớn và trọng lượng nặng hơn,
                        gây
                        bất
                        tiện hơn khi phải di chuyển thường xuyên.</li>
                    <li><strong>Thời lượng pin thường ngắn hơn:</strong> Dù đã được cải thiện, thời lượng pin của
                        laptop,
                        đặc
                        biệt là các dòng máy hiệu năng cao, thường không thể sánh bằng iPad.</li>
                    <li><strong>Cần thời gian khởi động:</strong> Quá trình khởi động hệ điều hành và các ứng dụng trên
                        laptop
                        thường mất nhiều thời gian hơn so với việc mở iPad.</li>
                </ul>
            </section>

            <section id="comparison">
                <h2>2. So sánh iPad và laptop qua từng tiêu chí</h2>
                <p>Để có cái nhìn tổng quan nhất, bảng so sánh dưới đây sẽ giúp bạn thấy rõ sự khác biệt giữa hai thiết
                    bị
                    này
                    dựa trên các tiêu chí quan trọng.</p>

                <table border="1" cellspacing="0" cellpadding="8">
                    <thead>
                        <tr>
                            <th>Tiêu chí</th>
                            <th>iPad</th>
                            <th>Laptop</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tính di động</td>
                            <td>Vượt trội. Mỏng, nhẹ, dễ dàng mang theo.</td>
                            <td>Kích thước lớn và nặng hơn, kém linh hoạt.</td>
                        </tr>
                        <tr>
                            <td>Hiệu năng</td>
                            <td>Tốt cho tác vụ hàng ngày, yếu hơn ở phần mềm chuyên dụng.</td>
                            <td>Vượt trội. Mạnh mẽ, xử lý tốt các tác vụ nặng và chuyên sâu.</td>
                        </tr>
                        <tr>
                            <td>Đa nhiệm</td>
                            <td>Hạn chế, chỉ mở được vài ứng dụng cùng lúc.</td>
                            <td>Mạnh mẽ. Hỗ trợ chạy đa ứng dụng và nhiều cửa sổ mượt mà.</td>
                        </tr>
                        <tr>
                            <td>Bàn phím & Chuột</td>
                            <td>Cần mua thêm phụ kiện rời, chi phí cao.</td>
                            <td>Tích hợp sẵn. Bàn phím vật lý và touchpad tối ưu cho công việc.</td>
                        </tr>
                        <tr>
                            <td>Hệ điều hành</td>
                            <td>iPadOS: Tối ưu cho cảm ứng, giao diện đơn giản.</td>
                            <td>Windows/macOS: Đa năng, hỗ trợ mọi phần mềm chuyên nghiệp.</td>
                        </tr>
                        <tr>
                            <td>Cổng kết nối</td>
                            <td>Hạn chế, thường chỉ có 1 - 2 cổng USB-C.</td>
                            <td>Đa dạng: USB-A, USB-C, HDMI, LAN, khe cắm thẻ nhớ...</td>
                        </tr>
                        <tr>
                            <td>Khả năng nâng cấp</td>
                            <td>Không thể nâng cấp.</td>
                            <td>Có thể nâng cấp RAM, ổ cứng SSD một cách dễ dàng.</td>
                        </tr>
                        <tr>
                            <td>Giá thành</td>
                            <td>Phân khúc rộng, nhưng phụ kiện đi kèm khá đắt đỏ.</td>
                            <td>Đa dạng phân khúc, đáp ứng mọi ngân sách.</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="recommendations">
                <h2>3. Vậy nên mua iPad hay laptop? Gợi ý cho từng nhu cầu cụ thể</h2>

                <h3>3.1. Dành cho học sinh, sinh viên</h3>
                <ul>
                    <li><strong>Chọn iPad nếu:</strong> Bạn là học sinh cấp 1, 2 hoặc sinh viên các ngành xã hội, kinh
                        tế,
                        ngoại
                        ngữ. Nhu cầu chính là ghi chú bài giảng, đọc tài liệu, tra cứu thông tin, học online và giải trí
                        nhẹ
                        nhàng.</li>
                    <li><strong>Chọn laptop nếu:</strong> Bạn là sinh viên các ngành kỹ thuật, công nghệ thông tin,
                        thiết kế
                        đồ
                        họa, kiến trúc. Các ngành này đòi hỏi sử dụng phần mềm chuyên dụng như AutoCAD, Visual Studio,
                        bộ
                        Adobe
                        mà chỉ laptop mới đáp ứng được.</li>
                </ul>

                <h3>3.2. Dành cho người đi làm, dân văn phòng</h3>
                <ul>
                    <li><strong>Chọn iPad nếu:</strong> Công việc của bạn đòi hỏi di chuyển nhiều, thường xuyên gặp
                        khách
                        hàng,
                        thuyết trình, kiểm tra email và ghi chú nhanh trong cuộc họp. iPad là một thiết bị phụ trợ tuyệt
                        vời.
                    </li>
                    <li><strong>Chọn laptop nếu:</strong> Công việc của bạn chủ yếu diễn ra tại văn phòng, cần xử lý
                        bảng
                        tính
                        phức tạp, soạn thảo văn bản dài, quản lý dữ liệu hay sử dụng các phần mềm nghiệp vụ chuyên biệt.
                    </li>
                </ul>
                <img src="{{ asset('assets/clients/media/images/baiviet/nenmua3.jpg') }}" alt="nenmua3">
            </section>

            <section>
                <h3>3.3. Dành cho game thủ và người làm sáng tạo nội dung</h3>
                <ul>
                    <li><strong>Chọn iPad nếu:</strong> Bạn chủ yếu chơi các game mobile trên App Store, hoặc là một
                        nghệ sĩ
                        kỹ
                        thuật số thích vẽ, phác thảo ý tưởng nhanh chóng với Apple Pencil.</li>
                    <li><strong>Chọn laptop nếu:</strong> Bạn là một game thủ muốn trải nghiệm các tựa game AAA, một
                        streamer
                        hay một nhà sáng tạo nội dung cần dựng video, chỉnh sửa hình ảnh chuyên nghiệp bằng các phần mềm
                        hiệu
                        năng cao.</li>
                </ul>

                <h3>3.4. Dành cho nhu cầu giải trí đơn thuần</h3>
                <ul>
                    <li><strong>Chọn iPad nếu:</strong> Mục đích chính của bạn là xem phim, đọc báo, lướt mạng xã hội,
                        gọi
                        video
                        cho gia đình. Màn hình đẹp và thiết kế gọn nhẹ của iPad mang lại trải nghiệm giải trí cá nhân
                        tuyệt
                        vời.
                    </li>
                    <li><strong>Chọn laptop nếu:</strong> Bạn muốn một trung tâm giải trí tại nhà với màn hình lớn hơn,
                        hệ
                        thống
                        loa tốt hơn và khả năng kết nối dễ dàng với TV hay dàn âm thanh.</li>
                </ul>
                <img src="{{ asset('assets/clients/media/images/baiviet/nenmua4.jpg') }}" alt="aa">
            </section>

            <section>
                <h2>Gợi ý các mẫu laptop đáng mua tại GEARVN</h2>
                <p>Lưu ý: Các sản phẩm bên dưới được sắp xếp theo thứ tự giá từ thấp đến cao, cập nhật vào tháng
                    08/2025, có
                    thể
                    thay đổi theo thời gian và chương trình khuyến mãi.</p>
                <h3>4.1. Laptop Acer Aspire Lite AL15-72P-581V</h3>
                <p>Một lựa chọn tuyệt vời cho học sinh, sinh viên và người dùng văn phòng cơ bản. Acer Aspire Lite AL15
                    72P
                    581V
                    có thiết kế thanh lịch, cấu hình ổn định với chip Core i5-13500H, đáp ứng mượt mà các tác vụ học tập
                    và
                    làm
                    việc hàng ngày trên bộ Microsoft Office.</p>
                <img src="{{ asset('assets/clients/media/images/baiviet/laptop1.png') }}" alt="">
            </section>

            <section>
                <h2>Gợi ý các mẫu laptop đáng mua tại GEARVN</h2>
                <p>Lưu ý: Các sản phẩm bên dưới được sắp xếp theo thứ tự giá từ thấp đến cao, cập nhật vào tháng
                    08/2025, có
                    thể
                    thay đổi theo thời gian và chương trình khuyến mãi.</p>
                <h3>4.2. Laptop Acer Aspire Lite AL15-72P-581V</h3>
                <p>Một lựa chọn tuyệt vời cho học sinh, sinh viên và người dùng văn phòng cơ bản. Acer Aspire Lite AL15
                    72P
                    581V
                    có thiết kế thanh lịch, cấu hình ổn định với chip Core i5-13500H, đáp ứng mượt mà các tác vụ học tập
                    và
                    làm
                    việc hàng ngày trên bộ Microsoft Office.</p>
                <img src="{{ asset('assets/clients/media/images/baiviet/laptop1.png') }}" alt="">
            </section>

            <section>
                <h2>Gợi ý các mẫu laptop đáng mua tại GEARVN</h2>
                <p>Lưu ý: Các sản phẩm bên dưới được sắp xếp theo thứ tự giá từ thấp đến cao, cập nhật vào tháng
                    08/2025, có
                    thể
                    thay đổi theo thời gian và chương trình khuyến mãi.</p>
                <h3>4.3. Laptop Acer Aspire Lite AL15-72P-581V</h3>
                <p>Một lựa chọn tuyệt vời cho học sinh, sinh viên và người dùng văn phòng cơ bản. Acer Aspire Lite AL15
                    72P
                    581V
                    có thiết kế thanh lịch, cấu hình ổn định với chip Core i5-13500H, đáp ứng mượt mà các tác vụ học tập
                    và
                    làm
                    việc hàng ngày trên bộ Microsoft Office.</p>
                <img src="{{ asset('assets/clients/media/images/baiviet/laptop1.png') }}" alt="">
            </section>

            <section>
                <h2>Gợi ý các mẫu laptop đáng mua tại GEARVN</h2>
                <p>Lưu ý: Các sản phẩm bên dưới được sắp xếp theo thứ tự giá từ thấp đến cao, cập nhật vào tháng
                    08/2025, có
                    thể
                    thay đổi theo thời gian và chương trình khuyến mãi.</p>
                <h3>4.4. Laptop Acer Aspire Lite AL15-72P-581V</h3>
                <p>Một lựa chọn tuyệt vời cho học sinh, sinh viên và người dùng văn phòng cơ bản. Acer Aspire Lite AL15
                    72P
                    581V
                    có thiết kế thanh lịch, cấu hình ổn định với chip Core i5-13500H, đáp ứng mượt mà các tác vụ học tập
                    và
                    làm
                    việc hàng ngày trên bộ Microsoft Office.</p>
                <img src="{{ asset('assets/clients/media/images/baiviet/laptop1.png') }}" alt="">
            </section>

            <section id="conclusion">
                <h2>5. Đâu là lựa chọn dành cho bạn?</h2>
                <p>
                    Tóm lại, không có câu trả lời tuyệt đối cho việc nên mua iPad hay laptop.
                    Thiết bị tốt nhất là thiết bị phù hợp nhất với nhu cầu, sở thích và ngân sách của bạn.
                </p>
                <ul>
                    <li><strong>Chọn iPad khi:</strong> Ưu tiên hàng đầu là sự gọn nhẹ, di động, các tác vụ giải trí,
                        đọc
                        tài
                        liệu, ghi chú nhanh và sáng tạo nghệ thuật.</li>
                    <li><strong>Chọn Laptop khi:</strong> Bạn cần hiệu năng mạnh mẽ để làm việc chuyên sâu, xử lý đa
                        nhiệm,
                        chơi
                        game, lập trình và sử dụng các phần mềm chuyên ngành.</li>
                </ul>
            </section>

            <section id="gearvn">
                <h2>6. Mua laptop ở đâu uy tín, hậu mãi tốt?</h2>
                <p>
                    Dù bạn chọn iPad hay laptop, việc mua sắm tại một địa chỉ uy tín là yếu tố cực kỳ quan trọng.
                    <strong>GEARVN</strong> tự hào là đơn vị hàng đầu chuyên cung cấp các sản phẩm công nghệ chính hãng,
                    từ laptop học tập - văn phòng đến laptop gaming hiệu năng cao.
                </p>
                <p>
                    Khi mua sắm tại GEARVN, bạn không chỉ nhận được sản phẩm chất lượng với mức giá cạnh tranh mà còn
                    được
                    đội
                    ngũ chuyên gia tư vấn tận tình.
                    Cùng với đó là chính sách bảo hành minh bạch, dịch vụ hậu mãi chuyên nghiệp, đảm bảo sự yên tâm
                    trong
                    suốt
                    quá trình sử dụng.
                </p>

                <h3>Thông tin liên hệ GEARVN</h3>
                <ul>
                    <li><strong>Website:</strong> <a href="#" target="_blank"
                            rel="noopener noreferrer">gearvn.com</a></li>
                    <li><strong>Hotline:</strong> <a href="tel:19005301">1900.5301</a></li>
                    <li><strong>Hệ thống showroom:</strong> <a href="#" target="_blank"
                            rel="noopener noreferrer">Xem TẠI ĐÂY</a></li>
                </ul>
                <img src="{{ asset('assets/clients/media/images/baiviet/zoom.jpg') }}" alt="">
            </section>


            <section id="faq">
                <h2>7. Một số câu hỏi liên quan</h2>

                <section id="q-7-1">
                    <h3>7.1. iPad có thay thế hoàn toàn laptop được không?</h3>
                    <p>
                        Hiện tại, câu trả lời là <strong>chưa</strong>. Dù ngày càng mạnh mẽ, iPad vẫn bị giới hạn bởi
                        hệ
                        điều
                        hành và không tương thích với các phần mềm chuyên ngành phức tạp như laptop.
                        iPad phù hợp hơn với vai trò là một thiết bị phụ trợ hoặc cho các công việc không đòi hỏi hiệu
                        năng
                        cao.
                    </p>
                </section>

                <section id="q-7-2">
                    <h3>7.2. Sinh viên ngành kỹ thuật, đồ họa nên chọn iPad hay laptop?</h3>
                    <p>
                        <strong>Laptop</strong> là lựa chọn gần như bắt buộc. Các phần mềm đặc thù của những ngành này
                        như
                        AutoCAD, 3ds Max, bộ Adobe Creative Suite, Visual Studio,...
                        yêu cầu hiệu năng xử lý, card đồ họa và hệ điều hành linh hoạt mà chỉ laptop mới có thể đáp ứng
                        tốt
                        nhất.
                    </p>
                </section>

                <h4>Xem thêm:</h4>
                <ul>
                    <li><a href="#" title="Học Y nên mua iPad hay Laptop?">Học Y nên mua iPad hay Laptop? So sánh
                            chi
                            tiết, gợi ý tối ưu</a></li>
                    <li><a href="#" title="Máy tính bảng hay laptop cho con học?">Nên mua máy tính bảng hay laptop
                            cho
                            con
                            học? Tư vấn chi tiết</a></li>
                    <li><a href="#" title="Có nên mua Lenovo ThinkPad?">Có nên mua laptop Lenovo ThinkPad? Ưu
                            nhược
                            điểm,
                            tư vấn chi tiết</a></li>
                </ul>

                <p>
                    iPad là trợ thủ đắc lực cho việc ghi chú, trong khi laptop là thiết bị không thể thiếu cho giai đoạn
                    nghiên
                    cứu chuyên sâu về sau.
                    Nếu bạn vẫn còn băn khoăn, hãy đến ngay <a href="#" target="_blank"
                        rel="noopener noreferrer">showroom GearVN</a> gần nhất để được tư vấn chi tiết hơn.
                </p>
            </section>

        </div>
    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script>
        window.addEventListener("pageshow", function() {
            fetch('/update-cart-item')
                // Số lượng giỏ hàng
                .then(response => response.json())
                .then(data => {
                    document.getElementById('cart-count').innerText = data.cart_sum;
                });
        });
    </script>
</body>

</html>
