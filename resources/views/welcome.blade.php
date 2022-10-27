@extends('layouts.maintemp')

@section('title', 'Home')

@section('content')
{{-- masthead --}}
<div class="bg-filled bg-no-repeat bg-bottom pt-32 pb-64" style="background-image: url('img/masthead.jpg')">
    <h1 class="text-white text-center text-6xl font-bold">Home to Primitive Garage Miniatures</h1>
    <p class="text-white text-center mt-12">Purchase Premium Quality Miniatures Today</p>
    <div class="flex justify-center shadow-2xl">
        <a href="#getstarted">
            <div class="bg-orange-400 mt-20 border-2 border-opacity-50 border-white opacity-90 hover:bg-orange-300 text-gray-800 font-semibold py-2 px-4 rounded shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <p class="text-white m-4">Get Started</p>
            </div>
        </a>
    </div>
</div>
{{-- carousel--}}
<div class="bg-black" id="getstarted" >
    
<div id="controls-carousel" class="relative" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
            <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-6 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-6 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


    <h1 class="text-white text-center text-3xl font-bold" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Browse our Catalog</h1>
    <div class="flex justify-center shadow-2xl" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="0" data-aos-offset="0">
        <a class="mt-4 mb-20" href="/catalog">
            <div class="bg-orange-400 mt-6 border-2 border-opacity-50 border-white opacity-90 hover:bg-orange-300 text-gray-800 font-semibold first:rounded shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <p class="text-white m-4">Browse</p>
            </div>
        </a>
    </div>
</div>

<div class="bg-gradient-to-br from-gray-200 via-gray-400 to-gray-700 pt-24">

    {{-- What and Why --}}
    <div class="flex flex-col">
        <div class="self-start">
            <div data-aos="fade-down" data-aos-duration="400" class="lg:ml-48 flex flex-col items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-xl">
                {{--<img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">--}}            
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">What is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
                </div>
            </div>
        </div>
        
        <div class="self-end">
            <div data-aos="fade-up-right" data-aos-duration="300" class="lg:mr-48 mt-24 flex flex-col items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-xl">
                {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt=""> --}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Why is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
                </div>
            </div>
        </div>

        {{-- About me --}}
        <div class="self-center">
            <div class="flex mt-24 mb-32 flex-col items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-full h-full md:h-auto md:w-48 p-3 md:rounded-none md:rounded-l-lg" src="img/masthead.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Who is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente pariatur architecto doloremque magni tenetur excepturi voluptas amet cum ea numquam, atque veritatis corporis expedita nobis dolor necessitatibus, ipsum optio obcaecati. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et suscipit illo ad eaque reprehenderit dolorem amet veritatis minus, ipsum alias, impedit cumque quo voluptatibus laudantium iusto eligendi. Incidunt, nam placeat!</p>
                </div>
            </div>
        </div>
    </div>        
</div>


@endsection