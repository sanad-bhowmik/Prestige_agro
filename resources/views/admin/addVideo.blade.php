<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Video | Prestige</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
</head>

<body class="bg-gray-50">
    <div class="md:flex min-h-screen">
        @include('partials.sidebar')

        <div class="flex-1 p-8 animate__animated animate__fadeIn">
            {{-- Success Message --}}
            @if (session('success'))
            <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-800 border border-green-200 animate__fadeInDown">
                {{ session('success') }}
            </div>
            @endif

            {{-- Validation Errors --}}
            @if ($errors->any())
            <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-200 animate__fadeInDown">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Upload Form Card --}}
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden animate__fadeInUp">
                <div class="p-8">
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-3xl font-bold text-gray-800">Add Video</h1>
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </div>

                    {{-- Form --}}
                    <form action="{{ route('videos.Vstore') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="url" class="block text-sm font-medium text-gray-700">Video URL</label>
                            <input
                                type="url"
                                name="url"
                                id="url"
                                placeholder="https://example.com/video"
                                required
                                class="mt-2 block w-full text-sm text-gray-700 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" style="padding: 10px;" />
                        </div>

                        <div>
                            <button
                                type="submit"
                                class="inline-flex items-center px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow-md transition">
                                Add Video
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            {{-- Gallery Display --}}
            @if(isset($photos) && $photos->count())
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($photos as $photo)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset($photo->file_path) }}" alt="Uploaded Image"
                        class="w-full h-48 object-cover">
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</body>

</html>
