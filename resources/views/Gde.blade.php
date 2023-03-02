@extends('layouts.app')
@section('content')
@foreach ($Nas as $m )
<div class="map">
    <div class="center">
    <img class="mapp" src="{{$m->Img}}"/>
    </div>
    <p id="tr">
        {{$m->Adres}}
        {{$m->email}}
        {{$m->Phone}}
    </p>
</div>


@endforeach

@endsection
