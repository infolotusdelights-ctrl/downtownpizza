<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Downtown Pizza Studio - Build Your Own Pizza with Live Preview">

    <meta name="keywords"
        content="Pizza, Custom Pizza, Downtown Pizza, Pizza Builder, Fresh Pizza">

    <meta name="author"
        content="Downtown Pizza">

    <meta name="theme-color"
        content="#C8102E">

    <title>@yield('title','Downtown Pizza Studio')</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Remix Icons -->

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet">

    <!-- GSAP -->

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')

</head>

<body>

    <!-- Page Loader -->

    <div id="loader">

        <div class="pizza-loader">

            <div class="slice slice1"></div>
            <div class="slice slice2"></div>
            <div class="slice slice3"></div>

        </div>

        <h2>Preparing Your Pizza...</h2>

    </div>

    <!-- Background Shapes -->

    <div class="bg-shape shape1"></div>

    <div class="bg-shape shape2"></div>

    <div class="bg-shape shape3"></div>

    <!-- Main Wrapper -->

    <div id="app">

        @yield('content')

    </div>

    <!-- Scroll To Top -->

    <button id="scrollTop">

        <i class="ri-arrow-up-line"></i>

    </button>

    @stack('scripts')

</body>

</html>
