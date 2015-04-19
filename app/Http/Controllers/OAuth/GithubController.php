<?php namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;

class GithubController extends Controller
{
    use OauthTrait;

    protected $oauthProvider = 'github';

    protected $redirectTo = '/';
}
