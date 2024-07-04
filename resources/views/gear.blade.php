@extends('layouts.main')

@section('content')
    <section class="flex items-center justify-start gap-3 my-5 sm:flex-row">
        <img src="{{ asset('/img/profile-1.jpg') }}" alt="Syahreza Satria" class="rounded-full w-[80px] lg:w-[96px]">
        <h1 class="font-bold text-center sm:text-left lg:text-2xl sm:text-xl">Syahreza Satria</h1>
    </section>
    <hr>
    <section class="my-8 px-4">
        <h2 class="text-2xl font-bold mb-5">Gear</h2>
        <p>All the tech I use to make product and content from pre to post production. I've highlighted my personal
            recommendations and provided affiliate links to purchase them.</p>
    </section>

    <section class="my-8 px-4">
        <!-- Main Filter Buttons -->
        <div class="flex flex-wrap gap-2 mb-2 justify-start">
            <button onclick="showSubFilters('video', this)"
                class="main-filter-button px-2 py-1 bg-gray-300 text-black text-sm rounded transition duration-300 ease-in-out transform hover:-translate-y-1">
                <i class="fas fa-video mr-1"></i> Video
            </button>
            <button onclick="showSubFilters('audio', this)"
                class="main-filter-button px-2 py-1 bg-gray-300 text-black text-sm rounded transition duration-300 ease-in-out transform hover:-translate-y-1">
                <i class="fas fa-microphone mr-1"></i> Audio
            </button>
            <button onclick="showSubFilters('computer', this)"
                class="main-filter-button px-2 py-1 bg-gray-300 text-black text-sm rounded transition duration-300 ease-in-out transform hover:-translate-y-1">
                <i class="fas fa-desktop mr-1"></i> Computer
            </button>
        </div>

        <!-- Sub Filter Buttons -->
        <div id="subFilters" class="flex flex-wrap gap-2 mb-2 justify-start">
            <!-- Sub filters will be injected here -->
        </div>

        <!-- Clear All Filters Button -->
        <div id="clearFiltersContainer" class="flex justify-start mb-8" style="display: none;">
            <button onclick="clearAllFilters()"
                class="px-2 py-1 text-red-600 text-sm rounded transition duration-300 ease-in-out transform hover:-translate-y-1">
                <i class="fas fa-times mr-1"></i> Clear All Filters
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="gearsContainer">
            @foreach ($gears as $gear)
                <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col gear-item"
                    data-type="{{ $gear->type }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('storage/' . $gear->image) }}" alt="{{ $gear->model }}"
                            class="w-full h-auto object-cover rounded-lg">
                    </div>
                    <div class="p-4 flex-grow">
                        <p class="text-base font-extrabold text-gray-600 mb-3">{{ $gear->brand }}</p>
                        <h3 class="font-semibold text-xl mb-2 uppercase">{{ $gear->model }}</h3>
                        <p class="text-sm text-gray-500 mb-2">{{ $gear->type }}</p>
                        <p class="text-gray-600 mb-4">{{ $gear->description }}</p>
                    </div>
                    @if ($gear->link)
                        <div class="p-4">
                            <a href="{{ $gear->link }}" target="_blank"
                                class="text-blue-600 hover:text-blue-800 font-semibold">Check the store</a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <footer class="my-8 px-4">
        <div class="w-full text-center">
            <div class="flex justify-center space-x-4 mb-4 gap-8">
                <a href="https://www.youtube.com/channel/UCKOsC0UA4DpQVwptrJIP-Kw" target="_blank"
                    class="text-gray-800 hover:text-gray-600">
                    <i class="fab fa-youtube social-icon"></i>
                </a>
                <a href="https://www.tiktok.com/@syhreza.satria" target="_blank" class="text-gray-800 hover:text-gray-600">
                    <i class="fab fa-tiktok social-icon"></i>
                </a>
                <a href="https://www.instagram.com/syahreza_satria" target="_blank"
                    class="text-gray-800 hover:text-gray-600">
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
        </div>
    </footer>

    <script>
        function showSubFilters(category, button) {
            const subFilters = document.getElementById('subFilters');
            const clearFiltersContainer = document.getElementById('clearFiltersContainer');
            subFilters.innerHTML = ''; // Clear existing sub filters

            const subFilterButtons = {
                video: [{
                        type: 'kamera',
                        label: 'Kamera'
                    },
                    {
                        type: 'lensa',
                        label: 'Lensa'
                    },
                    {
                        type: 'lighting',
                        label: 'Lighting'
                    }
                ],
                audio: [{
                    type: 'microphone',
                    label: 'Microphone'
                }],
                computer: [{
                        type: 'laptop',
                        label: 'Laptop'
                    },
                    {
                        type: 'keyboard',
                        label: 'Keyboard'
                    },
                    {
                        type: 'monitor',
                        label: 'Monitor'
                    },
                    {
                        type: 'mouse',
                        label: 'Mouse'
                    }
                ]
            };

            subFilterButtons[category].forEach(subFilter => {
                const subButton = document.createElement('button');
                subButton.className =
                    'sub-filter-button px-2 py-1 bg-gray-300 text-black text-sm rounded transition duration-300 ease-in-out transform hover:-translate-y-1';
                subButton.innerHTML = `${subFilter.label}`;
                subButton.onclick = () => filterGears(subFilter.type, subButton);
                subFilters.appendChild(subButton);
            });

            // Remove the active class from all main buttons
            var mainButtons = document.querySelectorAll('.main-filter-button');
            mainButtons.forEach(function(btn) {
                btn.classList.remove('bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-300', 'text-black');
            });

            // Add the active class to the clicked main button
            button.classList.remove('bg-gray-300', 'text-black');
            button.classList.add('bg-blue-500', 'text-white');

            // Initially show all gears when a main filter is selected
            filterGears('all', button);

            // Show the "Clear All Filters" button
            clearFiltersContainer.style.display = 'flex';
        }

        function filterGears(type, button) {
            var items = document.querySelectorAll('.gear-item');
            items.forEach(function(item) {
                if (type === 'all' || item.getAttribute('data-type') === type) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Remove the active class from all buttons
            var buttons = document.querySelectorAll('.sub-filter-button, .main-filter-button');
            buttons.forEach(function(btn) {
                btn.classList.remove('bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-300', 'text-black');
            });

            // Add the active class to the clicked button
            button.classList.remove('bg-gray-300', 'text-black');
            button.classList.add('bg-blue-500', 'text-white');
        }

        function clearAllFilters() {
            var items = document.querySelectorAll('.gear-item');
            items.forEach(function(item) {
                item.style.display = 'block';
            });

            // Remove the active class from all buttons
            var buttons = document.querySelectorAll('.sub-filter-button, .main-filter-button');
            buttons.forEach(function(btn) {
                btn.classList.remove('bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-300', 'text-black');
            });

            // Clear subfilters and hide "Clear All Filters" button
            const subFilters = document.getElementById('subFilters');
            subFilters.innerHTML = '';
            const clearFiltersContainer = document.getElementById('clearFiltersContainer');
            clearFiltersContainer.style.display = 'none';
        }
    </script>
@endsection
