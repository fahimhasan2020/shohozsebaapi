<?php
Route::get('/','UserController@index')->name('user');
Route::post('/login','UserAuthenticationController@login')->name('post-login');
Route::post('/register','UserAuthenticationController@register')->name('post-register');
Route::get('/basic-configs/lists','UserController@userConfigs')->name('user.configs');



// nursing service routes
Route::post('/nursing/register','NursingAuthController@register')->name('nursing.register');
Route::post('/nursing/login','NursingAuthController@login')->name('nursing.login');
Route::post('/nursing/loginotpveritfy','NursingAuthController@loginOtpVerification')->name('nursing.login.otp.verify');
Route::get('/nursing/single/{id}','NursingAuthController@get')->name('nursing.get');
Route::get('/nursing/activity/change/{id}/{state}','NursingAuthController@changeActivity')->name('nursing.changeActivity');
Route::post('/nursing/contacts/query','NursingAuthController@postContact')->name('nursing.post-contact');
Route::post('/nursing/update/dp','NursingAuthController@updateDp')->name('nursing.updateDp');