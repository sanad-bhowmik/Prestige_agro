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
    @include('partials.nav')

    <!-- Table Section -->
    <!-- Table Section -->
    <div class="max-w-7xl mx-auto py-4 px-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Officer Information Table</h2>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-500">
                <thead class="bg-gray-100 text-xs text-gray-700 uppercase">
                    <tr>
                        <th class="px-6 py-4 table-header" >SL</th>
                        <th class="px-6 py-4 table-header">Officer Name</th>
                        <th class="px-6 py-4 table-header">Designation</th>
                        <th class="px-6 py-4 table-header">Region</th>
                        <th class="px-6 py-4 table-header">Territory</th>
                        <th class="px-6 py-4 table-header">Mobile No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Uttam Kumar Paul</td>
                        <td class="px-6 py-4">ASM</td>
                        <td class="px-6 py-4">Cumilla</td>
                        <td class="px-6 py-4">Cumilla Dist.</td>
                        <td class="px-6 py-4">01869-162233</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Md. Razaol Karim</td>
                        <td class="px-6 py-4">ASM</td>
                        <td class="px-6 py-4">Bogura</td>
                        <td class="px-6 py-4">Dhunot</td>
                        <td class="px-6 py-4">01917-003147</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">Md. Minarul Islam</td>
                        <td class="px-6 py-4">AM</td>
                        <td class="px-6 py-4">Rajshahi</td>
                        <td class="px-6 py-4">Bagha</td>
                        <td class="px-6 py-4">01739-279754</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">4</td>
                        <td class="px-6 py-4">Md. Arafat Hossain</td>
                        <td class="px-6 py-4">SMO</td>
                        <td class="px-6 py-4">Cox's Bazar</td>
                        <td class="px-6 py-4">Chakaria</td>
                        <td class="px-6 py-4">01818-189891</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">5</td>
                        <td class="px-6 py-4">Md. Mizanur Rahman</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">Mymensingh</td>
                        <td class="px-6 py-4">Jamalpur 1</td>
                        <td class="px-6 py-4">01643-912974</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">6</td>
                        <td class="px-6 py-4">Himmotul Islam</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">Rangpur</td>
                        <td class="px-6 py-4">Kaunia</td>
                        <td class="px-6 py-4">01712-487908</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">7</td>
                        <td class="px-6 py-4">Md. Tariqul Islam</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">Rangpur</td>
                        <td class="px-6 py-4">Mithapukur</td>
                        <td class="px-6 py-4">01827-534344</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">8</td>
                        <td class="px-6 py-4">Md. Shohidul Islam</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">Rangpur</td>
                        <td class="px-6 py-4">Kurigram</td>
                        <td class="px-6 py-4">01723-642006</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">9</td>
                        <td class="px-6 py-4">Md. Noyon Mia</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">Sylhet</td>
                        <td class="px-6 py-4">Sunamganj 1</td>
                        <td class="px-6 py-4">01779-461772</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">10</td>
                        <td class="px-6 py-4">Md. Zulker Nain</td>
                        <td class="px-6 py-4">MO</td>
                        <td class="px-6 py-4">Mymensingh</td>
                        <td class="px-6 py-4">Jamalpur 2</td>
                        <td class="px-6 py-4">01886-366584</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">11</td>
                        <td class="px-6 py-4">Md. Sohag</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">Sylhet</td>
                        <td class="px-6 py-4">Hobiganj 1</td>
                        <td class="px-6 py-4">01965-665656</td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <td class="px-6 py-4">12</td>
                        <td class="px-6 py-4">Md. Hafizur Rahman</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">Cumilla</td>
                        <td class="px-6 py-4">Brahmanpara</td>
                        <td class="px-6 py-4">01733-157261</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">13</td>
                        <td class="px-6 py-4">Monsur Rahman Rahel</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">Sylhet</td>
                        <td class="px-6 py-4">Moulovibazar</td>
                        <td class="px-6 py-4">01713-802661</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-6 py-4">14</td>
                        <td class="px-6 py-4">Parvez Ahammed</td>
                        <td class="px-6 py-4">SO</td>
                        <td class="px-6 py-4">Cumilla</td>
                        <td class="px-6 py-4">Chandina</td>
                        <td class="px-6 py-4">01682-456347</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @include('partials.footer')
</body>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</html>
