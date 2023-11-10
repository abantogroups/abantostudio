<?php

Route::group([
        'namespace' => 'Abanto\AbantoStudio\Http\Controllers',
        'prefix'    => 'abantostudio',
], function () {

    //dashbord;
    Route::get('/', 'AbantoStudioController@index')->name('AbantoStudio');
    Route::get('profile', 'UsersController@profile')->name('profile');
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');

});
