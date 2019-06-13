<?php

Route::get('/default', function () {
    return view('templates.default');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ->middleware('auth', 'role:Admin')
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('program', 'Admin\ProgramController');

    Route::resource('mustahiq', 'Admin\MustahiqController');

    Route::resource('bank', 'Admin\BankController');

    Route::get('/user', 'Admin\UserController@index')
    ->name('admin.user.index');

    // View transaksi
    Route::get('/transaction', 'Admin\TransactionController@index')
    ->name('admin.transaction.index');;
    Route::get('/transaction/success', 'Admin\TransactionController@success')
    ->name('admin.transaction.success');
    Route::get('/transaction/failed', 'Admin\TransactionController@failed')
    ->name('admin.transaction.failed');

    // Update status transaksi
    Route::put('/transaction/sesuai/{transaction}' ,'Admin\TransactionController@sesuai')
    ->name('admin.transaction.sesuai');
    // Update status transaksi
    Route::put('/transaction/ditolak/{transaction}' ,'Admin\TransactionController@ditolak')
    ->name('admin.transaction.ditolak');

});

Route::get('/user', 'Admin\UserController@index')->name('user.index');

Route::get('/donasi', 'TransactionController@index')->name('trancastion.index');

Route::get('/donasi', 'TransactionController@create')->name('transaction.create');

Route::post('/donasi', 'TransactionController@store')->name('transaction.store');

Route::get('/validation', 'TransactionController@index');

Route::get('/upload/{upload}/edit', 'TransactionController@edit')->name('transaction.edit');

Route::put('/upload', 'TransactionController@update')->name('transaction.update');

