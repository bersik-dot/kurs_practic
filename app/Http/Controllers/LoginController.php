<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class LoginController extends Controller
{
    public function create(){
        return view('avtoriz');
    }
    public function store(Request $request){
        $credentials = $valid = $request->validate([
             'email' => 'required|min:4|max:100',
            'password' => 'required|string'
           ]);
        
         if(! Auth::attempt($credentials)){
             throw ValidationException::withMessages([
                 'email' => 'Ты потерялся?'
             ]);
         }
         $user = auth()->user();
         $n=$user->name;
         $s=$user->sname;
         $_SESSION['n']=$n;
         $_SESSION['s']=$s;
        $row = $request->all();
       return redirect()->route('gl');
    }
    public function destroy(Request $request){
        Auth::logout();

        return redirect()->route('gl');
    }
}
