@extends('layouts.website')
@section('content')
    <section class="bg-cover bg-center bg-blend-multiply bg-no-repeat"
             style="background-image: url({{ url('assets/img/hero-2.webp') }}); background-color: rgba(0, 0, 0, 0.5);">
        <div class="h-[30rem] mx-auto flex flex-col items-center justify-center max-w-screen-xl text-center">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">TENTANG KAMI</h2>
            <p class="mb-4 text-white">For People Media merupakan media informasi digital yang bergerak di bidang promosi event, musik, dan podcast.
                                        FPMedia kini sudah banyak dipercaya menjadi salah satu media partner di beberapa event serta media promosi lagu dari musisi lokal.
                                        Oleh karena itu kami mempunyai tujuan untuk mendukung serta mempromosikan event dan musik yang ada di Indonesia. 
                                        Dengan ini kami sangat berharap bisa menjadi salah satu elemen penting dalam sebuah kesuksesan suatu event. 
                                        Besar harapan kami agar banyak event dan musisi yang mempercayai kami sebagai salah satu media promosi.</p>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Visi
                    </h2>
                <p class="mb-4 text-justify align-justify">Menjadi media informasi digital yang dapat mewadahi generasi milenial untuk berinovasi dan berkreativitas demi meningkatkan reputasi jurnalistik dengan
                            kemajuan teknologi agar dapat bersaing dengan beragam media online yang banyak diakses oleh generasi milenial dan menyediakan platform sesuai kebutuhan 
                            promosi musisi untuk mendistribusikan karyanya.</p>
            </div>
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Misi
                    </h2>
                <ol class="list-decimal">
                    <li>Menjadi media alternatif, edukatif dan menarik bagi penyelenggara event dalam mempromosikan event</li>
                    <li>Menjadi media yang efektif dengan berinovasi dan berkreatifitas untuk menyebarkan informasi terkini baik secara khusus maupun umum</li>
                    <li>Meningkatkan peran jurnalistik dalam menyampaikan informasi seputar event kepada masyarakat umum</li>
                    <li>Meningkatkan peran jurnalistik dalam menyampaikan informasi seputar event kepada masyarakat umum</li>
                    <li>Menjadi media informasi yang eklusif untuk mendapatkan pilihan yang tepat</li>
                    <li>Membantu mempublikasikan karya musisi melalui platform For People Media</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="px-6 py-5">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">EVENT PARTNER</h2>
        <div class="grid grid-cols-6 gap-4 mt-8 sm:px-24">
            <div>
                <img src="{{ asset('assets/img/1_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/2_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/3_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/4_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/5_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/6_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/7_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/8_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/9_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/10_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/11_logo.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/12_logo.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="px-6 py-10">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">JANGKAUAN KAMPUS</h2>
        <div class="grid grid-cols-6 gap-4 mt-8 sm:px-24">
            <div>
                <img src="{{ asset('assets/img/1_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/2_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/3_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/4_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/5_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/7_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/8_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/9_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/10_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/11_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/12_logo_kampus.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/img/6_logo_kampus.png') }}" alt="">
            </div>
        </div>
    </section>
@endsection
