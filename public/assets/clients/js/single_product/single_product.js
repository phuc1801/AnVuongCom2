// Khởi tạo swiper thumbnails dưới ảnh to
const $smallSwiperEl = $(".smallImageSwiper");
const totalThumbs = parseInt($smallSwiperEl.data("total"));

let slidesPerView = 3;
let centeredSlides = false;
let allowSlide = true;

if (totalThumbs <= 3) {           // 3 là thôi cho đẹp, nhiều hơn thì ẩn và cho kéo cho hịn
    slidesPerView = totalThumbs;  // chỉ hiện đúng số ảnh
    centeredSlides = true;        // căn giữa
    allowSlide = false;           // không cho trượt
}

const smallImageSwiper = new Swiper(".smallImageSwiper", {
    slidesPerView: slidesPerView,
    spaceBetween: 30,
    freeMode: true,
    watchSlidesProgress: true,
    centeredSlides: centeredSlides,
    allowTouchMove: allowSlide,
    slidesOffsetBefore: 10,
    slidesOffsetAfter: 10,
});

// Swiper ảnh lớn
const bigImageSwiper = new Swiper(".bigImageSwiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: smallImageSwiper,
    },
});

// Toggle xem thêm ngoài list (phèn v nhưng thôi kệ)
$("#read_more").on("click", function () {
    const $textDecoration = $("#text-decoration");
    const $readMoreIcon = $("#read_more_icon");
    const $readMoreText = $("#read_more_text");
    const $infoDiv = $(".technical-info-body");

    $textDecoration.toggleClass("show-more");

    if ($textDecoration.hasClass("show-more")) {
        $readMoreText.text("Thu gọn");
        $readMoreIcon.removeClass("fa-angles-down").addClass("fa-angles-up");
        $infoDiv.css("height", $textDecoration.outerHeight() + "px");
    } else {
        $readMoreText.text("Xem thêm");
        $readMoreIcon.removeClass("fa-angles-up").addClass("fa-angles-down");
        $infoDiv.css("height", $textDecoration.outerHeight() + "px");
    }
});

// Hiệu ứng ảnh bay vào giỏ~
function animateToCart() {
    const $productImage = $(".bigImageSwiper .swiper-slide-active img");
    if ($productImage.length === 0) return;

    const $cartIcon = $("#cart-icon");

    // clone ảnh
    const $cloneImage = $productImage.clone();
    const rect = $productImage[0].getBoundingClientRect();

    $cloneImage.css({
        position: "fixed",
        left: rect.left + "px",
        top: rect.top + "px",
        width: "100px",
        transition: "all 1s ease-in-out",
        zIndex: 1000
    });

    $("body").append($cloneImage);

    setTimeout(() => {
        const cartRect = $cartIcon[0].getBoundingClientRect();
        $cloneImage.css({
            left: cartRect.left + "px",
            top: cartRect.top + "px",
            width: "30px",
            opacity: 0.3
        });
    }, 100);

    setTimeout(() => {
        $cloneImage.remove();
    }, 1100);
}

// AJAX thêm vào giỏ
function addToCart(productId, redirectAfter = false) {
    $.ajax({
        url: window.Laravel.addCartUrl,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": window.Laravel.csrfToken,
            "X-Requested-With": "XMLHttpRequest"
        },
        data: { product_id: productId },
        success: function (result) {
            if (result.success) {
                $("#cart-count").text(result.cart_count);   // update số lượng
                animateToCart();                            // hiệu ứng bay vào giỏ viu viu
                toastr.success(result.message);
            } else {
                toastr.error(result.message);
            }

            if (redirectAfter) {
                setTimeout(() => {
                    window.location.href = "/checkout-step1";
                }, 1200);
            }
        },
        error: function (xhr) {
            if (xhr.status === 401 && xhr.responseJSON) {
                toastr.error(xhr.responseJSON.message);
            } else {
                toastr.error("Lỗi hệ thống!");
            }
        }
    });
}

// Gán sự kiện nút thêm giỏ + mua luôn
$("#add-to-cart").on("click", function () {
    let productId = $(this).data("product-id");
    addToCart(productId, false);
});

$("#buy-now").on("click", function () {
    let productId = $(this).data("product-id");
    addToCart(productId, true);
});
