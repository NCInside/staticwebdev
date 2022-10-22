@extends('layouts.maintemp')

@section('title', 'Home')

@section('content')
{{-- masthead --}}
<div class="bg-filled bg-no-repeat bg-bottom pt-32 pb-64" style="background-image: url('img/masthead.jpg')">
    <h1 class="text-white text-center text-6xl font-bold">Home to Primitive Garage Miniatures</h1>
    <p class="text-white text-center mt-12">Purchase Premium Quality Miniatures Today</p>
    <div class="flex justify-center shadow-2xl">
        <a href="/catalog">
            <div class="bg-orange-400 mt-20 border-2 border-opacity-50 border-white opacity-90">
                <p class="text-white m-4">Get Started</p>
            </div>
        </a>
    </div>
</div>
{{-- carousel--}}
<div class="bg-black">
    <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="">
                <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
                <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">Second Slide</span>
                <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
                <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">turd Slide</span>
                <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
    </div>

    <h1 class="text-white text-center text-3xl font-bold">Browse our Catalog</h1>
    <div class="flex justify-center shadow-2xl">
        <a href="/catalog">
            <div class="bg-orange-400 mt-8 mb-20 border-2 border-opacity-50 border-white opacity-90">
                <p class="text-white m-4">Browse</p>
            </div>
        </a>
    </div>
</div>

{{-- What and Why --}}
<div class="bg-gradient-to-br from-gray-200 via-gray-400 to-gray-700 pt-24" style="height:1000px;">
    
    <div>
        <div class="ml-48 flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
            {{--<img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">--}}            
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">What is Primitive Garage?</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
            </div>
        </div>
    </div>
    
    <div>
        <div class="mr-48 mt-24 flex flex-col float-right items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
            {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt=""> --}}
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Why is Primitive Garage?</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
            </div>
        </div>
    </div>
    
</div>
@endsection