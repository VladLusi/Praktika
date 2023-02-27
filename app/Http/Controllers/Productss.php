<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productss extends Controller
{

    public function show(){
        $t=\App\Models\Products::all();
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
}


