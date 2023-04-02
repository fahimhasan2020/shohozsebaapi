<?php
Route::post('/register','NursingAuthController@register')->name('nursing.register');
Route::post('/login','NursingAuthController@login')->name('nursing.login');
Route::post('/loginotpveritfy','NursingAuthController@loginOtpVerification')->name('nursing.login.otp.verify');

Route::middleware(['auth:sanctum'])->group(function () {
Route::get('/single/{id}','NursingAuthController@get')->name('nursing.get');
Route::get('/activity/change/{id}/{state}','NursingAuthController@changeActivity')->name('nursing.changeActivity');
Route::post('/contacts/query','NursingAuthController@postContact')->name('nursing.post-contact');
Route::post('/update/dp','NursingAuthController@updateDp')->name('nursing.updateDp');
});