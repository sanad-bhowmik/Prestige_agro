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
            background-color: #f8fafc;
        }

        .table-container {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 0.75rem;
            overflow: hidden;
        }

        .table-header {
            background-color: #1a6b3a;
            color: white;
        }

        .table-row:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table-row:hover {
            background-color: #f0fdf4;
        }

        .contact-cell:hover {
            color: #1a6b3a;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .responsive-table {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .page-title {
                font-size: 1.5rem;
            }
        }

        .page-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .page-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 4px;
            background: #1a6b3a;
            border-radius: 2px;
        }
    </style>
</head>

<body class="antialiased">
    @include('partials.navbd')

    <!-- Table Section -->
    <!-- Table Section -->
    <div class="max-w-7xl mx-auto py-4 px-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">অফিসারের তথ্য টেবিল</h2>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-500">
                <thead class="bg-gray-100 text-xs text-gray-700 uppercase">
                    <tr>
                        <th class="px-6 py-4 table-header">ক্রমিক</th>
                        <th class="px-6 py-4 table-header">অফিসারের নাম</th>
                        <th class="px-6 py-4 table-header">পদবি</th>
                        <th class="px-6 py-4 table-header">অঞ্চল</th>
                        <th class="px-6 py-4 table-header">টেরিটরি</th>
                        <th class="px-6 py-4 table-header">মোবাইল নম্বর</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">১</td>
                        <td class="px-6 py-4">উত্তম কুমার পল</td>
                        <td class="px-6 py-4">ASM</td>
                        <td class="px-6 py-4">কুমিল্লা</td>
                        <td class="px-6 py-4">কুমিল্লা জেলা</td>
                        <td class="px-6 py-4">০১৮৬৯-১৬২২৩৩</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">২</td>
                        <td class="px-6 py-4">মোঃ রাজাওল করিম</td>
                        <td class="px-6 py-4">ASM</td>
                        <td class="px-6 py-4">বগুড়া</td>
                        <td class="px-6 py-4">ধুনট</td>
                        <td class="px-6 py-4">০১৯১৭-০০৩১৪৭</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">৩</td>
                        <td class="px-6 py-4">মোঃ মিনারুল ইসলাম</td>
                        <td class="px-6 py-4">AM</td>
                        <td class="px-6 py-4">রাজশাহী</td>
                        <td class="px-6 py-4">বাঘা</td>
                        <td class="px-6 py-4">০১৭৩৯-২৭৯৭৫৪</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">৪</td>
                        <td class="px-6 py-4">মোঃ আরাফাত হোসেন</td>
                        <td class="px-6 py-4">SMO</td>
                        <td class="px-6 py-4">কক্সবাজার</td>
                        <td class="px-6 py-4">চকরিয়া</td>
                        <td class="px-6 py-4">০১৮১৮-১৮৯৮৯১</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">৫</td>
                        <td class="px-6 py-4">মোঃ মিজানুর রহমান</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">ময়মনসিংহ</td>
                        <td class="px-6 py-4">জামালপুর ১</td>
                        <td class="px-6 py-4">০১৬৪৩-৯১২৯৭৪</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">৬</td>
                        <td class="px-6 py-4">হিম্মতুল ইসলাম</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">রংপুর</td>
                        <td class="px-6 py-4">কাউনিয়া</td>
                        <td class="px-6 py-4">০১৭১২-৪৮৭৯০৮</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">৭</td>
                        <td class="px-6 py-4">মোঃ তারিকুল ইসলাম</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">রংপুর</td>
                        <td class="px-6 py-4">মিঠাপুকুর</td>
                        <td class="px-6 py-4">০১৮২৭-৫৩৪৩৪৪</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">৮</td>
                        <td class="px-6 py-4">মোঃ শহীদুল ইসলাম</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">রংপুর</td>
                        <td class="px-6 py-4">কুড়িগ্রাম</td>
                        <td class="px-6 py-4">০১৭২৩-৬৪২০০৬</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">৯</td>
                        <td class="px-6 py-4">মোঃ নয়ন মিয়া</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">সিলেট</td>
                        <td class="px-6 py-4">সুনামগঞ্জ ১</td>
                        <td class="px-6 py-4">০১৭৭৯-৪৬১৭৭২</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">১০</td>
                        <td class="px-6 py-4">মোঃ জুলকার নাইন</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">ময়মনসিংহ</td>
                        <td class="px-6 py-4">জামালপুর ২</td>
                        <td class="px-6 py-4">০১৮৮৬-৩৬৬৫৮৪</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">১১</td>
                        <td class="px-6 py-4">মোঃ সোহাগ</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">সিলেট</td>
                        <td class="px-6 py-4">হবিগঞ্জ ১</td>
                        <td class="px-6 py-4">০১৯৬৫-৬৬৫৬৫৬</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">১২</td>
                        <td class="px-6 py-4">মোঃ হাফিজুর রহমান</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">কুমিল্লা</td>
                        <td class="px-6 py-4">ব্রাহ্মণপাড়া</td>
                        <td class="px-6 py-4">০১৭৩৩-১৫৭২৬১</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">১৩</td>
                        <td class="px-6 py-4">মনসুর রহমান রাহেল</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">সিলেট</td>
                        <td class="px-6 py-4">মৌলভীবাজার</td>
                        <td class="px-6 py-4">০১৭১৩-৮০২৬৬১</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4">১৪</td>
                        <td class="px-6 py-4">পারভেজ আহমেদ</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">কুমিল্লা</td>
                        <td class="px-6 py-4">চান্দিনা</td>
                        <td class="px-6 py-4">০১৬৮২-৪৫৬৩৪৭</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @include('partials.footer')
</body>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</html>
