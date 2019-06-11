<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function ()
    {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('program', 'Admin\ProgramController');

    Route::resource('mustahiq', 'Admin\MustahiqController');

    Route::resource('transaction', 'Admin\TransactionController');
    Route::get('/transaction/success', function(){
        return view('admin.transaction.success');
    })->name('transaction.success');

    Route::get('/user', 'Admin\UserController@index')->name('user.index');
});