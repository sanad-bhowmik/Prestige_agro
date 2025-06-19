<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Prestige</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .max-w-7xl {
            margin-top: 5rem;
        }
    </style>
</head>

<body class="antialiased bg-gray-50">
    @include('partials.nav')

    <section id="our-team" class="bg-gray-100 py-32">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 text-fuchsia-600">আমাদের টিমের সাথে পরিচিত হন</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="{{ asset('img/Chairman sir.jpg') }}" alt="Team Member 1"
                         class="w-48 h-56 object-cover rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2">এএফএম মাহবুবুল হাসান</h3>
                    <p class="text-gray-700">চেয়ারম্যান</p>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="{{ asset('img/emam.jpg') }}" alt="Team Member 2"
                         class="w-48 h-56 object-cover rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2">মোঃ ইমাম হোসেন</h3>
                    <p class="text-gray-700">ম্যানেজিং ডিরেক্টর</p>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="{{ asset('img/rajon sir new.jpg') }}" alt="Team Member 3"
                         class="w-48 h-56 object-cover rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2">মোঃ রেশাদুল ইসলাম খান রাজন</h3>
                    <p class="text-gray-700">ডিরেক্টর</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
