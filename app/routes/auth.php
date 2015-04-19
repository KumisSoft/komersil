<?php

// -----------------------------------------------------------------------------------------------------------
// Authentication and Registration
// -----------------------------------------------------------------------------------------------------------


Route::group(['namespace' => 'Auth'], function ()
{
    get('login', [
        'as' => 'login',
        'uses' => 'AuthController@create'
    ]);

    post('login', [
        'as' => 'login',
        'uses' => 'AuthController@store'
    ]);

    get('logout', [
        'as' => 'logout',
        'uses' => 'AuthController@destroy'
    ]);

    get('register', [
        'as' => 'register',
        'uses' => 'RegistrationController@create'
    ]);

    post('register', [
        'as' => 'register',
        'uses' => 'RegistrationController@store'
    ]);
});
