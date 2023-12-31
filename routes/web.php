<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\LanguageController;
use App\Http\Controllers\Dashboard\PermissionController;
use App\Http\Controllers\Dashboard\PluginController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\TrafficsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariationController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WishlistController;
use App\Models\Language;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/language/{code}', function ($code) {
        $language = Language::where('code', $code)->first();
        if ($language) {
            Session::put('locale', $code);
        }
        return redirect()->back();
    })->name('switch-language');

    Route::middleware(['guest', 'checkUserRegistration'])->group(function () {
        Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('/register', [RegisteredUserController::class, 'store']);
    });

//    Route::get('/', function () {
//        return view('welcome', [
//            'canLogin' => Route::has('login'),
//            'canRegister' => Route::has('register'),
//            'laravelVersion' => Application::VERSION,
//            'phpVersion' => PHP_VERSION,
//        ]);
//    });

    Route::prefix('user')->name('user.')->group(function () {
        Route::prefix('address')->name('address.')->group(function () {
            // crud
            Route::get('/', [AddressController::class, 'index'])->name('index');
            Route::get('/create', [AddressController::class, 'create'])->name('create');
            Route::post('/store', [AddressController::class, 'store'])->name('store');
            Route::get('/{address}/edit', [AddressController::class, 'edit'])->name('edit');
            Route::put('/{address}/update', [AddressController::class, 'update'])->name('update');
            Route::get('/{address}/delete', [AddressController::class, 'delete'])->name('delete');

        });
    });


    Route::prefix('store')->name('store.')->group(function () {
        Route::get('/{category:slug?}', [StoreController::class, 'index'])->name('home');
        Route::get('/product/{product:slug}/{variation:slug?}', [StoreController::class, 'product'])->name('product');
        Route::prefix('product')->name('product.')->group(function () {
            Route::post('/{product:slug}/review', [ReviewController::class, 'store'])->name('create-review');
        });
        Route::prefix('cart')->middleware(['auth:sanctum'])->name('cart.')->group(function () {
            Route::get('/', [CartController::class, 'index'])->name('index');
            Route::post('/add/{product:slug}/{variation:slug}', [CartController::class, 'store'])->name('add');
            Route::post('/update/{cartItem}', [CartController::class, 'update'])->name('update');
            Route::post('/remove', [CartController::class, 'remove'])->name('remove');
            Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
            Route::get('/set-delivery-address/{address}', [CartController::class, 'setDeliveryAddress'])->name('set-delivery-address');
            Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
            Route::post('/payment-response', [PaymentController::class, 'paymentResponse'])->name('payment.response');
        });

        Route::prefix('wishlist')->middleware(['auth:sanctum'])->name('wishlist.')->group(function () {
            Route::get('/add/{product:slug}/{variation:slug}', [WishlistController::class, 'store'])->name('add');
            Route::post('/remove/{wishlistItem}', [WishlistController::class, 'remove'])->name('remove');
            Route::post('/move-to-cart/{wishlistItem}', [WishlistController::class, 'move'])->name('move-to-cart');
            Route::post('/empty', [WishlistController::class, 'empty'])->name('empty');
            Route::post('/move-all-to-cart', [WishlistController::class, 'moveAllToCart'])->name('move-all-to-cart');
        });
    });
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist')->middleware('auth:sanctum');


    Route::prefix('dashboard')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('languages', LanguageController::class);
        Route::get('traffics', [TrafficsController::class, 'index'])->name('traffics.index');
        Route::get('traffics/logs', [TrafficsController::class, 'logs'])->name('traffics.logs');
        Route::get('error-reports', [TrafficsController::class, 'error_reports'])->name('traffics.error-reports');
        Route::get('error-reports/{report}', [TrafficsController::class, 'error_report'])->name('traffics.error-report');

        Route::prefix('review')->name('review.')->group(function () {
            Route::get('/', [ReviewController::class, 'index'])->name('index');
            Route::get('/{review}/toggle', [ReviewController::class, 'toggle'])->name('toggle-review');
        });

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/', [SettingController::class, 'index'])->name('index');
            Route::put('/update', [SettingController::class, 'update'])->name('update');
        });

        Route::prefix('plugins')->name('plugins.')->group(function () {
            Route::get('/', [PluginController::class, 'index'])->name('index');
            Route::get('/install', [PluginController::class, 'create'])->name('create');
            Route::post('/install', [PluginController::class, 'store'])->name('store');
            Route::post('/{plugin}/activate', [PluginController::class, 'activate'])->name('activate');
            Route::post('/{plugin}/deactivate', [PluginController::class, 'deactivate'])->name('deactivate');
            Route::post('/{plugin}/delete', [PluginController::class, 'delete'])->name('delete');
        });

        Route::prefix('products')->name('products.')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/show/{product:slug}', [ProductController::class, 'show'])->name('show');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/store', [ProductController::class, 'store'])->name('store');
            Route::get('/{product:slug}/edit', [ProductController::class, 'edit'])->name('edit');
            Route::put('/{product:slug}/update', [ProductController::class, 'update'])->name('update');
            Route::post('/{product:slug}/delete', [ProductController::class, 'delete'])->name('delete');
            Route::prefix('variation')->name('product.variation.')->group(function () {
                Route::get('/{product:slug}/create', [ProductVariationController::class, 'create'])->name('create');
                Route::post('/{product:slug}/store', [ProductVariationController::class, 'store'])->name('store');
                Route::get('/{product:slug}/edit/{variation}', [ProductVariationController::class, 'edit'])->name('edit');
                Route::put('/{product:slug}/update/{variation}', [ProductVariationController::class, 'update'])->name('update');
                Route::post('/{product:slug}/delete/{variation}', [ProductVariationController::class, 'delete'])->name('delete');
            });
        });

        Route::prefix('product-categories')->name('productCategories.')->group(function () {
            Route::get('/', [ProductCategoryController::class, 'index'])->name('index');
            Route::get('/create', [ProductCategoryController::class, 'create'])->name('create');
            Route::put('/store', [ProductCategoryController::class, 'store'])->name('store');
            Route::get('/{productCategory}/edit', [ProductCategoryController::class, 'edit'])->name('edit');
            Route::put('/{productCategory}/update', [ProductCategoryController::class, 'update'])->name('update');
            Route::get('/{productCategory}/delete', [ProductCategoryController::class, 'delete'])->name('delete');
        });

        Route::prefix('home-slider')->name('homeSlider.')->group(function () {
            Route::get('/', [HomeSliderController::class, 'index'])->name('index')->middleware('permission:read homeSlider');
            Route::post('/store', [HomeSliderController::class, 'store'])->name('store')->middleware('permission:create homeSlider');
            Route::get('/{slider}/toggle/{property}', [HomeSliderController::class, 'toggle'])->name('edit')->middleware('permission:update homeSlider');
            Route::get('/{slider}/delete', [HomeSliderController::class, 'delete'])->name('delete')->middleware('permission:delete homeSlider');
        });

    });


//    Route::get('/{any}', function () {
//        return view('dashboard');
//    })->where('any', '.*');

    // home, cart, contact us, components
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');
    Route::get('/story', function () {
        return view('story');
    })->name('story');

    Route::get('/our-family', function () {
        return view('ourFamily');
    })->name('our-family');
    Route::get('/our-family', function () {
        return view('ourFamily');
    })->name('our-family');
    Route::get('/learn-with-thiya', function () {
        return view('learnWithThiya');
    })->name('learnWithThiya');
    Route::get('/giftings', function () {
        return view('giftings');
    })->name('giftings');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');
    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/signup', function () {
        return view('signup');
    })->name('signup');
    Route::get('/forgetpassword', function () {
        return view('forgetpassword');
    })->name('forgetpassword');
});
