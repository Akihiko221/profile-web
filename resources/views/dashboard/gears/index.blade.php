<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gears</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto p-6">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold inline-block">Gears</h1>
            <div>
                <a href="{{ route('dashboard.index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Back to Dashboard
                </a>
                <a href="{{ route('dashboard.gear.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Gear
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($gears as $gear)
                <div class="bg-white p-6 rounded-lg shadow-md flex">
                    <div class="flex-1">
                        <h2 class="text-xl font-bold mb-4 uppercase">{{ $gear->brand }} {{ $gear->model }}</h2>
                        <p>{{ $gear->description }}</p>
                        <div class="flex space-x-4 mt-4">
                            <a href="{{ route('dashboard.gear.show', $gear->id) }}" class="text-blue-500">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('dashboard.gear.edit', $gear->id) }}" class="text-yellow-500">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('dashboard.gear.destroy', $gear->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    @if ($gear->image)
                        <img src="{{ asset('storage/' . $gear->image) }}" alt="{{ $gear->model }}"
                            class="w-1/3 h-auto object-cover rounded-lg ml-4">
                    @endif
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
