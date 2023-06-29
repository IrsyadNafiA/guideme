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
<div class="row" style="margin-top: 70px">
    <div class="col">
        <input type="text" id="lokasi">
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <div id="map">

        </div>
    </div>

</div>
@endsection
@push('mys')
    <script>
        var lokasi = document.getElementById('lokasi');
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(succesCallback, errorCallback);
        }

        function succesCallback(position){
            lokasi.value = position.coords.latitude + "," + position.coords.longitude;
            var map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 15);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '<a href="#">Guideme</a>'}).addTo(map);
            var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
            var circle = L.circle([position.coords.latitude, position.coords.longitude], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 50 }).addTo(map);
        }

        function errorCallback(){

        }
    </script>    
@endpush