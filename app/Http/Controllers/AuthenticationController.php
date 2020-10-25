<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Exception;
use Illuminate\Support\Facades\Date;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function login()
    {
        return view('login');
    }
    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only(['username', 'password']);
        $user = User::where('username',$request->username)->first();

        if (Auth::attempt($credentials)) {
           return redirect()->route('dashboard');

        }else{
            return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
        }
    }
    public function show_signup_form()
    {
        return view('backend.register');
    }
    public function regiister(Request $request)
    {   
        try {
            $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
     
            $user = User::create([
                'firstname' => trim($request->input('firstname')),
                'lastname' => trim($request->input('lastname')),
                'username' => trim($request->input('username')),
                'email' => strtolower($request->input('email')),
                'password' => bcrypt($request->input('password')),
                'to_date' => date("Y/m/d")
            ]);
    
            return redirect('login')->with('success', 'Successfully Signed Up');
        } catch (Exception $e) {
            dd($e);
        }
        
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
