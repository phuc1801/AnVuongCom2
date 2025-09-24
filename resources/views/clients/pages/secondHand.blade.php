<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tin tức công nghệ</title>
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/secondHand/secondHand.css') }}">
</head>

<body>
    @include('clients.partials.header_client')

    <main>
        <div class="container">
            <div class="container-child">
                <h2>AnVuongComputer - Chính sách & bảng giá thu sản phẩm đã qua sử dụng</h2>
                <p>
                    AnVuongComputer hỗ trợ dịch vụ <strong>“Thu cũ đổi mới sản phẩm”</strong>, nhằm hỗ trợ khách hàng dễ
                    dàng
                    nâng
                    cấp thiết bị với chi phí hợp lý.
                    Chúng tôi cam kết mang đến sự tiện lợi nhất và giá trị tốt nhất cho khách hàng.
                </p>
                <p>
                    Các dòng sản phẩm nằm trong danh mục áp dụng bao gồm các linh kiện <strong>VGA, Mainboard và
                        CPU</strong> sau.
                </p>
                <p>
                    Áp dụng cho sản phẩm <strong>chính hãng</strong> còn bảo hành (các hãng phổ biến như Gigabyte, MSI,
                    Asus
                    và Asrock).
                </p>
                <p><em>Lưu ý: Chúng tôi chỉ thu sản phẩm khi còn hoạt động, còn đủ phụ kiện cơ bản. Nếu thiếu, chúng tôi
                        chưa cung cấp dịch vụ thu mua sản phẩm đó.</em></p>

                <h3>Bảng giá thu sản phẩm đã qua sử dụng:</h3>

                <!-- Bảng VGA -->
                <h4>Bảng giá thu sản phẩm cũ - VGA</h4>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Dòng sản phẩm</th>
                                <th>Giá thu (nghìn đồng)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>GTX 1650</td>
                                <td>1,200</td>
                            </tr>
                            <tr>
                                <td>GTX 1660</td>
                                <td>1,800</td>
                            </tr>
                            <tr>
                                <td>RTX 2060</td>
                                <td>2,600</td>
                            </tr>
                            <tr>
                                <td>RTX 2070</td>
                                <td>3,200</td>
                            </tr>
                            <tr>
                                <td>RTX 3060</td>
                                <td>4,500</td>
                            </tr>
                            <tr>
                                <td>RTX 3070</td>
                                <td>5,800</td>
                            </tr>
                            <tr>
                                <td>RTX 3080</td>
                                <td>7,200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Bảng Mainboard -->
                <h4>Bảng giá thu sản phẩm cũ - Mainboard</h4>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Dòng sản phẩm</th>
                                <th>Giá thu (nghìn đồng)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>H110</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>B150</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>B250</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>B360</td>
                                <td>400</td>
                            </tr>
                            <tr>
                                <td>B450</td>
                                <td>450</td>
                            </tr>
                            <tr>
                                <td>B550</td>
                                <td>600</td>
                            </tr>
                            <tr>
                                <td>Z370</td>
                                <td>700</td>
                            </tr>
                            <tr>
                                <td>Z490</td>
                                <td>900</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Bảng CPU -->
                <h4>Bảng giá thu sản phẩm cũ - CPU</h4>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Dòng sản phẩm</th>
                                <th>Giá thu (nghìn đồng)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Intel Core i3 thế hệ 8</td>
                                <td>500</td>
                            </tr>
                            <tr>
                                <td>Intel Core i5 thế hệ 9</td>
                                <td>800</td>
                            </tr>
                            <tr>
                                <td>Intel Core i7 thế hệ 10</td>
                                <td>1,200</td>
                            </tr>
                            <tr>
                                <td>Intel Core i9 thế hệ 10</td>
                                <td>2,000</td>
                            </tr>
                            <tr>
                                <td>Ryzen 3 3100</td>
                                <td>600</td>
                            </tr>
                            <tr>
                                <td>Ryzen 5 3600</td>
                                <td>1,000</td>
                            </tr>
                            <tr>
                                <td>Ryzen 7 3700X</td>
                                <td>1,600</td>
                            </tr>
                            <tr>
                                <td>Ryzen 9 3900X</td>
                                <td>2,400</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="note">
                    <strong>Lưu ý:</strong> Giá thu mua có thể thay đổi tùy theo biến động thị trường.
                    Vui lòng liên hệ trực tiếp để có báo giá chính xác nhất.
                </p>


                <h3>Quy trình thu cũ đổi mới</h3>
                <ol>
                    <li>Khách hàng mang sản phẩm cũ đến cửa hàng AnVuongComputer hoặc liên hệ để được tư vấn qua tổng
                        đài
                        <strong>1900 5555</strong>.
                    </li>
                    <li>Nhân viên kỹ thuật kiểm tra và định giá sản phẩm cũ.</li>
                    <li>Báo giá thu mua và tư vấn sản phẩm mới phù hợp.</li>
                </ol>


                <h3>Chính sách định giá</h3>
                <p>Giá thu mua được xác định dựa trên các yếu tố sau:</p>
                <ul>
                    <li>Tình trạng hoạt động của sản phẩm</li>
                    <li>Thương hiệu và model</li>
                    <li>Thời gian bảo hành còn lại</li>
                    <li>Tình trạng ngoại hình</li>
                    <li>Phụ kiện đi kèm (hộp, cáp, v.v.)</li>
                </ul>


                <h3>Các loại sản phẩm không thu</h3>
                <ul>
                    <li>Các sản phẩm hư hỏng nặng, móp méo, cháy nổ dẫn đến biến dạng hoặc gãy vỡ.</li>
                    <li>Các sản phẩm đã thay thế linh kiện không đúng tiêu chuẩn.</li>
                    <li>Các sản phẩm không thể xác định rõ tên, thương hiệu.</li>
                </ul>


                <h3>Liên hệ</h3>
                <p>Để biết thêm thông tin chi tiết hoặc đặt lịch kiểm tra sản phẩm cũ, vui lòng liên hệ:</p>
                <p><strong>Hotline:</strong> 1900 5555<br>
                    <strong>Email:</strong> cskh@anvuong.com
                </p>

                <p><strong>Khu vực miền Bắc:</strong><br>
                    209 Tôn Đức Thắng, phường Lam Sơn, quận Lê Chân, Hải Phòng</p>

                <p><strong>Khu vực miền Trung:</strong><br>
                    Sắp có</p>

                <p><strong>Khu vực miền Nam:</strong><br>
                    Sắp có</p>

            </div>
        </div>
    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script src="{{ asset('assets/clients/js/list_product/filter_list_product.js') }}"></script>
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
