@extends('admin.layouts.admin')

@section('title', 'Products')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin sản phẩm <small>Hiện đang có: <span
                                        style="color: red">{{ $products->count() }}</span>
                                    sản phẩm</small></h2>
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
                                            Trang quản lý sản phẩm cho phép admin tạo, chỉnh sửa và xóa các sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width:100%; text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Giá bán</th>
                                                    <th>Số lượng</th>
                                                    <th>Tên danh mục</th>
                                                    <th>Tình trạng</th>
                                                    <th>Nổi bật</th>
                                                    <th>Bảo hành</th>
                                                    <th>Đánh giá</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr id="product-row-{{ $product->id }}">
                                                        <td>{{ $product->id }}</td>
                                                        <td style="max-width: 250px;">{{ $product->name }}</td>
                                                        <td>{{ number_format($product->price, 0, ',', '.') }} đ</td>
                                                        <td>{{ $product->quantity }}</td>
                                                        <td>{{ $product->category->name }}</td>
                                                        <td>{{ $product->status }}</td>
                                                        <td>{{ $product->outline ? 'Có' : 'Không' }}</td>
                                                        <td>{{ $product->guarantee }}</td>
                                                        <td>{{ $product->rating_avg }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-product text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#productModal-{{ $product->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-product text-center text-danger"
                                                                data-id="{{ $product->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="productModal-{{ $product->id }}"
                                                        tabindex="-1" aria-labelledby="productModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="productModalTitle">Chỉnh
                                                                        sửa {{ $product->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_product_{{ $product->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="product-name">Tên sản phẩm
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="product-name"
                                                                                    name="name" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $product->name }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="quantity">Số lượng
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="quantity"
                                                                                    name="quantity" required="required"
                                                                                    class="form-control" pattern="[0-9]+"
                                                                                    value="{{ $product->quantity }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="product-name">Trạng thái
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="status"
                                                                                    name="status" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $product->status }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label for="description-name"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Mô
                                                                                tả</label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input id="description-name"
                                                                                    class="form-control" type="text"
                                                                                    name="description"
                                                                                    value="{{ $product->description }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="slug-name">Tên đường dẫn
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="slug-name"
                                                                                    name="slug" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $product->slug }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="category_id">
                                                                                <span class="required">*</span>
                                                                                Tên danh mục
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8">
                                                                                <select id="category_id"
                                                                                    name="category_id"
                                                                                    class="form-control">
                                                                                    @foreach ($cateNoFathers as $cateId)
                                                                                        <option
                                                                                            value="{{ $cateId->id }}"
                                                                                            {{ $cateId->id === $product->category_id ? 'selected' : '' }}>
                                                                                            {{ $cateId->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>

                                                                            </div>

                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label for="price"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Giá
                                                                                bán <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input id="price" class="form-control"
                                                                                    type="text" name="price"
                                                                                    pattern="[0-9]+"
                                                                                    value="{{ $product->price }}"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label for="real_price"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Giá
                                                                                gốc<span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input id="real_price"
                                                                                    class="form-control" type="text"
                                                                                    name="real_price" pattern="[0-9]+"
                                                                                    value="{{ $product->real_price }}"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Nổi
                                                                                bật<span class="required">*</span></label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <div id="show-true" class="btn-group"
                                                                                    data-toggle="buttons">
                                                                                    <label class="btn btn-primary"
                                                                                        data-toggle-class="btn-primary">
                                                                                        <input type="radio"
                                                                                            name="outline" value="true"
                                                                                            {{ $product->outline ? 'checked' : '' }}>
                                                                                        Có
                                                                                    </label>
                                                                                    <label class="btn btn-secondary"
                                                                                        data-toggle-class="btn-primary"
                                                                                        data-toggle-passive-class="btn-default">
                                                                                        <input type="radio"
                                                                                            name="outline" value="false"
                                                                                            {{ $product->outline ? '' : 'checked' }}>
                                                                                        Không
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label for="unit"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Đơn
                                                                                vị <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input id="unit" class="form-control"
                                                                                    type="text" name="unit"
                                                                                    value="{{ $product->unit }}"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label for="guarantee"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Bảo
                                                                                hành <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input id="guarantee" class="form-control"
                                                                                    type="text" name="guarantee"
                                                                                    value="{{ $product->guarantee }}"
                                                                                    required="required">
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-product"
                                                                        data-id="{{ $product->id }}">Chỉnh
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
