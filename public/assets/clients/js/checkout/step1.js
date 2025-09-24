    $(document).ready(function() {
        let flagUpDown = 0;
        function updateProductTotal(input) {
            let container = $(input).closest('.product-cart-render');
            let price = parseInt(container.find('.sale-price').data('price'));
            let quantity = parseInt($(input).val()) || 1;
            let total = price * quantity;
            container.find('.product-total-value').text(total.toLocaleString() + ' đ');
        }

        function updateCartTotal(voucher = 0) {
            let cartTotal = 0;
            $('.product-total-value').each(function() {
                let totalText = $(this).text();
                let total = parseInt(totalText.replace(/\D/g, "")) || 0;
                cartTotal += total;
            });

            let shippingFee = 50000;
            let finalTotal = cartTotal + shippingFee - voucher;
            $('.final-total').text(finalTotal.toLocaleString() + ' đ');
        }

        $('.updown_quantity').each(function() {
            let container = $(this);
            let input = container.find('.quantity-input');
            let plusBtn = container.find('.plus-btn');
            let minusBtn = container.find('.minus-btn');

            function validateAndUpdate() {
                let val = parseInt(input.val()) || 0;
                let min = parseInt(input.attr('min')) || 1;
                let max = parseInt(input.attr('max'));
                let countP =  parseInt($('#cart-count').text(),10);

                if (val < min)
                    val = min;
                else{
                    if(!flagUpDown)
                        countP--;
                }

                if (val > max)
                    val = max;
                else{
                    if(flagUpDown)
                        countP++;
                }

                input.val(val);
                $('#cart-count').text(countP);

                updateProductTotal(input);
                updateCartTotal();
            }

            plusBtn.on('click', function() {
                input.val(Math.min((parseInt(input.val()) || 0) + 1, parseInt(input.attr('max'))));
                flagUpDown = 1;
                validateAndUpdate();
            });

            minusBtn.on('click', function() {
                input.val(Math.max((parseInt(input.val()) || 0) - 1, parseInt(input.attr('min')) || 1));
                flagUpDown = 0;
                validateAndUpdate();
            });

            input.on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            input.on('change', validateAndUpdate);

            validateAndUpdate();
        });


        $(document).on('click', '.trash-btn', function() {
            let couponCode = $('#coupon_code').val();
            let cartId = $(this).data('cart-id');
            let productRemove = $(this).closest('.product-cart-render');
            if (!cartId)
                return;
            if (!confirm("Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng?")) {
                return;
            }
            $.ajax({
                url: '/checkout-step1/deleteCart/' + cartId,
                type: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    coupon_code: couponCode
                },
                success: function(res) {
                    if (res.success) {
                        productRemove.remove();
                        $('#cart-count').text(res.count);
                        if (res.checkFlag) {
                            $('.remove-coupon').trigger('click');
                        } else
                            updateCartTotal();
                    }
                    if ($('.product-cart-render').length === 0) {
                        $('.div-product-cart-render').html(
                            '<div>Chưa có sản phẩm nào trong giỏ hàng.</div>');
                        $('.final-total').text('');
                    }
                }
            });
        });

        $('#open-span-coupon').on('click', function() {
            $('.div-coupon-div').toggleClass('show');
            $('#bluesky').toggleClass('span-i-show');
        });

        $('.apply-discount').on('click', function() {
            let code = $('.text-discount').val().trim();

            if (!code) {
                alert("Vui lòng nhập mã giảm giá");
                return;
            }

            $.ajax({
                url: '/checkout-step1/checkCoupon',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    coupon_code: code
                },
                success: function(res) {
                    let $result = $('.coupon-result');
                    if (res.success) {
                        $result
                            .html(`
                                <div class="alert alert-success py-2 px-3">
                                    <strong>Mã: ${res.code}</strong><br>
                                    <span id="priceDiscountPrice" data-discount="${res.discount}">Đã giảm: ${res.discount.toLocaleString('vi-VN')} đ</span>
                                    <button type="button" class="btn btn-sm btn-link text-danger remove-coupon">
                                        Xóa
                                    </button>
                                </div>
                             `).show();
                        $('#coupon_code').val(res.code);

                        toastr.success(res.message);

                        updateCartTotal(res.discount);
                    } else {
                        toastr.error(res.message);
                    }
                }
            });
        });

        $(document).on('click', '.remove-coupon', function() {
            $(this).closest('.coupon-result').hide().html('');
            $('#coupon_code').val('');
            updateCartTotal();
        });
    });

    document.addEventListener("pageshow", function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    });
