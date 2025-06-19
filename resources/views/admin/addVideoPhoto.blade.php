<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gallery | Prestige</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s" />
</head>

<body class="bg-gray-50">
    <div class="md:flex min-h-screen">
        @include('partials.sidebar')

        <main class="flex-1 p-8 animate__animated animate__fadeIn max-w-7xl mx-auto">

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

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                {{-- Photos Table --}}
                <section class="bg-white rounded-xl shadow-md overflow-hidden animate__fadeInUp">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Photos Gallery</h2>
                        @if (isset($photos) && $photos->count())
                        <table class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Image</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($photos as $photo)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-700">{{ $photo->id }}</td>
                                    <td class="px-6 py-4">
                                        <img src="{{ asset($photo->file_path) }}" alt="Photo {{ $photo->id }}"
                                            class="w-24 h-16 object-cover rounded" />
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('photos.Pdestroy', $photo->id) }}" method="POST" onsubmit="return confirm('Delete this photo?')">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded-md transition duration-200">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-gray-500">No photos found.</p>
                        @endif
                    </div>
                </section>

                {{-- Videos Table --}}
                <section class="bg-white rounded-xl shadow-md overflow-hidden animate__fadeInUp">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Videos List</h2>
                        @if (isset($videos) && $videos->count())
                        <table class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">URL</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($videos as $video)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-700">{{ $video->id }}</td>
                                    <td class="px-6 py-4">
                                        @php
                                        // Extract the video ID from the YouTube URL stored in DB
                                        preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\s&]+)/', $video->url, $matches);
                                        $videoId = $matches[1] ?? null;
                                        @endphp

                                        @if ($videoId)
                                        <iframe
                                            width="200"
                                            height="120"
                                            src="https://www.youtube.com/embed/{{ $videoId }}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                            class="rounded shadow"></iframe>
                                        @else
                                        <span class="text-sm text-red-500">Invalid YouTube URL</span>
                                        @endif
                                    </td>

                                    <td class="px-6 py-4">
                                        <form action="{{ route('videos.Vdestroy', $video->id) }}" method="POST" onsubmit="return confirm('Delete this video?')">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded-md transition duration-200">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-gray-500">No videos found.</p>
                        @endif
                    </div>
                </section>

            </div>
        </main>
    </div>
</body>

</html>
