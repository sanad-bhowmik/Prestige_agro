<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Slider</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .carousel-container {
            position: relative;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="relative w-full max-w-full mx-auto overflow-hidden carousel-container">
        <div class="flex transition-transform duration-500 ease-in-out w-full" id="carousel">
            <div class="w-full flex-shrink-0 relative">
                <img src="{{ asset('img/121.jpg') }}" alt="Slide 1" class="w-full h-[25rem] md:h-[31.25rem] object-cover">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <!--<h2 class="text-white text-lg md:text-2xl font-bold text-center">Prevention and management of occupational hazards</h2>-->
                </div>
            </div>
            <div class="w-full flex-shrink-0">
                <img src="https://5.imimg.com/data5/SELLER/Default/2022/9/SM/JN/WU/89844398/agriculture-development-services-500x500.jpg" alt="Slide 2" class="w-full h-[25rem] md:h-[31.25rem] object-cover">
            </div>
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('img/123.jpg') }}" alt="Slide 3" class="w-full h-[25rem] md:h-[31.25rem] object-cover">
            </div>
        </div>
        <button id="prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-3 md:p-4 rounded-full shadow z-10" style="background: transparent;">&#10094;</button>
        <button id="next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-3 md:p-4 rounded-full shadow z-10" style="background: transparent;">&#10095;</button>
    </div>
    <div class="absolute top-[80%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 w-full px-4">
        <div class="bg-white p-4 md:p-6 rounded-2xl shadow-lg flex flex-wrap justify-center gap-16 max-w-xl mx-auto">

            <a href="/insecticide" class="text-center block">
                <img src="{{ asset('img/pesticide.png') }}" alt="Insecticide" class="mx-auto w-12 h-12">
                <p class="mt-2 text-sm md:text-base font-semibold">Insecticide</p>
            </a>

            <a href="/fungicide" class="text-center block">
                <img src="{{ asset('img/seeds.png') }}" alt="Fungicide" class="mx-auto w-12 h-12">
                <p class="mt-2 text-sm md:text-base font-semibold">Fungicide</p>
            </a>

            <a href="/herbicide" class="text-center block">
                <img src="{{ asset('img/herbicide.png') }}" alt="Herbicide" class="mx-auto w-12 h-12">
                <p class="mt-2 text-sm md:text-base font-semibold">Herbicide</p>
            </a>

            <a href="/micronutrients" class="text-center block">
                 <img src="{{ asset('img/fertilizer.png') }}" alt="Insecticide" class="mx-auto w-12 h-12">
                <p class="mt-2 text-sm md:text-base font-semibold">Micronutrients</p>
            </a>

        </div>

    </div>


    <script>
        const carousel = document.getElementById('carousel');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        let index = 0;
        let autoSlideInterval;

        function showSlide(i) {
            const slides = document.querySelectorAll('#carousel div');
            if (i >= slides.length) index = 0;
            if (i < 0) index = slides.length - 1;
            carousel.style.transform = `translateX(${-index * 100}%)`;
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                index++;
                showSlide(index);
            }, 3000);
        }

        prevBtn.addEventListener('click', () => {
            index--;
            showSlide(index);
            clearInterval(autoSlideInterval);
            startAutoSlide();
        });

        nextBtn.addEventListener('click', () => {
            index++;
            showSlide(index);
            clearInterval(autoSlideInterval);
            startAutoSlide();
        });

        startAutoSlide();
    </script>
</body>

</html>
