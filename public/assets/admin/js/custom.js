$(document).ready(function(){

    $('.display_order').on('input', function() {
        let value = this.value;
        value = value.replace(/[^0-9]/g, '');
        value = Math.max(0, Math.min(1000, value));
        this.value = value;
    });

    $('.btn_reset').on('click',function(){
        let form = $(this).closest('form');
        form.trigger('reset');
        form.find('input[type="file"]').val('');
        form.find('#image-preview').attr('src','');
        form.find('#image-preview-container').html('<img src="" alt="Ảnh minh họa">');
    });

    // users

    $(document).on('click','.changeStatus',function(e){
        let button = $(this);
        let status = button.data('status');
        let statusNow = button.data('status-now');
        let userId = button.data('user-id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $.ajax({
            url: 'user/update-status',
            type: 'POST',
            data: {
                'status': status,
                'userId': userId,
            },
            success: function(res){
                if(res.success)
                {
                    switch(statusNow){
                        case 'banned':
                            button.text('Đã bỏ chặn');
                            toastr.success('Đã bỏ chặn người dùng. Vui lòng nhấn f5 hoặc reload trang để làm mới dữ liệu!');
                            break;
                        case 'deleted':
                            button.text('Đã khôi phục');
                            button.closest('.div_button_status').find('.hide-button').show();
                            toastr.success('Đã khôi phục người dùng. Vui lòng nhấn f5 hoặc reload trang để làm mới dữ liệu!');
                            break;
                        case 'active':
                            button.text('Đã chặn');
                            toastr.success('Đã chặn người dùng. Vui lòng nhấn f5 hoặc reload trang để làm mới dữ liệu!');
                            break;
                        default:
                            button.text('Đã xóa');
                            button.closest('.div_button_status').find('.hide-button').hide();
                            toastr.success('Đã xóa người dùng. Vui lòng nhấn f5 hoặc reload trang để làm mới dữ liệu!');
                    }
                    toastr.success(res.message);
                    button.addClass('disabled').prop('disabled', true);
                    setTimeout(function () {
                        button.fadeOut();
                    }, 3000);
                }
            },
        });
    });

    $('.show-form-pass').on('click', function(e){
        e.preventDefault();
        $('#update-profile-pass').toggle();
        if($('#update-profile-pass').is(':visible'))
        {
            $(this).text('Đóng');
        }
        else
        {
            $(this).text('Đổi mật khẩu');
        }
    });

    $('.update-avatar').on('click', function(e){
        e.preventDefault();
        $('#avatar').trigger('click');
    });

    $('#avatar').on('change', function(e){
        let file = e.target.files[0];
        if(file)
        {
            let reader = new FileReader();
            reader.onload = function(e){
                $('#avatar-preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
            let form = new FormData();
            form.append('avatar', file);

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                }
            });

            $.ajax({
                url: 'profile/update-avatar',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res){
                    if(res.success){
                        toastr.success(res.message);
                    }else{
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("An error occurred" + error);
                },
            });
        }
        else{
            $('#avatar-preview').attr('src', '');
        }
    });

    $('#update-profile').on('submit',function(e){
        e.preventDefault();
        let form = $(this)[0];
        let formData = new FormData(form);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $.ajax({
            url: 'profile/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res){
                if(res.success){
                    toastr.success(res.message);

                    $('#name').val(res.data.name);
                    $('#email').val(res.data.email);
                    $('#phone').val(res.data.phone);
                    $('#address').val(res.data.address);
                    $('.li-address').text(res.data.address);
                    $('.li-email').text(res.data.phone);
                    $('.h-name').text(res.data.name);
                }else{
                    toastr.error(res.message);
                }
            },
            error: function(xhr){
                if(xhr.status === 422){
                    let errors = xhr.responseJSON.errors;
                    for (let key in errors){
                        toastr.error(errors[key][0]);
                    }
                }else{
                    toastr.error("Đã có lỗi xảy ra!");
                }
            },
        });

    });

    $('#update-profile-pass').on('submit',function(e){
        e.preventDefault();
        let form = $(this)[0];
        let formData = new FormData(form);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $.ajax({
            url: 'profile/update-pass',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res){
                if(res.success){
                    toastr.success(res.message);
                    $('#update-profile-pass button[type="reset"]').click();
                }else{
                    toastr.error(res.message);
                }
            },
            error: function(xhr){
                if(xhr.status === 422){
                    let errors = xhr.responseJSON.errors;
                    for (let key in errors){
                        toastr.error(errors[key][0]);
                    }
                }else{
                    toastr.error("Đã có lỗi xảy ra!");
                }
            },
        });
    });

    $(document).on('click','.btn-update-submit-category',function(e){
        e.preventDefault();
        let button = $(this);
        let categoryId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('category_id',categoryId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'category/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    console.log(res.data);
                    toastr.success(res.message);
                    let category_id = res.data.id;
                    $("#categoryModal-" + category_id).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-category',function(e){
        e.preventDefault();
        let button = $(this);
        let categoryId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa danh mục này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'category/delete-old',
                type: 'POST',
                data: {
                    'category_id': categoryId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management products
    --------------------------------------------------*/

    $('#product-images').change(function(e){
        let files = this.files;
        // console.log(files);
        let previewContainer = $('#image-preview-container');
        previewContainer.empty();

        if(files.length > 0){
            for(let i=0;i<files.length;i++)
            {
                let file = files[i];
                if(file)
                {
                    let reader = new FileReader();
                    reader.onload = function(e){
                        let img = $("<img>").attr('src', e.target.result).addClass('image-preview');
                        previewContainer.append(img);
                    };
                    reader.readAsDataURL(file);
                }
            }
        }
        else{
            previewContainer.html('');
        }
    });

    $(document).on('click','.btn-update-submit-product',function(e){
        e.preventDefault();
        let button = $(this);
        let productId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('product_id',productId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $.ajax({
            url: 'product/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let product_id = res.data.id;
                    $("#productModal-" + product_id).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-product',function(e){
        e.preventDefault();
        let button = $(this);
        let productId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa sản phẩm này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'product/delete-old',
                type: 'POST',
                data: {
                    'product_id': productId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management product images
    --------------------------------------------------*/

    $('#product-image-one').change(function(){
        let file = this.files[0];
        if(file){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#image-preview').attr('src',e.target.result);
            }
            reader.readAsDataURL(file);
        }
        else{
            $('#image-preview').attr('src','');
        }
    });

    $('.product-image-one').change(function(){
        let file = this.files[0];
        let imageId = $(this).data('id');
        if(file){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#productImageModal-' + imageId).find('.image-preview').attr('src',e.target.result);
            };
            reader.readAsDataURL(file);
        }
        else{
                $('#productImageModal-' + imageId).find('.image-preview').attr('src',e.target.result);
        }
    });

    $(document).on('click','.btn-update-submit-product-image',function(e){
        e.preventDefault();
        let button = $(this);
        let imageId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('image_id',imageId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $.ajax({
            url: 'product-image/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let imageId = res.data.id;
                    $("#productImageModal-" + imageId).modal("hide");
                    location.reload();


                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr){
                toastr.error("Đã có lỗi xảy ra!");
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-product-image',function(e){
        e.preventDefault();
        let button = $(this);
        let imageId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa sản phẩm này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'product-image/delete-old',
                type: 'POST',
                data: {
                    'image_id': imageId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management product serials
    --------------------------------------------------*/

    $(document).on('click','.btn-update-submit-product-serial',function(e){
        e.preventDefault();
        let button = $(this);
        let serialId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('serial_id',serialId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $.ajax({
            url: 'product-serial/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let serialId = res.data.id;
                    $("#productSerialModal-" + serialId).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr){
                toastr.error("Đã có lỗi xảy ra!");
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-product-serial',function(e){
        e.preventDefault();
        let button = $(this);
        let serialId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa sản phẩm này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'product-serial/delete-old',
                type: 'POST',
                data: {
                    'serial_id': serialId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management product reviews
    --------------------------------------------------*/

    $(document).on('click','.btn-update-submit-product-review',function(e){
        e.preventDefault();
        let button = $(this);
        let reviewId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('review_id',reviewId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $.ajax({
            url: 'product-review/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let serialId = res.data.id;
                    $("#productReviewModal-" + reviewId).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr){
                toastr.error("Đã có lỗi xảy ra!");
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-product-review',function(e){
        e.preventDefault();
        let button = $(this);
        let reviewId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa sản phẩm này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'product-review/delete-old',
                type: 'POST',
                data: {
                    'review_id': reviewId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management galleries
    --------------------------------------------------*/

    $('#gallery-image').change(function(){
        let file = this.files[0];
        if(file){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#image-preview').attr('src',e.target.result);
            }
            reader.readAsDataURL(file);
        }
        else{
            $('#image-preview').attr('src','');
        }
    });

    $('.gallery-image').change(function(){
        let file = this.files[0];
        let galleryId = $(this).data('id');
        if(file){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#galleryModal-' + galleryId).find('.image-preview').attr('src',e.target.result);
            };
            reader.readAsDataURL(file);
        }
        else{
                $('#galleryModal-' + galleryId).find('.image-preview').attr('src',e.target.result);
        }
    });

    $(document).on('click','.btn-update-submit-gallery',function(e){
        e.preventDefault();
        let button = $(this);
        let galleryId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('gallery_id', galleryId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'gallery/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let gallery_id = res.data.id;
                    $("#galleryModal-" + gallery_id).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-gallery',function(e){
        e.preventDefault();
        let button = $(this);
        let galleryId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa danh mục này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'gallery/delete-old',
                type: 'POST',
                data: {
                    'gallery_id': galleryId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management orders
    --------------------------------------------------*/

    $(document).on('click','.confirm-order',function(e){
        e.preventDefault();
        let button = $(this);
        let orderId = button.data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'order/confirm-order',
            type: 'POST',
            data: {
                'order_id' : orderId,
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    button.closest('tr').find('.order-status').html(
                        `<span class="badge badge-secondary badge-pill p-2"><i class="fa fa-cog fa-spin mr-1"></i>Đang xử lý</span>`
                    );
                    button.closest('tr').find('.button-thao-tac').html(
                        `<div class="btn-group button-thao-tac">
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" style="padding: 5px; height: 24px;width: 24px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item cancelled-order" href="javascript:void(0)" data-id="${res.data.id}">Hủy đơn</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item shipping-order"
                                    href="javascript:void(0)"
                                    data-id="${res.data.id}">Giao
                                    đơn</a>
                                <a class="dropdown-item" target="_blank" href="/order/detail/${res.data.id}">Xem chi tiết</a>
                            </div>
                        </div>`
                    );
                    button.hide();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
        });
    });

    $(document).on('click','.shipping-order',function(e){
        e.preventDefault();
        let button = $(this);
        let orderId = button.data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'order/shipping-order',
            type: 'POST',
            data: {
                'order_id' : orderId,
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    button.closest('tr').find('.order-status').html(
                        `<span class="badge badge-info badge-pill p-2"><i class="fa fa-truck mr-1"></i>Đang vận chuyển</span>`
                    );
                    button.closest('tr').find('.button-thao-tac').html(
                        `<div class="btn-group button-thao-tac">
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" style="padding: 5px; height: 24px;width: 24px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item cancelled-order" href="javascript:void(0)" data-id="${res.data.id}">Hủy đơn</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item completed-order"
                                    href="javascript:void(0)"
                                    data-id="${res.data.id}">Hoàn thành</a>
                                <a class="dropdown-item" target="_blank" href="/order/detail/${res.data.id}">Xem chi tiết</a>
                            </div>
                        </div>`
                    );
                    button.hide();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
        });
    });

    $(document).on('click','.completed-order',function(e){
        e.preventDefault();
        let button = $(this);
        let orderId = button.data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'order/completed-order',
            type: 'POST',
            data: {
                'order_id' : orderId,
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    button.closest('tr').find('.order-status').html(
                        `<span class="badge badge-success badge-pill p-2"><i class="fa fa-check mr-1"></i>Đã xong</span>`
                    );
                    button.closest('tr').find('.button-thao-tac').html(
                        `<div class="btn-group button-thao-tac">
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" style="padding: 5px; height: 24px;width: 24px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" target="_blank" href="/order/detail/${res.data.id}">Xem chi tiết</a>
                            </div>
                        </div>`
                    );
                    button.hide();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
        });
    });

    $(document).on('click','.cancelled-order',function(e){
        e.preventDefault();
        let button = $(this);
        let orderId = button.data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'order/cancelled-order',
            type: 'POST',
            data: {
                'order_id' : orderId,
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    button.closest('tr').find('.order-status').html(
                        `<span class="badge badge-danger badge-pill p-2"><i class="fa fa-times mr-1"></i>Đã hủy</span>`
                    );
                    button.closest('tr').find('.button-thao-tac').html(
                        `<div class="btn-group button-thao-tac">
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" style="padding: 5px; height: 24px;width: 24px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" target="_blank" href="/order/detail/${res.data.id}">Xem chi tiết</a>
                            </div>
                        </div>`
                    );
                    button.hide();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
        });
    });

    $(document).on('click', '.send-invoice-email', function(e){
        e.preventDefault();
        let button = $(this);
        let orderId = button.data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'send-invoice',
            type: 'POST',
            data: {
                'order_id' : orderId,
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occured: " + error);
            }
        });
    });

    /* -------------------------------------------------
                    Management payments
    --------------------------------------------------*/

    $(document).on('click','.btn-update-submit-payment',function(e){
        e.preventDefault();
        let button = $(this);
        let paymentId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('payment_id', paymentId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'payment/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let payment_id = res.data.id;
                    $("#paymentModal-" + payment_id).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
        });
    });

    /* -------------------------------------------------
                    Management contacts
    --------------------------------------------------*/

    if($('#editor-contact').length){
        CKEDITOR.replace('editor-contact');
    }

    $(document).on('click', '.contact-item', function(e){
        let name = $(this).data('name');
        let email = $(this).data('email');
        let id = $(this).data('id');
        let message = $(this).data('message');
        let reply = $(this).data('is-replied')

        $('.mail_view .inbox-body .sender-info strong').text(name);
        $('.mail_view .inbox-body .sender-info .email-text').text(email);
        $('.mail_view .view-mail p').text(message);

        if(reply)
        {
            $('#compose').hide();
        }
        else
        {
            $('.send-reply-contact').attr('data-email', email);
            $('.send-reply-contact').attr('data-id', id);
            $('#compose').show();
        }

        $('.mail_view').show();
    });

    $(document).on('click', '.send-reply-contact', function(e){
        e.preventDefault();
        let button = $(this);
        let email = button.data('email');
        let id = button.data('id');
        let message = CKEDITOR.instances['editor-contact'].getData();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'contact/reply',
            type: 'POST',
            data: {
                'id' : id,
                'email' : email,
                'message' : message,
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    $('.mail_view').hide();
                    $('#compose').hide();
                    CKEDITOR.instances['editor-contact'].setData('');
                    $('.compose').slideToggle();
                    let contactItem = $('.contact-item[data-id="'+id+'"]');
                    contactItem.data('is-replied', '1');
                    contactItem.find('i.fa-circle').css('color','green');

                    button.removeAttr('data-email').removeAttr('data-id');
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occured: " + error);
            }
        });
    });

    /* -------------------------------------------------
                    Management articles
    --------------------------------------------------*/

    $('#article-images').change(function(e){
        let files = this.files;
        // console.log(files);
        let previewContainer = $('#image-preview-container');
        previewContainer.empty();

        if(files.length > 0){
            for(let i=0;i<files.length;i++)
            {
                let file = files[i];
                if(file)
                {
                    let reader = new FileReader();
                    reader.onload = function(e){
                        let img = $("<img>").attr('src', e.target.result).addClass('image-preview');
                        previewContainer.append(img);
                    };
                    reader.readAsDataURL(file);
                }
            }
        }
        else{
            previewContainer.html('');
        }
    });

    $(document).on('click','.btn-update-submit-article',function(e){
        e.preventDefault();
        let button = $(this);
        let articleId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('article_id', articleId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'article/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let article_id = res.data.id;
                    $("#articleModal-" + article_id).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-article',function(e){
        e.preventDefault();
        let button = $(this);
        let articleId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa danh mục này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'article/delete-old',
                type: 'POST',
                data: {
                    'article_id': articleId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management vouchers
    --------------------------------------------------*/

    $(document).on('click','.btn-update-submit-voucher',function(e){
        e.preventDefault();
        let button = $(this);
        let voucherId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('voucher_id',voucherId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'voucher/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let voucherId = res.data.id;
                    $("#voucherModal-" + voucherId).modal("hide");
                    location.reload();

                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-voucher',function(e){
        e.preventDefault();
        let button = $(this);
        let voucherId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa sản phẩm này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'voucher/delete-old',
                type: 'POST',
                data: {
                    'voucher_id': voucherId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();
                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management attributes
    --------------------------------------------------*/

    $(document).on('click','.btn-update-submit-attribute',function(e){
        e.preventDefault();
        let button = $(this);
        let attributeId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('attribute_id',attributeId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'attribute/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let attributeId = res.data.id;
                    $("#attributeModal-" + attributeId).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-attribute',function(e){
        e.preventDefault();
        let button = $(this);
        let attributeId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa thuộc tính này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'attribute/delete-old',
                type: 'POST',
                data: {
                    'attribute_id': attributeId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();

                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    /* -------------------------------------------------
                    Management category_attributes
    --------------------------------------------------*/

    $(document).on('click','.btn-update-submit-category-attribute',function(e){
        e.preventDefault();
        let button = $(this);
        let cate_attriId = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('category_attribute_id',cate_attriId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'attribute_category/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let cate_attriId = res.data.id;
                    $("#categoryAttributeModal-" + cate_attriId).modal("hide");
                    location.reload();

                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr, status, error){
                alert("An error occurred" + error);
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-category-attribute',function(e){
        e.preventDefault();
        let button = $(this);
        let cate_attriId = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa thuộc tính này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'attribute_category/delete-old',
                type: 'POST',
                data: {
                    'category_attribute_id': cate_attriId,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();

                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

/* -------------------------------------------------
                    Management product_attributes
    --------------------------------------------------*/

    $(document).on('click','.btn-update-submit-product-attribute',function(e){
        e.preventDefault();
        let button = $(this);
        let pro_attr = button.data('id');
        let form = button.closest('.modal').find('form');
        let formData = new FormData(form[0]);
        formData.append('product_attribute_id',pro_attr);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "X-Requested-With": "XMLHttpRequest"
            }
        });
        $.ajax({
            url: 'attribute_product/update-old',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function(){
                button.prop('disabled',true);
                button.text('Đang cập nhật...')
            },
            success: function(res){
                if(res.success)
                {
                    toastr.success(res.message);
                    let pro_attr = res.data.id;
                    $("#productAttributeModal-" + pro_attr).modal("hide");
                    location.reload();
                }
                else
                {
                    toastr.error(res.message);
                }
            },
            error: function(xhr){
                toastr.error("Đã có lỗi xảy ra!");
            },
            complete: function(){
                button.prop('disabled', false);
                button.text('Chỉnh sửa');
            }
        });
    });

    $(document).on('click','.btn-delete-product-attribute',function(e){
        e.preventDefault();
        let button = $(this);
        let pro_attr = button.data('id');
        let rowRemove = button.closest('tr');
        if(confirm("Bạn có chắc muốn xóa thuộc tính này?"))
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'attribute_product/delete-old',
                type: 'POST',
                data: {
                    'product_attribute_id': pro_attr,
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success(res.message);
                        location.reload();

                    }
                    else
                    {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr, status, error){
                    alert("Có lỗi xảy ra, vui lòng thử lại: " + error);
                }
            });
        }
    });

    $('#product_id').on('change', function() {
        let productId = $(this).val();
        $.ajax({
            url: productId + '/attributes',
            method: 'GET',
            success: function(data) {
                let attributeSelect = $('#attribute_id');
                attributeSelect.empty();
                for (let i = 0; i < data.length; i++) {
                    let attr = data[i];
                    attributeSelect.append(`<option value="${attr.id}">${attr.name}</option>`);
                }
            }
        });
    });

});
