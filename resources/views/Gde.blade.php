@extends('layouts.app')
@section('content')
@foreach ($Nas as $m )
<div class="map">
    <div class="center">
    <img class="mapp" src="{{$m->Img}}"/>
    </div>
    <p id="tr">
        {{$m->Adres}}
        <br>
        {{$m->email}}
        <br>
        {{$m->Phone}}
    </p>
</div>


@endforeach

@endsection
