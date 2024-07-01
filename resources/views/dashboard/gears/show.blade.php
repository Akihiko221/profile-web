<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Gear</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold mb-6">{{ $gear->brand }} {{ $gear->model }}</h1>
            @if ($gear->image)
                <img src="{{ asset('storage/' . $gear->image) }}" alt="{{ $gear->model }}"
                    class="w-auto h-full object-cover mb-4 rounded">
            @endif
            <p class="text-gray-700"><strong>Type:</strong> {{ ucfirst($gear->type) }}</p>
            <p class="text-gray-700"><strong>Description:</strong> {{ $gear->description }}</p>
            @if ($gear->link)
                <p class="text-gray-700"><strong>Link:</strong> <a href="{{ $gear->link }}" class="text-blue-500"
                        target="_blank">{{ $gear->link }}</a></p>
            @endif
            <a href="{{ route('dashboard.gear.index') }}"
                class="inline-block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Back
            </a>
        </div>
    </div>

</body>

</html>
