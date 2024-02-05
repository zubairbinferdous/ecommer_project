<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="analytics dashboard,jobs dashboard,crm dashboard examples,personal dashboard,sales dashboard sample,best crm dashboard,crypto dashboard template,sales analytics dashboard,stocks dashboard,hrm dashboard,ecommerce admin panel template,sales admin dashboard,admin panel for ecommerce website,website template ecommerce,template dashboard,course dashboard,template ecommerce website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}">

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Apex Charts JS -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Index JS -->
    <script src="{{ asset('backend/assets/js/index-2.js') }}"></script>

    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"></div>

    <!-- popperjs -->
    <script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('backend/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- sidebar JS -->
    <script src="{{ asset('backend/assets/js/defaultmenu.js') }}"></script>

    <!-- sticky JS -->
    <script src="{{ asset('backend/assets/js/sticky.js') }}"></script>

    <!-- Switch JS -->
    <script src="{{ asset('backend/assets/js/switch.js') }}"></script>

    <!-- Preline JS -->
    <script src="{{ asset('backend/assets/libs/preline/preline.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('backend/assets/js/custom-switcher.js') }}"></script>
</body>

</html>
