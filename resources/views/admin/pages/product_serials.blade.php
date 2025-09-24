@extends('admin.layouts.admin')

@section('title', 'Serial products')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách serial sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin serial sản phẩm <small>Hiện đang có: <span
                                        style="color: red">{{ $productSerials->count() }}</span>
                                    serial sản phẩm</small></h2>
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
                                            Trang quản lý serial sản phẩm cho phép admin tạo, chỉnh sửa và xóa các serial
                                            sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%" style="text-align: center"">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Serial number</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Tình trạng</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($productSerials as $serial)
                                                    <tr id="productSerial-row-{{ $serial->id }}">
                                                        <td>{{ $serial->id }}</td>
                                                        <td style="width:250px">{{ $serial->serial_number }}</td>
                                                        <td style="max-width:250px;">{{ $serial->product->name }}</td>
                                                        <td>{{ $serial->status }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-product-serial text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#productSerialModal-{{ $serial->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-product-serial text-center text-danger"
                                                                data-id="{{ $serial->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="productSerialModal-{{ $serial->id }}"
                                                        tabindex="-1" aria-labelledby="productSerialModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="productSerialModalTitle">
                                                                        Chỉnh
                                                                        sửa ảnh của {{ $serial->product->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_product_serial_{{ $serial->id }}"
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
                                                                                    class="form-control">
                                                                                    @foreach ($products as $product)
                                                                                        <option value="{{ $product->id }}"
                                                                                            {{ $product->id === $serial->product_id ? 'selected' : '' }}>
                                                                                            {{ $product->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="serial_number">Serial number
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="serial_number"
                                                                                    name="serial_number" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $serial->serial_number }}">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-product-serial"
                                                                        data-id="{{ $serial->id }}">Chỉnh
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
