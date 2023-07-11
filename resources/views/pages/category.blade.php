@extends('layouts.main')

@section('main')
<div class="flex flex-col items-center pt-16">
    <h1 class="text-center my-7 text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"> Here Our's Category</h1>
    <p class="text-center">Find which destination you like to go by look out the category below</p>
    <div class="rounded-lg mt-5 px-2 lg:px-0 flex text-center justify-center items-center relative">
        <img class="w-[600px]" src="{{ URL::to('/') }}/img/beach.png" alt="beach">
        <a href="/detail" class="bg-white lg:text-lg text-sm  py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            BEACH
        </a>
    </div>
    <div class="rounded-lg mt-5 px-2 lg:px-0 flex text-center justify-center items-center relative">
        <img class="w-[600px]" src="{{ URL::to('/') }}/img/historical.png" alt="beach">
        <a href="#" class="bg-white lg:text-lg text-sm py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            HISTORICAL PLACES
        </a>
    </div>
    <div class="rounded-lg mt-5 px-2 lg:px-0 flex text-center justify-center items-center relative">
        <img class="w-[600px]" src="{{ URL::to('/') }}/img/culinary.png" alt="beach">
        <a href="#" class="bg-white lg:text-lg text-sm py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            CULINARY
        </a>
    </div>
    <div class="rounded-lg mt-5 px-2 lg:px-0 flex text-center justify-center items-center relative">
        <img class="w-[600px]" src="{{ URL::to('/') }}/img/shopping.png" alt="beach">
        <a href="#" class="bg-white lg:text-lg text-sm py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            HISTORICAL PLACES
        </a>
    </div>
    <div class="rounded-lg mt-5 px-2 lg:px-0 flex text-center justify-center items-center relative">
        <img class="w-[600px]" src="{{ URL::to('/') }}/img/park.png" alt="beach">
        <a href="#" class="bg-white lg:text-lg text-sm py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            AMUSEMENT PARK
        </a>
    </div>
</div>
@endsection