<?php namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;

class GoogleController extends Controller
{
    use OauthTrait;

    protected $oauthProvider = 'google';
}
