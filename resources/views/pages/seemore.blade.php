@extends('layouts.main')

@section('main')

<!-- This is an example component -->
<div class="max-w-[1536px] mx-auto px-10 pt-20">
    <div class="max-w-[1480px] mb-10">
        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-56 rounded-sm sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="{{ URL::to('/') }}/img/barelang1.jpg" alt="barelang" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ URL::to('/') }}/img/barelang2.jpg" alt="barelang" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ URL::to('/') }}/img/barelang1.jpg" alt="barelang" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

    <div class="flex flex-col-reverse md:flex-row my-10 justify-center items-center gap-16">
        <iframe class="w-full md:w-1/3 h-[280px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1673660516863!2d104.0011519738903!3d1.0350044625092114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98dfcc244b" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
            <h1 class="text-center text-xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"> Barelang Bridge</h1>
            <p>Jl. Engku Putri No.1, Belian, Kec. Batam Kota, Kota Batam</p>
            <div class="flex text-center justify-center items-center">
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>First star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Second star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Third star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Fourth star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Fifth star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <p class="ml-2 text-sm font-medium text-black">4.95</p>
                <span class="w-1 h-1 mx-1.5 bg-black rounded-full"></span>
                <a href="#" class="text-sm font-medium text-black underline hover:no-underline">73 reviews</a>
            </div>

            <div class="my-5 grid grid-cols-2 gap-7">
                <div class="flex items-center">
                    <svg class="w-2.5 h-2.5 mr-1" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="black" fill-opacity="0.9" />
                    </svg>
                    <span>Restaurant</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-2.5 h-2.5 mr-1" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="black" fill-opacity="0.9" />
                    </svg>
                    <span>Hotel</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-2.5 h-2.5 mr-1" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="black" fill-opacity="0.9" />
                    </svg>
                    <span>Beach</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-2.5 h-2.5 mr-1" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="black" fill-opacity="0.9" />
                    </svg>
                    <span>Villa</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-2.5 h-2.5 mr-1" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="black" fill-opacity="0.9" />
                    </svg>
                    <span>Historical Place</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-2.5 h-2.5 mr-1" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="black" fill-opacity="0.9" />
                    </svg>
                    <span>Amusement Park</span>
                </div>
            </div>
        </div>
    </div>
    <div class="items-center justify-center text-center">
        <h1 class="text-center text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"> History</h1>
        <p class="my-7 mx-[10%] text-center">Barelang is a bridge located in Batam,
            Riau Archipelago Province. The uniqueness of the Barelang Bridge is the bridge connected into one unit Barelang Naming
            is an abbreviation of Batam, Rempang, and Galang. Bridge
            connecting a number of islands in the Riau Archipelago Province, namely Batam Island,
            Watch Island, Nipah Island, Rempang Island, Galang Island, and Galang Baru Island.
            The bridge which is the Icon of Batam City and the Landmark of Batam Island is known as
            Habibie Bridge, because the bridge was initiated by BJ Habibie, the 3rd President of the Republic of Indonesia.</p>
    </div>
    <div class="items-center justify-center text-center">
        <h1 class="py-7 text-center text-4xl font-black drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"> Transport Recomendations</h1>
        <div class="hover:bg-slate-100 border w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
            <div class="w-[1280px] flex flex-col md:flex-row justify-between items-center py-5 px-4">
                <img src="{{ URL::to('/') }}/img/bus.png" alt="ini gambar" class="w-[150px]">
                <p class="text-lg font-extrabold">Nuvasa beach, Nongsa</p>
            </div>
        </div>
        <div class="hover:bg-slate-100 border w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
            <div class="w-[1280px] flex flex-col md:flex-row justify-between items-center py-5 px-4">
                <img src="{{ URL::to('/') }}/img/motor.png" alt="ini gambar" class="w-[150px]">
                <p class="text-lg font-extrabold">Nuvasa beach, Nongsa</p>
            </div>
        </div>
        <div class="hover:bg-slate-100 border w-full flex justify-center bg-white shadow-[0_1px_5px_-5px_rgba(0,0,0,0.3)]">
            <div class="w-[1280px] flex flex-col md:flex-row justify-between items-center py-5 px-4">
                <img src="{{ URL::to('/') }}/img/mobil.png" alt="ini gambar" class="w-[150px]">
                <p class="text-lg font-extrabold">Nuvasa beach, Nongsa</p>
            </div>
        </div>
    </div>
</div>
@endsection