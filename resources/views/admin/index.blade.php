@extends('layouts.admin')

@section('main')

<div class="flex gap-16 justify-center my-7">
    <a href="/add_category" class="flex hover:bg-slate-50 items-center justify-center w-52 h-52 rounded-2xl shadow-md bg-white border relative">
        <h1 class="my-3 mx-4 text-end lg:text-4xl text-sm font-black absolute top-0 right-0">6</h1>
        <p>Category</p>
    </a>
    <a class="flex hover:bg-slate-50 items-center justify-center w-52 h-52 rounded-2xl shadow-md bg-white border relative">
        <h1 class="my-3 mx-4 text-end lg:text-4xl text-sm font-black absolute top-0 right-0">6</h1>
        <p>Arrival Location</p>
    </a>
    <a class="flex hover:bg-slate-50 items-center justify-center w-52 h-52 rounded-2xl shadow-md bg-white border relative">
        <h1 class="my-3 mx-4 text-end lg:text-4xl text-sm font-black absolute top-0 right-0">126</h1>
        <p>Places</p>
    </a>
</div>

@endsection