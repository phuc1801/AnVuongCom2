@extends('admin.layouts.admin')

@section('title', 'Users')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Quản lý người dùng</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            @foreach ($users as $user)
                                <div class="col-md-4 col-sm-4  profile_details">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            <h4 class="brief text-capitalize"><i>{{ $user->role->name }}</i></h4>
                                            <div class="left col-md-7 col-sm-7">
                                                <h2>{{ $user->name }}</h2>
                                                <p><strong>Email: </strong> {{ $user->email }}
                                                </p>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-building"></i> Address:
                                                        {{ $user->address }}</li>
                                                    <li><i class="fa fa-phone"></i> Phone: <span>{{ $user->phone }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="right col-md-5 col-sm-5 text-center">
                                                <img src="{{ $user->image_url }}" alt="dai dien"
                                                    class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class="profile-bottom text-center">
                                            <div class=" col-sm-12 emphasis div_button_status">
                                                @if ($user->role->name === 'customer' && $user->status !== 'pending')
                                                    @if ($user->status !== 'banned' && $user->status !== 'deleted')
                                                        <button type="button"
                                                            class="btn btn-info btn-sm changeStatus hide-button"
                                                            data-status="banned" data-status-now="active"
                                                            data-user-id="{{ $user->id }}">
                                                            <i class="fa fa-user"> </i> Chặn
                                                        </button>
                                                    @elseif ($user->status === 'deleted')
                                                        <button type="button" class="btn btn-success btn-sm changeStatus"
                                                            data-status="active" data-status-now="deleted"
                                                            data-user-id="{{ $user->id }}">
                                                            <i class="fa fa-user"> </i> Khôi phục
                                                        </button>
                                                    @elseif ($user->status === 'banned')
                                                        <button type="button"
                                                            class="btn btn-success btn-sm changeStatus hide-button"
                                                            data-status="active" data-status-now="banned"
                                                            data-user-id="{{ $user->id }}">
                                                            <i class="fa fa-user"> </i> Bỏ chặn
                                                        </button>
                                                    @endif
                                                    @if ($user->status !== 'deleted')
                                                        <button type="button" class="btn btn-danger btn-sm changeStatus"
                                                            data-status="deleted" data-status-now="un-know"
                                                            data-user-id="{{ $user->id }}">
                                                            <i class="fa fa-user"> </i> Xóa
                                                        </button>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    {!! $users->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
