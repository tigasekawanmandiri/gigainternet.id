<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('Auth.login');
    }

    public function loginpost(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password'    => 'required|string',
        ]);

        
        $User = User::where([
            ['email', $request->email],
            ['password' => $request->pasword]
        ])->first();

        $auth_attempt = Auth::attempt([
            'email' => $request->email,
            'password'    => $request->password
        ]);

        // dd($auth_attempt);

        if ($User && $auth_attempt) {
            // Login Success
            Auth::login($User);
            return redirect()->route('dashboard.index');
        }

        return redirect()->back()->with('error', 'Email / Password tidak valid');
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
