@extends('layouts.main')

@section('main')
<div class="pt-16">
    <div class="relative">
        <img class="w-full object-cover h-80 brightness-90" src="{{ asset('images/'.$data->image)}}" alt="beach">
        <div class="absolute text-white text-center right-0 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <h1 class="font-black text-5xl">BEACH IN BATAM ISLAND</h1>
            <p>Find which destination you like to go by look out the BEACH below</p>
        </div>
    </div>
    @foreach ($data2 as $item)
        
    <div class="hover:bg-slate-100 w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
        <div class="w-[1280px] flex justify-between items-center py-5">
            <img src="{{asset('images/'.$item->image)}}" alt="{{$item->title}}" class="w-[150px]">
            <p class="text-lg font-extrabold">{{$item->title}}</p>
            <a href="{{url('/place'.$item->id_places)}}">
                <button class="hover:bg-white hover:text-black hover:border-[1px] bg-black text-white px-3 py-1 rounded-full">See More</button>
            </a>
        </div>
    </div>
    <hr class="h-px bg-gray-300 border-0 dark:bg-gray-700">

    @endforeach

</div>
@endsection