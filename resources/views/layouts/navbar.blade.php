<!-- <nav class='flex justify-center items-center bg-white py-6 drop-shadow-lg z-50'>
    <div class="flex w-[1536px] justify-between items-center px-4">
        <h1 class='text-3xl font-black'>Guide Me</h1>
        <ul class='flex gap-5 text-lg font-extrabold'>
            <a href="/home" class='hover:opacity-70'>Home</a>
            <a href="/category" class='hover:opacity-70'>Category</a>
            <a href="/about" class='hover:opacity-70'>About</a>
            <a href="/contact" class='hover:opacity-70'>Contact</a>
        </ul>
    </div>
</nav> -->


<nav id="nav" class="nav bg-white border-gray-200 fixed w-full z-50 top-0">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
        <h1 class='text-3xl font-black'>Guide Me</h1>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-black" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:border-gray-700">
                <li>
                    <a href="/home" class="block py-2 pl-3 pr-4 text-black font-extrabold rounded md:bg-transparent md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/category" class="block py-2 pl-3 pr-4 text-black font-extrabold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:hover:bg-gray-200 dark:hover:text-black md:dark:hover:bg-transparent">Category</a>
                </li>
                <li>
                    <a href="/about" class="block py-2 pl-3 pr-4 text-black font-extrabold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:hover:bg-gray-200 dark:hover:text-black md:dark:hover:bg-transparent">About</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 pl-3 pr-4 text-black font-extrabold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:hover:bg-gray-200 dark:hover:text-black md:dark:hover:bg-transparent">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .nav.scrolled {
        box-shadow: 0px 2px 10px 3px rgba(0, 0, 0, 0.12);
    }
</style>

<script>
    const nav = document.getElementById("nav");
    window.onscroll = function() {
        if (window.scrollY > 22) {
            nav.classList.add("scrolled");
        } else {
            nav.classList.remove("scrolled");
        }
    };

    // $(function() {
    //     $(document).scroll(function() {
    //         const $nav = $(".nav");
    //         $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    //     });
    // });
</script>
@yield('navbar')