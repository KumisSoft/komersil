<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Database\QueryException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDOException;


class RegistrationController extends Controller {

    public function create()
    {
        return view('frontend.auth.register');
    }

    public function store(Request $request)
    {
        $this->registerUser($request);

        return redirect()->intended('/');
    }

    private function registerUser($request)
    {
        $user = new User;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try
        {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => $request->get('password'),
                //                'username' => Str::slug($request->get('name')),
            ]);

            DB::commit();

        }
        catch (QueryException $e)
        {
            DB::rollback();

            redirect()->back()->withError('User dengan informasi ');
        }
        catch (PDOException $e)
        {
            DB::rollback();

            redirect()->back()->withError('User dengan informasi ');
        }
        catch (\Exception $e)
        {
            DB::rollback();

            redirect()->back()->withError('User dengan informasi ');
        }

        event('user.registered', $user);

        auth()->once(['email' => $user->email, 'password' => $user->password]);

    }

}
