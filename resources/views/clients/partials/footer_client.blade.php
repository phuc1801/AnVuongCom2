<footer>
    <div class="container">
        <div class="footer-start">
            <div class="row">
                <div class="col-md-3 footer-start-infor">
                    <h6>VỀ AN VƯỢNG SHOP</h6>
                    <li><a href="{{ route('about') }}" class="">Giới thiệu</a></li>
                    <li><a href="{{ route('blog.user') }}" class="">Tin tức</a></li>
                    <li><a href="{{ route('contact.admin') }}" class="">Liên hệ - góp ý</a></li>
                    <li><a href="{{ route('policyshipping') }}" class="">Chính sách vận chuyển</a></li>
                    <li><a href="{{ route('policywarranty') }}" class="">Chính sách bảo hành</a></li>
                    <li><a href="{{ route('policyprivacy') }}" class="">Chính sách bảo mật</a></li>
                </div>
                <div class="col-md-3 footer-start-infor">
                    <h6>HỖ TRỢ KHÁCH HÀNG</h6>
                    <li><a href="{{ route('guideorder') }}" class="">Hướng dẫn mua hàng</a></li>
                    <li><a href="{{ route('guidepayment') }}" class="">Hướng dẫn thanh toán</a></li>
                    <li><a href="{{ route('guideinstallment') }}" class="">Hướng dẫn trả góp</a></li>
                    <li><a href="{{ route('einvoice') }}" class="">In hóa đơn điện tử</a></li>
                    <li><a href="{{ route('search.warranty') }}" class="">Tra cứu bảo hành</a></li>
                    <li><a href="{{ route('second.hand') }}" class="">Thu cũ</a></li>
                </div>
                <div class="col-md-3 footer-start-infor">
                    <h6>TỔNG ĐÀI HỖ TRỢ</h6>
                    <li><span class="support-infor">Mua hàng: <a href="" class="">1900.5555</a></span></li>
                    <li><span class="support-infor">Bảo hành: <a href="" class="">1900.3333</a></span></li>
                    <li><span class="support-infor">Khiếu nại: <a href="" class="">1900.1111</a></span>
                    </li>
                    <li><span class="support-infor">Email: <a href="" class="">cskh@anvuong.com</a></span>
                    </li>
                </div>
                <div class="col-md-3 footer-start-infor">
                    <div class="transport-group">
                        <h6>ĐƠN VỊ VẬN CHUYỂN</h6>
                        <div class="img-transport-group">
                            <div class="row">
                                <div class="col-4"><img src="{{ asset('img/footer/ems.jpg') }}" alt=""></div>
                                <div class="col-4"><img src="{{ asset('img/footer/ghn.jpg') }}" alt=""></div>
                                <div class="col-4"><img src="{{ asset('img/footer/ghtk.jpg') }}" alt=""></div>
                            </div>

                        </div>
                    </div>
                    <div class="payment-group">
                        <h6>PHƯƠNG THỨC THANH TOÁN</h6>
                        <div class="img-payment-group">
                            <div class="row top-img-payment-group">
                                <div class="col-4"><img src="{{ asset('img/footer/payment/momo.jpg') }}"
                                        alt=""></div>
                                <div class="col-4"><img src="{{ asset('img/footer/payment/zalopay.jpg') }}"
                                        alt=""></div>
                                <div class="col-4"><img src="{{ asset('img/footer/payment/internetbanking.jpg') }}"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end-div">
            <span class="footer-end-span">
                <h6>KẾT NỐI VỚI CHÚNG TÔI</h6>
                <span class="social-icon-footer-end">
                    <img src="{{ asset('img/footer/social/fb.jpg') }}" alt="">
                    <img src="{{ asset('img/footer/social/yt.jpg') }}" alt="">
                    <img src="{{ asset('img/footer/social/zalo.jpg') }}" alt="">
                    <img src="{{ asset('img/footer/social/tiktok.jpg') }}" alt="">
                </span>
            </span>
            <span class="img-footer-end">
                <img src="{{ asset('img/footer/bct.jpg') }}" alt="">
                <img src="{{ asset('img/footer/dmca.jpg') }}" alt="">
            </span>
        </div>
    </div>
    <div class="container container-nav-bottom">
        <div class="footer-nav fixed-bottom">
            <a href="{{ route('home') }}" class="footer-nav-item nav-item">
                <i class="fa-solid fa-house" style="color: #0186e7"></i>
                <span>Trang chủ</span>
            </a>
            <a class="footer-nav-item nav-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                aria-controls="offcanvasMenu" aria-label="Toggle navigation">
                <i class="fa-solid fa-layer-group" style="color: #0186e7"></i>
                <span>Danh mục</span>
            </a>
            <a href="{{ route('contact.admin') }}" class="footer-nav-item nav-item">
                <i class="fa-solid fa-headset" style="color: #0186e7"></i>
                <span>Hỗ trợ</span>
            </a>
            <a href="{{ route('user.dashboard') }}" class="footer-nav-item nav-item">
                <i class="fa-solid fa-circle-user" style="color: #0186e7"></i>
                <span>Tài khoản</span>
            </a>
        </div>
    </div>
</footer>
