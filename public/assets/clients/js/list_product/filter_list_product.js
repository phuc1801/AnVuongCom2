$(document).ready(function() {
    // Giá thực tế min/max
    var minPriceReal = 0;
    var maxPriceReal = 100000000;

    var rangeMinDesktop = $("#range-min-desktop");
    var rangeMaxDesktop = $("#range-max-desktop");
    var priceMinDesktop = $("#price-min-desktop");
    var priceMaxDesktop = $("#price-max-desktop");
    var progressDesktop = $(".range-slider #desktop-progress");

    var rangeMinMobile = $("#range-min-mobile");
    var rangeMaxMobile = $("#range-max-mobile");
    var priceMinMobile = $("#price-min-mobile");
    var priceMaxMobile = $("#price-max-mobile");
    var progressMobile = $(".range-slider #mobile-progress");

    $('.filterFormAll').on('submit', function(e) {
        e.preventDefault(); // Ngăn form submit mặc định để xử lý AJAX

        let $form = $(this);

        // Xóa các nút cũ trước khi tạo mới
        $('#selected-filters').siblings('.filter-tag').remove();

        // Tạo danh sách "Đang lọc theo" từ checkbox
        var filterText = {};
        $form.find('input[name^="filters["]:checked').each(function() {
            var $dropdown = $(this).closest('.dropdown');
            var attribute = $dropdown.data('filter-name');
            var value = $(this).val();
            if (!filterText[attribute]) filterText[attribute] = [];
            filterText[attribute].push(value);
        });

        // Nếu giá khác mặc định => thêm mục "Mức giá"
        if($form.is('#filterFormDesktop'))
        {
            if (parseInt(rangeMinDesktop.val()) !== minPriceReal || parseInt(rangeMaxDesktop.val()) !== maxPriceReal) {
                filterText['Mức giá'] = [priceMinDesktop.val() + ' - ' + priceMaxDesktop.val()];
            }
        }
        else
        {
            if (parseInt(rangeMinMobile.val()) !== minPriceReal || parseInt(rangeMaxMobile.val()) !== maxPriceReal) {
                filterText['Mức giá'] = [priceMinMobile.val() + ' - ' + priceMaxMobile.val()];
            }
        }

        // Tạo các tag hiển thị
        for (var attribute in filterText) {
            var values = filterText[attribute];
            var fullText = values.join(' | ');
            var displayText = fullText.length > 20 ? values.slice(0, 2).join(' | ') + ' | ...' : fullText;

            var $tag = $('<button class="btn btn-primary btn-sm filter-tag m-1" data-attribute="' + attribute + '">' +
                attribute + ': ' + displayText + ' <span class="close-tag">&times;</span></button>');
            var $showTag = $('#selected-filters');
            $showTag.addClass('isAvailable');
            $showTag.after($tag);
        }

        // Cập nhật màu nút theo filter checkbox được chọn
        $form.find('.filter-btn').removeClass('active');
        $form.find('input[name^="filters["]:checked').each(function() {
            $(this).closest('.dropdown').find('.filter-btn').addClass('active');
        });

        // Nếu có filter giá thì set active cho nút Mức giá
        if (filterText['Mức giá']) {
            $form.find('.filter-btn').filter(function() {
                return $(this).text().trim() === 'Mức giá';
            }).addClass('active');
        }

        applyFilters($form);
    });

    // Ngăn dropdown tự đóng khi tick checkbox
    $('.dropdown-menu').on('click', function(e) {
        e.stopPropagation();
    });

    function getActiveForm() {
        return (window.innerWidth >= 1000)
            ? $('#filterFormDesktop')
            : $('#filterFormMobile');
    }

    // Xử lý đóng từng tag
    $(document).on('click', '.close-tag', function(e) {
        e.stopPropagation();
        var $tag = $(this).parent();
        var attribute = $tag.data('attribute');
        var $form = getActiveForm();

        if (attribute === 'Mức giá') {
            $form.find(".range-min").val(0);
            $form.find(".range-max").val(100000000);
            if ($form.is('#filterFormDesktop')) {
                updatePriceDesktop();
            }
            else
            {
                updatePriceMobile();
            }
            $form.find('.filter-btn').filter(function() {
                return $(this).text().trim() === 'Mức giá';
            }).removeClass('active');
        } else {
            $form.find('.dropdown[data-filter-name="' + attribute + '"]')
                .find('input[name="filters[' + attribute + '][]"]')
                .prop('checked', false)
                .closest('.dropdown').find('.filter-btn').removeClass('active');
        }

        $tag.remove();

        if ($('.filter-tag').length === 0) {
            $('#selected-filters').removeClass('isAvailable');
        }
        applyFilters($form);
    });

    // Thanh progress
    rangeMinDesktop.on("input", function () {
        let minVal = parseInt(rangeMinDesktop.val());
        let maxVal = parseInt(rangeMaxDesktop.val());
        if (minVal > maxVal - 1000) {
            $(this).val(maxVal - 1000);
            minVal = maxVal - 1000;
        }
        priceMinDesktop.val(minVal.toLocaleString("vi-VN") + "đ");
        updatePriceDesktop();
    });

    rangeMaxDesktop.on("input", function () {
        let minVal = parseInt(rangeMinDesktop.val());
        let maxVal = parseInt(rangeMaxDesktop.val());
        if (maxVal < minVal + 1000) {
            $(this).val(minVal + 1000);
            maxVal = minVal + 1000;
        }
        priceMaxDesktop.val(maxVal.toLocaleString("vi-VN") + "đ");
        updatePriceDesktop();
    });

    rangeMinMobile.on("input", function () {
        let minVal = parseInt(rangeMinDesktop.val());
        let maxVal = parseInt(rangeMaxDesktop.val());
        if (minVal > maxVal - 1000) {
            $(this).val(maxVal - 1000);
            minVal = maxVal - 1000;
        }
        priceMinMobile.val(minVal.toLocaleString("vi-VN") + "đ");
        updatePriceMobile();
    });

    rangeMaxMobile.on("input", function () {
        let minVal = parseInt(rangeMinDesktop.val());
        let maxVal = parseInt(rangeMaxDesktop.val());
        if (maxVal < minVal + 1000) {
            $(this).val(minVal + 1000);
            maxVal = minVal + 1000;
        }
        priceMaxMobile.val(maxVal.toLocaleString("vi-VN") + "đ");
        updatePriceMobile();
    });

    // Khi gõ trực tiếp vào input text
    priceMinDesktop.on("change", function () {
        let val = parseInt(priceMinDesktop.val().replace(/\D/g, "")) || 0;
        val = Math.floor(val / 1000) * 1000; // làm tròn đến 1000
        rangeMinDesktop.val(val);
        priceMinDesktop.val(val.toLocaleString("vi-VN") + "đ");
        updatePriceDesktop();
    });

    priceMaxDesktop.on("change", function () {
        let val = parseInt(priceMaxDesktop.val().replace(/\D/g, "")) || 100000000;
        val = Math.floor(val / 1000) * 1000;
        rangeMaxDesktop.val(val);
        priceMaxDesktop.val(val.toLocaleString("vi-VN") + "đ");
        updatePriceDesktop();
    });

    priceMinMobile.on("change", function () {
        let val = parseInt(priceMinMobile.val().replace(/\D/g, "")) || 0;
        val = Math.floor(val / 1000) * 1000; // làm tròn đến 1000
        rangeMinMobile.val(val);
        priceMinDesktop.val(val.toLocaleString("vi-VN") + "đ");
        updatePriceMobile();
    });

    priceMaxMobile.on("change", function () {
        let val = parseInt(priceMaxMobile.val().replace(/\D/g, "")) || 100000000;
        val = Math.floor(val / 1000) * 1000;
        rangeMaxMobile.val(val);
        priceMaxMobile.val(val.toLocaleString("vi-VN") + "đ");
        updatePriceMobile();
    });

    function updatePriceDesktop() {
        let realMin = parseInt(rangeMinDesktop.val());
        let realMax = parseInt(rangeMaxDesktop.val());

        priceMinDesktop.val(realMin.toLocaleString('vi-VN') + "đ");
        priceMaxDesktop.val(realMax.toLocaleString('vi-VN') + "đ");

        let totalRange = maxPriceReal - minPriceReal;
        progressDesktop.css({
            left: ((realMin - minPriceReal) / totalRange) * 100 + "%",
            right: (100 - ((realMax - minPriceReal) / totalRange) * 100) + "%"
        });
    }

    function updatePriceMobile() {
        let realMin = parseInt(rangeMinMobile.val());
        let realMax = parseInt(rangeMaxMobile.val());

        priceMinMobile.val(realMin.toLocaleString('vi-VN') + "đ");
        priceMaxMobile.val(realMax.toLocaleString('vi-VN') + "đ");

        let totalRange = maxPriceReal - minPriceReal;
        progressMobile.css({
            left: ((realMin - minPriceReal) / totalRange) * 100 + "%",
            right: (100 - ((realMax - minPriceReal) / totalRange) * 100) + "%"
        });
    }

    function applyFilters($form) {
        const data = $form.serialize();
        const endpoint = $form.data('endpoint');

        $.ajax({
            url: endpoint,
            type: 'GET',
            data: data,
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function(html) {
                $('#product-list').html(html);
                history.pushState(null, '', endpoint + '?' + data);
            },
            error: function() { alert('Có lỗi xảy ra, vui lòng thử lại!'); }
        });
    }

    // sort, pagination, clear filters
    $('#sortOption').on('change', function() {
        let $form = getActiveForm();
        $form.find('input[name="sort"]').remove();
        $form.append('<input type="hidden" name="sort" value="'+$(this).val()+'">');
        applyFilters($form);
    });

    $(document).on('click', '#product-list .pagination .page-link', function(e) {
        e.preventDefault();
        let url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function(html) {
                $('#product-list').html(html);
                history.pushState(null, '', url);
            }
        });
    });

    $('#clearFiltersDesktop').on('click', function() {
        const $form = $('#filterFormDesktop');
        $form[0].reset();
        $('#selected-filters').siblings('.filter-tag').remove();
        $form.find('.filter-btn').removeClass('active');
        $('#selected-filters').removeClass('isAvailable');
        updatePriceDesktop();

        $.ajax({
            url: $form.data('endpoint'),
            type: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function(html) {
                $('#product-list').html(html);
                history.pushState(null, '', $form.data('endpoint'));
            }
        });
    });

    $('#clearFiltersMobile').on('click', function() {
        const $form = $('#filterFormMobile');
        $form[0].reset();
        $('#selected-filters').siblings('.filter-tag').remove();
        $form.find('.filter-btn').removeClass('active');
        $('#selected-filters').removeClass('isAvailable');
        updatePriceMobile();

        $.ajax({
            url: $form.data('endpoint'),
            type: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function(html) {
                $('#product-list').html(html);
                history.pushState(null, '', $form.data('endpoint'));
            }
        });
    });

    let clickedDesktop = false;
    let clickedMobile = false;

    $(window).on('resize', function() {
        if (window.innerWidth >= 1000 && !clickedDesktop) {
            $('#clearFiltersDesktop').trigger('click');
            clickedDesktop = true;
            clickedMobile = false;
        }
        if (window.innerWidth < 1000 && !clickedMobile) {
            $('#clearFiltersMobile').trigger('click');
            clickedDesktop = false;
            clickedMobile = true;
        }
    });
});
