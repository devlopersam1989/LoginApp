<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'username' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->pull('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not match!');
            }
        } else {
            return back()->with('fail', 'email address not register');
        }

    }
    public function loginPageValidation(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'email'=> 'required|email:rfc,dns',
                'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/x|confirmed',
                'password_confirmation' => 'required'
        ]);
        
        return redirect('login');
    }

}
