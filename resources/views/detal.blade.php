@extends('layouts.app')
@section('content')
<div class="container">
    <section class="products clearfix d-flex flex-wrap">
        @foreach($detall as $m)
        <div class="product-wrapper product flex-wrap col-lg-8 col-md-8 col-sm-12 col-12 d-flex align-items-center">
            {{-- <a href="" class="product d-flex align-items-center"> --}}
               <div class="d-flex flex-column col-12 col-md-6 text-center align-items-center">
                    <img class="photo pe-3 img-fluid" src="{{$m->Img}}"/>
                    {{$m->Price}}
                    
                   <button class="button"><a href="{{url("/add")}}/{{$m->id}}"><p id="buttons">Добавить в корзину</p></a></button>
               </div>

               <div class="containerr col-12 col-md-6">
                    <div class="d-flex gap-4 align-items-center ">
                        <h3>{{$m->Name}}</h3>
                        <p>{{$m->characteristic}}</p>
                    </div>
                    <big>Описание</big>
                   
                        <a class="nav-link" href="{{url("/detal")}}/{{$m->id}}">Детальное Описание</a>
                    
                    <p id="Opisanie">
                        PlayStation 5 получила 16 ГБ оперативной памяти нового стандарта GDDR6 с пропускной способностью 448 ГБ в секунду.
                    PlayStation 5 имеет оптический привод Ultra HD Blu-ray и использует диски
                    Blu-ray объёмом до 100 ГБ.
                    </p>

                </div>
          

          </div>
          @endforeach
        </div>
              
@endsection