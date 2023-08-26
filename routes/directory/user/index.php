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
    include('doctor.php');
});

Route::post('/create/appointment','UserAppointmentController@postAppointment')->name('appointment_post');
Route::get('/appointment/getuser/{id}','UserAppointmentController@getByUserId')->name('appointment_get_user');
Route::get('/appointment/getdoctor/{id}','UserAppointmentController@getByDoctorId')->name('appointment_get_doctor');
Route::get('/appointment/changestatus/{id}/{status}','UserAppointmentController@changeAppointmentStatus')->name('appointment_change_status');


Route::post('/create/prescription','UserAppointmentController@postPrescription')->name('prescription_post');
Route::get('/prescription/byuserid/{id}','UserAppointmentController@getPrescriptionByUserId')->name('prescription_get_by_user_id');
Route::get('/prescription/bydoctorid/{id}','UserAppointmentController@getPrescriptionByDoctorId')->name('prescription_get_by_doctor_id');
Route::get('/prescription/byappointmentid/{id}','UserAppointmentController@getPrescriptionByAppointmentId')->name('prescription_get_by_appointment_id');


Route::post('/create/appointment/history','UserAppointmentController@postAppointmentHistory')->name('appointment_history_post');
Route::get('/appointment/history/byuserid/{id}','UserAppointmentController@getAppointmentHistoryByUserId')->name('appointment_history_get_by_user_id');

Route::get('/appointment/history/bydoctorid/{id}','UserAppointmentController@getAppointmentHistoryByDoctorId')->name('appointment_history_get_by_doctor_id');
Route::get('/appointment/history/byappointmentid/{id}','UserAppointmentController@getAppointmentHistoryByAppointmentId')->name('appointment_history_get_by_appointment_id');

Route::post('/create/appointment/transection/record','UserAppointmentController@postAppointmentTransectionRecord')->name('appointment_transection_record');
Route::get('/appointment/transection/byuserid/{id}','UserAppointmentController@getAppointmentTransectionHistoryByUserId')->name('appointment_transection_history_get_by_user_id');
Route::get('/appointment/transection/bydoctorid/{id}','UserAppointmentController@getAppointmentTransectionHistoryByDoctorId')->name('appointment_transection_history_get_by_doctor_id');
Route::get('/appointment/transection/byappointmentid/{id}','UserAppointmentController@getAppointmentTransectionHistoryByAppointmentId')->name('appointment_transection_history_get_by_appointment_id');