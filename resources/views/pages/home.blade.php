@extends('layouts.main')
@section('main')

{{-- <div id="map">
    <p>Country : {{ $position->countryName }}</p>
<p>Region : {{ $position->regionName }}</p>
<p>City : {{ $position->cityName }}</p>
<p>Latitude : {{ $position->latitude }}</p>
<p>Longitude : {{ $position->longitude }}</p>
<a href="{{'https://www.google.com/maps/search/?api=1&query='.$position->latitude.','.$position->longitude}}">Open in Maps</a>
</div> --}}
<div class="row">
    <div class="col">
        <input type="text" id="lokasi" hidden>
    </div>
</div>
<div class="row mb-2 z-40 relative pt-16">
    <div class="col">
        <div id="map">
            @php
                
            @endphp
        </div>
    </div>
</div>
<div class="container mx-auto">
    <h1 class="text-center my-7 lg:text-4xl text-2xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Arrival Location</h1>
    @foreach ($arrivalm as $item)
    <div class="border hover:bg-slate-100 w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
        <div class="w-full flex justify-between items-center py-3 px-4">
            <div class="flex justify-start items-center gap-3 lg:gap-5 pr-2">
                <img src="{{ asset('images/'.$item->image)}}" class="w-32 lg:w-56" alt="{{ $item-> title }}">
                <p class="text-sm lg:text-lg font-extrabold">{{ $item -> title }}</p>
            </div>
            <a href="{{url('arrival/detail/'. $item->id_arrival)}}">
                <button class="text-sm lg:text-lg hover:bg-white hover:text-black hover:border-[1px] bg-black text-white px-3 py-1 rounded-full">See More</button>
            </a>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="items-center justify-center text-center">
        <h1 class="mt-10 text-center lg:text-4xl text-2xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Iconic Places in Batam Island</h1>
        <p class="mt-3 text-center">Find which destination you like to go by look out the category below</p>
    </div>


    <div class="w-full flex justify-center mt-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-14 px-4">
            <div class="rounded-lg flex text-center justify-center items-center relative">
                <img class="w-[400px]" src="{{ URL::to('/') }}/img/wtb.png" alt="beach">
                <a href="/detail" class="bg-white py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    BEACH
                </a>
            </div>
            <div class="rounded-lg flex text-center justify-center items-center relative">
                <img class="w-[400px]" src="{{ URL::to('/') }}/img/barelang2.png" alt="beach">
                <a href="/detail" class="bg-white py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    BEACH
                </a>
            </div>
            <div class="rounded-lg flex text-center justify-center items-center relative">
                <img class="w-[400px]" src="{{ URL::to('/') }}/img/masjid1.png" alt="beach">
                <a href="/detail" class="bg-white py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    BEACH
                </a>
            </div>
            <div class="rounded-lg flex text-center justify-center items-center relative">
                <img class="w-[400px]" src="{{ URL::to('/') }}/img/rusa.png" alt="beach">
                <a href="/detail" class="bg-white py-3 px-8 hover:bg-black hover:text-white rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    BEACH
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
@push('mys')
<script>
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(succesCallback, errorCallback);
    }

    function succesCallback(position) {
        lokasi.value = position.coords.latitude + "," + position.coords.longitude;
        var map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 15);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '<a href="#">Guideme</a>'
        }).addTo(map);
        @php
        $cc=1.1232359634821594;
        $cc2=104.03393943111342;
        @endphp
        var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
        var marker = L.marker([@php $cc $cc @endphp]).addTo(map);
        
        var circle = L.circle([position.coords.latitude, position.coords.longitude], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 50
        }).addTo(map);
    }


    function errorCallback() {

    }
</script>
@endpush