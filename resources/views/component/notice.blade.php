<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Notice | Prestige</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        .notice-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50 font-sans antialiased">
    @include('partials.nav')

    <main class="container mx-auto px-4 py-10">
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Notice Board</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Stay updated with the latest announcements and important information</p>
        </div>

        @if ($notices->count())
            <!-- Desktop/Tablet View -->
            <div class="hidden md:block overflow-x-auto bg-white rounded-xl shadow-md">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-green-600">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">ID</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Title</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Details</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($notices as $notice)
                            <tr class="hover:bg-green-50 transition duration-150">
                                <td class="px-6 py-4 text-gray-800 font-medium">
                                    {{ $notice->id }}
                                </td>
                                <td class="px-6 py-4 font-medium text-green-600">
                                    {{ $notice->title }}
                                </td>
                                <td class="px-6 py-4 text-gray-700 max-w-xl">
                                    {{ Str::limit($notice->details, 100) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Mobile View -->
            <div class="md:hidden space-y-4">
                @foreach ($notices as $notice)
                    <div class="notice-card bg-white p-5 rounded-lg shadow transition duration-300">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">#{{ $notice->id }}</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $notice->title }}</h3>
                        <p class="text-gray-600">{{ Str::limit($notice->details, 150) }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Pagination would go here if needed -->
        @else
            <div class="text-center py-16">
                <i class="fas fa-bell-slash text-4xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-medium text-gray-600">No notices available</h3>
                <p class="text-gray-500 mt-2">Check back later for updates</p>
            </div>
        @endif
    </main>

    @include('partials.footer')

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
