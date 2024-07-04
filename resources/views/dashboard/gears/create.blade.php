<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gear</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Add Gear</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.gear.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="brand">
                    Brand
                </label>
                <input type="text" name="brand" id="brand"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('brand') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="model">
                    Model
                </label>
                <input type="text" name="model" id="model"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('model') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                    Type
                </label>
                <select name="type" id="type"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" selected>Pilih Type</option>
                    <option value="kamera" {{ old('type') == 'kamera' ? 'selected' : '' }}>Kamera</option>
                    <option value="lensa" {{ old('type') == 'lensa' ? 'selected' : '' }}>Lensa</option>
                    <option value="lighting" {{ old('type') == 'lighting' ? 'selected' : '' }}>Lighting</option>
                    <option value="microphone" {{ old('type') == 'microphone' ? 'selected' : '' }}>Microphone</option>
                    <option value="laptop" {{ old('type') == 'laptop' ? 'selected' : '' }}>Laptop</option>
                    <option value="keyboard" {{ old('type') == 'laptop' ? 'selected' : '' }}>Keyboard</option>
                    <option value="monitor" {{ old('type') == 'laptop' ? 'selected' : '' }}>Monitor</option>
                    <option value="mouse" {{ old('type') == 'laptop' ? 'selected' : '' }}>Mouse</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea name="description" id="description"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Image
                </label>
                <input type="file" name="image" id="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                    Link
                </label>
                <input type="text" name="link" id="link"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('link') }}">
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add Gear
            </button>
        </form>
    </div>

</body>

</html>
