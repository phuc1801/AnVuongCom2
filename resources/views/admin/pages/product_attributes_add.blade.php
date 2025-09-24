@extends('admin.layouts.admin')

@section('title', 'Add product attribute')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tạo thuộc tính sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thêm thuộc tính sản phẩm mới <small><i class="fa fa-clone"></i></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form action="{{ route('admin.attribute_product-addNew') }}" id="add_product_attribute"
                                method="POST" class="form-horizontal form-label-left">
                                @csrf

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_id">Tên
                                        sản phẩm
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select id="product_id" name="product_id" class="form-control" required>
                                            <option value="">-- Chọn sản phẩm --</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="attribute_id">Tên
                                        thuộc
                                        tính
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select id="attribute_id" name="attribute_id" class="form-control" required>
                                            <option value="">-- Chọn sản phẩm trước --</option>
                                        </select>
                                        @error('attribute_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="value" class="col-form-label col-md-3 col-sm-3 label-align">Giá
                                        trị
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="value" class="form-control" type="text" name="value" required>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="short_value" class="col-form-label col-md-3 col-sm-3 label-align">Giá trị
                                        ngắn
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="short_value" class="form-control" type="text" name="short_value"
                                            required>
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
