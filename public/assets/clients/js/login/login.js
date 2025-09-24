    $(document).ready(function() {
        $('.input-field input').on('focus', function() {
            const id = $(this).attr('id');
            const errorM = $('#error-' + id);
            if (errorM.length) {
                errorM.slideUp(500);
            }
        });
    });

    function togglePassword() {
        const $passwordInput = $('#password');
        const $icon = $('.toggle-password');

        if ($passwordInput.attr('type') === 'password') {
            $passwordInput.attr('type', 'text');
            $icon.text('🙈');
        } else {
            $passwordInput.attr('type', 'password');
            $icon.text('👁️');
        }
    }
