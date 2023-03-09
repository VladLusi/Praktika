<?php

namespace App\Http\Controllers;

use App\Models\Gde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
 public function detal($id){
    $o=\App\Models\Tovars::where('id',$id)->get();
    return view('detal', ['detall'=>$o]);

 }
 public function Baskets(){
     $n=\App\Models\Basskets::all();
     return view('buttons', ['basketss'=>$n]);
 }
 public function Basketsy($id){
    $id = Auth::id();
    $n=\App\Models\Basskets::create([
        'id_user'=>$id,
        "id_product"=> $id,
        "count"=> 2,
    ]);
    return view('buttons', ['basketss'=>$n]);
}
 public function Oformlenie(){
    $of=\App\Models\Oformlenie::all();
    return view('Oformlenie', ['ofo'=>$of]);
 }

}
