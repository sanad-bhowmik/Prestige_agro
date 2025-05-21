<section class="relative overflow-hidden py-16 md:py-24 px-4 mb-10 bg-gray-900">
    <!-- Background with parallax effect -->
    <div class="absolute inset-0 z-0 bg-gray-900">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center bg-no-repeat opacity-50"
             style="background-attachment: fixed;"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-gray-900/30"></div>
    </div>

    <!-- Animated elements -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <!-- Subtle grid pattern -->
        <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>

        <!-- Floating dots -->
        <div class="absolute inset-0 overflow-hidden opacity-20">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 rounded-full bg-green-400 animate-float-1"></div>
            <div class="absolute top-1/3 right-1/4 w-3 h-3 rounded-full bg-green-400/50 animate-float-2"></div>
            <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 rounded-full bg-green-400/30 animate-float-3"></div>
        </div>
    </div>

    <!-- Main content -->
    <div class="container mx-auto relative z-10">
        <div class="max-w-4xl mx-auto text-center px-4">
            <!-- Heading with animated underline -->
            <div class="inline-block mb-8">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">
                    <span class="relative">
                        <span class="text-green-400">Need Immediate</span> Assistance?
                        <span class="absolute bottom-0 left-0 h-1 bg-green-400 w-full animate-underline-expand"></span>
                    </span>
                </h1>
                <p class="text-lg md:text-xl text-gray-300 font-medium max-w-2xl mx-auto">
                    Our expert team is available 24/7 to provide fast support and customized solutions for your agricultural needs
                </p>
            </div>

            <!-- Action buttons container -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-10">
                <!-- Call button -->
                <a href="tel:+8801740630671" class="flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-green-500/20 hover:-translate-y-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    +880 174 063 0671
                </a>

                <!-- PDF Download button -->
                <a href="{{ asset('img/prospectus cmyk.pdf') }}" download="Prestige-Agro-Catalog.pdf" class="flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-white/10 hover:-translate-y-0.5 backdrop-blur-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                    </svg>
                    Download Catalog (PDF)
                </a>
            </div>

            <!-- Secondary contact info -->
            <div class="mt-8 text-gray-400">
                <p class="mb-2">Or contact us via:</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="mailto:prestigeagrodragonltd@gmail.com" class="flex items-center gap-2 hover:text-green-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        prestigeagrodragonltd@gmail.com
                    </a>
                    <a href="#" class="flex items-center gap-2 hover:text-green-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                        Live Chat
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Animations */
    @keyframes float-1 {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(-10px, -15px); }
    }
    @keyframes float-2 {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(15px, 10px); }
    }
    @keyframes float-3 {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(-5px, 20px); }
    }
    @keyframes underline-expand {
        0% { transform: scaleX(0); }
        100% { transform: scaleX(1); }
    }

    .animate-float-1 { animation: float-1 8s ease-in-out infinite; }
    .animate-float-2 { animation: float-2 10s ease-in-out infinite; }
    .animate-float-3 { animation: float-3 12s ease-in-out infinite; }
    .animate-underline-expand { animation: underline-expand 1s ease-out forwards; }

    /* Responsive adjustments */
    @media (max-width: 640px) {
        .flex-col > * {
            width: 100%;
        }
    }
</style>
