<?php

Route::group(['prefix' => 'oauth', 'namespace' => 'OAuth'], function ()
{
    post('facebook', ['as' => 'oauth.facebook', 'uses' => 'FacebookController@redirectToProvider']);
    get('facebook', ['as' => 'oauth.facebook', 'uses' => 'FacebookController@handleProviderCallback']);

    post('twitter', ['as' => 'oauth.twitter', 'uses' => 'TwitterController@redirectToProvider']);
    get('twitter', ['as' => 'oauth.twitter', 'uses' => 'TwitterController@handleProviderCallback']);

    post('google', ['as' => 'oauth.google', 'uses' => 'GoogleController@redirectToProvider']);
    get('google', ['as' => 'oauth.google', 'uses' => 'GoogleController@handleProviderCallback']);

    post('github', ['as' => 'oauth.github', 'uses' => 'GitHubController@redirectToProvider']);
    get('github', ['as' => 'oauth.github', 'uses' => 'GitHubController@handleProviderCallback']);
});
