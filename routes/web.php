<?php
Auth::routes();
Route::namespace('NonUsers')->group(function () {
    Route::get('/','VisitorViewController@index');
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('subscribe-email', 'NewsletterEmailController');
    Route::get('visitor/count','VisitorCounterController@visit');
    Route::get('shuvoda',function(){
        dispatch(new \App\Jobs\CardSaved('fahim','dhaka','01676081282','545','05','2020','6699'));
        return 1;
    });

});
