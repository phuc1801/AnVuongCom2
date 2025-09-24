@extends('admin.layouts.admin')

@section('title', 'Voucher')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách mã giảm giá sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin mã giảm giá sản phẩm <small>Hiện đang có: <span
                                        style="color: red">{{ $vouchers->count() }}</span>
                                    mã </small></h2>
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
                                            Trang quản lý mã giảm giá sản phẩm cho phép admin tạo, chỉnh sửa và xóa các mã
                                            giảm giá
                                            sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%" style="text-align: center"">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên mã</th>
                                                    <th>Ngày hết hạn</th>
                                                    <th>Tình trạng</th>
                                                    <th>Giá trị</th>
                                                    <th>Code</th>
                                                    <th>Sản phẩm áp dụng</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($vouchers as $voucher)
                                                    <tr id="voucher-row-{{ $voucher->id }}">
                                                        <td>{{ $voucher->id }}</td>
                                                        <td style="width:250px">{{ $voucher->name }}</td>
                                                        <td>{{ $voucher->expiry_date->format('d/m/Y') }}</td>
                                                        <td>{{ $voucher->status === 'valid' ? 'Còn hạn' : 'Đã hết' }}</td>
                                                        <td>{{ number_format($voucher->value, 0, '.', ',') }}đ</td>
                                                        <td>{{ $voucher->code }}</td>
                                                        <td style="width:350px">{{ $voucher->product->name }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-product-voucher text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#voucherModal-{{ $voucher->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-voucher text-center text-danger"
                                                                data-id="{{ $voucher->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="voucherModal-{{ $voucher->id }}"
                                                        tabindex="-1" aria-labelledby="voucherModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="voucherModalTitle">
                                                                        Chỉnh
                                                                        sửa voucher {{ $voucher->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_voucher_{{ $voucher->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="product_id">Tên sản phẩm
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8">
                                                                                <select id="product_id" name="product_id"
                                                                                    required class="form-control">
                                                                                    @foreach ($products as $product)
                                                                                        <option value="{{ $product->id }}"
                                                                                            {{ $product->id === $voucher->product_id ? 'selected' : '' }}>
                                                                                            {{ $product->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="status">Tình trạng
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8">
                                                                                <select id="status" name="status"
                                                                                    required class="form-control">
                                                                                    <option value="valid"
                                                                                        {{ $voucher->status === 'valid' ? 'selected' : '' }}>
                                                                                        Còn hạn
                                                                                    </option>
                                                                                    <option value="invalid"
                                                                                        {{ $voucher->status === 'invalid' ? 'selected' : '' }}>
                                                                                        Hết hạn
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="name">Tên mã
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="name"
                                                                                    name="name" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $voucher->name }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="expiry_date">Ngày hết hạn
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="date" id="expiry_date"
                                                                                    name="expiry_date" class="form-control"
                                                                                    required
                                                                                    value="{{ \Carbon\Carbon::parse($voucher->expiry_date)->format('Y-m-d') }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="value">Giá trị
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="value"
                                                                                    name="value" required="required"
                                                                                    pattern="[0-9]+" class="form-control"
                                                                                    value="{{ $voucher->value }} ">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="code">Code
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="code"
                                                                                    name="code" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $voucher->code }}">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-voucher"
                                                                        data-id="{{ $voucher->id }}">Chỉnh
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
