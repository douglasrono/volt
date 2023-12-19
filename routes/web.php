<?php

use App\Http\Livewire\Lock;
use App\Http\Livewire\Index;
use App\Http\Livewire\Users;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\Transactions;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\ProfileExample;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Components\Forms;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Components\Modals;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RiderController;
use App\Http\Livewire\Components\Buttons;
use App\Http\Controllers\DialerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopifyController;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MerchantController;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Controllers\TelematicController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\WordpressController;
use App\Http\Controllers\GoogleSheetController;
use App\Http\Controllers\WooCommerceController;
use App\Http\Livewire\Components\Notifications;



Route::redirect('/', '/login');

Route::get('/register', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    Route::get('/users', Users::class)->name('users');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');

    Route::get('/orders', [OrderController::class,'index'])->name('orders');

    Route::get('/dialer', [DialerController::class,'index'])->name('dialer');

    Route::get('/products', [ProductController::class,'index'])->name('products');

    Route::get('/warehouse', [WarehouseController::class,'index'])->name('warehouses');

    Route::get('/customers', [CustomerController::class,'index'])->name('customers');

    Route::get('/users', [UserController::class,'index'])->name('users');

    Route::get('/riders', [RiderController::class,'index'])->name('riders');

    Route::get('/merchants', [MerchantController::class,'index'])->name('merchants');

    Route::get('/googlesheets', [GoogleSheetController::class,'index'])->name('googlesheets');

    Route::get('/shopify', [ShopifyController::class,'index'])->name('shopify');

    Route::get('/woocommerce', [WooCommerceController::class,'index'])->name('woocommerce');

    Route::get('/wordpress', [WordpressController::class,'index'])->name('wordpress');

    Route::get('/waybills', [OrderController::class,'waybills'])->name('waybills');

    Route::get('/telematics', [TelematicController::class,'index'])->name('telematics');
});
