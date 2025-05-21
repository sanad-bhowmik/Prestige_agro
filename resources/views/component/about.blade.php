<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Prestige Agro Dragoan Limited</title>
    <meta name="description" content="Learn about Prestige Agro Dragoan Limited, a leading agro-based company providing quality crop protection chemicals, seeds, and fertilizers.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        prestige: {
                            green: '#1a6b3a',
                            dark: '#1e293b',
                            light: '#64748b'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <section class="py-16 px-4 sm:px-6 lg:px-8" id="about">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-xl  overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="p-8 md:p-12 lg:p-16 flex flex-col justify-center">
                        <div class="mb-6">

                            <h1 class="mt-4 text-3xl sm:text-4xl font-bold text-prestige-dark">
                                Welcome to <span class="text-prestige-green">Prestige Agro Dragoan</span>
                            </h1>
                        </div>

                        <div class="prose prose-prestige max-w-none">
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-prestige-green bg-green-50 rounded-full mb-6">ABOUT US</span>
                            <p class="text-prestige-dark leading-relaxed">
                                Prestige Agro Dragoan Limited (PADL) is a leading agro-based company specializing in crop protection chemicals, seeds, and fertilizers. Established in 2010, we have built a reputation as a trusted provider of quality agricultural inputs.
                            </p>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-prestige-green bg-green-50 rounded-full mb-6 mt-6">Our Expertise</span>
                            <!--<h3 class="mt-6 text-xl font-semibold text-prestige-dark">Our Expertise</h3>-->
                            <p class="mt-2 text-prestige-dark leading-relaxed">
                                Our team of experienced agriculturists and multidisciplinary professionals manages research, product development, and nationwide distribution. We maintain a robust infrastructure to deliver products directly to farmers' doorsteps.
                            </p>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-prestige-green bg-green-50 rounded-full mb-6 mt-6">Regulatory Compliance</span>
                            <!--<h3 class="mt-6 text-xl font-semibold text-prestige-dark">Regulatory Compliance</h3>-->
                            <p class="mt-2 text-prestige-dark leading-relaxed">
                                All our crop protection products are rigorously tested and approved by the regulatory authority DAE under the Ministry of Agriculture. Currently, we hold registration for 24 pesticides (including insecticides, fungicides, and herbicides) and 8 fertilizers, with more products in the registration pipeline.
                            </p>

                            <div>
                                <h1 class="mt-4 text-3xl sm:text-4xl font-bold text-prestige-dark">
                                    Our <span class="text-prestige-green">Wings</span>
                                </h1>
                                <div class="mt-8 flex flex-wrap gap-4">

                                    <div class="flex items-center">
                                        <!--<div class="flex-shrink-0 bg-prestige-green/10 p-2 rounded-lg">-->
                                        <!--    <svg class="h-6 w-6 text-prestige-green" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                                        <!--        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />-->
                                        <!--    </svg>-->
                                        <!--</div>-->
                                        <div class="">
                                            <img src="{{ asset('img/wings.jpg') }}" alt="Image 2" class="h-full w-full object-contain" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <img src="{{ asset('img/about.png') }}" alt="Prestige Agro" class="w-full h-auto rounded-lg" style="height: 100vh;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
