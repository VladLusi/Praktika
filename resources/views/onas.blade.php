@extends('layouts.app')
@section('content')
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
  <div class="swiper-button-next">
    <img src="/public/img/pngtree-vector-forward-icon-png-image_931210.jpg" id="phito"/>
    <img src="/public/img/61022.png" id="phooto"/>

<input type="hidden" id="ff" value="0"></span>
@foreach($yi as $p)
@if ($loop->first)
<img class="photo  active" src="{{$p->Img}}" alt="Первый слайд">
      @else
<img class="photo w-100" src="{{$p->Img}}" alt="Первый слайд">
@endif



@endforeach
</div>
    </div>
</div>
@endsection
