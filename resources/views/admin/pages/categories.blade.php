@extends('admin.layouts.admin')

@section('title', 'Categories')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách danh mục</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin danh mục <small>Hiện đang có: <span
                                        style="color: red">{{ $cates->count() }}</span>
                                    danh mục</small></h2>
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
                                            Trang quản lý danh mục cho phép admin tạo, chỉnh sửa và xóa các danh mục sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width:100%; text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tên danh mục</th>
                                                    <th>Slug</th>
                                                    <th>Description</th>
                                                    <th>Parent</th>
                                                    <th>Icon</th>
                                                    <th>Show in slide</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($cates as $cate)
                                                    <tr id="category-row-{{ $cate->id }}">
                                                        <td>{{ $cate->id }}</td>
                                                        <td>{{ $cate->name }}</td>
                                                        <td>{{ $cate->slug }}</td>
                                                        <td>{{ $cate->description }}</td>
                                                        <td>{{ $cate->parent?->name ?? '-' }}</td>
                                                        <td>{{ $cate->icon }}</td>
                                                        <td>{{ $cate->show_in_slide === 1 ? 'Có' : 'Không' }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-category text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#categoryModal-{{ $cate->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-category text-center text-danger"
                                                                data-id="{{ $cate->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="categoryModal-{{ $cate->id }}"
                                                        tabindex="-1" aria-labelledby="categoryModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="categoryModalTitle">Chỉnh
                                                                        sửa {{ $cate->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_category_{{ $cate->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="category-name">Tên danh
                                                                                mục
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="category-name"
                                                                                    name="name" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $cate->name }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="slug-name">Tên đường
                                                                                dẫn
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="slug-name"
                                                                                    name="slug" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $cate->slug }}">
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
                                                                                    value="{{ $cate->description }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="parent_id">
                                                                                Danh mục cha
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8">
                                                                                <select id="parent_id" name="parent_id"
                                                                                    class="form-control">
                                                                                    <option value="">-- Không có
                                                                                        ba má
                                                                                        --
                                                                                    </option>
                                                                                    @foreach ($categories as $cateId)
                                                                                        <option value="{{ $cateId->id }}"
                                                                                            {{ $cateId->id === $cate->parent_id ? 'selected' : '' }}>
                                                                                            {{ $cateId->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label for="icon-name"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Biểu
                                                                                tượng</label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input id="icon-name" class="form-control"
                                                                                    type="text" name="icon"
                                                                                    value="{{ $cate->icon }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Show
                                                                                ở trang chủ</label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <div id="show-true" class="btn-group"
                                                                                    data-toggle="buttons">
                                                                                    <label class="btn btn-primary"
                                                                                        data-toggle-class="btn-primary">
                                                                                        <input type="radio"
                                                                                            name="show_in_slide"
                                                                                            value="true"
                                                                                            class="join-btn">
                                                                                        &nbsp;
                                                                                        Có &nbsp;
                                                                                    </label>
                                                                                    <label class="btn btn-secondary"
                                                                                        data-toggle-class="btn-primary"
                                                                                        data-toggle-passive-class="btn-default">
                                                                                        <input type="radio"
                                                                                            name="show_in_slide"
                                                                                            value="false"
                                                                                            class="join-btn">
                                                                                        Không
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-category"
                                                                        data-id="{{ $cate->id }}">Chỉnh
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
