<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prestige | Contact Us</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-100 to-white text-gray-800">
    @include('partials.nav')

    <!-- Header Section -->
    <section class="text-center py-16 bg-white text-black">
        <h1 class="text-5xl font-extrabold mb-3">Contact Us</h1>
        <p class="text-lg">We’re here to connect, guide and grow with you.</p>
    </section>

    <!-- Office Info -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Head Office -->
            <div class="bg-white p-8 rounded-3xl shadow-2xl hover:shadow-green-200 transition duration-300">
                <h2 class="text-3xl font-bold text-green-600 mb-4"><i class="fas fa-building mr-2"></i>Head Office</h2>
                <p class="mb-2 text-gray-600"><i class="fas fa-map-marker-alt text-green-400 mr-2"></i> Lakhpur, Shibpur , Narsingdi-1620, Bangladesh</p>
                <p class="mb-2 text-gray-600"><i class="fas fa-phone-alt text-blue-400 mr-2"></i> 01937-589036</p>
                <p class="mb-2 text-gray-600"><i class="fas fa-mobile-alt text-blue-400 mr-2"></i> 01711-675708</p>
                <p class="mb-2 text-gray-600"><i class="fas fa-envelope text-green-400 mr-2"></i> prestigeagoanltd@gmail.com</p>
            </div>

            <!-- Corporate Office -->
            <div class="bg-white p-8 rounded-3xl shadow-2xl hover:shadow-blue-200 transition duration-300">
                <h2 class="text-3xl font-bold text-blue-600 mb-4"><i class="fas fa-city mr-2"></i>Corporate Office</h2>
                <p class="mb-2 text-gray-600"><i class="fas fa-map-marker-alt text-blue-400 mr-2"></i> Nur Mohammad Khan Tower (3rd Floor), Jailkhanar Mor, DC Road, Narsingdi Sadar, Narsingdi, Bangladesh</p>
                <p class="mb-2 text-gray-600"><i class="fas fa-phone-alt text-blue-400 mr-2"></i> +880 2227721080</p>
                <p class="mb-2 text-gray-600"><i class="fas fa-envelope text-blue-400 mr-2"></i> prestigeagoanltd@gmail.com</p>
            </div>
        </div>
    </section>
    <div id="contact-us" class="overflow-hidden bg-white py-16 px-4 dark:bg-slate-900 sm:px-6 lg:px-8 lg:py-24">
        <div class="relative mx-auto max-w-xl">
            <!-- Decorative SVGs -->
            <svg class="absolute left-full translate-x-1/2 transform" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="pattern-left" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-slate-600" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#pattern-left)"></rect>
            </svg>

            <svg class="absolute right-full bottom-0 -translate-x-1/2 transform" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="pattern-right" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-slate-800" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#pattern-right)"></rect>
            </svg>

            <!-- Contact Text -->
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-slate-200 sm:text-4xl">Contact Us</h2>
                <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-slate-400">Please use the form below to contact us. Thank you!</p>
            </div>

            <!-- Form -->
            <div class="mt-12">
                <form id="contact-form" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name</label>
                        <div class="mt-1">
                            <input name="name" type="text" id="name" autocomplete="organization" required class="border-gray-300 block w-full rounded-md py-3 px-4 shadow-sm focus:border-sky-500 focus:ring-sky-500 dark:border-white/5 dark:bg-slate-700/50 dark:text-white" style="border: 1px solid #80808054;">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Email</label>
                        <div class="mt-1">
                            <input name="email" id="email" required type="email" autocomplete="email" class="border-gray-300 block w-full rounded-md py-3 px-4 shadow-sm focus:border-sky-500 focus:ring-sky-500 dark:border-white/5 dark:bg-slate-700/50 dark:text-white" style="border: 1px solid #80808054;">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Message</label>
                        <div class="mt-1">
                            <textarea required name="message" id="message" rows="4" class="border-gray-300 block w-full rounded-md py-3 px-4 shadow-sm focus:border-sky-500 focus:ring-sky-500 dark:border-white/5 dark:bg-slate-700/50 dark:text-white" style="border: 1px solid #80808054;"></textarea>
                        </div>
                    </div>

                    <div class="flex justify-end sm:col-span-2 mt-6">
                        <button type="submit" id="submit-btn" class="inline-flex items-center rounded-md px-4 py-2 font-medium focus:outline-none focus-visible:ring focus-visible:ring-sky-500 shadow-sm sm:text-sm transition-colors duration-75 text-sky-500 border border-sky-500 hover:bg-sky-50 active:bg-sky-100 disabled:bg-sky-100 dark:hover:bg-gray-900 dark:active:bg-gray-800 dark:disabled:bg-gray-800 disabled:cursor-not-allowed" style="border: 1px solid #80808054;">
                            <span id="btn-text">Send Message</span>
                            <span id="spinner" class="hidden ml-2">
                                <svg class="animate-spin h-5 w-5 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>

                <!-- Success Message (hidden by default) -->
                <div id="success-message" class="hidden mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <p>Thank you! Your message has been sent successfully.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.getElementById("contact-form").addEventListener("submit", function(e) {
            e.preventDefault();

            // Get form elements
            const form = e.target;
            const submitBtn = document.getElementById("submit-btn");
            const btnText = document.getElementById("btn-text");
            const spinner = document.getElementById("spinner");
            const successMessage = document.getElementById("success-message");

            // Get form values
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const message = document.getElementById("message").value.trim();

            // Show loading state
            submitBtn.disabled = true;
            btnText.textContent = "Sending...";
            spinner.classList.remove("hidden");

            // Prepare email content
            const subject = "New Contact Message from " + name;
            const body = `Name: ${name}\nEmail: ${email}\n\nMessage:\n${message}`;

            // Create mailto link
            const mailtoLink = `mailto:sanadbhowmik19@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

            // Simulate sending (in a real app, you would use a proper email service)
            setTimeout(() => {
                // Open default email client
                window.location.href = mailtoLink;

                // Show success message
                successMessage.classList.remove("hidden");
                form.reset();

                // Reset button state
                submitBtn.disabled = false;
                btnText.textContent = "Send Message";
                spinner.classList.add("hidden");

                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.add("hidden");
                }, 5000);
            }, 1000);
        });
    </script>
    <!-- Shared Map Section -->
    <!-- Shared Map Section - Full Width, Tall -->
    <section class="w-full mt-10">
        <div class=" overflow-hidden" style="height: 124vh;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58351.27836387743!2d90.64250823213958!3d23.926651132724768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754304ce44c5b21%3A0xce082a3c68682738!2sNarsingdi!5e0!3m2!1sen!2sbd!4v1745218280040!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    @include('partials.footer')
</body>

</html>
