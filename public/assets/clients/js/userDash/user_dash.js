    $(document).ready(function() {

        // -----------------------------------------------------------------------

        // 6 thanh điều hướng li
        $('.nav-link-section').on('click', function(e) {
            e.preventDefault();
            $('.nav-link-section').removeClass('active');
            $(this).addClass('active');
            var section = $(this).data('section');
            if (section === 'logout') {
                $('#logoutModal').modal('show');
            } else {
                $('.content-section').removeClass('active-section');
                $('#' + section).addClass('active-section');
            }
        });
        $('.nav-link-section[data-section="info"]').addClass('active');
        $('#info').addClass('active-section');

        // -----------------------------------------------------------------------

        $('.a-tab-child').on('click', function(e) {
            e.preventDefault();
            $('.a-tab-child').removeClass('active');
            $(this).addClass('active');
            var data = $(this).data('tab-status');
            $('.tab-not-show').removeClass('active-tab')
            $('#orders-' + data).addClass('active-tab');
        });
        $('.a-tab-child[data-tab-status="all"]').addClass('active');
        $('#orders-all').addClass('active-tab');

        // đăng xuất
        $(".btn-confirm-logout").on("click", function() {
            $("#logout-form").submit(); // Gửi form đăng xuất
        });

        $('.requestToDestroy').on('click', function(e) {
            e.preventDefault();
            let orderId = $(this).data('order-id');
            $('#order_id_input').val(orderId);
            $('#deleteModal').modal('show');
            console.log(orderId);
        });

        $(document).on('submit', '.cancelOrderForm', function(e) {
            e.preventDefault();
            let form = $(this);
            let endpoint = $(this).data('endpoint');
            $.ajax({
                url: endpoint,
                type: "POST",
                data: form.serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    toastr.success("Yêu cầu hủy đơn đã được gửi!");
                    $('#deleteModal').modal('hide');
                    setTimeout(() => location.reload(), 1500);
                },
                error: function(err) {
                    toastr.error("Có lỗi xảy ra, vui lòng thử lại!");
                }
            });
        });

        $(document).on('click', '.viewOrder', function(e) {
            e.preventDefault();

            let items = $(this).data('items') || [];
            let coupon = $(this).data('coupon') || null;
            let tbody = $('#orderItemsBody');
            let couponP = $('#coupon-for-order');
            tbody.empty();

            if (Array.isArray(items) && items.length > 0) {
                items.forEach(item => {
                    const productName = item.product.name
                    const totalPrice = Number(item.total_price) ? Number(item.total_price)
                        .toLocaleString('vi-VN', {
                            style: 'currency',
                            currency: 'VND'
                        }) : '0₫';

                    tbody.append(`
                        <tr>
                            <td>${productName}</td>
                            <td>${item.quantity || 0}</td>
                            <td>${totalPrice}</td>
                        </tr>
                    `);
                });
                if(coupon)
                    couponP.text('Giảm giá từ voucher: ' + coupon + 'đ');
            } else {
                tbody.append(`
                    <tr>
                        <td colspan="3" class="text-center">Không có sản phẩm nào trong đơn hàng.</td>
                    </tr>
                `);
            }
            $('#orderDetailModal').modal('show');
        });

        $(document).on('click', '.requestToReview', function(e){
            e.preventDefault();
            let productId = $(this).data('product-id');
            let orderItem = $(this).data('order-item');
            $('#product_id_input').val(productId);
            $('#order_item_input').val(orderItem);
        });

        $('#reviewForm').on('submit', function(e){
            e.preventDefault();
            let order_item = $(this).find('input[name="order_item"]').val();
            let endpoint = $(this).data('endpoint');
            $.ajax({
                url: endpoint,
                type: 'POST',
                data: $(this).serialize(),
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res){
                    if(res.success)
                    {
                        toastr.success('Đánh giá đã được gửi, cảm ơn quý khách rất nhiều!');
                        $('#requestToReview-' + order_item).remove();
                    }
                    else
                    {
                        toastr.error('Có lỗi xảy ra, vui lòng thử lại!');
                    }
                    $('#reviewModal').modal('hide');
                    $('#td-'+order_item).html('Đã đánh giá')
                },
                error: function(xhr, status, error){
                    alert("An error occurred" + error);
                },
            });
        })

        $('#ratingStars .star').on('click', function(){
            let value = $(this).data('value');
            $('#rating_star_input').val(value);
            $('#ratingStars .star').removeClass('text-warning');
            $('#ratingStars .star').each(function(){
                if($(this).data('value') <= value)
                    $(this).addClass('text-warning');
            });
        });

        const $daySelect = $("#dob-day");
        const $monthSelect = $("#dob-month");
        const $yearSelect = $("#dob-year");

        function updateDays() {
            const selectedDay = parseInt($daySelect.val());
            const month = parseInt($monthSelect.val());
            const year = parseInt($yearSelect.val());
            let daysInMonth = 31;

            if (month && year) {
                daysInMonth = new Date(year, month, 0).getDate();
            }
            let currentDay = selectedDay;
            if (selectedDay > daysInMonth) {
                currentDay = "";
            }

            $daySelect.empty().append('<option value="">Ngày</option>');

            for (let i = 1; i <= daysInMonth; i++) {
                const isSelected = currentDay === i ? 'selected' : '';
                $daySelect.append(`<option value="${i}" ${isSelected}>${i}</option>`);
            }
        }

        $monthSelect.on("change", updateDays);
        $yearSelect.on("change", updateDays);
        updateDays();

        const $province = $("#province");
        const $district = $("#district");
        const $ward = $("#ward");
        const $street = $("#street");
        const $fullAddress = $("#full_address");
        const $form = $(".address-form");

        $.get("https://provinces.open-api.vn/api/p/", function(provinces) {
            provinces.forEach(function(p) {
                $province.append(
                    `<option value="${p.code}" data-name="${p.name}">${p.name}</option>`);
            });
        });

        $province.on("change", function() {
            $district.html('<option value="">Chọn Quận/Huyện</option>');
            $ward.html('<option value="">Chọn Xã/Phường</option>');
            if ($(this).val()) {
                $.get(`https://provinces.open-api.vn/api/p/${$(this).val()}?depth=2`, function(data) {
                    data.districts.forEach(function(d) {
                        $district.append(
                            `<option value="${d.code}" data-name="${d.name}">${d.name}</option>`
                        );
                    });
                });
            }
        });

        $district.on("change", function() {
            $ward.html('<option value="">Chọn Xã/Phường</option>');
            if ($(this).val()) {
                $.get(`https://provinces.open-api.vn/api/d/${$(this).val()}?depth=2`, function(data) {
                    data.wards.forEach(function(w) {
                        $ward.append(
                            `<option value="${w.code}" data-name="${w.name}">${w.name}</option>`
                        );
                    });
                });
            }
        });

        $form.on("submit", function() {
            const street = $street.val().trim();
            const province = $province.find(":selected").data("name") || "";
            const district = $district.find(":selected").data("name") || "";
            const ward = $ward.find(":selected").data("name") || "";

            $fullAddress.val(`${street}, ${ward}, ${district}, ${province}`);
        });
    });
