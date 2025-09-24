@extends('admin.layouts.admin')

@section('title', 'Payments')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách thanh toán</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin thanh toán <small>Hiện đang có: <span
                                        style="color: red">{{ $payments->count() }}</span>
                                    mục</small></h2>
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
                                            Trang quản lý thanh toán cho phép admin tạo, chỉnh sửa và xóa các thanh toán
                                            . Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Mã đặt hàng</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Mã giao dịch</th>
                                                    <th>Số tiền</th>
                                                    <th>Trạng thái</th>
                                                    <th>Ngày thanh toán</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($payments as $payment)
                                                    <tr id="payment-row-{{ $payment->id }}">
                                                        <td>{{ $payment->id }}</td>
                                                        <td>{{ $payment->order_id }}</td>
                                                        <td>{{ $payment->method }}</td>
                                                        <td>{{ $payment->transaction_id }}</td>
                                                        <td>{{ number_format($payment->amount, 0, '.', ',') }}đ</td>
                                                        <td>
                                                            @switch($payment->status)
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
                                                                        <i class="fa fa-check mr-1"></i>Đã hủy
                                                                    </span>
                                                                @break

                                                                @case('paid_back')
                                                                    <span class="badge badge-danger badge-pill p-2">
                                                                        <i class="fa fa-times mr-1"></i>Cần trả lại
                                                                    </span>
                                                                @break

                                                                @default
                                                            @endswitch
                                                        </td>
                                                        <td>
                                                            {{ $payment->paid_at ? $payment->paid_at->format('d/m/Y H:i') : '' }}
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-payment text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#paymentModal-{{ $payment->id }}"><i
                                                                    class="fa fa-edit"></i> Cập nhật</a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="paymentModal-{{ $payment->id }}"
                                                        tabindex="-1" aria-labelledby="paymentModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="paymentModalTitle">Chỉnh
                                                                        sửa {{ $payment->id }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_payment_{{ $payment->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="status">Trạng thái
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8">
                                                                                <select id="status" name="status"
                                                                                    class="form-control" required>
                                                                                    <option value="pending">Chờ xác
                                                                                        nhận
                                                                                    </option>
                                                                                    <option value="complete">Thành công
                                                                                    </option>
                                                                                    <option value="fail">Thất bại</option>
                                                                                    <option value="paid_back">Hoàn tiền
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-payment"
                                                                        data-id="{{ $payment->id }}">Chỉnh
                                                                        sửa</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>
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
