<?php

namespace App\Http\Controllers;


use App\Models\film;
use App\Models\novinki;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    public function glstr(){
       $films = new film();
        return view('glstr', ['films' => $films->all()]);
    }
    public function reg(){

        return view('register');
    }
    public function crush(){

        return view('crush');
    }
    public function ok(){

        return view('bilet');
    }
    public function novinki(){
        $novinki = new novinki();
        return view('novinki',['novinki'=>$novinki->all()]);
    }
    public function avtoriz(){
        return view('avtoriz');
    }
    public function c(){
        return view('formaf');
    }
    public function store(Request $request){
       dd($request);
    }
    public function destroy(Request $request){
        Auth::logout();

        return redirect()->route('gl');
    }
    public function index(){
      $logi = new user();
      return view('index', ['logi' => $logi->all()]);
  }
  public function onas(){
    return view('onas');
}
public function akcii(){
    return view('akcii');
}
  }