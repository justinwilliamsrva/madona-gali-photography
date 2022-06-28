<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Madona Gali Photography</title>

    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Tangerine&display=swap" rel="stylesheet">



    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.min.js"></script>


</head>

<body class="font-normal antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class=" fixed flex justify-center mx-auto w-full">
            @if (session()->has('success'))
            <p class="text-lg mt-5 text-center py-3 px-5 bg-green-500/90 rounded min-w-3xl">{!! session('success') !!}</p>
            @elseif (session()->has('error'))
            <p class="text-lg mt-5 text-center py-3 px-5 bg-red-500/90 rounded min-w-3xl">{!! session('error') !!}</p>
            @endif
        </div>

        <!-- Page Heading -->
        <header>
            {{ $header }}
        </header>

        <!-- Page Content -->
        <main>

            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>
</body>
<script>
    $('#gallery').justifiedGallery({
        rowHeight: 200,
        lastRow: 'nojustify',
        margins: 3

    });
</script>

</html>