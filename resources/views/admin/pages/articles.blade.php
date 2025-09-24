@extends('admin.layouts.admin')

@section('title', 'Articles')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách bài viết</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin bài viết <small>Hiện đang có: <span
                                        style="color: red">{{ $articles->count() }}</span>
                                    bài viết</small></h2>
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
                                            Trang quản lý bài viết cho phép admin tạo, chỉnh sửa và xóa các bài viết. Dữ
                                            liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive" cellspacing="0"
                                            width="100%" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Ảnh đại diện</th>
                                                    <th>Nội dung</th>
                                                    <th>Thể loại</th>
                                                    <th>Tác giả</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($articles as $article)
                                                    <tr id="article-row-{{ $article->id }}">
                                                        <td>{{ $article->id }}</td>
                                                        <td style="max-width: 300px;">{{ $article->title }}</td>
                                                        <td><img style="width: 120px" src="{{ $article->image_url }}"
                                                                alt=""></td>
                                                        <td style="max-width: 400px">{{ $article->content }}</td>
                                                        <td>{{ $article->type === 0 ? 'Bài viết' : 'Voucher' }}</td>
                                                        <td>{{ $article->user->name }}</td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-article text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#articleModal-{{ $article->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-article text-center text-danger"
                                                                data-id="{{ $article->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="articleModal-{{ $article->id }}"
                                                        tabindex="-1" aria-labelledby="articleModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="articleModalTitle">Chỉnh
                                                                        sửa {{ $article->title }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_article_{{ $article->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="title">Tiêu đề
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <input type="text" id="title"
                                                                                    name="title" required="required"
                                                                                    class="form-control"
                                                                                    value="{{ $article->title }}">
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label for="content"
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Nội
                                                                                dung</label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <textarea id="content" class="form-control" name="content" rows="4">{{ $article->content }}</textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align">Thể
                                                                                loại
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <div id="show-true" class="btn-group"
                                                                                    data-toggle="buttons">
                                                                                    <label class="btn btn-primary"
                                                                                        data-toggle-class="btn-primary">
                                                                                        <input type="radio" name="type"
                                                                                            value="false"
                                                                                            {{ $article->type ? '' : 'checked' }}>
                                                                                        Bài viết
                                                                                    </label>
                                                                                    <label class="btn btn-secondary"
                                                                                        data-toggle-class="btn-primary"
                                                                                        data-toggle-passive-class="btn-default">
                                                                                        <input type="radio" name="type"
                                                                                            value="true"
                                                                                            {{ $article->type ? 'checked' : '' }}>
                                                                                        Mã giảm giá
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
                                                                        class="btn btn-primary btn-update-submit-article"
                                                                        data-id="{{ $article->id }}">Chỉnh
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
