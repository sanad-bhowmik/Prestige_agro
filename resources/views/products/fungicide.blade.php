<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Prestige Agro Dragon Ltd.</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    @include('partials.nav')

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col items-center relative mb-20">
            <!-- Background Text  -->
            <h1 class="absolute text-6xl md:text-9xl font-semibold text-gray-600 opacity-5  ">
                Prestige
            </h1>
            <div class="relative flex flex-col items-center mt-5 md:mt-10">
                <!-- Foreground Text  -->
                <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-gray-600">Fungicide</h1>
                <!-- Custom Border  -->
                <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-green-400 "></div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse($products as $product)
            <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('storage/products/'.$product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-md mb-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h2>
                <p class="text-gray-600 text-sm mt-2">{{ Str::limit($product->details, 100) }}</p>
                <a href="{{ route('product.details', $product->id) }}"
                    class="inline-flex items-center mt-4 px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-red-700 transition duration-300">
                    View Details
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>

            </div>
            @empty
            <p class="text-gray-500">No products found in this category.</p>
            @endforelse
        </div>
    </div>

    @include('partials.footer')

</body>

</html>
