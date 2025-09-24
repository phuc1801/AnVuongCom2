@extends('admin.layouts.admin')

@section('title', 'Galleries')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách ảnh</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin danh sách <small>Hiện đang có: <span
                                        style="color: red">{{ $galleries->count() }}</span>
                                    ảnh</small></h2>
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
                                            Trang quản lý banner/slide cho phép admin tạo, chỉnh sửa và xóa các ảnh
                                            banner/slide. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width:100%; text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nội dung chính</th>
                                                    <th>Thể loại</th>
                                                    <th>Hoạt động</th>
                                                    <th>Thứ tự ưu tiên</th>
                                                    <th>Ảnh</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($galleries as $gal)
                                                    <tr id="gallery-row-{{ $gal->id }}">
                                                        <td>{{ $gal->id }}</td>
                                                        <td>{{ $gal->name }}</td>
                                                        <td>{{ $gal->type }}</td>
                                                        <td>{{ $gal->is_active === 1 ? 'Có' : 'Không' }}</td>
                                                        <td>{{ $gal->display_order }}</td>
                                                        <td>
                                                            <img src="{{ $gal->image_url }}" alt="minh hoa"
                                                                style="height: 80px;width: 150px;" class="image-gallery">
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-gallery text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#galleryModal-{{ $gal->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-gallery text-center text-danger"
                                                                data-id="{{ $gal->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="galleryModal-{{ $gal->id }}"
                                                        tabindex="-1" aria-labelledby="galleryModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="galleryModalTitle">Chỉnh
                                                                        sửa {{ $gal->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_gallery_{{ $gal->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="gallery-name">Nội dung chính
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="gallery-name"
                                                                                    name="name" class="form-control"
                                                                                    value="{{ $gal->name }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="type">
                                                                                Thể loại
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8">
                                                                                <select id="type" name="type"
                                                                                    class="form-control">
                                                                                    @php
                                                                                        $types = [
                                                                                            'slide',
                                                                                            'image_around_slide',
                                                                                            'banner',
                                                                                            'footer',
                                                                                            'left_banner',
                                                                                            'logo',
                                                                                            'right_banner',
                                                                                            'top_banner',
                                                                                        ];
                                                                                    @endphp
                                                                                    @foreach ($types as $type)
                                                                                        <option value="{{ $type }}"
                                                                                            {{ $gal->type !== $type ? '' : 'selected' }}>
                                                                                            {{ $type }}</option>
                                                                                    @endforeach

                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Hoạt
                                                                                động</label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <div id="show-true" class="btn-group"
                                                                                    data-toggle="buttons">
                                                                                    <label class="btn btn-primary"
                                                                                        data-toggle-class="btn-primary">
                                                                                        <input type="radio"
                                                                                            name="is_active" value="true"
                                                                                            {{ $gal->is_active ? 'checked' : '' }}>
                                                                                        Có
                                                                                    </label>
                                                                                    <label class="btn btn-secondary"
                                                                                        data-toggle-class="btn-primary"
                                                                                        data-toggle-passive-class="btn-default">
                                                                                        <input type="radio"
                                                                                            name="is_active" value="false"
                                                                                            {{ $gal->is_active ? '' : 'checked' }}>
                                                                                        Không
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label for="icon-name"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Thứ
                                                                                tự uu tiên</label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="number" class="display_order"
                                                                                    name="display_order" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $gal->display_order }}"
                                                                                    min="0" max="1000"
                                                                                    step="1">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="image-name">Ảnh
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <img src="{{ $gal->image_url }}"
                                                                                    alt="Ảnh xem trước" id="image-preview"
                                                                                    class="image-preview">
                                                                                <label
                                                                                    for="gallery-image-{{ $gal->id }}"
                                                                                    class="custom-file-upload">Chọn
                                                                                    ảnh</label>
                                                                                <input
                                                                                    id="gallery-image-{{ $gal->id }}"
                                                                                    class="gallery-image custom cant-see-image"
                                                                                    type="file" name="image"
                                                                                    accept="image/*"
                                                                                    data-id="{{ $gal->id }}">
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-update-submit-gallery"
                                                                        data-id="{{ $gal->id }}">Chỉnh
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
