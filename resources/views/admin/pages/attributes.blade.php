@extends('admin.layouts.admin')

@section('title', 'Attributes')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách thuộc tính</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin thuộc tính <small>Hiện đang có: <span
                                        style="color: red">{{ $attributes->count() }}</span>
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
                                            Trang quản lý thuộc tính cho phép admin tạo, chỉnh sửa và xóa các thuộc tính sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên thuộc tính</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($attributes as $attribute)
                                                    <tr id="attribute-row-{{ $attribute->id }}">
                                                        <td>{{ $attribute->id }}</td>
                                                        <td>{{ $attribute->name }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-attribute text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#attributeModal-{{ $attribute->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-attribute text-center text-danger"
                                                                data-id="{{ $attribute->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="attributeModal-{{ $attribute->id }}"
                                                        tabindex="-1" aria-labelledby="attributeModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="attributeModalTitle">Chỉnh
                                                                        sửa {{ $attribute->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_attribute_{{ $attribute->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="attribute-name">Tên thuộc tính
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="attribute-name"
                                                                                    name="name" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $attribute->name }}">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-attribute"
                                                                        data-id="{{ $attribute->id }}">Chỉnh
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
