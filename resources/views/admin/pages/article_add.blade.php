@extends('admin.layouts.admin')

@section('title', 'Add article')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tạo bài viết</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thêm bài viết mới <small><i class="fa fa-clone"></i></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="{{ route('admin.article-addNew') }}" id="add_product" method="POST"
                                class="form-horizontal form-label-left" enctype="multipart/form-data">
                                @csrf

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Tiêu đề
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="title" name="title" required="required"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="content" class="col-form-label col-md-3 col-sm-3 label-align">Nội
                                        dung</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="content" class="form-control" type="text" name="content">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Thể loại</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="show-true" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary" data-toggle-class="btn-primary">
                                                <input type="radio" name="type" value="false" required>
                                                Bài viết
                                            </label>
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary"
                                                data-toggle-passive-class="btn-default">
                                                <input type="radio" name="type" value="true">
                                                Mã giảm giá
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="article-images" class="col-form-label col-md-3 col-sm-3 label-align">Hình
                                        ảnh <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <label class="custom-file-upload" for="article-images">Chọn ảnh</label>
                                        <input id="article-images" type="file" accept="image/*" name="images[]" multiple
                                            required="required" class="article-images custom cant-see-image">
                                        <div id="image-preview-container" class="image-preview-container"><img
                                                src="" alt="Ảnh minh họa">
                                        </div>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary btn_reset" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Thêm mới</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
