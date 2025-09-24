@extends('admin.layouts.admin')

@section('title', 'Product attributes')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách thuộc tính sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin thuộc tính sản phẩm <small>Hiện đang có: <span
                                        style="color: red">{{ $product_attributes->count() }}</span>
                                    thuộc tính</small></h2>
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
                                            Trang quản lý thuộc tính sản phẩm cho phép admin tạo, chỉnh sửa và xóa các thuộc
                                            tính sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive" cellspacing="0"
                                            width="100%" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Thuộc tính</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td>{{ $product->id }}</td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-info rounded"
                                                                style="font-size: 12px; padding: 5px" data-toggle="modal"
                                                                data-target="#valueModal-{{ $product->id }}">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        @foreach ($products as $pro)
                                            <div class="modal fade flowToy" id="valueModal-{{ $pro->id }}"
                                                tabindex="-1" aria-labelledby="valueModalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="valueModalTitle">Chi tiết
                                                                thuộc tính sản phẩm</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"> <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tên thuộc tính</th>
                                                                            <th>Giá trị</th>
                                                                            <th>Giá trị ngắn</th>
                                                                            <th>Thao tác</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($pro->attributes as $item)
                                                                            <tr
                                                                                id="product-attribute-row-{{ $item->id }}">
                                                                                <td>{{ $item->name }}</td>
                                                                                <td>{{ $item->pivot->value }}</td>
                                                                                <td>{{ $item->pivot->short_value }}</td>
                                                                                <td>
                                                                                    <a class="btn btn-app btn-update-product-attribute text-center text-success"
                                                                                        data-toggle="modal"
                                                                                        data-target="#productAttributeModal-{{ $item->id }}"><i
                                                                                            class="fa fa-edit"></i> Chỉnh
                                                                                        sửa</a>
                                                                                    <a class="btn btn-app btn-delete-product-attribute text-center text-danger"
                                                                                        data-id="{{ $item->id }}"><i
                                                                                            class="fa fa-trash"></i>
                                                                                        Xóa</a>
                                                                                </td>
                                                                            </tr>
                                                                            <div class="modal fade"
                                                                                id="productAttributeModal-{{ $item->id }}"
                                                                                tabindex="-1"
                                                                                aria-labelledby="productAttributeModalTitle"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="productAttributeModalTitle">
                                                                                                Chỉnh
                                                                                                sửa thuộc tính
                                                                                                {{ $item->id }}
                                                                                            </h5>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form
                                                                                                id="update_product_attribute_{{ $item->id }}"
                                                                                                method="POST"
                                                                                                class="form-horizontal form-label-left">
                                                                                                @csrf
                                                                                                <div
                                                                                                    class="item form-group">
                                                                                                    <label for="value"
                                                                                                        class="col-form-label col-md-3 col-sm-3 label-align">Giá
                                                                                                        trị</label>
                                                                                                    <div
                                                                                                        class="col-md-6 col-sm-6 ">
                                                                                                        <input
                                                                                                            id="value"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="value"
                                                                                                            value="{{ $item->pivot->value }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="item form-group">
                                                                                                    <label for="short_value"
                                                                                                        class="col-form-label col-md-3 col-sm-3 label-align">Giá
                                                                                                        trị ngắn</label>
                                                                                                    <div
                                                                                                        class="col-md-6 col-sm-6 ">
                                                                                                        <input
                                                                                                            id="short_value"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            name="short_value"
                                                                                                            value="{{ $item->pivot->short_value }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-primary btn-update-submit-product-attribute"
                                                                                                data-id="{{ $item->id }}">Chỉnh
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
