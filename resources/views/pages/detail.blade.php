@extends('layouts.main')

@section('main')
<div>
    <img class="w-full" src="{{ URL::to('/') }}/img/header_beach.png" alt="beach">
</div>
<div class="w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
    <div class="w-[1280px] flex justify-between items-center py-5">
        <img src="{{ URL::to('/') }}/img/pantai 1.png" alt="ini gambar" class="w-[150px]">
        <p class="text-lg font-extrabold">Nuvasa beach, Nongsa</p>
        <button class="bg-black text-white px-3 py-1 rounded-full">See More</button>
    </div>
</div>

@endsection