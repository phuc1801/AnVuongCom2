$(document).ready(function() {
    $('.input-field input').on('focus', function() {
        const id = $(this).attr('id');
        const rule = $('#rule-' + id);
        const errorM = $('#error-' + id);
        if (rule.length) {
            rule.stop(true, true).fadeIn(500);
        }
        if (errorM.length) {
            errorM.slideUp(500);
        }
    });

    $('.input-field input').on('blur', function() {
        const id = $(this).attr('id');
        const rule = $('#rule-' + id);
        if (rule.length) {
            rule.stop(true, true).slideUp(500);
        }
    });
});
