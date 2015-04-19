<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function create()
    {
        return view('frontend.auth.login');
    }

    public function store(Request $request)
    {
        $credentials['username'] = $request->get('username');
        $credentials['password'] = $request->get('password');

        if (auth()->attempt($credentials, true))
        {
            dd(auth()->getUser());

            if (auth()->user()->hasRole('super', 'admin'))
            {
                dd('asddas');
                return redirect()->intended('admin');
            }

            dd('asddas');

            return redirect()->intended('/');
        }

        return redirect()->back()->withInput();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->intended('/');
    }


}
