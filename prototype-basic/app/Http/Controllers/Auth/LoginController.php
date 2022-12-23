<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function redirectToGoogle(){
        return Socialite::driver('google')->stateless()->redirect();
        }

    public function handleGoogleCallback(){

        $user = Socialite::driver('google')->stateless()->user();
            
            $this->_registerorLoginUser($user);
            return redirect()->route('home');
        }

        protected function _registerOrLoginUser($data){
            $user = User::where('email',$data->email)->first();
              if(!$user){
                 $user = new User();
                 $user->name = $data->name;
                 $user->email = $data->email;
                 $user->provider_id = $data->id;
                 $user->save();
              }
            Auth::login($user);
            }
            
}
