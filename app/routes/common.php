<?php

// -----------------------------------------------------------------------------------------------------------
// Home sweet home
// -----------------------------------------------------------------------------------------------------------

get('/', ['as' => 'home', 'uses' => 'HomeController@index']);


// -----------------------------------------------------------------------------------------------------------
// Product and Items
// -----------------------------------------------------------------------------------------------------------

get('items', ['as' => 'item.index', 'uses' => 'CategoryController@index']);
get('item/{slug}', ['as' => 'item.show', 'uses' => 'ItemController@show']);

// -----------------------------------------------------------------------------------------------------------
// FAQ
// -----------------------------------------------------------------------------------------------------------

get('faq', ['as' => 'faq.index', 'uses' => 'HomeController@index']);
get('faq/{slug}', ['as' => 'faq.show', 'uses' => 'HomeController@show']);

