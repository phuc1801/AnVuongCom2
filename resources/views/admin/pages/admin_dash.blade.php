@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="right_col" role="main">
        <div class="row" style="display: inline-block;width: 100%">
            <div class="tile_count">
                <div class="col-md-2 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Tổng số người dùng mới</span>
                    <div class="count">{{ $users->count() }}</div>
                </div>
                <div class="col-md-2 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-bar-chart"></i> Tổng số lượng sản phẩm</span>
                    <div class="count">{{ $products->count() }}</div>
                </div>
                <div class="col-md-2 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-shopping-cart"></i> Tổng số lượng đơn hàng</span>
                    <div class="count green">{{ $orders->count() }}</div>
                </div>
                <div class="col-md-2 col-sm-6  tile_stats_count" style="overflow: unset;">
                    <span class="count_top"><i class="fa fa-money"></i> Tổng doanh thu</span>
                    <div class="count"> {{ number_format($totalSum, 0, ',', '.') }}đ </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-12 ">
                <div class="x_panel tile fixed_height_320 overflow_hidden">
                    <div class="x_title">
                        <h2>Top 5 danh mục có nhiều sản phẩm nhất</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="" style="width:100%">
                            <tr>
                                <th style="width:37%;">
                                    <p>Top 5</p>
                                </th>
                                <th>
                                    <div class="col-lg-7 col-md-7 col-sm-7 ">
                                        <p class="">Danh mục</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                                        <p class="">Sản phẩm</p>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <canvas class="canvasDoughnutCategory" height="140" width="140"
                                        style="margin: 15px 10px 10px 0" data-labels='@json($categories->pluck('name'))'
                                        data-counts='@json($categories->pluck('products_count'))'>
                                    </canvas>
                                </td>
                                <td>
                                    <table class="tile_info">
                                        @foreach ($categories as $index => $item)
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square"
                                                            style="color: {{ ['#BDC3C7', '#9B59B6', '#E74C3C', '#26B99A', '#3498DB'][$index % 5] }}"></i>{{ $item->name }}
                                                    </p>
                                                </td>
                                                <td class="text-left">{{ $item->products->count() }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Doanh thu <small>tháng</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="revenueBarChart" data-labels='@json($moneyRevenue->pluck('month')->toArray())'
                            data-values='@json($moneyRevenue->pluck('revenue')->toArray())'></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Người dùng mới<small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < min(3, $users->count()); $i++)
                                    <tr>
                                        <th scope="row">{{ $i + 1 }}</th>
                                        <td>{{ $users[$i]->name }}</td>
                                        <td>{{ $users[$i]->phone }}</td>
                                        <td>
                                            @switch($users[$i]->status)
                                                @case('active')
                                                    <span class="badge badge-info">Hoạt động</span>
                                                @break

                                                @case('pending')
                                                    <span class="badge badge-secondary">Chưa kích hoạt</span>
                                                @break

                                                @case('banned')
                                                    <span class="badge badge-warning">Bị chặn</span>
                                                @break

                                                @case('deleted')
                                                    <span class="badge badge-danger">Bị xóa</span>
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Top 3 <small>sản phẩm bán chạy nhất</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Đã bán</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($best_selling as $index => $sell)
                                    <tr>
                                        <th scope="row">{{ ++$index }}</th>
                                        <td><img style="height: 50px;width: 50px" src="{{ $sell->image_url }}"
                                                alt="minh hoa"></td>
                                        <td style="width: 200px">{{ $sell->name }}</td>
                                        <td>{{ number_format($sell->price, 0, '.', ',') }}đ</td>
                                        <td>{{ $sell->total_sold }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class="col-md-6 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Đơn hàng mới <small>danh sách</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Khách hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Trang thái</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Yêu cầu hủy</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < min(4, $orders->count()); $i++)
                                    <tr>
                                        <th scope="row">{{ $i + 1 }}</th>
                                        <td>{{ $orders[$i]->shippingAddress->name }}</td>
                                        <td>{{ number_format($orders[$i]->total_price, 0, '.', ',') }}đ</td>
                                        <td>
                                            @switch($orders[$i]->status)
                                                @case('pending')
                                                    <span class="badge badge-warning">Đang chờ</span>
                                                @break

                                                @case('processing')
                                                    <span class="badge badge-secondary">Đang xử lý</span>
                                                @break

                                                @case('shipping')
                                                    <span class="badge badge-info">Đang giao</span>
                                                @break

                                                @case('completed')
                                                    <span class="badge badge-success">Đã xong</span>
                                                @break

                                                @case('cancelled')
                                                    <span class="badge badge-danger">Đã hủy</span>
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                        <td>{{ $orders[$i]->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            @if ($orders[$i]->requestDestroy)
                                                <span class="badge badge-danger rounded-circle"
                                                    style="padding: 7px">SOS</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.order-detail', ['id' => $orders[$i]->id]) }}"
                                                class="btn btn-outline-info rounded" target="_blank"
                                                style="font-size: 12px; padding: 5px;margin: 0px">
                                                Xem chi tiết
                                            </a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
@endsection
