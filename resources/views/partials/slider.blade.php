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
                <img src="https://globalagrovet.com/wp-content/uploads/2023/05/vegetable-banner2-2000-x-800.jpg" alt="Slide 1" class="w-full h-[25rem] md:h-[31.25rem] object-cover">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <h2 class="text-white text-lg md:text-2xl font-bold text-center">Prevention and management of occupational hazards</h2>
                </div>
            </div>
            <div class="w-full flex-shrink-0">
                <img src="https://globalagrovet.com/wp-content/uploads/2023/05/crop-banner2-2000-x-800.jpg" alt="Slide 2" class="w-full h-[25rem] md:h-[31.25rem] object-cover">
            </div>
            <div class="w-full flex-shrink-0">
                <img src="https://globalagrovet.com/wp-content/uploads/2023/05/fruity-banner2-2000-x-800.jpg" alt="Slide 3" class="w-full h-[25rem] md:h-[31.25rem] object-cover">
            </div>
        </div>
        <button id="prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-3 md:p-4 rounded-full shadow z-10" style="background: transparent;">&#10094;</button>
        <button id="next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-3 md:p-4 rounded-full shadow z-10" style="background: transparent;">&#10095;</button>
    </div>
    <div class="absolute top-[80%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
        <div class="bg-white p-4 md:p-6 rounded-2xl shadow-lg flex space-x-6 w-full max-w-xl md:max-w-3xl justify-center" style="width: 144vh;gap: 9.25rem;border-radius: 10vh;">
            <div class="text-center">
                <img src="https://globalagrovet.com/wp-content/uploads/2023/05/granular_icon_01-2.png" alt="Granular" class="mx-auto w-16 h-16">
                <p class="mt-2 text-sm md:text-base font-semibold">Granular</p>
            </div>
            <div class="text-center">
                <img src="https://globalagrovet.com/wp-content/uploads/2023/05/liquid_icon_03.png" alt="Liquid" class="mx-auto w-16 h-16">
                <p class="mt-2 text-sm md:text-base font-semibold">Liquid</p>
            </div>
            <div class="text-center">
                <img src="https://globalagrovet.com/wp-content/uploads/2023/05/powder_icon_02-1.png" alt="Powder" class="mx-auto w-16 h-16">
                <p class="mt-2 text-sm md:text-base font-semibold">Powder</p>
            </div>
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
