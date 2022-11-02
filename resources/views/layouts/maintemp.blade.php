<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>@yield('title')</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            overflow: visible;
        }
        @media screen and (min-width:768px) {
            .terpaksa {
                max-width: 40%;  
                height: auto;  
            }
            .terpaksa2{
                max-width: 30%;
                height: auto;
            }       
        }    
    </style>
</head>
<body>

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <img class="mt-3 h-6 sm:h-9" src="/img/logo_pg.jpg" alt="logo">
                <h1 class="text-lg sm:text-xl font-bold">PRIMITIVE <b class="text-orange-600 text-3xl">-</b> GARAGE</h1>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                </li>
                <li>
                    <a href="/new" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">What's New</a>
                </li>
                <li>
                    <a href="/catalog" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Catalog</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
  
    @yield('content')

    <footer class="p-7 bg-black sm:p-6">
        <div class="mx-3 md:mx-10 my-3">
            <div>
                <h1 class="text-lg sm:text-3xl text-white font-bold">PRIMITIVE <b class="text-orange-600">-</b> GARAGE</h1>
                <hr class="my-1 w-auto h-1 bg-white rounded border-0 md:my-2">
            </div>
            <div class="mt-4 flex flex-col-reverse md:flex-row md:justify-between">
                <div class="mb-6 md:mb-0">
                    <p class="text-white text-lg"> Untuk persoalan mengenai pemesanan, komplain, atau request custom order dapat menghubi langsung pada contact kami.</p>
                </div>
                <div class="flex sm:ml-4 space-x-6 sm:justify-end sm:mt-0">
                    <a href="https://instagram.com/primitive_garage?igshid=YmMyMTA2M2Y=" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img class="object-cover h-24 w-64 md:h-52 md:w-60" src="/img/logo_ig.png" alt="IG">
                    </a>
                    <a href="https://www.youtube.com/channel/UCR7GWs69K3KbA00kwQdYF8A" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img class="object-cover h-24 w-64 md:h-40 md:w-60" src="/img/logo_yt.png" alt="YT">
                    </a>
                    <a href="https://wa.me/6281297656789" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img class="object-cover h-24 w-64 md:h-40 md:w-60" src="/img/logo_wa.png" alt="WA">
                    </a>
                </div>
            </div>
            
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © 2022 <u class="hover:underline">PrimitiveGarage™</u>. All Rights Reserved.
            </span>
        </div>
    </footer>
    
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>