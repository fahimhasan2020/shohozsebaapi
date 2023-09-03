<?php
Route::get('/','UserController@index')->name('user');
Route::post('/data-update','UserController@uploadPhoto')->name('user');
Route::post('/login','UserAuthenticationController@login')->name('post-login');
Route::post('/get/user/data/{id}','UserAuthenticationController@getLoggedInUserData')->name('getDate');
Route::post('/social/login','UserAuthenticationController@socialLogin')->name('social-login');
Route::post('/otp/verify','UserAuthenticationController@loginOtpVerification')->name('post-verify');
Route::post('/token/verify','UserAuthenticationController@verifyLogin')->name('token-verify');
Route::get('/doctordepartments','UserAuthenticationController@doctorDepartments')->name('token-verify');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/update/profile','UserAuthenticationController@detailsUpdate')->name('profile-update');
});
Route::post('/update/coordinates','UserAuthenticationController@updateUserLocation')->name('profile-update-location');

Route::post('/blood/request','HomeController@bloodRequest')->name('blood-request');
Route::post('/nearer/blood/request','HomeController@nearerBloodRequest')->name('nearer-blood-request');
Route::get('/get/blood/request/{userId}','HomeController@getRequestByUserId')->name('get-blood-request-user');
Route::get('/get/bloodrequest/near/{id}','HomeController@getRequestNearById')->name('get-blood-request-near-user');
Route::get('/bloodrequest/data/{id}','HomeController@getBloodRequestById')->name('get-blood-request-near-user');
Route::put('/update/blood/request/{id}','HomeController@closeBloodRequest')->name('update-blood-request-user');


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


Route::post('/create/review','UserAppointmentController@postReview')->name('appointment_review_post');
Route::get('/review/getuser/{id}','UserAppointmentController@getReviewByUserId')->name('appointment_review_get_user');
Route::get('/review/getdoctor/{id}','UserAppointmentController@getReviewByDoctorId')->name('appointment_get_doctor');
Route::get('/review/getappointment/{id}','UserAppointmentController@getReviewByAppointmentId')->name('appointment_get_review_doctor');
Route::get('/review/changestatus/{id}/{status}','UserAppointmentController@changeAppointmentReviewStatus')->name('appointment__review_change_status');
Route::get('/lastappointeddoctor/{id}','UserAppointmentController@lastAppointedDoctor')->name('appointment_doctor_last');
Route::get('/search/doctor/{searchText}','UserAppointmentController@searchDoctor')->name('search.doctor');



Route::get('/get/random/medicine','MedicineController@getRandomMedicine')->name('get-random-medicine');
Route::get('/search/medicine/{value}','MedicineController@searchMedicine')->name('get-random-search-medicine');
Route::get('/medicine/{id}','MedicineController@getMedicineById')->name('get-random-by-id');
Route::post('/create/medicine/order','MedicineController@postMedicineOrder')->name('post-medicine-order');
Route::get('/get/medicine/order/user/{id}','MedicineController@getMedicineOrderByUserId')->name('post-medicine-order');

