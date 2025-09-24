@extends('admin.layouts.admin')

@section('title', 'Invoice')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Hóa đơn <small>đơn hàng số: {{ $order->id }}</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <section class="content invoice">

                                <div class="row">
                                    <div class="  invoice-header">
                                        <h1>
                                            <i class="fa fa-globe"></i> Hóa đơn.
                                            <small class="pull-right">Ngày tạo:
                                                {{ $order->created_at->format('d/m/Y H:i') }}</small>
                                        </h1>
                                    </div>
                                </div>

                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        Từ
                                        <address>
                                            <strong>An Vượng Computer</strong>
                                            <br>209 Tôn Đức Thắng, Lam Sơn, Lê Chân, Hải Phòng
                                            <br>Hải Phòng
                                            <br>Số điện thoại: 123456789
                                            <br>Email: cskh@anvuong.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        Đến
                                        <address>
                                            <strong>{{ $order->shippingAddress->name }}</strong>
                                            <br>{{ $order->shippingAddress->address }}
                                            <br>{{ $order->shippingAddress->city }}
                                            <br>Số điện thoại: {{ $order->shippingAddress->phone }}
                                            <br>Email: {{ $order->user->email }}
                                        </address>
                                    </div>

                                    <div class="col-sm-4 invoice-col">
                                        @php
                                            $invoice_id = 'HD' . str_pad($order->id, 6, '0', STR_PAD_LEFT);
                                        @endphp
                                        <b>Mã hóa đơn: {{ $invoice_id }}</b>
                                        <br>
                                        <br>
                                        <b>Order ID:</b> {{ $order->id }}
                                        <br>
                                        <b>Payment Due:</b>
                                        {{ $order->payment->paid_at ? $order->payment->paid_at->format('d/m/Y H:i') : '' }}
                                        <br>
                                        <b>Tài khoản:</b> {{ $order->user->name }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="  table">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Serial number</th>
                                                    <th>Giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @php
                                                        $index = 1;
                                                    @endphp
                                                    @foreach ($order->orderItems as $item)
                                                        <td>{{ $index++ }}</td>
                                                        <td>{{ $item->product->name }}</td>
                                                        <td>
                                                            @foreach ($item->orderItemDetails as $detail)
                                                                {{ $detail->productSerial->serial_number }}<br>
                                                            @endforeach
                                                        </td>
                                                        <td> {{ number_format($item->product->price, 0, ',', '.') }} đ
                                                        </td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ number_format($item->total_price, 0, ',', '.') }} đ</td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="lead">Phương thức thanh toán: </p>
                                        @if ($order->payment->method === 'cash')
                                            <img style="height: 45px;width: 80px;border: 1px solid blue;border-radius: 5px"
                                                src="{{ asset('assets/admin/images/cash.jpg') }}" alt="Cash">
                                        @else
                                            <img style="height: 45px;width: 80px;border: 1px solid blue;border-radius: 5px"
                                                src="{{ asset('assets/admin/images/paypal.png') }}" alt="Paypal">
                                        @endif

                                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                            Đây là phương thức thanh toán mà khách hàng đã chọn cho đơn hàng này. Nếu là
                                            PayPal, thanh toán đã được xử lý trực tuyến. Nếu là thanh toán khi nhận hàng,
                                            khách hàng sẽ thanh toán trực tiếp khi nhận sản phẩm.
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="lead">Amount Due 2/22/2014</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th style="width:50%">Tạm tính:</th>
                                                        <td>{{ number_format($order->orderItems->sum('total_price'), 0, ',', '.') }}
                                                            đ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Giảm giá:</th>
                                                        <td> {{ number_format(optional($order->coupon)->value ?? 0, 0, ',', '.') }}
                                                            đ
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Vận chuyển:</th>
                                                        <td>50.000 đ</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng cộng:</th>
                                                        <td>{{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-print">
                                    <div>
                                        <button class="btn btn-default" onclick="window.print();"><i
                                                class="fa fa-print"></i> In hóa đơn</button>
                                        <button class="btn btn-danger pull-right" data-id="{{ $order->id }}"><i
                                                class="fa fa-close"></i>
                                            Hủy đơn</button>
                                        <button class="btn btn-success pull-right send-invoice-email"
                                            data-id="{{ $order->id }}"><i class="fa fa-send"></i>
                                            Gửi
                                            email</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
