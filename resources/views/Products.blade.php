@extends('layouts.app')
@section('content')
@foreach($ez as $r)
<div class="container">
    <section class="products clearfix">
        <div class="product-wrapper">
            <a href="" class="product">
               <img class="photo" src="{{$r->Img}}"/>
                <br>
            </a>
        </div>

    </section>

</div>
@endforeach
<div class="container">
    <section class="products clearfix">
        <div class="product-wrapper">
            <a href="" class="product">
               <img class="photo" src="{{$r->Img}}"/>
                <br>
                {{$r->Name}}
                {{$r->Price}}
                {{$r->Data}}
            </a>
        </div>

    </section>
@endsection
