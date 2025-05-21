<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Prestige Agro Dragon Ltd.</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    @include('partials.nav')
    @include('partials.slider')
    @include('component.about')
    @include('component.paralax')
    @include('component.mission')
    @include('component.vision')
    @include('component.productSlider')
    @include('partials.callNow')
    @include('partials.footer')
</body>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html>
