$('.input-field input').on('input', function () {
    $(this).toggleClass('filled', $(this).val().trim() !== '');
}).each(function () {
    $(this).trigger('input');
});
