@extends('layouts.app')
@section('content')
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
  <div class="swiper-button-next">
    <img src="/public/img/61022.png" id="phooto"/>
    <img src="/public/img/pngtree-vector-forward-icon-png-image_931210.jpg" id="phito"/>
<input type="hidden" id="ff" value="0"></span>
@foreach($yi as $p)
@if ($loop->first)
<img class="photo  active" src="{{$p->Img}}" alt="Первый слайд"id="phito"/>
      @else
<img class="photo w-100" src="{{$p->Img}}" alt="Первый слайд"id="phooto"/>
@endif
@endforeach
<div class="tetx">
    @foreach($yi as $p)
    <p id="text">
        {{$p->Name}}
        </p>
        @endforeach

    </div>
    <p class="text">
        Наши новинки!
    </p>
    <p class="Devis">
        Если вы не знаете где покупать игры по выгодным ценам, то скорее к нам!
    </p>
</div>
    </div>

</div>

@endsection
