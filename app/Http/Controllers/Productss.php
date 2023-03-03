<?php

namespace App\Http\Controllers;

use App\Models\Gde;
use Illuminate\Http\Request;

class Productss extends Controller
{

    public function show(){
        $t=\App\Models\Products::orderBy("id", "desc")->limit(5)->get();
        return view('Products', ['ez'=>$t]);
    }
    public function Onas(){
        $u=\App\Models\Visp::all();
        return view('onas', ['yi'=>$u]);
    }
    public function Tovars(){
        $u=\App\Models\Visp::all();
        return view('tovar', ['tovar'=>$u]);
    }
    public function Gden(){
        $i=Gde::all();
        return view('Gde', ['Nas'=>$i]);
}

}
