<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .sidebar-hidden {
            transform: translateX(100%);
        }

        .transition-transform {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-blue-800 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">My Dashboard</a>
            <button id="toggleSidebar" class="text-white focus:outline-none md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </nav>

    <div class="flex">
        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="{{ route('dashboard.gear.index') }}"
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-xl font-bold mb-4">Gear</h2>
                    <p>Edit, View, dan Delete gear yang ada. Melakukan pengaturan gear agar dapat </p>
                </a>
            </div>
        </main>

        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-64 bg-gray-800 text-white min-h-screen transform transition-transform duration-300 fixed right-0 top-0 md:relative md:translate-x-0 md:block sidebar-hidden">
            <div class="p-4 flex justify-between items-center">
                <h2 class="text-2xl font-bold mb-4">Menu</h2>
                <button id="closeSidebar" class="text-white focus:outline-none md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <ul>
                <li class="mb-2">
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Dashboard</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Users</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Settings</a>
                </li>
            </ul>
        </aside>
    </div>

    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('sidebar-hidden');
        });

        document.getElementById('closeSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.add('sidebar-hidden');
        });
    </script>

</body>

</html>
