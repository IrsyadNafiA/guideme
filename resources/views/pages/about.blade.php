@extends('layouts.main')

@section('main')
<div class='flex items-center justify-center'>
  <div class='flex flex-col items-center justify-center text-center max-w-6xl gap-5'>
    <div>
      <h1 class="text-center my-7 text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">About</h1>
      <p>The Guide Me application is an application created through collaboration between Batam City Tourism Office with BKS Team. Through this application we hope to help foreign tourists as well as local tourists who want to take a vacation to Batam City to easily find destinations in all of Batam City.</p>
    </div>
    <div>
      <h1 class="text-center my-7 text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Developer</h1>
      <div class='flex gap-5'>
        <div class="p-6 bg-white rounded-xl outline outline-1 outline-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
          <img src="" alt="ini gambar" />
        </div>
        <div class="p-6 bg-white rounded-xl outline outline-1 outline-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
          <img src="" alt="ini gambar" />
        </div>
        <div class="p-6 bg-white rounded-xl outline outline-1 outline-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
          <img src="" alt="ini gambar" />
        </div>
      </div>
    </div>
    <div class='flex flex-col items-center justify-center'>
      <h1 class="text-center my-7 text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Lecturer</h1>
      <div class='flex gap-5'>
        <div class="p-6 bg-white rounded-xl outline outline-1 outline-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
          <img src="" alt="ini gambar" />
        </div>
      </div>
    </div>
    <div class='flex flex-col items-center justify-center'>
      <h1 class="text-center my-7 text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Supported by</h1>
      <img src="" alt="DINAS KEBUDAYAAN DAN PARIWISATA" />
    </div>
  </div>
</div>
@endsection