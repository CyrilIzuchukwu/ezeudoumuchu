<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';


    public function authenticated()
    {

        $user = User::find(Auth::id());
        // $user->update(['last_login_at' => now()]);



        // Handle admin login
        if ($user->role === 'admin') {
            return redirect('admin/dashboard')->with('success', 'Welcome to Admin Dashboard');
        }

        // Handle user login with email verification check
        if (!$user->email_verified_at) {

            Auth::logout();

            return redirect('/');
        }

        

        // return redirect()->route('user.dashboard')->with('success', 'Logged in successfully');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
