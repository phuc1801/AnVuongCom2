@extends('admin.layouts.admin')

@section('title', 'Admin profile')

@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tài khoản</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-3 col-sm-3  profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive" id="avatar-preview" src="{{ $user->image_url }}"
                                            alt="Avatar" style="width: 250px;border-radius: 5px">
                                    </div>
                                    <form action="" enctype="multipart/form-data">
                                        <input type="file" id="avatar" name="avatar" accept="image/*"
                                            class="cant-see-image">
                                        <a href="javascript:void(0)" class="btn btn-success update-avatar"
                                            style="margin: 10px 5px">
                                            <i class="fa fa-edit m-right-xs"></i> Đổi ảnh
                                        </a>
                                    </form>
                                </div>
                                <h3 class="h-name">{{ $user->name }}</h3>

                                <ul class="list-unstyled user_data">
                                    <li class="li-address"><i class="fa fa-map-marker user-profile-icon"></i>
                                        {{ $user->address }}
                                    </li>

                                    <li class="li-email">
                                        <i class="fa fa-envelope user-profile-icon"></i> {{ $user->email }}
                                    </li>
                                    <li>
                                        <i class="fa fa-paper-plane user-profile-icon"></i> Chủ quầy
                                    </li>
                                </ul>
                                <button class="btn btn-warning show-form-pass">Đổi mật khẩu</button>
                            </div>
                            <div class="col-md-9 col-sm-9 ">

                                <form id="update-profile" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Họ và tên
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="name" required="required" class="form-control "
                                                name="name" value="{{ $user->name }}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="email" name="email" required="required"
                                                class="form-control" value="{{ $user->email }}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">SĐT
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="phone" name="phone" required="required"
                                                class="form-control" value="{{ $user->phone }}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Địa chỉ
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="address" name="address" required="required"
                                                class="form-control" value="{{ $user->address }}">
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>

                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>

                                <form id="update-profile-pass" data-parsley-validate class="form-horizontal form-label-left"
                                    style="display: none">

                                    <div class="ln_solid"></div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="current-password">Mật
                                            khẩu hiện tại
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="password" id="current-password" required="required"
                                                class="form-control " name="current_password">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Mật
                                            khẩu mới
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="password" id="password" name="password" required="required"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="new-password">Nhập
                                            lại mật
                                            khẩu mới
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="password" id="new-password" name="password_confirmation"
                                                required="required" class="form-control">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Đổi mật khẩu</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
