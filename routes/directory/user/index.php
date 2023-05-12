<?php
Route::get('/','UserController@index')->name('user');
Route::post('/login','UserAuthenticationController@login')->name('post-login');
Route::post('/social/login','UserAuthenticationController@socialLogin')->name('social-login');
Route::post('/otp/verify','UserAuthenticationController@loginOtpVerification')->name('post-verify');
Route::post('/token/verify','UserAuthenticationController@verifyLogin')->name('token-verify');
Route::get('/doctordepartments','UserAuthenticationController@doctorDepartments')->name('token-verify');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/update/profile','UserAuthenticationController@detailsUpdate')->name('profile-update');
    
});
Route::post('/blood/request','HomeController@bloodRequest')->name('blood-request');
Route::prefix('nursing')->group(function () {
    include('nursing.php');
});

