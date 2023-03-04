@extends('layouts.app')
@section('content')
<div class="container">
    <section class="products clearfix d-flex flex-wrap">
        @foreach($detall as $m)
        <div class="product-wrapper product col-lg-6 d-flex align-items-center">
            {{-- <a href="" class="product d-flex align-items-center"> --}}
               <div class="d-flex flex-column">
                    <img class="photo pe-3" src="{{$m->Img}}"/>
                    {{$m->Price}}
               </div>
               <div class="containerr">
                    <div class="d-flex gap-4 align-items-center">
                        <h3>{{$m->Name}}</h3>
                        <p>{{$m->Data}}</p>
                    </div>
                    <p>{{$m->characteristic}}</p>
                    {{-- {{$r->Name}}
                    {{$r->Price}}
                    {{$r->Data}} --}}
                </div>
            {{-- </a> --}}

          </div>
          @endforeach
        </div>

      </div>

@endsection