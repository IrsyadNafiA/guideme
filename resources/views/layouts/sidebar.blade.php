<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="logo-sidebar" class="w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white shadow-lg">
        <a href="https://flowbite.com/" class="flex items-center pl-2.5">
            <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M57.1875 41.25C57.1875 42.4932 56.6936 43.6855 55.8146 44.5646C54.9355 45.4436 53.7432 45.9375 52.5 45.9375C51.2568 45.9375 50.0645 45.4436 49.1854 44.5646C48.3064 43.6855 47.8125 42.4932 47.8125 41.25C47.8125 40.0068 48.3064 38.8145 49.1854 37.9354C50.0645 37.0564 51.2568 36.5625 52.5 36.5625C53.7432 36.5625 54.9355 37.0564 55.8146 37.9354C56.6936 38.8145 57.1875 40.0068 57.1875 41.25ZM75 37.5C75 58.125 58.125 75 37.5 75H0V37.5C0 16.875 16.875 0 37.5 0C58.125 0 75 16.875 75 37.5ZM18.75 60C24.0375 64.6125 30 67.5 37.5 67.5C54.0375 67.5 67.5 54.0375 67.5 37.5C67.5 34.5375 67.05 31.6875 66.2625 29.025C63.5625 29.6625 60.75 30 57.825 30C50.325 30 43.3875 27.75 37.5 23.9625C37.5 23.9625 32.025 44.1 22.6125 41.25C20.1375 40.5 18.75 42.4125 18.75 45" fill="black" />
            </svg>
            <span>
                <h1 class="text-center my-7 lg:text-lg text-sm font-black ml-3 ">{{ Auth::user()->name }}</h1>
            </span>
        </a>
        <hr class=" lg:bg-black mb-4">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{route('admin/dashboard')}}" class="{{ Request::is('admin/dashboard') ? 'active: bg-gray-100 text' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <hr class=" lg:bg-black">
            <li>
                <a href="{{route('admin/category')}}" class="{{ Request::is('add_category') ? 'active: bg-gray-100 text' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Category</span>
                </a>
            </li>
            <hr class=" lg:bg-black">

            <li>
                <a href="/add_arrival" class="{{ Request::is('add_arrival') ? 'active: bg-gray-100 text' : '' }} flex items-center p-2 text-gray-900 fill-gray-500 hover:fill-black rounded-lg hover:bg-gray-100 group">
                    <svg class="w-7" viewBox="-0.32 -0.32 32.53 32.53" xmlns="http://www.w3.org/2000/svg" stroke-width="0.605853">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="Group_3" data-name="Group 3" transform="translate(-165.116 -163.037)">
                                <path id="Path_9" data-name="Path 9" d="M183.189,178.211l-3.634-2.43-2.294-4.642c-.509-1.032-.959-1.629-1.927-1.844a2.613,2.613,0,0,0-2.081.435c-.017.012-.035.022-.051.034l-5.436,4.306a1.239,1.239,0,0,0-.434.7l-1.043,5.018a1.216,1.216,0,0,0,.945,1.435,1.165,1.165,0,0,0,.247.026,1.216,1.216,0,0,0,1.189-.967l.952-4.586,1.941-1.537-1.254,5.664-1.491,6.719-3.455,5.746a1.736,1.736,0,1,0,2.975,1.789l3.6-5.988a1.733,1.733,0,0,0,.206-.518l1.015-4.58,3.848,4.444,1.2,6.083a1.738,1.738,0,0,0,1.7,1.4,1.88,1.88,0,0,0,.339-.033,1.735,1.735,0,0,0,1.365-2.039l-1.288-6.537a1.709,1.709,0,0,0-.391-.8l-4.421-5.108,1.128-5.039.878,1.779a1.217,1.217,0,0,0,.416.475l3.906,2.607a1.214,1.214,0,1,0,1.347-2.019Z"></path>
                                <path id="Path_10" data-name="Path 10" d="M176.122,168.244a2.6,2.6,0,1,0-2.6-2.6A2.6,2.6,0,0,0,176.122,168.244Z"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Arrival Location</span>
                </a>
            </li>
            <hr class=" lg:bg-black">

            <li>
                <a href="/add_places" class="{{ Request::is('addpl') ? 'active: bg-gray-100 text' : '' }} flex items-center p-2 text-gray-900 fill-gray-500 hover:fill-black rounded-lg hover:bg-gray-100 group">
                    <svg class="w-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 466.583 466.582" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path d="M233.292,0c-85.1,0-154.334,69.234-154.334,154.333c0,34.275,21.887,90.155,66.908,170.834 c31.846,57.063,63.168,104.643,64.484,106.64l22.942,34.775l22.941-34.774c1.317-1.998,32.641-49.577,64.483-106.64 c45.023-80.68,66.908-136.559,66.908-170.834C387.625,69.234,318.391,0,233.292,0z M233.292,233.291c-44.182,0-80-35.817-80-80 s35.818-80,80-80c44.182,0,80,35.817,80,80S277.473,233.291,233.292,233.291z"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Places</span>
                </a>
            </li>
            <hr class=" lg:bg-black">

            <li>
                <a href="{{url('logout')}}" class="flex items-center p-2 text-gray-900 fill-gray-500 hover:fill-black rounded-lg hover:bg-gray-100 group">
                    <svg class="w-7" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>logout</title>
                            <path d="M0 9.875v12.219c0 1.125 0.469 2.125 1.219 2.906 0.75 0.75 1.719 1.156 2.844 1.156h6.125v-2.531h-6.125c-0.844 0-1.5-0.688-1.5-1.531v-12.219c0-0.844 0.656-1.5 1.5-1.5h6.125v-2.563h-6.125c-1.125 0-2.094 0.438-2.844 1.188-0.75 0.781-1.219 1.75-1.219 2.875zM6.719 13.563v4.875c0 0.563 0.5 1.031 1.063 1.031h5.656v3.844c0 0.344 0.188 0.625 0.5 0.781 0.125 0.031 0.25 0.031 0.313 0.031 0.219 0 0.406-0.063 0.563-0.219l7.344-7.344c0.344-0.281 0.313-0.844 0-1.156l-7.344-7.313c-0.438-0.469-1.375-0.188-1.375 0.563v3.875h-5.656c-0.563 0-1.063 0.469-1.063 1.031z"></path>
                        </g>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                </a>
            </li>
            <hr class=" lg:bg-black">
        </ul>
    </div>
</aside>