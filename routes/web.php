<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PdfFromPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// 
Route::prefix(LaravelLocalization::setLocale())->middleware(['localize'])->group(function () {
    Route::view('/', 'welcome', ['title' => trans('Home')])->name(trans('routes.home'));

    Route::get(LaravelLocalization::transRoute('routes.privacy'), function () {
        $privacyFile = resource_path('markdown/'.LaravelLocalization::getCurrentLocale().'/'.LaravelLocalization::transRoute('routes.privacy').'.md');

        return view('privacy', [
            'privacy' => Str::markdown(file_get_contents($privacyFile)),
            'title' => trans('Privacy Policy')
        ]);
    })->name(trans('routes.privacy'));

    Route::get(LaravelLocalization::transRoute('routes.terms'), function () {
        $termsFile = resource_path('markdown/'.LaravelLocalization::getCurrentLocale().'/'.LaravelLocalization::transRoute('routes.terms').'.md');

        return view('terms', [
            'terms' => Str::markdown(file_get_contents($termsFile)),
            'title' => trans('Legal Terms')
        ]);
    })->name(trans('routes.terms'));

    // Route::get('/', [PageController::class, 'home'])->name(trans('routes.home'));
    // Route::get('{page}', [PageController::class, 'show'])->name('routes.page');
});

// Services routes
Route::get('/callback/{provider}',[SocialLoginController::class,'providerCallback']);
// Route::get('social-auth/{provider}/callback',[SocialLoginController::class,'providerCallback']);
Route::get('social-auth/{provider}',[SocialLoginController::class,'redirectToProvider'])->name('social.redirect');
Route::get('/pdf/{locale}/{view}', [PdfFromPageController::class, 'PdfMaker'])->name('pdfpage');

// 
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'can:admin.access'])->group(function () {
    Route::view('', 'dashboard')
        ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile');

    Route::delete('/profile', [ProfileController::class, 'removeDevices'])
        ->name('profile.devices.delete');

    Route::get('/users', [UsersController::class, 'index'])
        ->name('users.index');

    Route::get('/user/create', [UsersController::class, 'create'])
        ->name('users.create');

    Route::post('/user/store', [UsersController::class, 'store'])
        ->name('users.store');

    Route::get('/user/{user}/edit', [UsersController::class, 'edit'])
        ->name('users.edit');

    Route::put('/user/{user}/update', [UsersController::class, 'update'])
        ->name('users.update');

    Route::get('/user/{user}/change-password', [UsersController::class, 'changePassword'])
        ->name('users.change-password');

    Route::put('/user/{user}/update-password', [UsersController::class, 'updatePassword'])
        ->name('users.update-password');

    Route::delete('/user/{user}/delete', [UsersController::class, 'delete'])
        ->name('users.delete');
});
