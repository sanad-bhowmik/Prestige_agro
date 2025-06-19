<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo | Prestige</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans antialiased">
    @include('partials.nav')

    <main class="container mx-auto px-4 py-10">
        <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-10">Photo Gallery</h1>

        @if ($photos->count())
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($photos as $photo)
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                <img
                    src="{{ url($photo->file_path) }}"
                    alt="Photo"
                    class="w-full object-contain" />

            </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-gray-500 mt-10">No photos available.</p>
        @endif
    </main>

    @include('partials.footer')

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
