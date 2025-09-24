<?php

use App\Http\Controllers\Admins\AccountController;
use App\Http\Controllers\Admins\ArticleController;
use App\Http\Controllers\Admins\AttributeCategoryController;
use App\Http\Controllers\Admins\AttributeController;
use App\Http\Controllers\Admins\AttributeProductController;
use App\Http\Controllers\Admins\AuthAdminController;
use App\Http\Controllers\Admins\CategoryController;
use App\Http\Controllers\Admins\ContactController;
use App\Http\Controllers\Admins\DashboardController;
use App\Http\Controllers\Admins\GalleriesController;
use App\Http\Controllers\Admins\OrderController;
use App\Http\Controllers\Admins\PaymentsController;
use App\Http\Controllers\Admins\ProductImageController;
use App\Http\Controllers\Admins\ProductReviewController;
use App\Http\Controllers\Admins\ProductsController;
use App\Http\Controllers\Admins\ProductSerialController;
use App\Http\Controllers\Admins\UsersController;
use App\Http\Controllers\Admins\VoucherController;
use App\Http\Middleware\DefaultAdminData;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::middleware('auth.custom.admin')->group(function () {
        Route::get('/login', [AuthAdminController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AuthAdminController::class, 'login'])->name('admin.login.post');
    });

    Route::middleware(['auth.custom', DefaultAdminData::class])->group(function () {
        Route::post('/logout', [AuthAdminController::class, 'logout'])->name('admin.logout.post');

        Route::get('/home', [DashboardController::class, 'returnBlade'])->name('admin.dashboard');

        Route::get('/users', [UsersController::class, 'returnBlade'])->name('admin.users');
        Route::post('/user/update-status', [UsersController::class, 'updateStatusUser']);
        Route::get('/profile', [AccountController::class, 'returnBlade'])->name('admin.profile');
        Route::post('/profile/update-old', [AccountController::class, 'updateProfile']);
        Route::post('/profile/update-pass', [AccountController::class, 'updatePass']);
        Route::post('/profile/update-avatar', [AccountController::class, 'updateAvatar']);

        // --------------------------Quản lý danh mục----------------------
        Route::get('/categories', [CategoryController::class, 'returnBlade'])->name('admin.categories');
        Route::get('/category/add', [CategoryController::class, 'showFormCategory'])->name('admin.category-add');
        Route::post('/category/add-new', [CategoryController::class, 'addNewCategory'])->name('admin.category-addNew');
        Route::post('/category/update-old', [CategoryController::class, 'updateOldCategory']);
        Route::post('/category/delete-old', [CategoryController::class, 'deleteOldCategory']);

        // --------------------------Quản lý sản phẩm----------------------
        Route::get('/products', [ProductsController::class, 'returnBlade'])->name('admin.products');
        Route::get('/product/add', [ProductsController::class, 'showFormProduct'])->name('admin.product-add');
        Route::post('/product/add-new', [ProductsController::class, 'addNewProduct'])->name('admin.product-addNew');
        Route::post('/product/update-old', [ProductsController::class, 'updateOldProduct']);
        Route::post('/product/delete-old', [ProductsController::class, 'deleteOldProduct']);

        Route::get('/product-images', [ProductImageController::class, 'returnBlade'])->name('admin.product-images');
        Route::get('/product-image/add', [ProductImageController::class, 'showFormProductImage'])->name('admin.product-image-add');
        Route::post('/product-image/add-new', [ProductImageController::class, 'addNewProductImage'])->name('admin.product-image-addNew');
        Route::post('/product-image/update-old', [ProductImageController::class, 'updateOldProductImage']);
        Route::post('/product-image/delete-old', [ProductImageController::class, 'deleteOldProductImage']);

        Route::get('/product-serials', [ProductSerialController::class, 'returnBlade'])->name('admin.product-serials');
        Route::get('/product-serial/add', [ProductSerialController::class, 'showFormProductSerial'])->name('admin.product-serial-add');
        Route::post('/product-serial/add-new', [ProductSerialController::class, 'addNewProductSerial'])->name('admin.product-serial-addNew');
        Route::post('/product-serial/update-old', [ProductSerialController::class, 'updateOldProductSerial']);
        Route::post('/product-serial/delete-old', [ProductSerialController::class, 'deleteOldProductSerial']);

        Route::get('/product-reviews', [ProductReviewController::class, 'returnBlade'])->name('admin.product-reviews');
        Route::post('/product-review/update-old', [ProductReviewController::class, 'updateOldProductReview']);
        Route::post('/product-review/delete-old', [ProductReviewController::class, 'deleteOldProductReview']);

        Route::get('/galleries', [GalleriesController::class, 'returnBlade'])->name('admin.galleries');
        Route::get('/gallery/add', [GalleriesController::class, 'showFormGallery'])->name('admin.gallery-add');
        Route::post('/gallery/add-new', [GalleriesController::class, 'addNewGallery'])->name('admin.gallery-addNew');
        Route::post('/gallery/update-old', [GalleriesController::class, 'updateOldGallery']);
        Route::post('/gallery/delete-old', [GalleriesController::class, 'deleteOldGallery']);

        Route::get('/orders', [OrderController::class, 'returnBlade'])->name('admin.orders');
        Route::post('/order/confirm-order', [OrderController::class, 'confirmOrder']);
        Route::post('/order/shipping-order', [OrderController::class, 'shippingOrder']);
        Route::post('/order/completed-order', [OrderController::class, 'completedOrder']);
        Route::post('/order/cancelled-order', [OrderController::class, 'cancelledOrder']);

        Route::get('/order/detail/{id}', [OrderController::class, 'showOrderDetail'])->name('admin.order-detail');
        Route::post('/order/detail/send-invoice', [OrderController::class, 'sendMailInvoice']);

        Route::get('/payments', [PaymentsController::class, 'returnBlade'])->name('admin.payments');
        Route::post('/payment/update-old', [PaymentsController::class, 'updateOldPayment']);

        Route::get('/contacts', [ContactController::class, 'returnBlade'])->name('admin.contacts');
        Route::post('/contact/reply', [ContactController::class, 'replyMail']);

        Route::get('/vouchers', [VoucherController::class, 'returnBlade'])->name('admin.vouchers');
        Route::get('/voucher/add', [VoucherController::class, 'showFormVoucher'])->name('admin.voucher-add');
        Route::post('/voucher/add-new', [VoucherController::class, 'addNewVoucher'])->name('admin.voucher-addNew');
        Route::post('/voucher/update-old', [VoucherController::class, 'updateOldVoucher']);
        Route::post('/voucher/delete-old', [VoucherController::class, 'deleteOldVoucher']);

        Route::get('/articles', [ArticleController::class, 'returnBlade'])->name('admin.articles');
        Route::get('/article/add', [ArticleController::class, 'showFormArticle'])->name('admin.article-add');
        Route::post('/article/add-new', [ArticleController::class, 'addNewArticle'])->name('admin.article-addNew');
        Route::post('/article/update-old', [ArticleController::class, 'updateOldArticle']);
        Route::post('/article/delete-old', [ArticleController::class, 'deleteOldArticle']);

        Route::get('/attributes', [AttributeController::class, 'returnBlade'])->name('admin.attributes');
        Route::get('/attribute/add', [AttributeController::class, 'showFormaAttribute'])->name('admin.attribute-add');
        Route::post('/attribute/add-new', [AttributeController::class, 'addNewAttribute'])->name('admin.attribute-addNew');
        Route::post('/attribute/update-old', [AttributeController::class, 'updateOldAttribute']);
        Route::post('/attribute/delete-old', [AttributeController::class, 'deleteOldAttribute']);

        Route::get('/attribute_products', [AttributeProductController::class, 'returnBlade'])->name('admin.attribute_products');
        Route::get('/attribute_product/add', [AttributeProductController::class, 'showFormaAttributeProduct'])->name('admin.attribute_product-add');

        Route::get('/attribute_product/{product}/attributes', [AttributeProductController::class, 'getAttributes'])->name('admin.products.attributes');

        Route::post('/attribute_product/add-new', [AttributeProductController::class, 'addNewAttributeProduct'])->name('admin.attribute_product-addNew');
        Route::post('/attribute_product/update-old', [AttributeProductController::class, 'updateOldAttributeProduct']);
        Route::post('/attribute_product/delete-old', [AttributeProductController::class, 'deleteOldAttributeProduct']);

        Route::get('/attribute_categories', [AttributeCategoryController::class, 'returnBlade'])->name('admin.attribute_categories');
        Route::get('/attribute_category/add', [AttributeCategoryController::class, 'showFormaAttributeCategory'])->name('admin.attribute_category-add');
        Route::post('/attribute_category/add-new', [AttributeCategoryController::class, 'addNewAttributeCategory'])->name('admin.attribute_category-addNew');
        Route::post('/attribute_category/update-old', [AttributeCategoryController::class, 'updateOldAttributeCategory']);
        Route::post('/attribute_category/delete-old', [AttributeCategoryController::class, 'deleteOldAttributeCategory']);
    });
});
