<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card Slider</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles for Swiper */
        .swiper-container {
            width: 100%;
            padding-top: 20px;
            padding-bottom: 40px;
        }

        .swiper-slide {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .swiper-slide:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .swiper-slide img {
            width: 100%;
            height: 200px; /* Fixed height for images */
            object-fit: cover; /* Ensure the image covers the space without distortion */
            border-radius: 8px;
        }

        .swiper-slide .card-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 280px; /* Fixed height for content area */
        }

        .swiper-pagination-bullet {
            background-color: #007bff;
        }

        .swiper-pagination-bullet-active {
            background-color: #0056b3;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Swiper Container -->
    <div class="swiper-container max-w-7xl mx-auto container">
        <div class="font font-Poppins mb-14">
            <div class="flex flex-col items-center relative">
                <!-- Background Text  -->
                <h1 class="absolute text-6xl md:text-9xl font-semibold text-gray-600 opacity-5  ">
                    Prestige
                </h1>
                <div class="relative flex flex-col items-center mt-5 md:mt-10">
                    <!-- Foreground Text  -->
                    <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-gray-600">Products</h1>
                    <!-- Custom Border  -->
                    <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-green-400 "></div>
                </div>
            </div>
        </div>
        <div class="swiper-wrapper">

            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="max-w-md mx-auto rounded-md overflow-hidden hover:shadow-lg">
                    <div class="relative">
                        <img class="w-full" src="https://m.media-amazon.com/images/I/61K9a9dVFIL.jpg" alt="Product Image">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE</div>
                    </div>
                    <div class="p-4 card-content">
                        <h3 class="text-lg font-medium mb-2">Product Title</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                            vel eros fermentum faucibus sit amet euismod lorem.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$19.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="max-w-md mx-auto rounded-md overflow-hidden hover:shadow-lg">
                    <div class="relative">
                        <img class="w-full" src="https://cdn.shopify.com/s/files/1/0722/2059/files/artis-agro-artimin-chelated-mix-micro-nutrients-for-soil-file-8794.jpg?v=1737440971" alt="Product Image">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE</div>
                    </div>
                    <div class="p-4 card-content">
                        <h3 class="text-lg font-medium mb-2">Product Title</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                            vel eros fermentum faucibus sit amet euismod lorem.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$19.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="max-w-md mx-auto rounded-md overflow-hidden hover:shadow-lg">
                    <div class="relative">
                        <img class="w-full" src="https://marutiagrobiotech.com/wp-content/uploads/2023/09/Product-Images-Maruti-50-1000x1166.jpg" alt="Product Image">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE</div>
                    </div>
                    <div class="p-4 card-content">
                        <h3 class="text-lg font-medium mb-2">Product Title</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                            vel eros fermentum faucibus sit amet euismod lorem.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$19.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="max-w-md mx-auto rounded-md overflow-hidden hover:shadow-lg">
                    <div class="relative">
                        <img class="w-full" src="https://cdn.shopify.com/s/files/1/0722/2059/files/aries-total-file-9979.png?v=1737441822" alt="Product Image">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE</div>
                    </div>
                    <div class="p-4 card-content">
                        <h3 class="text-lg font-medium mb-2">Product Title</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                            vel eros fermentum faucibus sit amet euismod lorem.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$19.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="max-w-md mx-auto rounded-md overflow-hidden hover:shadow-lg">
                    <div class="relative">
                        <img class="w-full" src="https://ramcides.com/wp-content/uploads/2023/01/s-1-1-1-1-1-1.png" alt="Product Image">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE</div>
                    </div>
                    <div class="p-4 card-content">
                        <h3 class="text-lg font-medium mb-2">Product Title</h3>
                        <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                            vel eros fermentum faucibus sit amet euismod lorem.</p>
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-lg">$19.99</span>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1, // Show 1 card on small screens
            spaceBetween: 20, // Space between cards
            loop: true, // Infinite loop
            autoplay: {
                delay: 3000, // Auto-slide every 3 seconds
                disableOnInteraction: false, // Continue autoplay even when user interacts
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true, // Allow pagination clicks
            },
            breakpoints: {
                // Responsive breakpoints
                640: {
                    slidesPerView: 2, // Show 2 cards on medium screens
                },
                1024: {
                    slidesPerView: 3, // Show 3 cards on large screens
                },
            },
        });
    </script>

</body>

</html>
