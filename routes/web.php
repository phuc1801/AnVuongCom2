<?php

use App\Http\Controllers\Clients\AnotherBladeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\Clients\BlogInfoController;
use App\Http\Controllers\Clients\CheckoutController;
use App\Http\Controllers\Clients\CheckWarrantyController;
use App\Http\Controllers\Clients\ContactController;
use App\Http\Controllers\Clients\ResetPasswordController;
use App\Http\Controllers\Clients\ForgotPasswordController;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\ListProductController;
use App\Http\Controllers\Clients\SearchController;
use App\Http\Controllers\Clients\SecondHandController;
use App\Http\Controllers\Clients\SingleProductController;
use App\Http\Controllers\Clients\UserDashboardController;
use App\Http\Controllers\DetailBlogController;
use App\Models\CartItem;

// ==============================================USER=================================================
// ----------------------Login------------------------------------------------------------------------

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('post-login');

    Route::get('/google/login', [AuthController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('post-register');
    Route::get('/activate/{token}', [AuthController::class, 'activate'])->name('activate');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPassForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');
});

// ----------------------

// ----------------------Logout------------------------------------------------------------------------

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// ----------------------User--------------------------------------------------------------------------

Route::middleware('auth.custom')->group(function () {
    // -----------------------Giỏ hàng----------------------
    // ----------------Post + Delete---------------
    // -------------Step1-----------
    Route::post('/checkout-step1/addCart', [CheckoutController::class, 'addToCartItem'])
        ->name('addCart');
    Route::delete('/checkout-step1/deleteCart/{id}', [CheckoutController::class, 'removeFromCartItem'])
        ->name('deleteCart');
    Route::post('/checkout-step1/updateCart', [CheckoutController::class, 'updateNumberInCartItem'])
        ->name('updateCart');
    // Apply coupon
    Route::post('/checkout-step1/checkCoupon', [CheckoutController::class, 'checkCoupon'])
        ->name('checkCoupon');

    // -------------Step2------------
    Route::post('/checkout-step2/addShippingAddress', [CheckoutController::class, 'addToShippingAddress'])
        ->name('addShippingAddress');

    // -------------Step3-----------
    Route::post('/checkout-step3/addOrder', [CheckoutController::class, 'confirmOrder'])
        ->name('addOrder');

    // ----------------Return Blade------------------
    Route::get('/checkout-step1', [CheckoutController::class, 'returnBladeStep1'])
        ->name('checkout.step1');
    Route::get('/checkout-step2', [CheckoutController::class, 'returnBladeStep2'])
        ->name('checkout.step2');
    Route::get('/checkout-step3', [CheckoutController::class, 'returnBladeStep3'])
        ->name('checkout.step3');
    Route::get('/checkout-step4', [CheckoutController::class, 'returnBladeStep4'])
        ->name('checkout.step4');
    // --------------------------------------------------------------------------------------------------

    // -----------------------User dashboard----------------------
    Route::get('/user-dashboard', [UserDashboardController::class, 'returnBlade'])
        ->name('user.dashboard');
    Route::post('/user-info', [UserDashboardController::class, 'updateUserInfo'])
        ->name('user.info');
    Route::post('/user-shipping', [UserDashboardController::class, 'updateShippingAddress'])
        ->name('user.shipping');
    Route::post('/destroyOrder', [UserDashboardController::class, 'updateOrderStatusHistory'])->name('user.destroyOrder');
    Route::post('/user-change-pass', [UserDashboardController::class, 'changePassword'])->name('user.changePassword');
    Route::post('/user-review', [UserDashboardController::class, 'submitReview'])->name('user.review');

    // --------------------------------------------------------------------------------------------------
});

// Home
Route::get('/', [HomeController::class, 'returnBlade'])->name('home');

// Cập nhật giỏ
Route::get('/update-cart-item', function () {
    $cartSum = Auth::check()
        ? CartItem::where('user_id', Auth::id())->sum('number')
        : 0;
    return response()->json(['cart_sum' => $cartSum]);
});

// List product
Route::get('/list-products/{slug}_{id}', [ListProductController::class, 'returnBlade'])
    ->where(['id' => '[0-9]+'])
    ->name('category.list-products');

// Single product
Route::get('/products/single/{slug}_{id}', [SingleProductController::class, 'returnBlade'])
    ->where(['id' => '[0-9]+'])
    ->name('products.single');

// Blog info
Route::get('/blog', [BlogInfoController::class, 'returnBlade'])->name('blog.user');
Route::get('/detail-blog', [DetailBlogController::class, 'returnBlade'])->name('blog.detail');

// Second hand
Route::get('/secondHand', [SecondHandController::class, 'returnBlade'])->name('second.hand');

// Search warranty
Route::get('/search-warranty', [CheckWarrantyController::class, 'returnBlade'])->name('search.warranty');
Route::post('/check-warranty', [CheckWarrantyController::class, 'checkWarranty'])->name('check.warranty');

// Contact
Route::get('/contact', [ContactController::class, 'returnBlade'])
    ->name('contact.admin');
Route::post('/add-contact', [ContactController::class, 'addContactInfo'])
    ->name('addContact');

// Search
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Another
Route::get('/about', [AnotherBladeController::class, 'returnAbout'])->name('about');
Route::get('/e-invoice', [AnotherBladeController::class, 'returnEInvoice'])->name('einvoice');
Route::get('/guide-installment', [AnotherBladeController::class, 'returnGuideInstallment'])->name('guideinstallment');
Route::get('/guide-order', [AnotherBladeController::class, 'returnGuideOrder'])->name('guideorder');
Route::get('/guide-payment', [AnotherBladeController::class, 'returnGuidePayment'])->name('guidepayment');
Route::get('/policy-privacy', [AnotherBladeController::class, 'returnPolicyPrivacy'])->name('policyprivacy');
Route::get('/policy-return', [AnotherBladeController::class, 'returnPolicyReturn'])->name('policyreturn');
Route::get('/policy-shipping', [AnotherBladeController::class, 'returnPolicyShipping'])->name('policyshipping');
Route::get('/policy-warranty', [AnotherBladeController::class, 'returnPolicyWarranty'])->name('policywarranty');

require __DIR__ . '/admin.php';
