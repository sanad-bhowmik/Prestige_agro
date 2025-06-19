<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Videos | Prestige</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="bg-gray-50 font-sans antialiased">
    @include('partials.navbd')

    <main class="container mx-auto px-4 py-10">
        <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-10">ভিডিও গ্যালারি</h1>

        @if ($videos->count())
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($videos as $video)
            @php
            // Extract YouTube video ID from URL stored in $video->url
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video->url, $matches);
            $videoId = $matches[1] ?? null;
            @endphp

            @if ($videoId)
            <div class="aspect-w-16 aspect-h-9 bg-white rounded-lg shadow overflow-hidden">
                <iframe
                    class="w-full h-60"
                    src="https://www.youtube.com/embed/{{ $videoId }}"
                    frameborder="0"
                    allowfullscreen
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
            @endif
            @endforeach
        </div>
        @else
        <p class="text-center text-gray-500 mt-10">No videos available.</p>
        @endif
    </main>

    @include('partials.footer')

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
