@extends('layouts.main')

@section('content')
    <section class="flex items-center justify-start gap-3 my-5">
        <img src="{{ asset('/img/profile-1.jpg') }}" alt="Syahreza Satria" class="rounded-full w-[80px] lg:w-[96px]">
        <h1 class="font-bold lg:text-2xl sm:text-xl">Syahreza Satria</h1>
    </section>
    <hr>
    <section class="my-8">
        <p class="mb-3 leading-relaxed">Welcome to my content page! Here you will find all my latest posts, projects, and
            other
            creative works.</p>
        <a href="mailto:satriaeza221@gmail.com" class="text-blue-600 hover:text-blue-800 font-semibold">Have any questions?
            Email me!</a>
    </section>
    <hr>
    <section class="my-8">
        <h2 class="text-xl font-semibold mb-4">Latest Blog Posts</h2>
        <!-- Add your blog post content here -->
        <div class="rounded-lg overflow-hidden">
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h3 class="text-lg font-semibold mb-2">Post Title 1</h3>
                <p class="text-gray-600 mb-4">A brief description of the first blog post.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Read more</a>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h3 class="text-lg font-semibold mb-2">Post Title 2</h3>
                <p class="text-gray-600 mb-4">A brief description of the second blog post.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Read more</a>
            </div>
        </div>
    </section>
    <hr>
    <section class="my-8">
        <h2 class="text-xl font-semibold mb-4">Projects</h2>
        <!-- Add your project content here -->
        <div class="rounded-lg overflow-hidden">
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h3 class="text-lg font-semibold mb-2">Project Title 1</h3>
                <p class="text-gray-600 mb-4">A brief description of the first project.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">View project</a>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h3 class="text-lg font-semibold mb-2">Project Title 2</h3>
                <p class="text-gray-600 mb-4">A brief description of the second project.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">View project</a>
            </div>
        </div>
    </section>
    <hr>
    <section class="my-8">
        <h2 class="text-xl font-semibold mb-4">Other Creative Works</h2>
        <!-- Add your other creative works content here -->
        <div class="rounded-lg overflow-hidden">
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h3 class="text-lg font-semibold mb-2">Creative Work Title 1</h3>
                <p class="text-gray-600 mb-4">A brief description of the first creative work.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">View work</a>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h3 class="text-lg font-semibold mb-2">Creative Work Title 2</h3>
                <p class="text-gray-600 mb-4">A brief description of the second creative work.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">View work</a>
            </div>
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
