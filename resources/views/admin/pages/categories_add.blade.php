@extends('admin.layouts.admin')

@section('title', 'Add category')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tạo danh mục</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thêm danh mục mới <small><i class="fa fa-clone"></i></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="{{ route('admin.category-addNew') }}" id="add_category" method="POST"
                                class="form-horizontal form-label-left">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="category-name">Tên danh
                                        mục
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="category-name" name="name" required="required"
                                            class="form-control" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug-name">Tên đường
                                        dẫn
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="slug-name" name="slug" required="required"
                                            class="form-control" value="{{ old('slug') }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="description-name" class="col-form-label col-md-3 col-sm-3 label-align">Mô
                                        tả</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="description-name" class="form-control" type="text" name="description"
                                            value="{{ old('description') }}">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="parent_id">
                                        Danh mục cha
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select id="parent_id" name="parent_id" class="form-control">
                                            <option value="">-- Không có --</option>
                                            @foreach ($cates as $cate)
                                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="icon-name" class="col-form-label col-md-3 col-sm-3 label-align">Biểu
                                        tượng</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="icon-name" class="form-control" type="text" name="icon">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Show ở trang chủ</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="show-true" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary">
                                                <input type="radio" name="show_in_slide" value="true" class="join-btn">
                                                &nbsp;
                                                Có &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary"
                                                data-toggle-passive-class="btn-default">
                                                <input type="radio" name="show_in_slide" value="false" class="join-btn">
                                                Không
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
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
