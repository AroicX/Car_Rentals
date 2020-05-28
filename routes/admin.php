<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


Route::group(['prefix' => 'cars'], function () {
    Route::get('/', 'AdministratorController@getAllCars');
    Route::get('/findCar/{id}', 'CarController@findByID');
    Route::get('/sort/{name}', 'CarController@findByName');
    Route::post('add', 'CarController@create')->name('cars.add');
    Route::post('edit', 'CarController@update')->name('cars.update');
    Route::get('/delete/{id}', 'CarController@delete')->name('cars.delete');


});
Route::group(['prefix' => 'reservations'], function () {
    Route::get('/', 'AdministratorController@getReservation');
  
});
Route::group(['prefix' => 'client'], function () {
    Route::get('/', 'AdministratorController@getClients');
  
});

