<div style="height:2vh;background-color:#05a854;"></div>
<nav class="sticky top-0 z-50 bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-800 shadow-sm">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="http://prestigeagro.com/" class="flex items-center space-x-2 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/Company name.jpg') }}" class="h-10 w-auto" alt="Prestige Agro Logo" />
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobileMenuButton" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-green-600 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-6">
                <a href="/" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    Home
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>

                <!-- Products Dropdown -->
                <div class="relative group" id="productsDropdown">
                    <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300">
                        <span>Products</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="productsDropdownPanel" class="absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white dark:bg-gray-800 p-2">
                                <a href="/insecticide" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Insecticide</p>
                                    </div>
                                </a>
                                <a href="/fungicide" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Fungicide</p>
                                    </div>
                                </a>
                                <a href="/herbicide" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Herbicide</p>
                                    </div>
                                </a>
                                <a href="/micronutrients" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">Micronutrients Fertilizer</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/salesteam" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    Sales Officer
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/team" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    Our Team
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contact" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    Contact Us
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>

            <!-- Right side buttons -->
            <!-- <div class="hidden md:flex items-center space-x-3">
                <div class="flex items-center space-x-2 text-sm text-gray-700 dark:text-gray-300">
                    <span>Language:</span>
                    <select class="bg-transparent dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md border border-gray-300 dark:border-gray-600 px-2 py-1 focus:outline-none focus:ring-1 focus:ring-green-500 transition-all duration-150">
                        <option value="en">English</option>
                        <option value="es">Español</option>
                        <option value="fr">Français</option>
                    </select>
                </div>
            </div> -->
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Home</a>

            <!-- Mobile Products Dropdown -->
            <div class="relative">
                <button id="mobileProductsButton" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">
                    <span>Products</span>
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobileProductsDropdown" class="hidden pl-4 mt-1 space-y-1">
                    <a href="/insecticide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Insecticide</a>
                    <a href="/fungicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Fungicide</a>
                    <a href="/herbicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Herbicide</a>
                    <a href="/micronutrients" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Micronutrients Fertilizer</a>
                </div>
            </div>

            <a href="/salesteam" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Sales Officer</a>
            <a href="/team" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Our Team</a>
            <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Contact Us</a>

            <!-- Mobile Language Selection -->
            <div class="px-3 py-2">
                <div class="flex items-center space-x-2 text-sm text-gray-700 dark:text-gray-300">
                    <span>Language:</span>
                    <select class="bg-transparent dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-md border border-gray-300 dark:border-gray-600 px-2 py-1 focus:outline-none focus:ring-1 focus:ring-green-500 transition-all duration-150">
                        <option value="en">English</option>
                        <option value="es">Español</option>
                        <option value="fr">Français</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileProductsButton = document.getElementById('mobileProductsButton');
    const mobileProductsDropdown = document.getElementById('mobileProductsDropdown');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenuButton.innerHTML = mobileMenu.classList.contains('hidden') ?
            '<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>' :
            '<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
    });

    // Mobile products dropdown toggle
    mobileProductsButton.addEventListener('click', () => {
        mobileProductsDropdown.classList.toggle('hidden');
        const svg = mobileProductsButton.querySelector('svg');
        svg.classList.toggle('rotate-180');
    });

    // Desktop dropdown hover effects
    const productsDropdown = document.getElementById("productsDropdown");
    const productsDropdownPanel = document.getElementById("productsDropdownPanel");

    productsDropdown.addEventListener('mouseenter', function() {
        productsDropdownPanel.classList.remove('opacity-0', 'scale-95', 'invisible');
        productsDropdownPanel.classList.add('opacity-100', 'scale-100', 'visible');
    });

    productsDropdown.addEventListener('mouseleave', function() {
        productsDropdownPanel.classList.remove('opacity-100', 'scale-100', 'visible');
        productsDropdownPanel.classList.add('opacity-0', 'scale-95', 'invisible');
    });
</script>

<style>
    /* Custom animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    #mobileMenu {
        animation: fadeIn 0.3s ease-out forwards;
    }

    #mobileProductsDropdown {
        animation: fadeIn 0.2s ease-out forwards;
    }

    /* Smooth transitions */
    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .rotate-180 {
        transform: rotate(180deg);
    }
</style>
