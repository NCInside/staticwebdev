<div data-aos="fade-up" class="max-w-sm">
    <a href="#">
        <img class="rounded-t-lg" src={{ $imgsrc }} alt="">
    </a>
    <div class="pt-3 pl-2 content-start">
        <hr class="my-1 mr-2 w-auto h-1 bg-red-500 rounded border-0 md:my-2">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $name }}</h5>
        </a>
        <p class="mb-3 font-normal text-white">{{ $desc }}</p>
        <div class="flex flex-col">
            <button class="mt-auto text-white bg-red-500 hover:bg-red-300 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium text-sm px-5 py-2.5 text-center dark:bg-orange-500 dark:hover:bg-orange-700 dark:focus:ring-orange-800" type="button" data-modal-toggle={{ $modalId }}>
                Reviews
            </button>
        </div>
    </div>
</div>