<?php namespace App\Http\Controllers\OAuth;

use App\User;
use Socialize;

trait OauthTrait
{
    public function redirectToProvider()
    {
        return Socialize::with($this->oauthProvider)->redirect();
    }

    public function handleProviderCallback()
    {
        $socialize = Socialize::with($this->oauthProvider)->user();

        $provider = "{$this->oauthProvider}_id";

        $user = User::where($provider, $socialize->getId())->first();

        // If user was registered
        if ($user)
        {
            auth()->login($user);

            return redirect()->intended('/');
        }


        $user = new User();

        $user->name = $socialize->getName();
        $user->email = $socialize->getEmail();
        $user->avatar = $socialize->getAvatar();
        $user->password = $socialize->getEmail();
        $user->{$provider} = $socialize->getId();

        $user->save();

        auth()->login($user);

//        session()->put('socialize', (array) $socialize);

        return redirect('register');
    }
}
