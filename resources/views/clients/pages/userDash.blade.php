<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trang cá nhân</title>
    <link rel="stylesheet" href="{{ asset('bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/home/header_footer_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/userDash/user_dash.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

</head>

<body>
    @include('clients.partials.header_client')

    <div class="container">
        <nav class="breadcrumb-nav" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i class="fa-solid fa-house"></i>
                        <span>Home</span></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    User Dashboard
                </li>
            </ol>
        </nav>
    </div>

    <main>
        <div class="container">
            <div class="row">
                <nav class="col-md-3 col-lg-3 d-md-block bg-light sidebar">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item-section nav-item">
                                <a class="nav-link-section nav-link" href="#" data-section="info"><i
                                        class="fas fa-user"></i> Thông
                                    tin tài khoản</a>
                            </li>
                            <li class="nav-item-section nav-item">
                                <a class="nav-link-section nav-link" href="#" data-section="address"><i
                                        class="fas fa-map-marker-alt"></i> Số địa chỉ</a>
                            </li>
                            <li class="nav-item-section nav-item">
                                <a class="nav-link-section nav-link" href="#" data-section="orders"><i
                                        class="fas fa-shopping-cart"></i> Quản lý đơn hàng</a>
                            </li>
                            <li class="nav-item-section nav-item">
                                <a class="nav-link-section nav-link" href="#" data-section="review-product">
                                    <i class="fa-solid fa-star"></i> Đánh giá sản phẩm
                                </a>
                            </li>
                            <li class="nav-item-section nav-item">
                                <a class="nav-link-section nav-link" href="#" data-section="change-password">
                                    <i class="fas fa-key"></i> Đổi mật khẩu
                                </a>
                            </li>
                            <li class="nav-item-section nav-item">
                                <a class="nav-link-section nav-link" href="#" data-section="logout"><i
                                        class="fas fa-sign-out-alt"></i>
                                    Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 col-lg-9 px-md-4">
                    <div id="info" class="content-section">
                        <h2>Thông tin tài khoản</h2>
                        <form action="{{ route('user.info') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Họ Tên</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control"
                                    value="{{ $user->email ? $user->email : '' }}" readonly>
                            </div>
                            @php
                                $day = $user->birthday ? date('d', strtotime($user->birthday)) : null;
                                $month = $user->birthday ? date('m', strtotime($user->birthday)) : null;
                                $year = $user->birthday ? date('Y', strtotime($user->birthday)) : null;

                                $years = range(date('Y'), 1950);
                            @endphp

                            <div class="mb-3">
                                <label class="form-label">Ngày sinh</label>
                                <div class="dob-selects">
                                    <select class="form-select" id="dob-day" name="dob_day">
                                        <option value="">Ngày</option>
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{ $i }}"
                                                {{ (int) $day === $i ? 'selected' : '' }}>
                                                {{ $i }}</option>
                                        @endfor
                                    </select>

                                    <select class="form-select" id="dob-month" name="dob_month">
                                        <option value="">Tháng</option>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}"
                                                {{ (int) $month === $i ? 'selected' : '' }}>{{ $i }}
                                            </option>
                                        @endfor
                                    </select>

                                    <select class="form-select" id="dob-year" name="dob_year">
                                        <option value="">Năm</option>
                                        @foreach ($years as $y)
                                            <option value="{{ $y }}"
                                                {{ (int) $year === (int) $y ? 'selected' : '' }}>{{ $y }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-custom">LƯU THAY ĐỔI</button>
                        </form>

                    </div>
                    <div id="address" class="content-section">
                        <h2>Số địa chỉ</h2>
                        <button class="btn btn-custom mb-3" data-bs-toggle="modal"
                            data-bs-target="#addAddressModal"><i class="fas fa-plus"></i> Thêm địa chỉ mới</button>
                        <div class="list-group">
                            @foreach ($user->shippingAddresses as $index => $shipping)
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Địa chỉ {{ $index + 1 }}</h5>
                                        <small>{{ $shipping->address }}</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div id="orders" class="content-section">
                        <h2>Quản lý đơn hàng</h2>
                        <ul class="nav nav-tabs">
                            <li class="nav-item li-tab-child">
                                <a class="nav-link a-tab-child" data-tab-status="all" href="#">Tất cả</a>
                            </li>
                            <li class="nav-item li-tab-child">
                                <a class="nav-link a-tab-child" data-tab-status="pending" href="#">Đang chờ
                                    duyệt</a>
                            </li>
                            <li class="nav-item li-tab-child">
                                <a class="nav-link a-tab-child" data-tab-status="processing" href="#">Đang xử
                                    lý</a>
                            </li>
                            <li class="nav-item li-tab-child">
                                <a class="nav-link a-tab-child" data-tab-status="shipping" href="#">Đang vận
                                    chuyển</a>
                            </li>
                            <li class="nav-item li-tab-child">
                                <a class="nav-link a-tab-child" data-tab-status="completed" href="#">Hoàn
                                    thành</a>
                            </li>
                            <li class="nav-item li-tab-child">
                                <a class="nav-link a-tab-child" data-tab-status="cancelled" href="#">Đã hủy</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3">
                            <div id="orders-all" class="tab-not-show">
                                @include('clients.partials.user_table', [
                                    'orders' => $groupeOrders['all'] ?? collect(),
                                    'status' => 'all',
                                ])
                            </div>
                            <div id="orders-pending" class="tab-not-show">
                                @include('clients.partials.user_table', [
                                    'orders' => $groupeOrders['pending'] ?? collect(),
                                    'status' => 'pending',
                                ])
                            </div>
                            <div id="orders-processing" class="tab-not-show">
                                @include('clients.partials.user_table', [
                                    'orders' => $groupeOrders['processing'] ?? collect(),
                                    'status' => 'processing',
                                ])
                            </div>
                            <div id="orders-shipping" class="tab-not-show">
                                @include('clients.partials.user_table', [
                                    'orders' => $groupeOrders['shipping'] ?? collect(),
                                    'status' => 'shipping',
                                ])
                            </div>
                            <div id="orders-completed" class="tab-not-show">
                                @include('clients.partials.user_table', [
                                    'orders' => $groupeOrders['completed'] ?? collect(),
                                    'status' => 'completed',
                                ])
                            </div>
                            <div id="orders-cancelled" class="tab-not-show">
                                @include('clients.partials.user_table', [
                                    'orders' => $groupeOrders['cancelled'] ?? collect(),
                                    'status' => 'cancelled',
                                ])
                            </div>
                        </div>
                    </div>

                    <div id="review-product" class="content-section">
                        <h2>Đánh giá sản phẩm</h2>
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($groupeOrders['completed'] as $order)
                                    @foreach ($order->orderItems as $item)
                                        <tr>
                                            <td>{{ $item->product->name }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->total_price }}</td>
                                            <td id="td-{{ $item->id }}" style="text-align: center;color: green">
                                                @if (!$item->is_rating)
                                                    <a href="#"
                                                        class="btn btn-sm btn-outline-success requestToReview"
                                                        id="requestToReview-{{ $item->id }}"
                                                        data-bs-toggle="modal" data-bs-target="#reviewModal"
                                                        data-product-id="{{ $item->product->id }}"
                                                        data-order-item="{{ $item->id }}">Đánh giá</a>
                                                @else
                                                    Đã đánh giá
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div id="change-password" class="content-section">
                        <h2>Đổi mật khẩu</h2>
                        <form method="POST" action="{{ route('user.changePassword') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu hiện tại</label>
                                <input type="password" name="current_password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mật khẩu mới</label>
                                <input type="password" name="password" class="form-control" required minlength="8">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Xác nhận mật khẩu mới</label>
                                <input type="password" name="password_confirmation" class="form-control" required
                                    minlength="8">
                                @if ($errors->has('password'))
                                    <div id="error-password">
                                        @foreach ($errors->get('password') as $msg)
                                            <div style="color: red;text-align: left">- {{ $msg }}</div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-custom">Cập nhật mật khẩu</button>
                        </form>
                    </div>
                    <div id="logout" class="content-section">
                    </div>
                </main>
            </div>
        </div>

        <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAddressModalLabel">Thêm địa chỉ mới</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="address-form" method="POST" action="{{ route('user.shipping') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $user->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tỉnh/Thành phố</label>
                                <select id="province" class="form-select" required></select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quận/Huyện</label>
                                <select id="district" class="form-select" required></select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Xã/Phường</label>
                                <select id="ward" class="form-select" required></select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Số nhà, tên đường</label>
                                <input type="text" class="form-control" id="street" required>
                            </div>

                            <!-- input ẩn để gửi address đã gộp -->
                            <input type="hidden" id="full_address" name="address">

                            <button type="submit" class="btn btn-custom">Lưu địa chỉ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel"></h5>
                    </div>
                    <div class="modal-body text-center">
                        <span class="display-4"><i class="fas fa-question-circle" style="color: #f4a261;"></i></span>
                        <p>Bạn muốn thoát tài khoản?</p>
                    </div>
                    <div class="modal-footer">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                        <button type="button" class="btn btn-custom btn-cancel-logout"
                            data-bs-dismiss="modal">Không</button>
                        <button type="button" class="btn btn-custom btn-confirm-logout" data-bs-dismiss="modal">Đồng
                            ý</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form class="cancelOrderForm" method="POST" data-endpoint="{{ route('user.destroyOrder') }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Xác nhận hủy</h5>
                        </div>
                        <div class="modal-body text-center">
                            <span class="display-4">
                                <i class="fas fa-exclamation-triangle" style="color: #dc3545;"></i>
                            </span>
                            <p>Bạn có chắc muốn hủy đơn hàng này?</p>

                            <input type="hidden" name="order_id" id="order_id_input">

                            <!-- input lý do -->
                            <div class="form-group">
                                <label for="reason" style="margin-bottom: 10px;">Lý do hủy đơn hàng:</label>
                                <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-custom btn-cancel-destroy"
                                data-bs-dismiss="modal">Không</button>

                            <!-- nút submit form -->
                            <button type="submit" class="btn btn-custom btn-confirm-destroy">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderDetailModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chi tiết đơn hàng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Phí vận chuyển cho đơn hàng: 50.000 đ</p>
                        <p id="coupon-for-order"></p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody id="orderItemsBody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">Đánh giá sản phẩm</h5>
                    </div>

                    <div class="modal-body">
                        <form id="reviewForm" method="POST" data-endpoint="{{ route('user.review') }}">
                            @csrf
                            <!-- Rating stars -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Chọn số sao:</label>
                                <div id="ratingStars" class="fs-3">
                                    <input type="hidden" name="rating" id="ratingInput">
                                    <span class="star text-secondary text-warning" data-value="1">★</span>
                                    <span class="star text-secondary text-warning" data-value="2">★</span>
                                    <span class="star text-secondary text-warning" data-value="3">★</span>
                                    <span class="star text-secondary text-warning" data-value="4">★</span>
                                    <span class="star text-secondary text-warning" data-value="5">★</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Bình luận</label>
                                <textarea name="comment" rows="4" class="form-control" placeholder="Nhập bình luận của bạn..."></textarea>
                            </div>

                            <input id="order_item_input" type="hidden" name="order_item" value="">

                            <input id="product_id_input" type="hidden" name="product_id" value="">

                            <input id="rating_star_input" type="hidden" name="rating_star" value="5">

                            <button type="submit" class="btn btn-primary w-100">
                                Gửi đánh giá
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('clients.partials.footer_client')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('bs5/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/home/header_footer.js') }}"></script>
    <script src="{{ asset('assets/clients/js/userDash/user_dash.js') }}"></script>
    @if (session('okela'))
        <script>
            toastr.success("{{ session('okela') }}");
        </script>
    @endif
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
