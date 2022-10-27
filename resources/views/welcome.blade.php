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
        <a class="mt-8 mb-20" href="/catalog">
            <div data-aos="fade-up" class="bg-orange-400 border-2 border-opacity-50 border-white opacity-90">
                <p class="text-white m-4">Browse</p>
            </div>
        </a>
    </div>
</div>

<div class="bg-gradient-to-br from-gray-200 via-gray-400 to-gray-700 pt-24">

    {{-- What and Why --}}
    <div class="flex flex-col">
        <div class="self-start">
            <div data-aos="fade-down-right" class="ml-48 flex flex-col items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                {{--<img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">--}}            
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">What is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
                </div>
            </div>
        </div>
        
        <div class="self-end">
            <div data-aos="fade-up-left" class="mr-48 mt-24 flex flex-col items-center bg-white rounded-lg shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                {{-- <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt=""> --}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Why is Primitive Garage?</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ex. Ut, repudiandae ex. Suscipit facere rem, laboriosam sapiente facilis et sunt ratione vel voluptates velit, maiores veniam adipisci inventore quam.</p>
                </div>
            </div>
        </div>
    </div>
    

    {{-- Testimonial yang free --}}
    <div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimonials</h2>
                <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
            </div> 
            <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
                <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this was to integrate</h3>
                        <p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with how easy this was to integrate within my application. Most templates are a pain, code is scattered, and near impossible to theme.</p>
                        <p class="my-4">Flowbite has code in one place and I'm not joking when I say it took me a matter of minutes to copy the code, customise it and integrate within a Laravel + Vue application.</p>
                        <p class="my-4">If you care for your time, I hands down would go with this."</p>
                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Bonnie Green</div>
                            <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                        <p class="my-4">"FlowBite provides a robust set of design tokens and components based on the popular Tailwind CSS framework. From the most used UI components like forms and navigation bars to the whole app screens designed both for desktop and mobile, this UI kit provides a solid foundation for any project.</p>
                        <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Roberta Casas</div>
                            <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 lg:border-b-0 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow and variants</h3>
                        <p class="my-4">"As someone who mainly designs in the browser, I've been a casual user of Figma, but as soon as I saw and started playing with FlowBite my mind was 🤯.</p>
                        <p class="my-4">Everything is so well structured and simple to use (I've learnt so much about Figma by just using the toolkit).</p>
                        <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Jese Leos</div>
                            <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                        </div>
                    </figcaption>    
                </figure>
                <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                        <p class="my-4">"This is a very complex and beautiful set of elements. Under the hood it comes with the best things from 2 different worlds: Figma and Tailwind.</p>
                        <p class="my-4">You have many examples that can be used to create a fast prototype for your team."</p>
                    </blockquote>
                    <figcaption class="flex justify-center items-center space-x-3">
                        <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-white text-left">
                            <div>Joseph McFall</div>
                            <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
                        </div>
                    </figcaption>    
                </figure>
            </div>
            <div class="text-center">
                <a href="#" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Show more...</a> 
            </div>
        </div>
        
</div>


@endsection