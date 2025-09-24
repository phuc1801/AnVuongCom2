    $(document).ready(function() {
        function showPaymentDetails(method) {
            const details = {
                'paypal': $('#paypal-details'),
                'cash': $('#cash-details')
            };
            for (let key in details) {
                details[key].hide();
                if (key === method && details[key]) details[key].show();
            }
        }

        $('.btn-fake-scan').on('click', function() {
            const method = $(this).data('method');
            const randomTransactionId = 'FAKE-' + method.toUpperCase() + '-' + Date.now();

            $('#transaction_id').val(randomTransactionId);
            $(`input[name="payment"][value="${method}"]`).prop('checked', true);

            window.onbeforeunload = null;
            $('#checkout-form').submit();
        });

        showPaymentDetails('cash');
        $('input[name="payment"]').on('change', function() {
            showPaymentDetails($(this).val());
        });

        const $timerEl = $('#timer');
        const $checkoutBtn = $('.btn-submit');
        const $paymentRadios = $('input[name="payment"]');

        function disableForm() {
            $checkoutBtn.prop('disabled', true);
            $paymentRadios.prop('disabled', true);
            window.onbeforeunload = null;
        }

        function updateTimer() {
            const now = new Date();
            const diff = expiredAt - now;

            if (diff <= 0) {
                $timerEl.text('Hết hạn!').removeClass('warning').addClass('expired');
                disableForm();
                clearInterval(interval);

                toastr.warning("Đơn hàng đã hết hiệu lực! Bạn sẽ được chuyển về trang chủ sau 3 giây");

                setTimeout(() => {
                    window.location.href = "/";
                }, 3000);
                return;
            }

            const minutes = Math.floor(diff / 1000 / 60);
            const seconds = Math.floor((diff / 1000) % 60);
            $timerEl.text(`${minutes}:${seconds.toString().padStart(2, '0')}`);

            if (diff <= 60000) {
                $timerEl.removeClass('expired').addClass('warning');
            } else {
                $timerEl.removeClass('warning expired');
            }
        }

        updateTimer();
        const interval = setInterval(updateTimer, 1000);
    });
