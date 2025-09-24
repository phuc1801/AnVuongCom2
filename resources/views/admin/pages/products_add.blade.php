@extends('admin.layouts.admin')

@section('title', 'Add product')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tạo sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thêm sản phẩm mới <small><i class="fa fa-clone"></i></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="{{ route('admin.product-addNew') }}" id="add_product" method="POST"
                                class="form-horizontal form-label-left" enctype="multipart/form-data">
                                @csrf

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="product-name">Tên sản
                                        phẩm
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="product-name" name="name" required="required"
                                            class="form-control" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="quantity">Số lượng
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="quantity" name="quantity" required="required"
                                            pattern="[0-9]+" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Trạng
                                        thái
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="status" name="status" required="required"
                                            class="form-control">
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
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Giá bán
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="price" name="price" required="required"
                                            pattern="[0-9]+" class="form-control" value="{{ old('price') }}">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="real-price">Giá gốc
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="real-price" name="real_price" required="required"
                                            pattern="[0-9]+" class="form-control" value="{{ old('real_price') }}">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="category_id">Tên danh
                                        mục
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select id="category_id" name="category_id" class="form-control"
                                            required="required">
                                            @foreach ($cates as $cate)
                                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="unit" class="col-form-label col-md-3 col-sm-3 label-align">Đơn
                                        vị
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="unit" class="form-control" type="text" name="unit"
                                            required="required">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Nổi bật <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="show-true" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary">
                                                <input type="radio" name="outline" value="true" class="join-btn">
                                                &nbsp;
                                                Có &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary"
                                                data-toggle-passive-class="btn-default">
                                                <input type="radio" name="outline" value="false" class="join-btn">
                                                Không
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Tên đường
                                        dẫn
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="slug" name="slug" required="required"
                                            class="form-control" value="{{ old('slug') }}">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="guarantee">Bảo hành
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="guarantee" name="guarantee" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="product-images" class="col-form-label col-md-3 col-sm-3 label-align">Hình
                                        ảnh <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <label class="custom-file-upload" for="product-images">Chọn ảnh</label>
                                        <input id="product-images" type="file" accept="image/*" name="images[]"
                                            multiple required="required" class="product-images custom cant-see-image">
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
