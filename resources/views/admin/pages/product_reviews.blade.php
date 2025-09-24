@extends('admin.layouts.admin')

@section('title', 'Review products')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách đánh giá sản phẩm</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông tin đánh giá sản phẩm <small>Hiện đang có: <span
                                        style="color: red">{{ $reviews->count() }}</span>
                                    đánh giá</small></h2>
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
                                            Trang quản lý đánh giá sản phẩm cho phép admin chỉnh sửa và xóa các đánh giá
                                            sản
                                            phẩm. Dữ liệu được tổ chức dưới dạng bảng.
                                        </p>
                                        <table id="datatable-responsive"
                                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%" style="text-align: center"">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Người dùng</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Đánh giá</th>
                                                    <th>Nội dung</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($reviews as $review)
                                                    <tr id="productReview-row-{{ $review->id }}">
                                                        <td>{{ $review->id }}</td>
                                                        <td style="width:250px">{{ $review->user->name }}</td>
                                                        <td style="width:250px;">{{ $review->product->name }}</td>
                                                        <td>{{ $review->rating }}</td>
                                                        <td style="width:400px">{{ $review->comment }}</td>
                                                        <td>{{ $review->status ? 'Hiện' : 'Ẩn' }}
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-app btn-update-product-review text-center text-success"
                                                                data-toggle="modal"
                                                                data-target="#productReviewModal-{{ $review->id }}"><i
                                                                    class="fa fa-edit"></i> Chỉnh
                                                                sửa</a>
                                                            <a class="btn btn-app btn-delete-product-review text-center text-danger"
                                                                data-id="{{ $review->id }}"><i class="fa fa-trash"></i>
                                                                Xóa</a>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="productReviewModal-{{ $review->id }}"
                                                        tabindex="-1" aria-labelledby="productReviewModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="productReviewModalTitle">
                                                                        Chỉnh
                                                                        sửa trang thái đánh giá của
                                                                        {{ $review->product->name }}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"> <span
                                                                            aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="update_product_review_{{ $review->id }}"
                                                                        method="POST"
                                                                        class="form-horizontal form-label-left">
                                                                        @csrf

                                                                        <div class="item form-group">
                                                                            <label
                                                                                class="col-form-label col-md-4 col-sm-4 label-align"
                                                                                for="status">Trạng thái đánh giá
                                                                                <span class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-8 col-sm-8 ">
                                                                                <div id="show-true" class="btn-group"
                                                                                    data-toggle="buttons">
                                                                                    <label class="btn btn-primary"
                                                                                        data-toggle-class="btn-primary">
                                                                                        <input type="radio" name="status"
                                                                                            value="true"
                                                                                            {{ $review->status ? 'checked' : '' }}>
                                                                                        Hiện
                                                                                    </label>
                                                                                    <label class="btn btn-secondary"
                                                                                        data-toggle-class="btn-primary"
                                                                                        data-toggle-passive-class="btn-default">
                                                                                        <input type="radio" name="status"
                                                                                            value="false"
                                                                                            {{ $review->status ? '' : 'checked' }}>
                                                                                        Ẩn
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
                                                                        class="btn btn-primary btn-update-submit-product-review"
                                                                        data-id="{{ $review->id }}">Chỉnh
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
