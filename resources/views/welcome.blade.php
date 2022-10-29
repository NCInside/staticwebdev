@extends('layouts.maintemp')

@section('title', 'Home')

@section('content')
{{-- masthead --}}
<div class="bg-filled bg-no-repeat bg-bottom pt-32 pb-64" style="background-image: url('img/masthead.jpg'); font-family: 'Poppins'; width: 100%;
height: auto;
min-height: 33rem;
padding: 15rem 0;
background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%));
background-position: center;
background-repeat: no-repeat;
background-attachment: scroll;
background-size: cover;">
    <div data-aos="zoom-in" data-aos-duration="1500">
        <h1 class="text-center text-5xl font-bold hidden md:block" style="font-family: 'Varela Round', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 5rem; line-height: 5rem; letter-spacing: 0.1rem; background: linear-gradient(rgba(255, 168, 62, 0.988), rgb(255, 188, 107), rgb(255, 202, 88)); -webkit-text-fill-color: transparent; -webkit-background-clip: text; background-clip: text;">HOME TO <br><b>PRIMIVE-GARAGE</b></h1>
        <h1 class="text-white text-center text-3xl font-bold md:hidden block" style="font-family: 'Varela Round', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; background: linear-gradient(rgba(255, 168, 62, 0.988), rgb(255, 188, 107), rgb(255, 202, 88)); -webkit-text-fill-color: transparent; -webkit-background-clip: text; background-clip: text;">HOME TO <br><b class="font-extrabold">PRIMITIVE-GARAGE</b></h1>
        <p class="text-gray-100 text-center mx-4 md:mt-12 mt-6">Purchase Premium Quality Miniatures Today</p>
    </div>
    <div class="hidden lg:flex justify-center shadow-2xl">
        <a href="#getstarted">
            <div data-aos-easing="ease-out-cubic" class="bg-orange-400 mt-20 border-2 border-opacity-50 border-orange-300 opacity-90 hover:bg-orange-300 text-gray-800 font-semibold px-4 rounded shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <p class="text-white m-4">Get Started</p>
            </div>
        </a>
    </div>
</div>
{{-- carousel--}}
<div class="bg-black">

    <div class="bg-black w-full h-36 lg:h-72 hidden md:block" id="getstarted" ></div>
    
<div id="controls-carousel" class="relative pointer-events-none" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden px-5 md:h-96 pointer-events-none">
         <!-- Item 1 -->
        <div class="duration-700 before:ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <img src="img/why.jpg" class="pointer-events-none absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
            <img src="img/why.jpg" class="pointer-events-none absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="img/why.jpg" class="pointer-events-none absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="img/why.jpg" class="pointer-events-none absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="img/why.jpg" class="pointer-events-none absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
</div>


    <h1 class="text-white text-center text-3xl font-bold mt-4 md:mt-12" data-aos="fade-in" data-aos-duration="1000" data-aos-offset="0">Browse our Catalog</h1>
    <div class="flex justify-center shadow-2xl" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <a class="mt-4 mb-20" href="/catalog">
            <div class="bg-orange-400 mt-6 border-2 px-8 border-opacity-50 border-orange-300 opacity-90 hover:bg-orange-300 text-gray-800 font-semibold first:rounded shadow transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <p class="text-white m-4">Browse</p>
            </div>
        </a>
    </div>
</div>

<div class="bg-gradient-to-br from-gray-200 via-gray-400 to-gray-700 pt-24 relative">

    <div data-aos="fade-in" class="hidden lg:block absolute top-24 lg:left-72 w-96 h-72 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-28 lg:left-48 w-96 h-72 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-32 lg:left-96 w-96 h-52 bg-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000" ></div>

    <div data-aos="fade-in" class="hidden lg:block absolute top-[31rem] right-72 w-[36rem] h-72 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[32rem] right-[11rem] w-96 h-96 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob" ></div>
    <div data-aos="fade-in" class="hidden lg:block absolute top-[40rem] right-[41rem] w-72 h-52 bg-orange-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>


    {{-- What and Why --}}
    <div class="flex flex-col">
        <div class="self-start mx-3 lg:mx-0 opacity-90">
            <div data-aos="fade-up" class="lg:ml-48 flex flex-col-reverse items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-3xl overflow-hidden">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">What is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
                </div>
                <img class="object-cover w-full h-full rounded-t-lg md:h-auto md:w-64 terpaksa md:rounded-none overflow-hidden" src="img/why.jpg" alt="">      
            </div>
        </div>
        
        <div class="self-end mx-3 lg:mx-0 opacity-90">
            <div data-aos="fade-up" class="lg:mr-48 mt-24 flex flex-col items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-3xl overflow-hidden">
                <img class="terpaksa object-cover w-full h-full rounded-t-lg md:h-auto md:w-52 md:rounded-none md:rounded-l-lg" src="img/what.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Why is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
                </div>
            </div>
        </div>

        <section data-aos="fade-up" class="font-sans antialiased text-gray-900 leading-normal tracking-wider md:mt-32 md:mb-16">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto mt-24 mb-16 lg:my-0">
                <div id="profile" class="relative w-full lg:w-2/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-90 mx-6 lg:mx-0">
                    <div class="p-4 md:p-12 text-center lg:text-left">
                        <!-- Image for mobile view-->
                        <div class="block md:hidden rounded-full lg:rounded-xl shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('img/who.jpg')"></div>
                        <div class="hidden md:block rounded-full lg:rounded-xl shadow-xl mx-auto -mt-24 h-72 w-72 bg-cover bg-center" style="background-image: url('img/who.jpg')"></div>
                        <h1 class="text-3xl font-bold pt-8 lg:pt-0">whO aM i?</h1>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-orange-400 opacity-25"></div>
                        <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-orange-400 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg> mr craftsman</p>
                        <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-orange-400 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/></svg> Your Location - 25.0000° N, 71.0000° W</p>
                        <p class="pt-8 text-sm">Totally optional short description about yourself, what you do and so on.</p>         
                    </div>
                </div>            
            </div>
        </section>

        
    </div>        
</div>


@endsection