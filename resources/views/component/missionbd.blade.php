<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>আমাদের লক্ষ্য</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .mission-card {
            transition: all 0.3s ease;
        }

        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .bg-overlay {
            /* background: linear-gradient(to right, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); */
        }

        .title-shadow {
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .mission-values {
                flex-direction: column;
                align-items: center;
                gap: 2rem;
            }

            .background-text {
                font-size: 4rem;
                top: -1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Mission Section with Background Image -->
    <section class="py-16 px-4 sm:px-8 lg:px-12 bg-cover bg-center bg-fixed relative" style="background-image: url('https://larsenbd.com/wp-content/uploads/2024/08/swing-bg.png');">
        <!-- Overlay for better text visibility -->
        <div class="absolute inset-0 bg-overlay"></div>

        <div class="max-w-7xl mx-auto text-center relative z-10 px-4 sm:px-8 py-12 sm:py-16 rounded-xl">
            <div class="font-Poppins mb-8 sm:mb-12">
                <div class="flex flex-col items-center relative">
                    <!-- Background Text -->
                    <h1 class="background-text absolute text-6xl md:text-8xl lg:text-9xl font-bold text-gray-200 opacity-30 -z-10 top-0">
                        Prestige
                    </h1>
                    <div class="relative flex flex-col items-center mt-8 md:mt-12">
                        <!-- Foreground Text -->
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 title-shadow">আমাদের লক্ষ্য</h1>
                        <!-- Custom Border -->
                        <div class="w-20 md:w-28 h-1 md:h-1.5 bg-green-500 mt-4 mb-6 rounded-full"></div>
                    </div>
                </div>
            </div>

            <p class="text-lg sm:text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed text-justify sm:text-center px-4">
                আমরা কৃষকদের অগ্রগতির জন্য যা অপরিহার্য তা অবিচ্ছিন্নভাবে উন্নত করি। আমাদের লক্ষ্য হলো আন্তর্জাতিক মানসম্পন্ন উচ্চ-মানের কৃষি পণ্য ও সেবা প্রদান করা, যা দেশের কৃষকদের ক্ষমতায়ন করবে। অবিরত প্রচেষ্টার মাধ্যমে, আমরা ব্যক্তিগতকৃত নির্দেশনা ও মূল্য সৃষ্টির ওপর গুরুত্ব দিয়ে জমির উৎপাদনশীলতা বৃদ্ধি করতে চাই।
            </p>

            <div class="mt-12 sm:mt-16 mission-values flex flex-wrap justify-center gap-6 sm:gap-8 lg:gap-12 px-4">
                <!-- Mission Values with Icons -->
                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-[280px] flex-1 max-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-green-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-seedling text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">টেকসইতা</h3>
                    <p class="text-gray-600 text-sm sm:text-base">সবুজ ভবিষ্যতের জন্য দীর্ঘমেয়াদী কৃষিকাজ পদ্ধতির প্রচার।</p>
                </div>

                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-[280px] flex-1 max-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">সম্প্রদায়</h3>
                    <p class="text-gray-600 text-sm sm:text-base">কৃষকদের সাথে সম্পর্ক গড়ে তোলা এবং তাদের উন্নয়নে সহায়তা করা।</p>
                </div>

                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-[280px] flex-1 max-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-yellow-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">উদ্ভাবন</h3>
                    <p class="text-gray-600 text-sm sm:text-base">কৃষিতে প্রযুক্তিগত অগ্রগতির চালিকাশক্তি।</p>
                </div>

                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-[280px] flex-1 max-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-purple-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">গুণগত মান</h3>
                    <p class="text-gray-600 text-sm sm:text-base">আন্তর্জাতিক মান পূরণ করে এমন পণ্য সরবরাহ করা।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Include FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
