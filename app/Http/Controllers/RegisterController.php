<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'name' => 'required|min:2|max:20',
            'sname' => 'required|min:2|max:20',
            'password' => 'required|confirmed|min:2|max:20'
          ]);
        $user = User::create([
            'name' => $request->name,
            'sname' => $request->sname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rpassword' => $request->password_confirmation
        ]);
        $n=$user->name;
        $s=$user->sname;
        $_SESSION['n']=$n;
        $_SESSION['s']=$s;
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
