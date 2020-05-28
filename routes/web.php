<?php







Route::get('/',function(){
    return view('guest.welcome');
});
Route::get('/about',function(){
    return view('guest.about');
});
Route::get('/services',function(){
    return view('guest.services');
});
Route::get('/contact',function(){
    return view('guest.contact');
});



Route::get('/cars',function(){
    return view('guest.cars');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'cars'], function () {
    // Route::get('/', 'CarController@index');
    Route::get('/{id}', 'HomeController@findCarById');


});


Route::post('/reservation/create','ReservationController@create')->name('reservation.create');
Route::get('/my-reservations','ReservationController@show')->name('myreservations');
Route::get('/reservations/{id}','ReservationController@findOne');
Route::post('/reservations-callback','ReservationController@callback');

Route::get('/profile','HomeController@getProfile');
Route::post('/profile-update','HomeController@UpdateProfile')->name('update-profile');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});



