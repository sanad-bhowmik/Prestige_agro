<div style="height:2vh;background-color:#05a854;"></div>
<nav class="sticky top-0 z-50 bg-white border-b border-gray-200 dark:border-gray-800 shadow-sm">
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
                <button id="mobileMenuButton" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700   hover:text-green-600  focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-6">
                <a href="/" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    Home
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>

                <!-- Products Dropdown -->
                <div class="relative group" id="productsDropdown">
                    <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300">
                        <span>Products</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="productsDropdownPanel" class="absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white   p-2">
                                <a href="/insecticide" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">Insecticide</p>
                                    </div>
                                </a>
                                <a href="/fungicide" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">Fungicide</p>
                                    </div>
                                </a>
                                <a href="/herbicide" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">Herbicide</p>
                                    </div>
                                </a>
                                <a href="/micronutrients" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">Micronutrients Fertilizer</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products Dropdown -->
                <div class="relative group" id="galleryProductsDropdown">
                    <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300">
                        <span>Gallery</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="galleryProductsDropdownPanel" class="absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white   p-2">
                                <a href="/photo" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg viewBox="0 0 32 32" fill="#05a854" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M30 2.497h-28c-1.099 0-2 0.901-2 2v23.006c0 1.099 0.9 2 2 2h28c1.099 0 2-0.901 2-2v-23.006c0-1.099-0.901-2-2-2zM30 27.503l-28-0v-5.892l8.027-7.779 8.275 8.265c0.341 0.414 0.948 0.361 1.379 0.035l3.652-3.306 6.587 6.762c0.025 0.025 0.053 0.044 0.080 0.065v1.85zM30 22.806l-5.876-6.013c-0.357-0.352-0.915-0.387-1.311-0.086l-3.768 3.282-8.28-8.19c-0.177-0.214-0.432-0.344-0.709-0.363-0.275-0.010-0.547 0.080-0.749 0.27l-7.309 7.112v-14.322h28v18.309zM23 12.504c1.102 0 1.995-0.894 1.995-1.995s-0.892-1.995-1.995-1.995-1.995 0.894-1.995 1.995c0 1.101 0.892 1.995 1.995 1.995z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">Photo</p>
                                    </div>
                                </a>
                                <a href="/video" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#05a854">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#05a854" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">Video</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <a href="/salesteam" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    Sales Officer
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/team" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    Our Team
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <!-- Products Dropdown -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Notice dropdown functionality
                        const setupNoticeDropdown = () => {
                            const noticeDropdown = document.getElementById('noticeProductsDropdown');
                            const noticePanel = document.getElementById('noticeProductsDropdownPanel');
                            const noticeButton = noticeDropdown?.querySelector('button');
                            const noticeSvg = noticeButton?.querySelector('svg');

                            if (!noticeDropdown || !noticePanel || !noticeButton) return;

                            // Desktop hover behavior
                            noticeDropdown.addEventListener('mouseenter', () => {
                                noticePanel.classList.remove('opacity-0', 'scale-95', 'invisible');
                                noticePanel.classList.add('opacity-100', 'scale-100', 'visible');
                                if (noticeSvg) noticeSvg.classList.add('rotate-180');
                            });

                            noticeDropdown.addEventListener('mouseleave', () => {
                                noticePanel.classList.remove('opacity-100', 'scale-100', 'visible');
                                noticePanel.classList.add('opacity-0', 'scale-95', 'invisible');
                                if (noticeSvg) noticeSvg.classList.remove('rotate-180');
                            });

                            // Mobile click behavior
                            noticeButton.addEventListener('click', (e) => {
                                e.preventDefault();
                                noticePanel.classList.toggle('hidden');
                                if (noticeSvg) noticeSvg.classList.toggle('rotate-180');

                                // Close other open dropdowns if needed
                                document.querySelectorAll('.dropdown-panel').forEach(panel => {
                                    if (panel !== noticePanel && !panel.classList.contains('hidden')) {
                                        panel.classList.add('hidden');
                                    }
                                });
                            });
                        };

                        // Initialize all dropdowns
                        setupNoticeDropdown();

                        // Add this if you have other similar dropdowns
                        // setupProductsDropdown();
                        // setupLanguageDropdown();
                    });
                </script>

                <!-- HTML Structure -->
                <div class="relative group" id="noticeProductsDropdown">
                    <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-300">
                        <span>Notice</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="noticeProductsDropdownPanel" class="dropdown-panel absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white p-2">
                                <a href="/notice" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="#05a854" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 4h16v2H4zm0 4h16v2H4zm0 4h10v2H4z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Notice Board</p>
                                    </div>
                                </a>
                                <a href="{{ asset('img/prospectuscmyk.pdf') }}" target="_blank" rel="noopener noreferrer" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="#05a854" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6h18M3 12h18M3 18h18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Brochure</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/career" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    Career
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contact" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    Contact Us
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>

            <!-- Right side buttons -->
            <div class="hidden md:flex items-center space-x-3">
                <!-- Language Dropdown -->
                <div class="relative group" id="languageDropdown">
                    <button class="flex items-center px-3 py-1 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 rounded-md ">
                        <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-1" alt="English flag">
                        <span class="mr-1">EN</span>
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="languageDropdownPanel" class="absolute right-0 z-20 mt-2 w-32 origin-top-right rounded-md bg-white   shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="/" class="flex items-center px-4 py-2 text-sm text-gray-700   dark:hover:bg-gray-300" onclick="changeLanguage('en')">
                                <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-2" alt="English flag">
                                English
                            </a>
                            <a href="/bd" class="flex items-center px-4 py-2 text-sm text-gray-700   dark:hover:bg-gray-300" onclick="changeLanguage('bd')">
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
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Home</a>

            <!-- Mobile Products Dropdown -->
            <div class="relative">
                <button id="mobileProductsButton" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">
                    <span>Products</span>
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobileProductsDropdown" class="hidden pl-4 mt-1 space-y-1">
                    <a href="/insecticide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Insecticide</a>
                    <a href="/fungicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Fungicide</a>
                    <a href="/herbicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Herbicide</a>
                    <a href="/micronutrients" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Micronutrients Fertilizer</a>
                </div>
            </div>

            <a href="/salesteam" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Sales Officer</a>
            <a href="/team" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Our Team</a>
            <a href="/career" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Career</a>
            <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">Contact Us</a>

            <!-- Mobile Language Dropdown -->
            <div class="relative px-3 py-2">
                <button id="mobileLanguageButton" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">
                    <div class="flex items-center">
                        <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-2" alt="English flag">
                        <span>English</span>
                    </div>
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobileLanguageDropdown" class="hidden pl-4 mt-1 space-y-1">
                    <a href="/" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150" onclick="changeLanguage('en')">
                        <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-2" alt="English flag">
                        English
                    </a>
                    <a href="/bd" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150" onclick="changeLanguage('bd')">
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


    // Gallery dropdown toggle button and panel
    const galleryProductsDropdown = document.getElementById('galleryProductsDropdown');
    const galleryProductsDropdownPanel = document.getElementById('galleryProductsDropdownPanel');
    const galleryProductsButton = document.getElementById('galleryProductsButton');

    // Mobile dropdown toggles (assuming you renamed those as well if needed)
    // For example, if mobileProductsButton/id needs renaming, update here accordingly

    // Toggle dropdown on hover (desktop)
    galleryProductsDropdown.addEventListener('mouseenter', () => {
        galleryProductsDropdownPanel.classList.remove('opacity-0', 'scale-95', 'invisible');
        galleryProductsDropdownPanel.classList.add('opacity-100', 'scale-100', 'visible');
    });
    galleryProductsDropdown.addEventListener('mouseleave', () => {
        galleryProductsDropdownPanel.classList.remove('opacity-100', 'scale-100', 'visible');
        galleryProductsDropdownPanel.classList.add('opacity-0', 'scale-95', 'invisible');
    });

    // Toggle dropdown on click for mobile if needed (example)
    galleryProductsButton.addEventListener('click', () => {
        galleryProductsDropdownPanel.classList.toggle('hidden');
        const svg = galleryProductsButton.querySelector('svg');
        svg.classList.toggle('rotate-180');
    });
    // Elements
    const noticeProductsDropdown = document.getElementById('noticeProductsDropdown');
    const noticeProductsDropdownPanel = document.getElementById('noticeProductsDropdownPanel');
    const noticeProductsButton = noticeProductsDropdown.querySelector('button');
    const noticeProductsButtonSvg = noticeProductsButton.querySelector('svg');

    // Desktop: toggle dropdown on hover
    noticeProductsDropdown.addEventListener('mouseenter', () => {
        noticeProductsDropdownPanel.classList.remove('opacity-0', 'scale-95', 'invisible');
        noticeProductsDropdownPanel.classList.add('opacity-100', 'scale-100', 'visible');
        noticeProductsButtonSvg.classList.add('rotate-180');
    });

    noticeProductsDropdown.addEventListener('mouseleave', () => {
        noticeProductsDropdownPanel.classList.remove('opacity-100', 'scale-100', 'visible');
        noticeProductsDropdownPanel.classList.add('opacity-0', 'scale-95', 'invisible');
        noticeProductsButtonSvg.classList.remove('rotate-180');
    });

    // Mobile: toggle dropdown on click
    noticeProductsButton.addEventListener('click', (event) => {
        event.preventDefault();
        noticeProductsDropdownPanel.classList.toggle('hidden');
        noticeProductsButtonSvg.classList.toggle('rotate-180');
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
