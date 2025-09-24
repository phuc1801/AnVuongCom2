    $(document).ready(function() {
        $('#serialForm').on('submit', function(e) {
            e.preventDefault();

            let serial = $('#serialNumber').val();
            let captchaResponse = grecaptcha.getResponse();

            if (!serial) {
                toastr.error("Vui lòng nhập Serial Number.");
                return;
            }
            if (!captchaResponse) {
                toastr.error("Vui lòng xác nhận captcha.");
                return;
            }

            let route = $(this).data('route');
            $.ajax({
                url: route,
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        let infoHtml = '';
                        let endDate = new Date(response.data.end_at);
                        let formattedDate = endDate.toLocaleDateString(
                            'vi-VN');
                        if (response.data.is_valid) {
                            infoHtml = `
                                <p><strong>Thông tin sản phẩm:</strong></p>
                                <ul class="list-disc ml-5">
                                    <li><strong>Tên:</strong> ${response.data.product_name}</li>
                                    <li><strong>Bảo hành:</strong> Còn hiệu lực</li>
                                    <li><strong>Hết hạn bảo hành vào:</strong> ${formattedDate}</li>
                                </ul>`;
                        } else {
                            infoHtml = `
                                <p><strong>Thông tin sản phẩm:</strong></p>
                                <ul class="list-disc ml-5">
                                    <li><strong>Tên:</strong> ${response.data.product_name}</li>
                                    <li><strong>Bảo hành:</strong> Hết hiệu lực</li>
                                    <li><strong>Hết hạn bảo hành vào:</strong> ${formattedDate}</li>
                                </ul>`;
                        }
                        $('#serialResult').html(infoHtml);

                    } else {
                        $('#serialResult').html('<p class="text-red-500">' + response
                            .message + '</p>');
                    }
                },
                error: function() {
                    $('#serialResult').html(
                        '<p class="text-red-500">Có lỗi xảy ra, vui lòng thử lại.</p>');
                }
            });
        });
    });
