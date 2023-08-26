<?php
Route::post('/register','DoctorAuthenticationController@register')->name('doctor.register');
Route::get('/account/activity/{id}','DoctorAuthenticationController@changeDoctorActivity')->name('doctor.account-activity');
Route::delete('/account/delete/{id}','DoctorAuthenticationController@doctorAccountDelete')->name('doctor.account-activity');
Route::post('/login','DoctorAuthenticationController@login')->name('doctor.login');
Route::post('/loginotpveritfy','DoctorAuthenticationController@loginOtpVerification')->name('doctor.login.otp.verify');

Route::middleware(['auth:sanctum'])->group(function () {
Route::get('/single','DoctorAuthenticationController@get')->name('doctor.get');
Route::get('/activity/change/{id}/{state}','DoctorAuthenticationController@changeActivity')->name('doctor.changeActivity');
Route::post('/contacts/query','DoctorAuthenticationController@postContact')->name('doctor.post-contact');
Route::post('/update/dp','DoctorAuthenticationController@updateDp')->name('doctor.updateDp');

});
Route::get('/update/online/{id}/{value}','DoctorAuthenticationController@updateOnline')->name('doctor.updateOnline');
Route::get('/get/online/{id}','DoctorAuthenticationController@getOnline')->name('doctor.getOnline');