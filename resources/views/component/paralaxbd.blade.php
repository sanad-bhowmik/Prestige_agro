<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>কৃষক ও উদ্যানপ্রেমীদের জন্য</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .parallax {
            background-image: url('https://globalagrovet.com/wp-content/uploads/2023/05/gardening-bg-1.jpg');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            clip-path: polygon(-14% 0, 100% 0, 100% 100%, -5% 100%);
        }

        .clip-path-custom {
            clip-path: polygon(0 0, 114% 0, 100% 100%, 0% 100%);
        }
    </style>
</head>
<body class="bg-gray-100">
    <section class="relative flex flex-col md:flex-row items-stretch h-[300px] md:h-[400px] overflow-hidden">
        <div class="bg-green-500 text-white p-6 md:p-10 flex flex-col justify-center md:w-1/2 clip-path-custom">
            <h2 class="text-2xl md:text-4xl font-bold">
                <span class="text-white">কৃষক ও উদ্যানপ্রেমীরা</span> <span class="text-gray-900">প্রয়োজন</span>
            </h2>
            <hr class="w-16 border-t-2 border-gray-900 my-4" />
            <p class="text-sm md:text-lg">
                যদি আপনার জরুরি কৃষি প্রয়োজন হয়, তাহলে আমাদের ২৪ ঘন্টার জরুরি নম্বরে কল করুন
            </p>
            <p class="text-xs md:text-base mt-4 font-semibold uppercase">
                দ্রুত এবং নির্ভরযোগ্য সেবা কৃষি ও বাগানবাড়ির জন্য
            </p>
        </div>
        <div class="parallax md:w-1/2"></div>
    </section>
</body>
</html>
