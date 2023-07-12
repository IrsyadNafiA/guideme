<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title>Guide Me</title>

  <!-- tailwind -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

</head>

<body>
  <div class="dashboard w-full">
    <img src="{{ URL::to('/') }}/img/background.png" class="w-full h-screen object-cover object-left scale-x-[-1] opacity-30" alt="" />
    <div class="h-screen absolute w-full top-0 left-0 z-50">
      <div class="flex flex-col-reverse md:flex-row h-full w-full items-center justify-center gap-8 md:gap-5">
        <div class="hero-text px-4">
          <h1 class="text-2xl md:text-6xl">WELCOME</h1>
          <h1 class="text-2xl md:text-6xl font-black">EXPLORER</h1>
          <p class="text-2xl">
            Let's visit the destination at Batam Island
          </p>
          <a href="/home" class="flex items-center justify-center outline bg-black text-white font-semibold text-lg rounded-lg mt-4 w-[145px] h-[53px] hover:bg-white hover:text-black hover:outline-2">
            Let's Go
          </a>
        </div>
        <div class="hero-img">
          <img src="{{ URL::to('/') }}/img/maps.png" class="w-[240px] md:w-[480px]" alt="" />
        </div>
        <h1 class="text-6xl font-black block md:hidden drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">Guide Me</h1>
      </div>
    </div>
  </div>
</body>

</html>