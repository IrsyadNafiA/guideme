@extends('layouts.main')

@section('main')
<div class="pt-16">
    <div class="relative">
        <img class="w-full object-cover h-80 brightness-90" src="{{ asset('images/'.$arrivalm->image)}}" alt="beach">
        <div class="absolute text-white text-center right-0 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <h1 class="font-black text-5xl">{{$arrivalm->title}}</h1>
            <p>{{$arrivalm->address}}</p>
        </div>
    </div>
</div>
@endsection