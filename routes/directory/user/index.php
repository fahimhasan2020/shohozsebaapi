<?php
Route::get('/','UserController@index')->name('user');
Route::post('/data-update','UserController@uploadPhoto')->name('user');
Route::post('/login','UserAuthenticationController@login')->name('post-login');
Route::post('/social/login','UserAuthenticationController@socialLogin')->name('social-login');
Route::post('/otp/verify','UserAuthenticationController@loginOtpVerification')->name('post-verify');
Route::post('/token/verify','UserAuthenticationController@verifyLogin')->name('token-verify');
Route::get('/doctordepartments','UserAuthenticationController@doctorDepartments')->name('token-verify');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/update/profile','UserAuthenticationController@detailsUpdate')->name('profile-update');
});
Route::post('/blood/request','HomeController@bloodRequest')->name('blood-request');
Route::post('/nearer/blood/request','HomeController@nearerBloodRequest')->name('nearer-blood-request');
Route::prefix('nursing')->group(function () {
    include('nursing.php');
});

Route::prefix('doctor')->group(function () {
    Route::post('/register','DoctorAuthenticationController@register')->name('doctor.register');
    Route::post('/login','DoctorAuthenticationController@login')->name('doctor.login');
    Route::post('/loginotpveritfy','DoctorAuthenticationController@loginOtpVerification')->name('doctor.login.otp.verify');

    Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/single/{id}','DoctorAuthenticationController@get')->name('doctor.get');
    Route::get('/activity/change/{id}/{state}','DoctorAuthenticationController@changeActivity')->name('doctor.changeActivity');
    Route::post('/contacts/query','DoctorAuthenticationController@postContact')->name('doctor.post-contact');
    Route::post('/update/dp','DoctorAuthenticationController@updateDp')->name('doctor.updateDp');
    
    });
    Route::get('/update/online/{id}/{value}','DoctorAuthenticationController@updateOnline')->name('doctor.updateOnline');
    Route::get('/get/online/{id}','DoctorAuthenticationController@getOnline')->name('doctor.getOnline');
});


