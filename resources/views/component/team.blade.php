<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Prestige</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .max-w-7xl {
            margin-top: 5rem;
        }
    </style>
</head>

<body class="antialiased">
    @include('partials.nav')
    <div class="font font-Poppins mb-14 mt-10 mb-10">
        <div class="flex flex-col items-center relative">
            <h1 class="absolute text-6xl md:text-9xl font-semibold text-gray-600 opacity-5  ">
                Prestige
            </h1>
            <div class="relative flex flex-col items-center mt-5 md:mt-10">
                <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-gray-600">Teams</h1>
                <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-green-400 "></div>
            </div>
        </div>
    </div>
    <!-- Team -->
    <div style='background-color:rgba(0, 0, 0, 0)'>
        <div class="container max-w-7xl mx-auto px-4" style="cursor: auto;">

            <div class="flex flex-wrap mb-10">
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="John Doe" src="https://cdn.dribbble.com/userupload/21115092/file/original-703415b7c9722a62e6cc04050b9f7b0a.gif" class="rounded-xl shadow-lg max-w-full h-auto align-middle border-none undefined">
                        <div class="pt-6 text-center">
                            <h1 class="text-gray-900 text-xl font-serif font-bold leading-normal mt-0 mb-2">AFM Mahabubul Hasan</h1>
                            <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">Chairman</p>
                            <div class="flex items-center justify-center">
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-light-blue-500 hover:bg-light-blue-50 hover:text-light-blue-700 hover:bg-light-blue-50 active:bg-light-blue-100 undefined">
                                    <i class="fab fa-twitter undefined text-lg"></i>
                                </button>
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-blue-500 hover:bg-blue-50 hover:text-blue-700 hover:bg-blue-50 active:bg-blue-100 undefined">
                                    <i class="fab fa-facebook-f undefined text-lg"></i>
                                </button>
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-pink-500 hover:bg-pink-50 hover:text-pink-700 hover:bg-pink-50 active:bg-pink-100 undefined">
                                    <i class="fab fa-dribbble undefined text-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4" style="cursor: auto;">
                    <div class="px-6" style="cursor: auto;">
                        <img alt="Jack Wales" src="https://cdn.dribbble.com/userupload/24131921/file/original-1b7150fc995a92c5584bcf5e82ebd920.gif" class="rounded-xl shadow-lg max-w-full h-auto align-middle border-none undefined" style="cursor: auto;">
                        <div class="pt-6 text-center">
                            <h1 class="text-gray-900 text-xl font-serif font-bold leading-normal mt-0 mb-2">Md. Emam Hossain</h1>
                            <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">Managing Director</p>
                            <div class="flex items-center justify-center">
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-light-blue-500 hover:bg-light-blue-50 hover:text-light-blue-700 hover:bg-light-blue-50 active:bg-light-blue-100 undefined">
                                    <i class="fab fa-twitter undefined text-lg"></i>
                                </button>
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-blue-500 hover:bg-blue-50 hover:text-blue-700 hover:bg-blue-50 active:bg-blue-100 undefined">
                                    <i class="fab fa-facebook-f undefined text-lg"></i>
                                </button>
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-pink-500 hover:bg-pink-50 hover:text-pink-700 hover:bg-pink-50 active:bg-pink-100 undefined">
                                    <i class="fab fa-dribbble undefined text-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4" style="cursor: auto;">
                    <div class="px-6" style="cursor: auto;">
                        <img alt="George Hoyt" src="https://cdn.dribbble.com/userupload/23113998/file/original-1618e3d0c2a735ee77d53d199c57a8de.gif" class="rounded-xl shadow-lg max-w-full h-auto align-middle border-none undefined" style="cursor: auto;">
                        <div class="pt-6 text-center">
                            <h1 class="text-gray-900 text-xl font-serif font-bold leading-normal mt-0 mb-2">Md. Reshadul Islam Khan Rajon</h1>
                            <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">Director</p>
                            <div class="flex items-center justify-center">
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-light-blue-500 hover:bg-light-blue-50 hover:text-light-blue-700 hover:bg-light-blue-50 active:bg-light-blue-100 undefined">
                                    <i class="fab fa-twitter undefined text-lg"></i>
                                </button>
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-blue-500 hover:bg-blue-50 hover:text-blue-700 hover:bg-blue-50 active:bg-blue-100 undefined">
                                    <i class="fab fa-facebook-f undefined text-lg"></i>
                                </button>
                                <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-pink-500 hover:bg-pink-50 hover:text-pink-700 hover:bg-pink-50 active:bg-pink-100 undefined">
                                    <i class="fab fa-dribbble undefined text-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team -->
    @include('partials.footer')
</body>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</html>
