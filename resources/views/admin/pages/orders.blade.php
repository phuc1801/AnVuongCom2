@extends('admin.layouts.admin')

@section('title', 'Orders')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách đơn hàng</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="mb-4">
                                Thông tin đơn hàng <small class="text-danger">Hiện đang có: {{ $orders->count() }}</small>
                                <div style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card shadow-sm border-0">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="mr-3 text-primary">
                                                        <i class="fa fa-shopping-cart fa-2x"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            {{ $orders->where('status', 'pending')->count() }}</h5>
                                                        <small class="text-muted">Đơn hàng đang chờ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="card shadow-sm border-0">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="mr-3 text-secondary">
                                                        <i class="fa fa-dropbox fa-2x"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            {{ $orders->where('status', 'processing')->count() }}</h5>
                                                        <small class="text-muted">Đơn hàng đang chuẩn bị</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="card shadow-sm border-0">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="mr-3 text-info">
                                                        <i class="fa fa-truck fa-2x"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            {{ $orders->where('status', 'shipping')->count() }}</h5>
                                                        <small class="text-muted">Đơn hàng đang vận chuyển</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="card shadow-sm border-0">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="mr-3 text-success">
                                                        <i class="fa fa-check-circle fa-2x"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            {{ $orders->where('status', 'completed')->count() }}</h5>
                                                        <small class="text-muted">Đơn hàng đã giao</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="card shadow-sm border-0">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="mr-3 text-danger">
                                                        <i class="fa fa-times-circle fa-2x"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            {{ $orders->where('status', 'cancelled')->count() }}</h5>
                                                        <small class="text-muted">Đơn hàng đã hủy</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="card shadow-sm border-0">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="mr-3 text-warning">
                                                        <i class="fa fa-question-circle fa-2x"></i>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0">
                                                            {{ $orders->where('requestToDestroy', 1)->count() }}</h5>
                                                        <small class="text-muted">Đơn hàng bị yêu cầu hủy</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </h2>

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <p class="text-muted font-13 m-b-30">
                                            Trang quản lý đơn hàng cho phép admin xác nhận, cập nhật và xóa các đơn hàng. Dữ
                                            liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width:100%; text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tài khoản</th>
                                                    <th>Thông tin người đặt</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Mã giảm giá</th>
                                                    <th>Trạng thái</th>
                                                    <th>Trạng thái thanh toán</th>
                                                    <th>Chi tiết đơn hàng</th>
                                                    <th>Yêu cầu hủy</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->user->name }}</td>
                                                        <td>
                                                            <a href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#shippingModal-{{ $order->id }}">{{ $order->shippingAddress->name }}</a>
                                                        </td>
                                                        <td>
                                                            {{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                                                        <td>
                                                            -{{ number_format(optional($order->coupon)->value ?? 0, 0, ',', '.') }}
                                                            đ
                                                        </td>
                                                        <td style="text-align: center" class="order-status">
                                                            @switch($order->status)
                                                                @case('pending')
                                                                    <span class="badge badge-warning badge-pill p-2" style="background-color: green;">
                                                                        <i class="fa fa-clock-o mr-1"></i>Đang chờ
                                                                    </span>
                                                                @break

                                                                @case('processing')
                                                                    <span class="badge badge-secondary badge-pill p-2">
                                                                        <i class="fa fa-cog fa-spin mr-1"></i>Đang xử lý
                                                                    </span>
                                                                @break

                                                                @case('shipping')
                                                                    <span class="badge badge-info badge-pill text-dark p-2">
                                                                        <i class="fa fa-truck mr-1"></i>Đang vận chuyển
                                                                    </span>
                                                                @break

                                                                @case('completed')
                                                                    <span class="badge badge-success badge-pill p-2">
                                                                        <i class="fa fa-check mr-1"></i>Đã xong
                                                                    </span>
                                                                @break

                                                                @case('cancelled')
                                                                    <span class="badge badge-danger badge-pill p-2">
                                                                        <i class="fa fa-times mr-1"></i>Đã hủy
                                                                    </span>
                                                                @break

                                                                @default
                                                                    <span class="badge badge-light badge-pill text-dark p-2">Không
                                                                        xác
                                                                        định</span>
                                                            @endswitch
                                                        </td>
                                                        <td style="text-align: center">
                                                            @if($order->payment)
                                                                @switch($order->payment->status)
                                                                    @case('pending')
                                                                        <span class="badge badge-warning badge-pill p-2">
                                                                            <i class="fa fa-clock-o mr-1"></i>Đang chờ
                                                                        </span>
                                                                    @break

                                                                    @case('complete')
                                                                        <span class="badge badge-success badge-pill p-2">
                                                                            <i class="fa fa-check mr-1"></i>Đã thanh toán
                                                                        </span>
                                                                    @break

                                                                    @case('fail')
                                                                        <span class="badge badge-secondary badge-pill p-2">
                                                                            <i class="fa fa-times mr-1"></i>Kết thúc
                                                                        </span>
                                                                    @break

                                                                    @case('paid_back')
                                                                        <span class="badge badge-danger badge-pill p-2">
                                                                            <i class="fa fa-undo mr-1"></i>Cần trả lại
                                                                        </span>
                                                                    @break

                                                                    @default
                                                                        <span class="badge badge-light badge-pill text-dark p-2">Không xác định</span>
                                                                @endswitch
                                                            @else
                                                                <span class="badge badge-light badge-pill text-dark p-2">Chưa thanh toán</span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <button type="button" class="btn btn-outline-info rounded"
                                                                style="font-size: 12px; padding: 5px" data-toggle="modal"
                                                                data-target="#orderItemModal-{{ $order->id }}">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                        <td>
                                                            @if ($order->requestDestroy)
                                                                <span class="badge badge-danger badge-pill p-2">
                                                                    Có
                                                                </span>
                                                            @else
                                                                <span class="badge badge-primary badge-pill p-2">
                                                                    Không
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="btn-group button-thao-tac">
                                                                <button type="button"
                                                                    class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                                                    style="padding: 5px; height: 24px;width: 24px"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    @if ($order->status === 'pending')
                                                                        <a class="dropdown-item confirm-order"
                                                                            data-id="{{ $order->id }}"
                                                                            href="javascript:void(0)">Xác
                                                                            nhận</a>
                                                                    @endif
                                                                    @if ($order->status !== 'completed' && $order->status !== 'cancelled')
                                                                        <a class="dropdown-item cancelled-order"
                                                                            href="javascript:void(0)"
                                                                            data-id="{{ $order->id }}">Hủy
                                                                            đơn</a>
                                                                    @endif
                                                                    <div class="dropdown-divider"></div>
                                                                    @if ($order->status === 'processing')
                                                                        <a class="dropdown-item completed-order"
                                                                            href="javascript:void(0)"
                                                                            data-id="{{ $order->id }}">Giao
                                                                            đơn</a>
                                                                    @endif
                                                                    @if ($order->status === 'shipping')
                                                                        <a class="dropdown-item completed-order"
                                                                            href="javascript:void(0)"
                                                                            data-id="{{ $order->id }}">Hoàn thành</a>
                                                                    @endif
                                                                    <a class="dropdown-item" target="_blank"
                                                                        href="{{ route('admin.order-detail', ['id' => $order->id]) }}">Xem
                                                                        chi
                                                                        tiết</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        @foreach ($orders as $order)
                                            <div class="modal fade" id="orderItemModal-{{ $order->id }}"
                                                tabindex="-1" aria-labelledby="orderItemModalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="orderItemModalTitle">Chi tiết
                                                                order</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"> <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Tên sản phẩm</th>
                                                                            <th>Số lượng</th>
                                                                            <th>Đơn giá</th>
                                                                            <th>Thành tiền</th>
                                                                            <th>Serial number</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                            $index = 1;
                                                                        @endphp
                                                                        @foreach ($order->orderItems as $item)
                                                                            <tr>
                                                                                <td>{{ $index++ }}</td>
                                                                                <td>{{ $item->product->name }}</td>
                                                                                <td>{{ $item->quantity }}</td>
                                                                                <td>{{ number_format($item->product->price, 0, ',', '.') }}
                                                                                    đ</td>
                                                                                <td>{{ number_format($item->total_price, 0, ',', '.') }}
                                                                                    đ
                                                                                </td>
                                                                                <td>
                                                                                    @foreach ($item->orderItemDetails as $detail)
                                                                                        {{ $detail->productSerial->serial_number }}<br>
                                                                                    @endforeach
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        @foreach ($orders as $order)
                                            <div class="modal fade" id="shippingModal-{{ $order->id }}"
                                                tabindex="-1" aria-labelledby="shippingModalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="shippingModalTitle">Thông tin
                                                                người đặt</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"> <span
                                                                    aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tên người nhận</th>
                                                                            <th>Địa chỉ</th>
                                                                            <th>SĐT</th>
                                                                            <th>Email</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>{{ $order->shippingAddress->name }}</td>
                                                                            <td>{{ $order->shippingAddress->address }}</td>
                                                                            <td>{{ $order->shippingAddress->phone }}</td>
                                                                            <td>{{ $order->shippingAddress->user->email }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
