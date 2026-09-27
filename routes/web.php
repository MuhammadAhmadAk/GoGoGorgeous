<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/about', [RouteController::class, 'about'])->name('about');
Route::get('/services', [RouteController::class, 'services'])->name('services');
Route::get('/gallery', [RouteController::class, 'gallery'])->name('gallery');
Route::get('/team', [RouteController::class, 'team'])->name('team');
Route::get('/contact', [RouteController::class, 'contact'])->name('contact');

// Fallback Route for 404 Page
Route::fallback([RouteController::class, 'notFound']);

// Frontend Contact Submission
Route::post('/contact', [RouteController::class, 'submitContact'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    // Auth Routes
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    // Protected Routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        
        Route::get('/profile', [\App\Http\Controllers\Admin\AuthController::class, 'profile'])->name('profile');
        Route::post('/profile', [\App\Http\Controllers\Admin\AuthController::class, 'updateProfile'])->name('profile.update');

        Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
        Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
        Route::resource('team', \App\Http\Controllers\Admin\TeamController::class);
        Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
        Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);
        
        Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');

        Route::get('/inquiries', [\App\Http\Controllers\Admin\InquiryController::class, 'index'])->name('inquiries.index');
        Route::get('/inquiries/{inquiry}', [\App\Http\Controllers\Admin\InquiryController::class, 'show'])->name('inquiries.show');
        Route::post('/inquiries/{inquiry}/read', [\App\Http\Controllers\Admin\InquiryController::class, 'markAsRead'])->name('inquiries.read');
        Route::delete('/inquiries/{inquiry}', [\App\Http\Controllers\Admin\InquiryController::class, 'destroy'])->name('inquiries.destroy');
    });
});
