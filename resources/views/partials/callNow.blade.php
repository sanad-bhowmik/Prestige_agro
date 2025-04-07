<section class="relative z-10 overflow-hidden py-16 px-8 mt-40 bg-cover bg-center parallax-section mb-10">
    <div class="container flex flex-col justify-center items-center h-full">
        <div class="text-center text-white">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">
                Need Immediate Assistance?
            </h1>
            <p class="text-lg sm:text-xl mb-8">
                Call us now to get fast support and expert help.
            </p>
            <a href="tel:+1234567890" class="bg-yellow-500 text-black font-semibold py-4 px-8 rounded-full hover:bg-opacity-90 transition duration-300">
                Call Now
            </a>
        </div>
    </div>
    <!-- Decorative SVGs -->
    <span class="absolute top-0 right-0 -z-10">
        <svg width="388" height="250" viewBox="0 0 388 220" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z" fill="url(#paint0_linear_971_6910)"></path>
            <defs>
                <linearGradient id="paint0_linear_971_6910" x1="60.5" y1="111" x2="287" y2="111" gradientUnits="userSpaceOnUse">
                    <stop offset="0.520507" stop-color="white"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </svg>
    </span>
    <span class="absolute top-0 right-0 -z-10">
        <svg width="324" height="250" viewBox="0 0 324 220" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z" fill="url(#paint0_linear_971_6911)"></path>
            <defs>
                <linearGradient id="paint0_linear_971_6911" x1="60.5" y1="111" x2="287" y2="111" gradientUnits="userSpaceOnUse">
                    <stop offset="0.520507" stop-color="white"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </svg>
    </span>
    <span class="absolute top-4 left-4 -z-10">
        <svg width="43" height="56" viewBox="0 0 43 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5">
                <!-- Circle pattern SVG -->
                <circle cx="40.9984" cy="1.49626" r="1.49626" transform="rotate(90 40.9984 1.49626)" fill="white"></circle>
                <circle cx="27.8304" cy="1.49626" r="1.49626" transform="rotate(90 27.8304 1.49626)" fill="white"></circle>
                <!-- More circles -->
            </g>
        </svg>
    </span>
</section>

<style>
    /* Parallax background */
    .parallax-section {
        background-image: url('https://i.gifer.com/78cI.gif'); /* Replace with your image URL */
        background-attachment: fixed;  /* Parallax effect */
        background-position: center;
        background-size: cover;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .parallax-section .text-center {
        z-index: 10;
    }

    /* Button style */
    .parallax-section a {
        font-size: 1.25rem;
        padding: 16px 32px;
        border-radius: 9999px; /* Fully rounded button */
        background-color: #FBBF24; /* Call button color */
        color: black;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .parallax-section a:hover {
        background-color: #F59E0B; /* Darken on hover */
    }

    /* Add a slight overlay effect if needed */
    .parallax-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Dark overlay */
        z-index: -1;
    }
</style>
