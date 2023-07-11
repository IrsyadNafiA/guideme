@extends('layouts.admin')

@section('main')

<div class="px-7 flex w-full justify-end">
    <h1 class="my-7 lg:text-4xl text-sm font-black mr-5">Guide Me</h1>

</div>
<hr class=" lg:bg-black">

<div class="flex gap-16 justify-center my-7">
    <a class="flex items-center justify-center w-52 h-52 rounded-2xl shadow-md bg-white border relative">
        <h1 class="my-3 mx-4 text-end lg:text-4xl text-sm font-black absolute top-0 right-0">6</h1>
        <p>Category</p>
    </a>
    <a class="flex items-center justify-center w-52 h-52 rounded-2xl shadow-md bg-white border relative">
        <h1 class="my-3 mx-4 text-end lg:text-4xl text-sm font-black absolute top-0 right-0">6</h1>
        <p>Arrival Location</p>
    </a>
    <a class="flex items-center justify-center w-52 h-52 rounded-2xl shadow-md bg-white border relative">
        <h1 class="my-3 mx-4 text-end lg:text-4xl text-sm font-black absolute top-0 right-0">126</h1>
        <p>Places</p>
    </a>
</div>


@endsection