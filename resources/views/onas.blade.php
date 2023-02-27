@extends('layouts.app')
@section('content')

@foreach($yi as $p)

{{-- <div class="slider middle">
   <div class="slides">
      <input type="radio" name="r" id="r1" checked>
      <input type="radio" name="r" id="r2">
      <input type="radio" name="r" id="r3">
      <input type="radio" name="r" id="r4">
      <div class="slides1"> --}}

         <img  src="{{$loop->Img}} / {{$loop->count}}" alt="Изображение"  class="imgi active"/>

         {{-- </div> --}}
      {{-- <div class="slides2"> --}}
      {{-- </div> --}}
      {{-- <div class="slides3"> --}}
      {{-- </div> --}}
      {{-- <div class="slides4"> --}}



      {{-- </div> --}}
   {{-- </div>
   <div class="navigation">
      <label for="r1" class="bar"></label>
      <label for="r2" class="bar"></label>
      <label for="r3" class="bar"></label>
      <label for="r4" class="bar"></label>
   </div>
</div> --}}
@endforeach

@endsection
