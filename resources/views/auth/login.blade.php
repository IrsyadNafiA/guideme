<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <title>{{ $title }} - GuideMe</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="w-full h-screen flex justify-center items-center px-2">
        <div class="bg-white py-5 lg:px-32 md:px-32 px-10 rounded-lg shadow-[0px_0px_4px_0px_rgba(0,0,0,0.25)]">
            <h3 class="text-center lg:text-3xl text-2xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">ADMIN LOGIN</h3>
            <svg class="w-20 m-auto mt-3 mb-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <circle cx="12" cy="9" r="3" stroke="#1C274C" stroke-width="1.5"></circle>
                    <circle cx="12" cy="12" r="10" stroke="#1C274C" stroke-width="1.5"></circle>
                    <path d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                </g>
            </svg>
            <form action="" class="flex flex-col gap-3 p-4">
                <div class="flex flex-col">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="border-0 border-b-2 border-black focus:ring-0 focus:border-slate-400 p-2">
                </div>
                <div class="flex flex-col">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="●●●●●●●●" class="border-0 border-b-2 border-black focus:ring-0 focus:border-slate-400 p-2 text-sm">
                </div>
                <button type="submit" class="w-fit px-4 py-2 m-auto mt-2 rounded-lg bg-black hover:bg-slate-100 hover:text-black hover:border text-white">Login</button>
            </form>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</html>