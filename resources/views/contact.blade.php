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
