<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Product Details</title>
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
    @include('partials.nav')
    <div class="container mx-auto px-4 py-12">
        <!-- Breadcrumbs -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/" class="text-gray-700 hover:text-primary">Home</a>
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

        <!-- Product Section -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
            <div class="md:flex">
                <!-- Product Images -->
                <div class="md:w-1/2 p-8 bg-gray-50">
                    <div class="border rounded-xl p-2 mb-4 shadow-sm bg-white">
                        <img id="mainImage" src="{{ asset('storage/products/'.$product->image) }}" alt="{{ $product->name }}" class="main-image w-full rounded-lg object-contain">
                    </div>
                    @if($product->gallery_images)
                    <div class="product-gallery">
                        @foreach(json_decode($product->gallery_images) as $image)
                        <div class="border rounded-lg p-1 hover:shadow transition duration-200 bg-white">
                            <img src="{{ asset('storage/products/gallery/'.$image) }}"
                                onclick="changeMainImage(this)"
                                class="h-24 w-full object-cover rounded-md">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- Product Info -->
                <div class="md:w-1/2 p-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4 leading-tight">{{ $product->name }}</h1>

                    <p class="text-gray-700 text-lg leading-relaxed mb-8">{{ $product->details }}</p>

                    <div class="border-t pt-6 mt-6">
                        <div class="flex items-center">
                            <span class="text-gray-600 font-semibold mr-4">Share:</span>
                            <div class="flex space-x-4 text-xl">
                                <a href="#" class="text-gray-400 hover:text-blue-600 transition"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-gray-400 hover:text-pink-600 transition"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-gray-400 hover:text-sky-500 transition"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-gray-400 hover:text-red-500 transition"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Related Products -->
        @if($relatedProducts->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">Related Products</h2>

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
                            <span class="text-gray-500 text-xs">({{ $product->review_count }})</span>
                        </div>
                        <button class="mt-3 w-full bg-primary hover:bg-primary-dark text-white py-2 px-4 rounded text-sm">
                            Add to Cart
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
        // Change main product image when thumbnail is clicked
        function changeMainImage(element) {
            document.getElementById('mainImage').src = element.src;
        }

        // Quantity controls
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

        // Tab switching
        function changeTab(tabId) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active', 'border-primary', 'text-primary');
                button.classList.add('border-transparent');
            });
