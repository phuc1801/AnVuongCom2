@extends('admin.layouts.admin')

@section('title', 'Products')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách ảnh sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin sản phẩm <small>Hiện đang có: <span
                                        style="color: red">{{ $productImages->count() }}</span>
                                    ảnh sản phẩm</small></h2>
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
                                            Trang quản lý sản phẩm cho phép admin tạo, chỉnh sửa và xóa các ảnh sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive" cellspacing="0"
                                            width="100%" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Ảnh</th>
                                                    <th>Ảnh chính</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($productImages as $image)
                                                    <tr id="productImage-row-{{ $image->id }}">
                                                        <td>{{ $image->id }}</td>
                                                        <td style="max-width:250px;">{{ $image->product->name }}</td>
                                                        <td>
                                                            <img src="{{ $image->image_url }}" alt="minh hoa"
                                                                style="height: 180px;width: 200px;" class="image-gallery">
                                                        </td>
                                                        <td>{{ $image->is_primary ? 'Có' : 'Không' }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-product-image text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#productImageModal-{{ $image->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-product-image text-center text-danger"
                                                                data-id="{{ $image->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="productImageModal-{{ $image->id }}"
                                                        tabindex="-1" aria-labelledby="productImageModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="productImageModalTitle">
                                                                        Chỉnh
                                                                        sửa ảnh của {{ $image->product->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_product_image_{{ $image->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="product-name">Tên sản phẩm
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8">
                                                                                <select id="product_id" name="product_id"
                                                                                    class="form-control">
                                                                                    @foreach ($products as $product)
                                                                                        <option value="{{ $product->id }}"
                                                                                            {{ $product->id === $image->product_id ? 'selected' : '' }}>
                                                                                            {{ $product->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Ảnh
                                                                                chính<span class="required">*</span></label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <div id="show-true" class="btn-group"
                                                                                    data-toggle="buttons">
                                                                                    <label class="btn btn-primary"
                                                                                        data-toggle-class="btn-primary">
                                                                                        <input type="radio"
                                                                                            name="is_primary" value="true"
                                                                                            {{ $image->is_primary ? 'checked' : '' }}>
                                                                                        Có
                                                                                    </label>
                                                                                    <label class="btn btn-secondary"
                                                                                        data-toggle-class="btn-primary"
                                                                                        data-toggle-passive-class="btn-default">
                                                                                        <input type="radio"
                                                                                            name="is_primary" value="false"
                                                                                            {{ $image->is_primary ? '' : 'checked' }}>
                                                                                        Không
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="image-name">Ảnh
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <img src="{{ $image->image_url }}"
                                                                                    alt="Ảnh xem trước" id="image-preview"
                                                                                    class="image-preview">
                                                                                <label
                                                                                    for="product-image-one-{{ $image->id }}"
                                                                                    class="custom-file-upload">Chọn
                                                                                    ảnh</label>
                                                                                <input
                                                                                    id="product-image-one-{{ $image->id }}"
                                                                                    class="product-image-one custom cant-see-image"
                                                                                    type="file" name="image"
                                                                                    accept="image/*"
                                                                                    data-id="{{ $image->id }}">
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-product-image"
                                                                        data-id="{{ $image->id }}">Chỉnh
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
