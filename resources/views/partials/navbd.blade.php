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
                <a href="/bd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    হোম
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>

                <!-- Products Dropdown -->
                <div class="relative group" id="productsDropdown">
                    <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300">
                        <span>পণ্য</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="productsDropdownPanel" class="absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white dark:bg-gray-800 p-2">
                                <a href="/insecticidebd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">পোকামাকড়নাশক</p>
                                    </div>
                                </a>
                                <a href="/fungicidebd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">ছত্রাকনাশক</p>
                                    </div>
                                </a>
                                <a href="/herbicidebd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">গাছনাশক</p>
                                    </div>
                                </a>
                                <a href="/micronutrientsbd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 dark:hover:bg-gray-700 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-100">মাইক্রোনিউট্রিয়েন্টস ফার্টিলাইজার</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/salesteambd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    সেলস অফিসার
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/teambd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    আমাদের টিম
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contactbd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 group">
                    যোগাযোগ করুন
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>

            </div>

            <!-- Right side buttons -->
            <div class="hidden md:flex items-center space-x-3">
                <!-- Language Dropdown -->
                <div class="relative group" id="languageDropdown">
                    <button class="flex items-center px-3 py-1 text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-300 dark:hover:text-green-400 transition-colors duration-300 rounded-md bg-gray-100 dark:bg-gray-700">
                        <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-1" alt="English flag">
                        <span class="mr-1">EN</span>
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="languageDropdownPanel" class="absolute right-0 z-20 mt-2 w-32 origin-top-right rounded-md bg-white dark:bg-gray-800 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="/" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700" onclick="changeLanguage('en')">
                                <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-2" alt="English flag">
                                English
                            </a>
                            <a href="/bd" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700" onclick="changeLanguage('bd')">
                                <img src="https://flagcdn.com/w20/bd.png" class="h-4 w-6 mr-2" alt="Bangladesh flag">
                                বাংলা
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/bd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">হোম</a>

            <!-- Mobile Products Dropdown -->
            <div class="relative">
                <button id="mobileProductsButton" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">
                    <span>প্রোডাক্টস</span>
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobileProductsDropdown" class="hidden pl-4 mt-1 space-y-1">
                    <a href="/insecticide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">পোকামাকড়নাশক</a>
                    <a href="/fungicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">ছত্রাকনাশক</a>
                    <a href="/herbicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">গাছনাশক</a>
                    <a href="/micronutrients" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">মাইক্রোনিউট্রিয়েন্টস ফার্টিলাইজার</a>
                </div>
            </div>

            <a href="/salesteambd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">সেলস অফিসার</a>
            <a href="/teambd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">  আমাদের টিম</a>
            <a href="/contactbd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">যোগাযোগ করুন</a>

            <!-- Mobile Language Dropdown -->
            <div class="relative px-3 py-2">
                <button id="mobileLanguageButton" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">
                    <div class="flex items-center">
                        <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-2" alt="English flag">
                        <span>English</span>
                    </div>
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobileLanguageDropdown" class="hidden pl-4 mt-1 space-y-1">
                    <a href="/" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150" onclick="changeLanguage('en')">
                        <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-2" alt="English flag">
                        English
                    </a>
                    <a href="/bd" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50 dark:text-gray-300 dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150" onclick="changeLanguage('bd')">
                        <img src="https://flagcdn.com/w20/bd.png" class="h-4 w-6 mr-2" alt="Bangladesh flag">
                        বাংলা
                    </a>
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
    const mobileLanguageButton = document.getElementById('mobileLanguageButton');
    const mobileLanguageDropdown = document.getElementById('mobileLanguageDropdown');

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

    // Mobile language dropdown toggle
    mobileLanguageButton.addEventListener('click', () => {
        mobileLanguageDropdown.classList.toggle('hidden');
        const svg = mobileLanguageButton.querySelector('svg');
        svg.classList.toggle('rotate-180');
    });

    // Desktop dropdown hover effects
    const productsDropdown = document.getElementById("productsDropdown");
    const productsDropdownPanel = document.getElementById("productsDropdownPanel");
    const languageDropdown = document.getElementById("languageDropdown");
    const languageDropdownPanel = document.getElementById("languageDropdownPanel");

    productsDropdown.addEventListener('mouseenter', function() {
        productsDropdownPanel.classList.remove('opacity-0', 'scale-95', 'invisible');
        productsDropdownPanel.classList.add('opacity-100', 'scale-100', 'visible');
    });

    productsDropdown.addEventListener('mouseleave', function() {
        productsDropdownPanel.classList.remove('opacity-100', 'scale-100', 'visible');
        productsDropdownPanel.classList.add('opacity-0', 'scale-95', 'invisible');
    });

    languageDropdown.addEventListener('mouseenter', function() {
        languageDropdownPanel.classList.remove('opacity-0', 'scale-95', 'invisible');
        languageDropdownPanel.classList.add('opacity-100', 'scale-100', 'visible');
    });

    languageDropdown.addEventListener('mouseleave', function() {
        languageDropdownPanel.classList.remove('opacity-100', 'scale-100', 'visible');
        languageDropdownPanel.classList.add('opacity-0', 'scale-95', 'invisible');
    });

    // Language change function
    function changeLanguage(lang) {
        // Here you would implement your language change logic
        // For example:
        if (lang === 'en') {
            // Set English language
            console.log('Switching to English');
            // Update mobile button
            mobileLanguageButton.querySelector('img').src = 'https://flagcdn.com/w20/gb.png';
            mobileLanguageButton.querySelector('span').textContent = 'English';
            // Update desktop button
            document.querySelector('#languageDropdown button img').src = 'https://flagcdn.com/w20/gb.png';
            document.querySelector('#languageDropdown button span').textContent = 'EN';
        } else if (lang === 'bd') {
            // Set Bangla language
            console.log('Switching to Bangla');
            // Update mobile button
            mobileLanguageButton.querySelector('img').src = 'https://flagcdn.com/w20/bd.png';
            mobileLanguageButton.querySelector('span').textContent = 'বাংলা';
            // Update desktop button
            document.querySelector('#languageDropdown button img').src = 'https://flagcdn.com/w20/bd.png';
            document.querySelector('#languageDropdown button span').textContent = 'BD';
        }

        // Close dropdowns
        mobileLanguageDropdown.classList.add('hidden');

        // In a real implementation, you would:
        // 1. Set a cookie or localStorage item for the language preference
        localStorage.setItem('preferredLanguage', lang);
        // 2. Possibly reload the page with the new language
        // window.location.reload();
        // 3. Or use AJAX to fetch translated content
    }

    // Check for saved language preference on page load
    document.addEventListener('DOMContentLoaded', function() {
        const preferredLanguage = localStorage.getItem('preferredLanguage') || 'en';
        if (preferredLanguage === 'bd') {
            changeLanguage('bd');
        }
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

    #mobileProductsDropdown,
    #mobileLanguageDropdown {
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

    /* Bangla font */
    .bangla-text {
        font-family: 'SolaimanLipi', 'Siyam Rupali', 'Kalpurush', Arial, sans-serif;
    }
</style>
