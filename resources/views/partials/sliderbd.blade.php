<div class="carousel relative container mx-auto" style="max-width:1600px;">
    <div class="carousel-inner relative overflow-hidden w-full h-[90vh]">
        <div class="carousel-slides relative w-full h-full">

            <!-- Slide 1 -->
            <div class="carousel-item absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out z-10 bg-cover bg-center" style="background-image: url('https://www.globaltimes.cn/Portals/0/attachment/2024/2024-10-23/ffd988c6-f90a-4a4e-8e4d-f67ac7145970.jpeg');">
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                <div class="slide-content absolute inset-0 flex flex-col justify-center items-start text-left px-10 md:px-20 z-10 opacity-0 translate-y-4 transition-all duration-1000">
                    <p class="text-lg md:text-xl uppercase text-white mb-4">পশু স্বাস্থ্য বিভাগ</p>
                    <h2 class="text-4xl md:text-6xl font-bold text-white leading-tight">
                        গবাদি পশু ও হাঁস-মুরগির স্বাস্থ্য<br>
                        উন্নয়ন ও রক্ষণাবেক্ষণ
                    </h2>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out bg-cover bg-center" style="background-image: url('https://blogs.worldbank.org/content/dam/sites/blogs/img/detail/mgr/hero_shutterstock_1137780896.jpg');">
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                <div class="slide-content absolute inset-0 flex flex-col justify-center items-start text-left px-10 md:px-20 z-10 opacity-0 translate-y-4 transition-all duration-1000">
                    <p class="text-lg md:text-xl uppercase text-white mb-4">বীজ ও ফসল সুরক্ষা বিভাগ</p>
                    <h2 class="text-4xl md:text-6xl font-bold text-white leading-tight">
                        কৃষি উৎপাদনের<br>
                        মানোন্নয়নের জন্য কাজ করছি
                    </h2>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out bg-cover bg-center" style="background-image: url('https://lightcastlepartners.com/wp-content/uploads/2024/08/hens-henhouse-heating-conditions-lighting-chickens-egg-1.webp');">
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                <div class="slide-content absolute inset-0 flex flex-col justify-center items-start text-left px-10 md:px-20 z-10 opacity-0 translate-y-4 transition-all duration-1000">
                    <p class="text-lg md:text-xl uppercase text-white mb-4">গবেষণা ও জৈব সুরক্ষা</p>
                    <h2 class="text-4xl md:text-6xl font-bold text-white leading-tight">
                        নিরাপদ পদ্ধতির মাধ্যমে<br>
                        প্রাণী সেবার উন্নয়ন
                    </h2>
                </div>
            </div>
        </div>


        <!-- Indicators -->
        <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2 z-20">
            <span class="w-3 h-3 rounded-full bg-white opacity-70"></span>
            <span class="w-3 h-3 rounded-full bg-white opacity-30"></span>
            <span class="w-3 h-3 rounded-full bg-white opacity-30"></span>
        </div>
    </div>
</div>

<script>
    const items = document.querySelectorAll('.carousel-item');
    const texts = document.querySelectorAll('.slide-content');
    let current = 0;

    function showSlide(index) {
        items.forEach((item, i) => {
            item.style.opacity = i === index ? '1' : '0';
            item.style.zIndex = i === index ? '10' : '0';

            // Animate text content
            const text = item.querySelector('.slide-content');
            if (i === index) {
                text.classList.remove('opacity-0', 'translate-y-4');
                text.classList.add('opacity-100', 'translate-y-0');
            } else {
                text.classList.remove('opacity-100', 'translate-y-0');
                text.classList.add('opacity-0', 'translate-y-4');
            }
        });
    }

    function nextSlide() {
        current = (current + 1) % items.length;
        showSlide(current);
    }

    showSlide(current);
    setInterval(nextSlide, 5000);
</script>
