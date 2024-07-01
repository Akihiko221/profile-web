<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Syahreza Satria</title>

    <!-- Google Fonts: Inter Tight -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Tailwind V3.4.4 -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    fontFamily: {
                        interTight: ['Inter Tight', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .sidebar {
            transition: transform 0.3s ease;
        }

        .sidebar-hidden {
            transform: translateX(100%);
        }

        .social-icon {
            width: 18px;
            height: 18px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                max-width: 320px;
            }

            .sidebar-hidden {
                transform: translateX(100%);
            }

            #toggleSidebar {
                top: 1rem;
                right: 1rem;
            }
        }
    </style>

</head>

<body class="font-interTight">
    <div class="flex min-h-screen relative">
        <div class="flex-grow p-6 max-w-lg mx-auto">
            <!-- Main content area -->
            @yield('content')
        </div>

        <!-- Sidebar -->
        <div id="sidebar" class="w-64 bg-gray-100 p-4 fixed right-0 top-0 h-full sidebar sidebar-hidden">
            <h2 class="text-xl font-semibold mb-4">Menu</h2>
            <ul>
                <li class="mb-2">
                    <a href="/" class="text-gray-600 hover:text-blue-800">Home</a>
                </li>
                <li class="mb-2">
                    <a href="/gear" class="text-gray-600 hover:text-blue-800">Gear</a>
                </li>
                {{-- <li class="mb-2">
                    <a href="/content" class="text-gray-600 hover:text-blue-800">Content</a>
                </li> --}}
            </ul>
        </div>

        <button id="toggleSidebar" class="fixed top-4 right-4 bg-gray-200 text-gray-800 p-2 rounded-full">
            <!-- Icon from Heroicons -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-hidden');
        });
    </script>
</body>

</html>
