<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
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

    public function loginAdmin(Request $request){
        $validation = Validator::make($request->all(), [
            "email" => "required|max:255",
            "password" => "required|max:255" 
        ]);

        if($validation->fails()){
            return back()->with([
                "message" => "You did not enter email or password"
            ]);
        }
        else{
            $email = $request->email;
            $password = $request->password;



            if(Auth::guard("admin")->attempt([
                "email" => $email,
                "password" => $password,
                "is_active" => true
            ], $request->get("remember"))){
                return redirect()->intended("/flamylion/backend/admin/home");
                
            }

            return back()->with([
                "message" => "We could not log you in at the moment"
            ]);
        }
    }
}
