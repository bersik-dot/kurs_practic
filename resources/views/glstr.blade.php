@extends('layout')
@section('title')
Киношка
@endsection
@section('main')
       <div class="rasp">
        <div class="rasp1">Расписание сеансов</div>
       <div class="rasp2">
        <div >Сегодня</div>
       </div>
       </div>
 <div class="seans">
    @foreach($films as $film) 
    <a href="/formaf{{$film->id}}" class="s1">
    <div class="kin1">
        <div id="kin11"><img src="{{$film->img}}"></div>
        <div class="kin12">
            <div class="kin121">{{$film->name}}</div>
            <div class="kin122">
                <div class="kin1221">{{$film->tim1}}</div>
                <div class="kin1221">{{$film->tim2}}</div>
                <div class="kin1221">{{$film->tim3}}</div>
            </div>
        </div>
    </div></a>
    @endforeach
    
 </div>
@endsection