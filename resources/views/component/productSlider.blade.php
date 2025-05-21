<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Product Slider</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #3B82F6;
            --primary-dark: #2563EB;
            --secondary: #10B981;
        }

        .swiper-container {
            width: 100%;
            padding: 20px 0 60px;
            overflow: hidden;
        }

        .product-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            margin: 0 10px;
            border: 1px solid #f0f0f0;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .product-image-container {
            position: relative;
            padding-top: 75%; /* 4:3 aspect ratio */
            overflow: hidden;
        }

        .product-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.03);
        }

        .product-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: var(--secondary);
            color: white;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            z-index: 2;
        }

        .product-content {
            padding: 16px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-title {
            font-size: 16px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 40px;
        }

        .product-description {
            color: #6B7280;
            font-size: 13px;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 36px;
        }

        .product-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-top: auto;
            padding-top: 8px;
        }

        .product-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .add-to-cart {
            background: var(--primary);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .add-to-cart:hover {
            background: var(--primary-dark);
        }

        .add-to-cart i {
            margin-right: 6px;
            font-size: 12px;
        }

        .view-details {
            background: white;
            color: var(--primary);
            border: 1px solid var(--primary);
            padding: 8px 12px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-left: 8px;
        }

        .view-details:hover {
            background: #f5f9ff;
        }

        .swiper-pagination-bullet {
            background: #D1D5DB;
            opacity: 1;
            width: 10px;
            height: 10px;
        }

        .swiper-pagination-bullet-active {
            background: var(--primary);
            width: 24px;
            border-radius: 6px;
        }

        .section-header {
            position: relative;
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
            position: relative;
            display: inline-block;
            padding-bottom: 12px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: var(--primary);
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: var(--primary);
            color: white;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 16px;
        }
    </style>
</head>

<body class="bg-gray-50 py-8">

    <!-- Product Slider Section -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        @foreach([1, 2, 3, 4] as $categoryId)
        @php
        $category = App\Models\Category::find($categoryId);
        $products = App\Models\Product::where('category_id', $categoryId)->get();
        @endphp

        @if($products->count() > 0)

        <div class="font font-Poppins mb-10">
                <div class="flex flex-col items-center relative">
                    <!-- Background Text  -->
                    <h1 class="absolute text-6xl md:text-9xl font-semibold text-gray-600 opacity-5  ">
                        Prestige
                    </h1>
                    <div class="relative flex flex-col items-center mt-5 md:mt-10">
                        <!-- Foreground Text  -->
                        <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-gray-600">{{ $category->name ?? 'Category '.$categoryId }}</h1>
                        <!-- Custom Border  -->
                        <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-green-400 "></div>
                    </div>
                </div>
            </div>

        <!-- Swiper Container for this category -->
        <div class="swiper-container swiper-category-{{ $categoryId }} mb-16">
            <div class="swiper-wrapper">
                @foreach($products as $product)
                <div class="swiper-slide">
                    <div class="product-card">
                        <!-- Product Badge -->
                        <div class="product-badge">New</div>

                        <!-- Product Image -->
                        <div class="product-image-container">
                            <img class="product-image" src="{{ asset('storage/products/' . ($product->image ?? 'default.png')) }}" alt="{{ $product->name }}">
                        </div>

                        <!-- Product Content -->
                        <div class="product-content">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <p class="product-description">{{ $product->details }}</p>

                            <!-- Price -->
                            @if($product->price)
                            <div class="product-price">{{ format_price($product->price) }}</div>
                            @endif

                            <!-- Actions -->
                            <div class="product-actions">
                            <a href="{{ route('product.details', $product->id) }}">
                                <button class="add-to-cart">
                                    <i class="fas fa-eye"></i>
                                    <a href="{{ route('product.details', $product->id) }}" > Details</a>
                                </button>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination swiper-pagination-{{ $categoryId }}"></div> -->

            <!-- Navigation Buttons -->
            <!-- <div class="swiper-button-next swiper-button-next-{{ $categoryId }}"></div>
            <div class="swiper-button-prev swiper-button-prev-{{ $categoryId }}"></div> -->
        </div>
        @endif
        @endforeach
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper for each category
        document.addEventListener('DOMContentLoaded', function() {
            @foreach([1, 2, 3, 4] as $categoryId)
            @if(App\Models\Product::where('category_id', $categoryId)->exists())
            new Swiper('.swiper-category-{{ $categoryId }}', {
                slidesPerView: 1,
                spaceBetween: 15,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination-{{ $categoryId }}',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-{{ $categoryId }}',
                    prevEl: '.swiper-button-prev-{{ $categoryId }}',
                },
                breakpoints: {
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    }
                }
            });
            @endif
            @endforeach
        });
    </script>

</body>

</html>
