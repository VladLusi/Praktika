@extends('layouts.app')
@section('content')
<div class="container">
    <section class="products clearfix d-flex flex-wrap">
        @foreach($tov as $m)
        <div class="product-wrapper product col-lg-6 d-flex align-items-center">
            {{-- <a href="" class="product d-flex align-items-center"> --}}
               <div class="d-flex flex-column">
                    <img class="photo pe-3 img-fluid" src="{{$m->Img}}"/>
                    {{$m->Price}}
               </div>

               <div class="containerr">
                    <div class="d-flex gap-4 align-items-center">
                        <h3>{{$m->Name}}</h3>
                        <p>{{$m->Data}}</p>
                    </div>
                    <big>Описание</big>
                    <p id="Opisanie">
                        PlayStation 5 получила 16 ГБ оперативной памяти нового стандарта GDDR6 с пропускной способностью 448 ГБ в секунду.
                    PlayStation 5 имеет оптический привод Ultra HD Blu-ray и использует диски
                    Blu-ray объёмом до 100 ГБ.
                    </p>
                    {{-- {{$r->Name}}
                    {{$r->Price}}
                    {{$r->Data}} --}}
                </div>
            {{-- </a> --}}

          </div>
          @endforeach
        </div>

      </div>

    </section>

</div>

@endsection