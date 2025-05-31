<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - পণ্যের বিস্তারিত</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <style>
        :root {
            --primary: #3B82F6;
            --primary-dark: #2563EB;
            --secondary: #10B981;
        }

        .product-gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-top: 10px;
        }

        .product-gallery img {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .product-gallery img:hover {
            opacity: 0.8;
        }

        .main-image {
            height: 400px;
            object-fit: contain;
        }

        .feature-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }

        .feature-list li:before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--secondary);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-50">
    @include('partials.navbd')
    <div class="container mx-auto px-4 py-12">

        <!-- ব্রেডক্রাম্ব -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/bd" class="text-gray-700 hover:text-primary">হোম</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="#" class="text-gray-700 hover:text-primary">{{ $product->category->name }}</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="text-primary font-medium">{{ $product->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- পণ্যের বিভাগ -->
        <!-- Product Section -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-2xl">
            <div class="md:flex">
                <!-- Product Images -->
                <div class="md:w-1/2 p-6 md:p-8 bg-gray-50">
                    <div class="border-2 border-gray-100 rounded-xl p-4 mb-8 shadow-sm bg-white transition duration-300 hover:border-green-200">
                        <img id="mainImage" src="{{ asset('storage/products/'.$product->image) }}"
                            alt="{{ $product->name }}"
                            class="main-image w-full h-80 md:h-96 rounded-lg object-contain transition duration-500">
                    </div>

                    @if($product->gallery_images)
                    <div class="product-gallery grid grid-cols-4 gap-4">
                        @foreach(json_decode($product->gallery_images) as $image)
                        <div class="border-2 border-gray-100 rounded-lg p-2 hover:shadow-md transition duration-200 bg-white cursor-pointer hover:border-green-300">
                            <img src="{{ asset('storage/products/gallery/'.$image) }}"
                                onclick="changeMainImage(this)"
                                class="h-24 w-full object-cover rounded-md transition duration-300 hover:scale-105">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- Product Info -->
                <div class="md:w-1/2 p-6 md:p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h1 class="text-3xl md:text-3xl font-bold text-gray-900 leading-tight tracking-wide">{{ $product->name }}</h1>
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-4 py-1.5 rounded-full">
                            {{ $product->category->name ?? 'Category' }}
                        </span>
                    </div>

                    <!-- Product Description -->
                    <div class="mb-8">
                        <p class="text-gray-700 text-lg md:text-lg leading-relaxed tracking-wide">
                            {{ $product->details }}
                        </p>
                    </div>

                    <!-- Additional Information Tabs -->
                    <div class="mb-10">
                        <div class="border-b border-gray-200">
                            <nav class="flex -mb-px space-x-8">
                                <button type="button" class="tab-button py-4 px-2 border-b-2 font-medium text-base md:text-base border-green-500 text-green-600">
                                    Elements
                                </button>
                                <button type="button" class="tab-button py-4 px-2 border-b-2 font-medium text-base md:text-base border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                                    Uses
                                </button>
                                <button type="button" class="tab-button py-4 px-2 border-b-2 font-medium text-base md:text-base border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                                    Limits
                                </button>
                            </nav>
                        </div>
                        <div class="py-6 space-y-4">
                            <div class="tab-content active" id="elements">
                                <p class="text-gray-700 text-base leading-relaxed">
                                    {{ $product->element }}
                                </p>
                            </div>
                            <div class="tab-content hidden" id="uses">
                                <p class="text-gray-700 text-base leading-relaxed">
                                    {{ $product->uses }}
                                </p>
                            </div>
                            <div class="tab-content hidden" id="limits">
                                <ul class="text-gray-700 text-base leading-relaxed space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-red-500 mr-2">•</span>
                                        {{ $product->limit }}
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Share Section -->
                    <div class="border-t border-gray-200 pt-8">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                            <div class="mb-4 sm:mb-0">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Share this product:</h3>
                                <p class="text-gray-600">Help others discover this amazing product</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-200 transition">
                                    <i class="fab fa-facebook-f text-lg"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 hover:bg-pink-200 transition">
                                    <i class="fab fa-instagram text-lg"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-600 hover:bg-sky-200 transition">
                                    <i class="fab fa-twitter text-lg"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 hover:bg-red-200 transition">
                                    <i class="fab fa-pinterest-p text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Tab functionality
            document.querySelectorAll('.tab-button').forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active classes from all tabs and contents
                    document.querySelectorAll('.tab-button').forEach(btn => {
                        btn.classList.remove('border-green-500', 'text-green-600');
                        btn.classList.add('border-transparent', 'text-gray-500');
                    });
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.add('hidden');
                        content.classList.remove('active');
                    });

                    // Add active classes to clicked tab
                    button.classList.add('border-green-500', 'text-green-600');
                    button.classList.remove('border-transparent', 'text-gray-500');

                    // Show corresponding content
                    const tabId = button.textContent.trim().toLowerCase();
                    document.getElementById(tabId).classList.remove('hidden');
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Image gallery functionality
            function changeMainImage(element) {
                document.getElementById('mainImage').src = element.src;
                document.getElementById('mainImage').classList.add('animate-pulse');
                setTimeout(() => {
                    document.getElementById('mainImage').classList.remove('animate-pulse');
                }, 300);
            }
        </script> <!-- Related Products -->

        <!-- সম্পর্কিত পণ্য -->
        @if($relatedProducts->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">সম্পর্কিত পণ্যসমূহ</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($relatedProducts as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <a href="{{ route('product.details', $product->id) }}">
                            <img src="{{ asset('storage/products/'.$product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                        </a>
                    </div>
                    <div class="p-4">
                        <a href="{{ route('product.details', $product->id) }}" class="font-medium text-gray-900 hover:text-primary block mb-1">{{ $product->name }}</a>

                        <div class="mt-2 flex items-center">
                            <div class="flex text-yellow-400 text-xs mr-2">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <=$product->rating)
                                    <i class="fas fa-star"></i>
                                    @else
                                    <i class="far fa-star"></i>
                                    @endif
                                    @endfor
                            </div>
                            <span class="text-gray-500 text-xs">({{ $product->review_count }} রিভিউ)</span>
                        </div>
                        <button class="mt-3 w-full bg-primary hover:bg-primary-dark text-white py-2 px-4 rounded text-sm">
                            কার্টে যোগ করুন
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>

    @include('partials.footer')

    <script>
        // থাম্বনেইলে ক্লিক করলে প্রধান ছবিটি পরিবর্তন হবে
        function changeMainImage(element) {
            document.getElementById('mainImage').src = element.src;
        }

        // পরিমাণ নিয়ন্ত্রণ
        function increaseQuantity() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.max);
            if (input.value < max) {
                input.value = parseInt(input.value) + 1;
            }
        }

        function decreaseQuantity() {
            const input = document.getElementById('quantity');
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        // ট্যাব পরিবর্তন
        function changeTab(tabId) {
            // সব ট্যাব কন্টেন্ট লুকানো হবে
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            // সব ট্যাব বাটন থেকে active ক্লাস সরানো হবে
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active', 'border-primary', 'text-primary');
                button.classList.add('border-transparent');
            });

            // নির্দিষ্ট ট্যাবটি অ্যাক্টিভ করা হবে
            document.getElementById(tabId).classList.add('active');
            document.querySelector(`[data-tab="${tabId}"]`).classList.add('active', 'border-primary', 'text-primary');
        }
    </script>
</body>

</html>
