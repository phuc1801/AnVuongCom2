    $(document).ready(function() {
        function toggleAddressOption() {
            const isSaved = $('#option-saved').is(':checked');

            if (isSaved) {
                $('.address-saved-container')
                    .slideDown()
                    .find('input')
                    .prop('disabled', false);

                $('.address-new-container')
                    .slideUp()
                    .find('input, select')
                    .prop('disabled', true);

                $('#saved-name, #saved-phone').prop('disabled', false);
                $('#new-name, #new-phone').prop('disabled', true);
            } else {
                $('.address-saved-container')
                    .slideUp()
                    .find('input')
                    .prop('disabled', true);

                $('.address-new-container')
                    .slideDown()
                    .find('input, select')
                    .prop('disabled', false);

                $('#saved-name, #saved-phone').prop('disabled', true);
                $('#new-name, #new-phone').prop('disabled', false);
            }
        }

        $('input[name="shipping_option"]').on('change', toggleAddressOption);

        toggleAddressOption();


        $('input[name="saved_address"]').on('change', function() {
            $('#name-saved').val($(this).data('name'));
            $('#phone-saved').val($(this).data('phone'));
        });

        const $city = $("#city");
        const $district = $("#district");
        const $ward = $("#ward");
        const $street = $("#street");
        const $fullAddress = $("#full_address");
        const $form = $("#order-info-form");

        $.get("https://provinces.open-api.vn/api/p/", function(cities) {
            cities.forEach(function(p) {
                $city.append(
                    `<option value="${p.code}" data-name="${p.name}">${p.name}</option>`);
            });
        });

        $city.on("change", function() {
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

        $form.on("submit", function(e) {
            const street = $street.val().trim();
            const city = $city.find(":selected").data("name") || "";
            const district = $district.find(":selected").data("name") || "";
            const ward = $ward.find(":selected").data("name") || "";
            $fullAddress.val(`${street}, ${ward}, ${district}, ${city}`);
        });

    });
    document.addEventListener("pageshow", function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    });
