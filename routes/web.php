<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('index');


/*****************ADMIN ROUTES*******************/
Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    Route::get('admin/appointment', 'Admin\AppointmentController@index')->name('appointment.index');
    Route::resource('admin/lawyerType', 'Admin\LawyerTypeController');
    Route::post('admin/updateLawyerType', 'Admin\LawyerTypeController@updatelawyerType');
    Route::resource('admin/lawyerInformation', 'Admin\LawyerController');
    Route::get('admin/client', 'Admin\ClientController@index')->name('client.index');
    Route::get('admin/reviews', 'Admin\ReviewsController@index')->name('reviews.index');
    Route::get('admin/settings', 'Admin\SettingsController@index')->name('settings.index');
    Route::post('admin/setting', 'Admin\SettingsController@store')->name('settings.store');
    Route::get('admin/profile', 'Admin\AdminController@profileIndex')->name('profile.index');
    Route::patch('admin/profile/{profile}', 'Admin\AdminController@updateProfile')->name('profile.update');
    Route::patch('admin/profile/updatePassword/{profile}', 'Admin\AdminController@updatePassword')->name('profile.updatePassword');
});

/*****************LAWYER ROUTES*******************/

Route::middleware(['role:lawyer', 'auth'])->group(function () {
    Route::get('/lawyer', 'Lawyer\LawyerController@index')->name('lawyer');
    Route::get('/appointments', 'Lawyer\LawyerController@appointments')->name('appointments');
    Route::get('/schedule-timings', 'Lawyer\LawyerController@scheduleTimings')->name('schedule-timings');
    Route::get('/my-clients', 'Lawyer\LawyerController@myClients')->name('my-clients');
    Route::get('/client-profile', 'Lawyer\LawyerController@clientProfile')->name('client-profile');
    Route::get('/profile-settings', 'Lawyer\LawyerController@profileSettings')->name('profile-settings');
    Route::get('/change-lawyer-password', 'Lawyer\LawyerController@changeLawyerPassword')->name('change-lawyer-password');
    Route::get('/reviews', 'Lawyer\LawyerController@Reviews')->name('reviews');

});

/*****************CLIENT ROUTES*******************/

Route::middleware(['role:user', 'auth'])->group(function () {
    Route::get('/user', 'User\UserController@index')->name('user');
    Route::get('/favourites', 'User\UserController@favourites')->name('favourites');
    Route::get('/profile-settings', 'User\UserController@profileSettings')->name('profile-settings');
    Route::get('/change-user-password', 'User\UserController@changeUserPassword')->name('change-user-password');
    Route::post('appointment/store', 'User\AppointmentController@store');
    Route::resource('review', 'User\ReviewController');
});
Route::resource('lawyer', 'User\LawyerController');

require __DIR__.'/auth.php';
