<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mission</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 title-shadow">Our Mission</h1>
                        <!-- Custom Border -->
                        <div class="w-20 md:w-28 h-1 md:h-1.5 bg-green-500 mt-4 mb-6 rounded-full"></div>
                    </div>
                </div>
            </div>

            <p class="text-lg sm:text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed text-justify sm:text-center px-4">
                We constantly improve what is essential to farmers' progress. Our mission is to provide high-quality agricultural products and services that meet international standards, empowering farmers across the country. Through continuous efforts, we aim to increase land productivity by offering personalized guidance and focusing on value creation for both clients and the company.
            </p>

            <div class="mt-12 sm:mt-16 mission-values flex flex-wrap justify-center gap-6 sm:gap-8 lg:gap-12 px-4">
                <!-- Mission Values with Icons -->
                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-auto sm:min-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-green-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-seedling text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">Sustainability</h3>
                    <p class="text-gray-600 text-sm sm:text-base">Promoting long-term farming practices for a greener future.</p>
                </div>

                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-auto sm:min-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">Community</h3>
                    <p class="text-gray-600 text-sm sm:text-base">Building relationships with farmers to support their growth.</p>
                </div>

                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-auto sm:min-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-yellow-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">Innovation</h3>
                    <p class="text-gray-600 text-sm sm:text-base">Driving technological advancement in agriculture.</p>
                </div>

                <div class="mission-card bg-white p-6 rounded-xl shadow-md w-full sm:w-auto sm:min-w-[280px]">
                    <div class="w-16 h-16 rounded-full bg-purple-500 flex items-center justify-center mx-auto shadow-lg mb-4 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3">Quality</h3>
                    <p class="text-gray-600 text-sm sm:text-base">Delivering products that meet international standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Include FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
