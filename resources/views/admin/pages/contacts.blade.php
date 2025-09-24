@extends('admin.layouts.admin')

@section('title', 'Contacts')

@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="page-title">
                <div class="title_left">
                    <h3>Liên hệ</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tại đây, bạn có thể xem và quả lý các thông tin liên lạc từ khách hàng, trả lời câu hỏi,
                                <br> và theo dõi các trao đổi để cải thiện dich vụ
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-3 mail_list_column" style="overflow-y: scroll;max-height: 500px;">
                                    <label for="" class="badge bg-green"
                                        style="width: 100%;line-height: 2;font-size: 16px">Liên hệ khách hàng</label>
                                    @foreach ($contacts as $contact)
                                        <a href="javascript:void(0)" class="contact-item" data-id="{{ $contact->id }}"
                                            data-name="{{ $contact->name }}" data-email="{{ $contact->email }}"
                                            data-message="{{ $contact->message }}"
                                            data-is-replied="{{ $contact->is_replied }}">
                                            <div class="mail_list">
                                                <div class="left">
                                                    <i class="fa fa-circle"
                                                        style="color: {{ $contact->is_replied ? 'green' : 'red' }}"></i>
                                                </div>
                                                <div class="right">
                                                    <h3>{{ $contact->name }}
                                                        <small>{{ $contact->created_at->format('h:i A d/m/Y') }}</small>
                                                    </h3>
                                                    <p>{{ Str::limit($contact->message, 50) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>

                                <div class="col-sm-9 mail_view" style="display: none">
                                    <div class="inbox-body">
                                        <div class="sender-info" style="border-bottom: 1px solid #ddd">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <strong class="name">Nguyễn Văn A</strong>
                                                    (<span class="email-text">vana@example.com</span>)
                                                    <span style="margin-left: 10px">to me</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view-mail">
                                            <p></p>
                                            <div class="btn-group">
                                                <button id="compose" class="btn btn-sm btn-primary" type="button"><i
                                                        class="fa fa-reply"></i> Trả lời</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="compose col-md-6  ">
        <div class="compose-header">
            Phản hồi liên hệ
            <button type="button" class="close compose-close">
                <span>×</span>
            </button>
        </div>

        <div class="compose-body">
            <div id="editor-contact" class="editor-wrapper" style="min-height: 150px"></div>
        </div>

        <div class="compose-footer">
            <button class="send-reply-contact btn btn-sm btn-success" type="button">Gửi</button>
        </div>
    </div>
@endsection
