@extends('layouts.main')

@section('content')
    <section class="flex items-center justify-start gap-3 my-5">
        <img src="{{ asset('/img/profile-1.jpg') }}" alt="Syahreza Satria" class="rounded-full w-[80px] lg:w-[96px]">
        <h1 class="font-bold lg:text-2xl sm:text-xl">Syahreza Satria</h1>
    </section>
    <hr>
    <section class="my-8">
        <p class="mb-3 leading-relaxed">23 year old programmer 💻 content creator 📸 based in Bandung and Kendari making
            Website and videos on Instagram and YouTube under the name of Syahreza Satria</p>
        <a href="mailto:satriaeza221@gmail.com" class="text-blue-600 hover:text-blue-800 font-semibold">Interested in working
            together? Email me!</a>
    </section>
    <hr>
    <section class="my-8">
        <h2 class="text-xl font-semibold mb-4">Latest YouTube Video</h2>
        <div class="rounded-lg overflow-hidden">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/xJ9zkuAplf4?si=2elb5rpEuHigYKOV"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <hr>
    <section class="my-8">
        <h2 class="text-xl font-semibold mb-4">My Spotify Playlist</h2>
        <div class="rounded-lg overflow-hidden">
            <iframe style="border-radius:12px"
                src="https://open.spotify.com/embed/playlist/0NT3RpRujKiOtjocMi4is1?utm_source=generator&theme=0"
                width="100%" height="152" frameborder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
    </section>

    <footer class="w-full my-8 text-center">
        <div class="flex justify-center space-x-4 mb-4 gap-8">
            <a href="https://www.youtube.com/channel/UCKOsC0UA4DpQVwptrJIP-Kw" target="_blank"
                class="text-gray-800 hover:text-gray-600">
                <i class="fab fa-youtube social-icon"></i>
            </a>
            <a href="https://www.tiktok.com/@syhreza.satria" target="_blank" class="text-gray-800 hover:text-gray-600">
                <i class="fab fa-tiktok social-icon"></i>
            </a>
            <a href="https://www.instagram.com/syahreza_satria" target="_blank" class="text-gray-800 hover:text-gray-600">
                <i class="fab fa-instagram social-icon"></i>
            </a>
            <a href="https://open.spotify.com/playlist/0NT3RpRujKiOtjocMi4is1?si=a8f0cf3c0b1242cd" target="_blank"
                class="text-gray-800 hover:text-gray-600">
                <i class="fab fa-spotify social-icon"></i>
            </a>
            <a href="mailto:satriaeza221@gmail.com" class="text-gray-800 hover:text-gray-600">
                <i class="fas fa-envelope social-icon"></i>
            </a>
        </div>
        <p class="text-gray-600 text-sm">&copy; 2024 Syahreza Satria, All Rights Reserved</p>
    </footer>
@endsection
