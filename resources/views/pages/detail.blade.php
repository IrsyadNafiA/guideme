@extends('layouts.main')

@section('main')
<div>
    <img class="w-full" src="{{ URL::to('/') }}/img/header_beach.png" alt="beach">
</div>
<div class="hover:bg-slate-100 w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
    <div class="w-[1280px] flex justify-between items-center py-5">
        <img src="{{ URL::to('/') }}/img/pantai 1.png" alt="ini gambar" class="w-[150px]">
        <p class="text-lg font-extrabold">Nuvasa beach, Nongsa</p>
        <a href="/seemore">
            <button class="hover:bg-white hover:text-black hover:border-[1px] bg-black text-white px-3 py-1 rounded-full">See More</button>
        </a>
    </div>
</div>
<hr class="h-px bg-gray-300 border-0 dark:bg-gray-700">
<div class="hover:bg-slate-100 w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
    <div class="w-[1280px] flex justify-between items-center py-5">
        <img src="{{ URL::to('/') }}/img/pantai 2.png" alt="ini gambar" class="w-[150px]">
        <p class="text-lg font-extrabold">Nuvasa beach, Nongsa</p>
        <a href="/seemore">
            <button class="hover:bg-white hover:text-black hover:border-[1px] bg-black text-white px-3 py-1 rounded-full">See More</button>
        </a>
    </div>
</div>
<hr class="h-px bg-gray-300 border-0 dark:bg-gray-700">
<div class="hover:bg-slate-100 w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
    <div class="w-[1280px] flex justify-between items-center py-5">
        <img src="{{ URL::to('/') }}/img/pantai 3.png" alt="ini gambar" class="w-[150px]">
        <p class="text-lg font-extrabold">Nuvasa beach, Nongsa</p>
        <a href="/seemore">
            <button class="hover:bg-white hover:text-black hover:border-[1px] bg-black text-white px-3 py-1 rounded-full">See More</button>
        </a>
    </div>
</div>

@endsection