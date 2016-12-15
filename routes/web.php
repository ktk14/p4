<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/* Oil Resource */
# Index page to show all the oils
Route::get('/oils', 'OilController@index')->name('oils.index')->middleware('auth');

# Show a form to create a new oil
Route::get('/oils/create', 'OilController@create')->name('oils.create')->middleware('auth');

# Process the form to create a new oil
Route::post('/oils', 'OilController@store')->name('oils.store');

# Show an individual oil
Route::get('/oils/{name}', 'OilController@show')->name('oils.show');

# Show form to edit an oil
Route::get('/oils/{id}/edit', 'OilController@edit')->name('oils.edit');

# Process form to edit an oil
Route::put('/oils/{id}', 'OilController@update')->name('oils.update');

# Get route to confirm deletion of oil
Route::get('/oils/{id}/delete', 'OilController@delete')->name('oils.destroy');

# Delete route to actually destroy the oil
Route::delete('/oils/{id}', 'OilController@destroy')->name('oils.destroy');

/* Homepage */
Route::get('/', 'PageController@welcome');

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');
