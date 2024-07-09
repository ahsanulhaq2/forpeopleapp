@extends('layouts.website')
@section('content')
    <div id="default-carousel" class="relative w-full overflow-hidden" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="reladbtive h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/img/banner-1.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-fit" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/img/banner-2.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-fit" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/img/banner-3.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-fit" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>


    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h4 class="mb-4 text-xl tracking-tight font-extrabold text-gray-900 dark:text-white">Apa itu </h4>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">For People Media
                    ?</h2>
                <p class="mb-4 text-justify">For People Media merupakan media informasi digital yang bergerak di bidang promosi event, musik, dan podcast. 
                    For People Media kini sudah banyak dipercaya menjadi salah satu media partner di beberapa event serta media promosi lagu dari musisi lokal.
                </p>
                <a href="{{ route('about-page') }}"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Read More
                </a>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-8">
                <iframe width="100%" height="100%"
                class="rounded-lg border-1 m-1 cursor-pointer" src="https://www.youtube.com/embed/KBSSCc1_2Kw?si=-gcp7J1lEgUyqak1" alt=""
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <img class="rounded-lg border-1 m-1 cursor-pointer" src="{{ asset('assets/img/poster.webp') }}" alt="">
                <img class="rounded-lg border-1 m-1 cursor-pointer" src="{{ asset('assets/img/poster.webp') }}" alt="">
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 bg-center bg-blend-multiply bg-no-repeat bg-cover py-10"
             style="background-image: url({{ url('assets/img/hero-2.webp') }}); background-color: rgba(0, 0, 0, 0.5);">
        <div class="items-center flex px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-6 lg:px-6 "
        >
            <div class="col-span-2 pt-5">
                <h3 class="text-xl font-bold text-white dark:text-white">Terbaru di</h3>
                <h1 class="text-4xl font-bold text-white dark:text-white">For People Media</h1>
            </div>
            <div class="col-span-4 grid grid-cols-3 gap-3 px-5">
                <a href="https://www.instagram.com/p/C8wpKJFP60r/" target = "_blank">
                    <img src="{{ asset('assets/img/poster-1.webp') }}" alt=""></a>
                <a href="https://www.instagram.com/p/C8wpKJFP60r/" target = "_blank">
                    <img src="{{ asset('assets/img/poster-2.webp') }}" alt=""></a>
                <a href="https://www.instagram.com/p/C8wpKJFP60r/" target = "_blank">
                <img src="{{ asset('assets/img/poster-3.webp') }}" alt=""></a>
                
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center flex flex-col py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">For People Podcast ?</h2>
                <p class="mb-4 text-justify">Hai Peeps, selamat datang di For People Podcast. Dengarkan podcast kami yang mengulas segala hal menarik dan isu sosial.
                                Dapatkan fakta menarik tentang dinamika percintaan kawula muda, Jangan lewatkan setiap episode yang penuh informasi dan hiburan untuk menemani akhir pekan kalian.
                </p>
            </div>
            <div style="left: 0; width: 100%; height: 180px; position: relative;">
                <iframe src="https://open.spotify.com/embed/show/5x4YC6gYAGgdHsZyQaaItl?utm_source=generator"
                        style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;"
                        allowfullscreen
                        allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture;"></iframe>
            </div>
        </div>
    </section>
    <section class="sm:px-5 px-0 pb-16">
        <div class="gap-16 items-center flex px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:px-6">
            <h3 class="text-2xl text-black font-bold dark:text-white pb-4">#Artikelnya Manusia</h3>
        </div>
        <div class="items-center flex px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-6 lg:px-6">
            <div class="col-span-6">
                <div class="grid grid-cols-4 gap-2">
                    @foreach($articles as $article)
                        <article
                            class="p-0 pb-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <img
                                src="{{ $article->thumbnail ? asset('uploads/thumbnails/'.$article->thumbnail) : 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png' }}"
                                class="mb-2 rounded-t-md object-cover h-40 w-full"
                                alt="Image 1">

                            <div class="p-3">
                                <h6 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h6>
                                <div
                                    class="mb-4 font-normal text-gray-700 dark:text-gray-400 text-wrap text-clip max-w-xxl overflow-hidden">
                                    <div class="line-clamp-3">{!! $article->content !!}</div>
                                </div>
                            </div>
                            <div class="justify-end text-center">
                                <a href="{{ route('articles-detail', $article->id) }}"
                                   class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                    Read More
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="mt-5 bg-blue-900 sm:p-5 p-4">
                    <h3 class="text-2xl text-white font-bold dark:text-white pb-5">#Musiknya Manusia</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 sm:gap-6 gap-2">
                        <div class="sm:col-span-2 h-300 sm:h-[550px]">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/iucEYKOQpTw?si=rxvqerJWyr33RYxf" 
                                title="YouTube video player" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="mb-3 sm:h-[250px]" >
                                <iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/01VB0-aEVGU?si=IzI7UW_M6nSMd2xb"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="sm:h-[250px]">
                                <iframe width="100%" height="100%"
                                        src="https://www.youtube.com/embed/JZSEVKutw78?si=AUqWF_vSt4c3eO66"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
