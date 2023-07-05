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
<div class="row mt-2 mb-2">
    <div class="col">
        <div id="map">

        </div>
    </div>
</div>
<h1 class="text-center my-7 text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Arrival Location</h1>
<div class="w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
    <div class="w-[1536px] flex justify-between items-center py-3 px-4">
        <div class="flex justify-start items-center gap-3 lg:gap-5 pr-2">
            <img src="{{ URL::to('/') }}/img/pelabuhan_batamcenter.jpeg" class="w-32 lg:w-56" alt="ini gambar">
            <p class="text-sm lg:text-lg font-extrabold">Batam Center Point</p>
        </div>
        <button class="bg-black text-white px-2 text-base lg:text-lg lg:px-3 py-1 rounded-full hover:bg-black/80">See More</button>
    </div>
</div>
<hr>

@endsection
@push('mys')
<script>
    var lokasi = document.getElementById('lokasi');
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
        var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
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