<?php namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;

class FacebookController extends Controller
{
    use OauthTrait;

    protected $oauthProvider = 'facebook';
}
