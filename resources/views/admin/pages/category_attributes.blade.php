@extends('admin.layouts.admin')

@section('title', 'Category attributes')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách thuộc tính danh mục sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin thuộc tính danh mục sản phẩm <small>Hiện đang có: <span
                                        style="color: red">{{ $category_attributes->count() }}</span>
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
                                            Trang quản lý thuộc tính danh mục sản phẩm cho phép admin tạo, chỉnh sửa và xóa
                                            các thuộc tính danh mục sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive" cellspacing="0"
                                            width="100%" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Thuộc tính</th>
                                                    <th>Danh mục</th>
                                                    <th>Là bộ lọc</th>
                                                    <th>Icon</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($category_attributes as $category_attribute)
                                                    <tr id="category-attribute-row-{{ $category_attribute->id }}">
                                                        <td>{{ $category_attribute->id }}</td>
                                                        <td>{{ $category_attribute->attribute->name }}</td>
                                                        <td>{{ $category_attribute->category->name }}</td>
                                                        <td>
                                                            {{ $category_attribute->is_filter ? 'Có' : 'Không' }}
                                                        </td>
                                                        <td>{{ $category_attribute->icon }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-category-attribute text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#categoryAttributeModal-{{ $category_attribute->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-category-attribute text-center text-danger"
                                                                data-id="{{ $category_attribute->id }}"><i
                                                                    class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade"
                                                        id="categoryAttributeModal-{{ $category_attribute->id }}"
                                                        tabindex="-1" aria-labelledby="categoryAttributeModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="categoryAttributeModalTitle">Chỉnh
                                                                        sửa {{ $category_attribute->id }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        id="update_category_attribute_{{ $category_attribute->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-3 col-sm-3 label-align"
                                                                                for="attribute-name">Tên thuộc
                                                                                tính
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <select id="attribute_id"
                                                                                    name="attribute_id"
                                                                                    class="form-control">
                                                                                    @foreach ($attributes as $attribute)
                                                                                        <option
                                                                                            value="{{ $attribute->id }}">
                                                                                            {{ $attribute->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-3 col-sm-3 label-align"
                                                                                for="category-name">Tên danh mục
                                                                                sản phẩm
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <select id="category_id" name="category_id"
                                                                                    class="form-control">
                                                                                    @foreach ($categories as $category)
                                                                                        <option
                                                                                            value="{{ $category->id }}">
                                                                                            {{ $category->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-3 col-sm-3 label-align">Là
                                                                                bộ lọc</label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <div id="show-true" class="btn-group"
                                                                                    data-toggle="buttons">
                                                                                    <label class="btn btn-secondary"
                                                                                        data-toggle-class="btn-primary">
                                                                                        <input type="radio"
                                                                                            name="is_filter" value="true"
                                                                                            class="join-btn">
                                                                                        &nbsp;
                                                                                        Có &nbsp;
                                                                                    </label>
                                                                                    <label class="btn btn-primary"
                                                                                        data-toggle-class="btn-primary"
                                                                                        data-toggle-passive-class="btn-default">
                                                                                        <input type="radio"
                                                                                            name="is_filter" value="false"
                                                                                            class="join-btn">
                                                                                        Không
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label for="icon-name"
                                                                                class="col-form-label col-md-3 col-sm-3 label-align">Biểu
                                                                                tượng</label>
                                                                            <div class="col-md-6 col-sm-6 ">
                                                                                <input id="icon-name" class="form-control"
                                                                                    type="text" name="icon">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-category-attribute"
                                                                        data-id="{{ $category_attribute->id }}">Chỉnh
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
