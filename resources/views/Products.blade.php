@extends('layouts.app')
@section('content')
@foreach($ez as $r)

<div class="container">
    {{$r->Name}}
    {{$r->Price}}
    {{$r->Data}}
    <br>
    <img class="photo" src="{{$r->Img}}"/>
</div>
@endforeach
@endsection
