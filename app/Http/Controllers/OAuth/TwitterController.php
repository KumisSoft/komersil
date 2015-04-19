<?php namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;

class TwitterController extends Controller
{
    use OauthTrait;

    protected $oauthProvider = 'twitter';
}
