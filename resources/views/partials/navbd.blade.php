<div style="height:2vh;background-color:#05a854;"></div>
<nav class="sticky top-0 z-50 bg-white border-b border-gray-200  dark:border-gray-800 shadow-sm">
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
                <button id="mobileMenuButton" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700   hover:text-green-600 hover:bg-gray-100   focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:space-x-6">
                <a href="/bd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    হোম
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>

                <!-- Products Dropdown -->
                <div class="relative group" id="productsDropdown">
                    <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300">
                        <span>পণ্য</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="productsDropdownPanel" class="absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white  p-2">
                                <a href="/insecticidebd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50   transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">পোকামাকড়নাশক</p>
                                    </div>
                                </a>
                                <a href="/fungicidebd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50   transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">ছত্রাকনাশক</p>
                                    </div>
                                </a>
                                <a href="/herbicidebd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50   transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">গাছনাশক</p>
                                    </div>
                                </a>
                                <a href="/micronutrientsbd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50   transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900  ">মাইক্রোনিউট্রিয়েন্টস ফার্টিলাইজার</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products Dropdown -->
                <div class="relative group" id="galleryProductsDropdown">
                    <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300">
                        <span>গ্যালারি</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="galleryProductsDropdownPanel" class="absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white   p-2">
                                <a href="/photobd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
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
                                        <p class="text-sm font-medium text-gray-900  ">ছবি</p>
                                    </div>
                                </a>
                                <a href="/videobd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
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
                                        <p class="text-sm font-medium text-gray-900  ">ভিডিও</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="/salesteambd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    সেলস অফিসার
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/teambd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    আমাদের টিম
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
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
                        <span>বিজ্ঞপ্তি</span>
                        <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="noticeProductsDropdownPanel" class="dropdown-panel absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-1 bg-white p-2">
                                <a href="/noticebd" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="#05a854" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 4h16v2H4zm0 4h16v2H4zm0 4h10v2H4z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">নোটিশ বোর্ড</p>
                                    </div>
                                </a>
                                <a href="{{ asset('img/prospectuscmyk.pdf') }}" target="_blank" rel="noopener noreferrer" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 transition-all duration-150 transform hover:translate-x-1">
                                    <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="#05a854" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6h18M3 12h18M3 18h18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">প্রচারপত্র</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/careerbd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    কর্মজীবন
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contactbd" class="relative px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 group">
                    যোগাযোগ করুন
                    <span class="absolute bottom-0 left-0 h-0.5 bg-green-500 w-0 group-hover:w-full transition-all duration-300"></span>
                </a>

            </div>

            <!-- Right side buttons -->
            <div class="hidden md:flex items-center space-x-3">
                <!-- Language Dropdown -->
                <div class="relative group" id="languageDropdown">
                    <button class="flex items-center px-3 py-1 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300 rounded-md bg-gray-100  dark:bg-gray-100">
                        <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-1" alt="English flag">
                        <span class="mr-1">EN</span>
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div id="languageDropdownPanel" class="absolute right-0 z-20 mt-2 w-32 origin-top-right rounded-md bg-white  shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="/" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100    " onclick="changeLanguage('en')">
                                <img src="https://flagcdn.com/w20/gb.png" class="h-4 w-6 mr-2" alt="English flag">
                                English
                            </a>
                            <a href="/bd" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100    " onclick="changeLanguage('bd')">
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
            <a href="/bd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">হোম</a>

            <!-- Mobile Products Dropdown -->
            <div class="relative">
                <button id="mobileProductsButton" class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">
                    <span>প্রোডাক্টস</span>
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobileProductsDropdown" class="hidden pl-4 mt-1 space-y-1">
                    <a href="/insecticide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">পোকামাকড়নাশক</a>
                    <a href="/fungicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">ছত্রাকনাশক</a>
                    <a href="/herbicide" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">গাছনাশক</a>
                    <a href="/micronutrients" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">মাইক্রোনিউট্রিয়েন্টস ফার্টিলাইজার</a>
                </div>
            </div>

            <a href="/salesteambd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">সেলস অফিসার</a>
            <a href="/teambd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150"> আমাদের টিম</a>
            <!-- Products Dropdown -->
            <div class="relative group" id="noticeProductsDropdown">
                <button class="flex items-center px-1 pt-1 pb-2 text-sm font-medium text-gray-700 hover:text-green-600   dark:hover:text-green-400 transition-colors duration-300">
                    <span>Notice</span>
                    <svg class="ml-1 h-4 w-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown Panel -->
                <div id="noticeProductsDropdownPanel" class="absolute z-20 -ml-4 mt-2 transform px-2 w-56 max-w-md sm:px-0 origin-top transition-all duration-200 ease-out opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible">
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="relative grid gap-1 bg-white   p-2">

                            <a href="/video" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50  transition-all duration-150 transform hover:translate-x-1">
                                <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                    <svg fill="#05a854" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g id="Bell">
                                                <path d="M46.6674995,8.6586504c-0.5527992,0-1,0.4473-1,1c0,0.5527992,0.4472008,1,1,1 c3.5185013,0,6.3808022,2.8622999,6.3808022,6.3809004c0,0.5527,0.4473,1,1,1c0.5527992,0,1-0.4473,1-1 C55.0483017,12.4184504,51.2886009,8.6586504,46.6674995,8.6586504z"></path>
                                                <path d="M8.9517002,17.0395508c0,0.5527,0.4471998,1,1,1c0.5527,0,1-0.4473,1-1 c0-3.5186005,2.8622999-6.3809004,6.3808002-6.3809004c0.5527992,0,1-0.4472008,1-1c0-0.5527-0.4472008-1-1-1 C12.7114,8.6586504,8.9517002,12.4184504,8.9517002,17.0395508z"></path>
                                                <path d="M48.1431007,1.27785c-0.5527992,0-1,0.4473-1,0.9999999s0.4472008,1,1,1 c6.7743988,0,12.2860985,5.5107002,12.2860985,12.2851c0,0.5527992,0.4473,1,1,1s1-0.4472008,1-1 C62.4291992,7.6860499,56.0200005,1.27785,48.1431007,1.27785z"></path>
                                                <path d="M16.8560009,2.2778499c0-0.5526999-0.4473-0.9999999-1.000001-0.9999999 c-7.8769999,0-14.2852001,6.4081998-14.2852001,14.2851c0,0.5527992,0.4473001,1,1.0000001,1s1-0.4472008,1-1 c0-6.7743998,5.5107002-12.2851,12.2852001-12.2851C16.4087009,3.2778499,16.8560009,2.83055,16.8560009,2.2778499z"></path>
                                                <path d="M51.7932014,46.2020493c-0.1280022-0.3828011-0.3692017-0.6965981-0.6621017-0.9463997 c0.0236015-0.6092987,0.0386009-1.2222977,0.0386009-1.8409996c0-13.6198997-5.641201-25.1546001-13.4345016-29.1104012 c0.1161003-0.4706001,0.1844025-0.9601002,0.1844025-1.4666996c0-3.3774004-2.7380028-6.1154003-6.1154022-6.1154003 s-6.1153984,2.7379999-6.1153984,6.1154003c0,0.5065994,0.0682983,0.9960995,0.1843987,1.4666996 C18.0799007,18.2600498,12.4386997,29.7947502,12.4386997,43.41465c0,0.6187019,0.0150003,1.2317009,0.0386,1.8409996 c-0.2929001,0.2498016-0.5340996,0.5635986-0.6620998,0.9463997l-2.8975,8.6665993 c-0.4692001,1.4033012,0.5754004,2.8535004,2.0555,2.8535004h14.1247005c0.8610001,2.8908005,3.535799,5,6.7062988,5 s5.8453026-2.1091995,6.7063026-5h14.1246986c1.4800987,0,2.5247002-1.4501991,2.0555-2.8535004L51.7932014,46.2020493z M26.7959003,16.1219501l1.4443989-0.7332001l-0.3878994-1.5727005c-0.0841999-0.3413-0.1252003-0.6613998-0.1252003-0.9784994 c0-2.2480001,1.8290005-4.0769005,4.0769997-4.0769005s4.0769997,1.8289003,4.0769997,4.0769005 c0,0.3170996-0.0410004,0.6371994-0.1251984,0.9784994l-0.3879013,1.5727005L36.8125,16.1219501 c7.2531013,3.6816006,12.3186989,14.9046993,12.3186989,27.2926998c0,0.4183006-0.0060997,0.8419991-0.0181007,1.2691002 H14.4953003c-0.0120001-0.4271011-0.0181007-0.8507996-0.0181007-1.2691002 C14.4771996,31.0266495,19.5428009,19.8035507,26.7959003,16.1219501z M31.8041992,60.7221489 c-2.0464001,0-3.8094997-1.2355003-4.5824986-3h9.164999C35.6137009,59.4866486,33.8506012,60.7221489,31.8041992,60.7221489z M52.7711983,55.6526489c-0.0500984,0.0695-0.1102982,0.0695-0.1359978,0.0695H38.8041992h-14H10.9731998 c-0.0256996,0-0.0859003,0-0.1359997-0.0695c-0.0496998-0.0690994-0.0307999-0.1256981-0.0227003-0.1497993l2.8975-8.6665993 c0.0229006-0.0681992,0.0866003-0.1141014,0.1588001-0.1141014h35.8667984c0.0722008,0,0.1359024,0.0459023,0.158802,0.1140022 l2.8974991,8.6666985C52.8019981,55.5269508,52.8209,55.5835495,52.7711983,55.6526489z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900  ">Notice board </p>
                                </div>
                            </a>
                            <a href="{{ asset('img/prospectuscmyk.pdf') }}" target="_blank" rel="noopener noreferrer" class="flex items-start px-3 py-2 rounded-lg hover:bg-green-50 transition-all duration-150 transform hover:translate-x-1">
                                <div class="flex-shrink-0 h-5 w-5 text-green-500">
                                    <svg width="20px" height="20px" viewBox="-4 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M25.6686 26.0962C25.1812 26.2401 24.4656 26.2563 23.6984 26.145C22.875 26.0256 22.0351 25.7739 21.2096 25.403C22.6817 25.1888 23.8237 25.2548 24.8005 25.6009C25.0319 25.6829 25.412 25.9021 25.6686 26.0962ZM17.4552 24.7459C17.3953 24.7622 17.3363 24.7776 17.2776 24.7939C16.8815 24.9017 16.4961 25.0069 16.1247 25.1005L15.6239 25.2275C14.6165 25.4824 13.5865 25.7428 12.5692 26.0529C12.9558 25.1206 13.315 24.178 13.6667 23.2564C13.9271 22.5742 14.193 21.8773 14.468 21.1894C14.6075 21.4198 14.7531 21.6503 14.9046 21.8814C15.5948 22.9326 16.4624 23.9045 17.4552 24.7459ZM14.8927 14.2326C14.958 15.383 14.7098 16.4897 14.3457 17.5514C13.8972 16.2386 13.6882 14.7889 14.2489 13.6185C14.3927 13.3185 14.5105 13.1581 14.5869 13.0744C14.7049 13.2566 14.8601 13.6642 14.8927 14.2326ZM9.63347 28.8054C9.38148 29.2562 9.12426 29.6782 8.86063 30.0767C8.22442 31.0355 7.18393 32.0621 6.64941 32.0621C6.59681 32.0621 6.53316 32.0536 6.44015 31.9554C6.38028 31.8926 6.37069 31.8476 6.37359 31.7862C6.39161 31.4337 6.85867 30.8059 7.53527 30.2238C8.14939 29.6957 8.84352 29.2262 9.63347 28.8054ZM27.3706 26.1461C27.2889 24.9719 25.3123 24.2186 25.2928 24.2116C24.5287 23.9407 23.6986 23.8091 22.7552 23.8091C21.7453 23.8091 20.6565 23.9552 19.2582 24.2819C18.014 23.3999 16.9392 22.2957 16.1362 21.0733C15.7816 20.5332 15.4628 19.9941 15.1849 19.4675C15.8633 17.8454 16.4742 16.1013 16.3632 14.1479C16.2737 12.5816 15.5674 11.5295 14.6069 11.5295C13.948 11.5295 13.3807 12.0175 12.9194 12.9813C12.0965 14.6987 12.3128 16.8962 13.562 19.5184C13.1121 20.5751 12.6941 21.6706 12.2895 22.7311C11.7861 24.0498 11.2674 25.4103 10.6828 26.7045C9.04334 27.3532 7.69648 28.1399 6.57402 29.1057C5.8387 29.7373 4.95223 30.7028 4.90163 31.7107C4.87693 32.1854 5.03969 32.6207 5.37044 32.9695C5.72183 33.3398 6.16329 33.5348 6.6487 33.5354C8.25189 33.5354 9.79489 31.3327 10.0876 30.8909C10.6767 30.0029 11.2281 29.0124 11.7684 27.8699C13.1292 27.3781 14.5794 27.011 15.985 26.6562L16.4884 26.5283C16.8668 26.4321 17.2601 26.3257 17.6635 26.2153C18.0904 26.0999 18.5296 25.9802 18.976 25.8665C20.4193 26.7844 21.9714 27.3831 23.4851 27.6028C24.7601 27.7883 25.8924 27.6807 26.6589 27.2811C27.3486 26.9219 27.3866 26.3676 27.3706 26.1461ZM30.4755 36.2428C30.4755 38.3932 28.5802 38.5258 28.1978 38.5301H3.74486C1.60224 38.5301 1.47322 36.6218 1.46913 36.2428L1.46884 3.75642C1.46884 1.6039 3.36763 1.4734 3.74457 1.46908H20.263L20.2718 1.4778V7.92396C20.2718 9.21763 21.0539 11.6669 24.0158 11.6669H30.4203L30.4753 11.7218L30.4755 36.2428ZM28.9572 10.1976H24.0169C21.8749 10.1976 21.7453 8.29969 21.7424 7.92417V2.95307L28.9572 10.1976ZM31.9447 36.2428V11.1157L21.7424 0.871022V0.823357H21.6936L20.8742 0H3.74491C2.44954 0 0 0.785336 0 3.75711V36.2435C0 37.5427 0.782956 40 3.74491 40H28.2001C29.4952 39.9997 31.9447 39.2143 31.9447 36.2428Z" fill="#05a854"></path>
                                        </g>
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
            <a href="/career" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150"> কর্মজীবন</a>
            <a href="/contactbd" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50   dark:hover:text-green-400 dark:hover:bg-gray-800 transition-colors duration-150">যোগাযোগ করুন</a>

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
    // Gallery dropdown toggle button and panel
    const noticeProductsDropdown = document.getElementById('noticeProductsDropdown');
    const noticeProductsDropdownPanel = document.getElementById('noticeProductsDropdownPanel');
    const noticeProductsButton = document.getElementById('noticeProductsButton');

    // Mobile dropdown toggles (assuming you renamed those as well if needed)
    // For example, if mobileProductsButton/id needs renaming, update here accordingly

    // Toggle dropdown on hover (desktop)
    noticeProductsDropdown.addEventListener('mouseenter', () => {
        noticeProductsDropdownPanel.classList.remove('opacity-0', 'scale-95', 'invisible');
        noticeProductsDropdownPanel.classList.add('opacity-100', 'scale-100', 'visible');
    });
    noticeProductsDropdown.addEventListener('mouseleave', () => {
        noticeProductsDropdownPanel.classList.remove('opacity-100', 'scale-100', 'visible');
        noticeProductsDropdownPanel.classList.add('opacity-0', 'scale-95', 'invisible');
    });

    // Toggle dropdown on click for mobile if needed (example)
    noticeProductsButton.addEventListener('click', () => {
        noticeProductsDropdownPanel.classList.toggle('hidden');
        const svg = galleryProductsButton.querySelector('svg');
        svg.classList.toggle('rotate-180');
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
