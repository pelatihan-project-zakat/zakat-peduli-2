<?php

Route::get('/default', function () {
    return view('templates.default');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->middleware('auth', 'role:Admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('program', 'Admin\ProgramController');

    Route::resource('mustahiq', 'Admin\MustahiqController');

    Route::resource('bank', 'Admin\BankController');

    Route::get('/user', 'Admin\UserController@index')->name('user.index');

    Route::resource('transaction', 'Admin\TransactionController');

    Route::get('/transaction/success', function () {
        return view('admin.transaction.success');
    })->name('transaction.success');
});

Route::get('/user', 'Admin\UserController@index')->name('user.index');

Route::get('/donasi', 'TransactionController@index')->name('trancastion.index');

Route::get('/donasi', 'TransactionController@create')->name('transaction.create');

Route::post('/donasi', 'TransactionController@store')->name('transaction.store');

Route::get('/validation', 'TransactionController@index');

Route::get('/upload/{upload}/edit', 'TransactionController@edit')->name('transaction.edit');

Route::put('/upload', 'TransactionController@update')->name('transaction.update');
