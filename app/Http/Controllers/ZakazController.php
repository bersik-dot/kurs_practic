<?php

namespace App\Http\Controllers;

use App\Models\bilet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZakazController extends Controller
{
    public function create(){
        return view('zakaz');
    }
    public function store(Request $request){
        $valid = $request->validate([
            'ryad' => 'required|min:1|max:5|integer',
            'mesto' => 'required|min:1|max:5|integer',
            'numb_kart' => 'required|min:16|max:16',
            'year' => 'required|min:4|max:5',
            'CVC' => 'required|min:3|max:3'
          ]); 
                if(DB::table('bilets')->where('ryad', $request['ryad'])->where( 'mesto', $request['mesto'])->exists()){
                    return view('zakaz_crush');
                }
        $bilet = bilet::create([
            'ryad' => $request->ryad,
            'mesto' => $request->mesto,
            'numb_kart' => $request->numb_kart,
            'year' => $request->year,
            'CVC' => $request->CVC,
        ]);
        $r=$bilet->ryad;
        $m=$bilet->mesto;
        $_SESSION['t']='10:00';
        $_SESSION['z']='1';
        $_SESSION['r']=$r;
        $_SESSION['m']=$m;
        return redirect()->route('ok');
    }
}
