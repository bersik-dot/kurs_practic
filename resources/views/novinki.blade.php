@extends('layout')
@section('title')
Новинки
@endsection
@section('main')
<div class="namee">
    <div class="namee1"> Ближайшие премьеры</div>
           </div>
           <div class="seansssss">
            @foreach($novinki as $nov) 
    <div class="kin1">
        <div id="kin11"><img src="{{$nov->img}}"></div>
        <div class="kin12">
            <div class="nonm">{{$nov->name}}</div>
        </div>
    </div>
    @endforeach
           </div>
           </div>
@endsection