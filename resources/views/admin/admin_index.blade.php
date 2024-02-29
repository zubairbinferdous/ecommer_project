<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="analytics dashboard,jobs dashboard,crm dashboard examples,personal dashboard,sales dashboard sample,best crm dashboard,crypto dashboard template,sales analytics dashboard,stocks dashboard,hrm dashboard,ecommerce admin panel template,sales admin dashboard,admin panel for ecommerce website,website template ecommerce,template dashboard,course dashboard,template ecommerce website">

    <!-- Bootstrap CDN Links -->
    <!-- include libraries(jQuery, bootstrap) -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
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

    <link rel="stylesheet" href="{{ asset('backend/assets/libs/dropzone/dropzone.css') }}">
    <!-- filepond File Upload  Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/libs/flatpickr/flatpickr.min.css') }}">

    <link id="style" href="{{ asset('backend/assets/libs/quill/quill.snow.css') }}" rel="stylesheet">


    <!-- Flatpickr Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/classic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/monolith.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>


    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/brand-logos/favicon.ico">

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="../assets/libs/simplebar/simplebar.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/@simonwep/pickr/themes/nano.min.css">








</head>

<body class="">

    <div class="page">
        <!-- Start::app-sidebar -->

        <aside class="app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="main-logo desktop-logo">
                    <img src="../assets/img/brand-logos/toggle-logo.png" alt="logo" class="main-logo toggle-logo">
                    <img src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="main-logo desktop-dark">
                    <img src="../assets/img/brand-logos/toggle-dark.png" alt="logo" class="main-logo toggle-dark">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar " id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{ route('admin.index') }}" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>

                                <span class="side-menu__label">Dashboards</span>
                            </a>
                        </li>


                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-inbox-line side-menu__icon"></i>
                                <span class="side-menu__label">Category Area</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{ route('allCategory') }}" class="side-menu__item">All
                                        Category</a></li>
                                <li class="slide"><a href="{{ route('addCategory') }}" class="side-menu__item">Add
                                        Category</a></li>
                            </ul>
                        </li>

                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-inbox-line side-menu__icon"></i>
                                <span class="side-menu__label">Product Area</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{ route('allProduct') }}" class="side-menu__item">All
                                        Product</a></li>
                                <li class="slide"><a href="{{ route('addProduct') }}" class="side-menu__item">Add
                                        Simple Product</a></li>
                            </ul>
                        </li>

                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-node-tree side-menu__icon"></i>
                                <span class="side-menu__label">Product Area</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1"
                                style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate(128px, 490px); display: none; box-sizing: border-box;"
                                data-popper-placement="bottom">
                                <li class="slide"><a href="javascript:void(0);" class="side-menu__item">All
                                        Product</a>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Add
                                        Product<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2" style="display: none; box-sizing: border-box;">
                                        <li class="slide"><a href="javascript:void(0);"
                                                class="side-menu__item">Simple Product</a>
                                        </li>
                                        <li class="slide"><a href="javascript:void(0);"
                                                class="side-menu__item">Variation Product</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">
                                        Attribute Area<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2" style="display: none; box-sizing: border-box;">
                                        <li class="slide"><a href="{{ route('addAttribute') }}"
                                                class="side-menu__item">Add Attribute</a>
                                        </li>
                                        <li class="slide"><a href="{{ route('allAttribute') }}"
                                                class="side-menu__item">All Attribute</a>
                                        </li>
                                        <li class="slide"><a href="{{ route('addAttributeValue') }}"
                                                class="side-menu__item">Add Attribute Value</a>
                                        </li>
                                        <li class="slide"><a href="{{ route('allAttributeValue') }}"
                                                class="side-menu__item">All Attribute Value</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <!-- End::slide -->

                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::Header -->
        <header class="header custom-sticky !top-0 !w-full">
            <nav class="main-header" aria-label="Global">
                <div class="header-content">
                    <div class="header-left">

                        <div class="">
                            <button type="button" class="sidebar-toggle !w-100 !h-100">
                                <span class="sr-only">Toggle Navigation</span>
                                <i class="ri-arrow-right-circle-line header-icon"></i>
                            </button>
                        </div>

                    </div>

                    <div class="responsive-logo">
                        <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                                src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto"></a>
                        <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                                src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto"></a>
                    </div>

                    <div class="header-right">
                        <div class="responsive-headernav">
                            <div class="header-nav-right">
                                <div class="header-country hs-dropdown ti-dropdown hidden sm:block"
                                    data-hs-dropdown-placement="bottom-right">
                                    <button id="dropdown-flag" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] border-0 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                        <img src="../assets/img/flags/10.png" alt="flag-img"
                                            class="h-[1.375rem] w-[1.375rem]">
                                    </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu min-w-[10rem]"
                                        aria-labelledby="dropdown-flag">
                                        <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                            <div class="py-2 first:pt-0 last:pb-0">
                                                <div class="ti-dropdown-item">
                                                    <div
                                                        class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                                            <img src="../assets/img/flags/10.png" alt="flag-img">
                                                        </div>
                                                        <div>
                                                            <p class="text-xs font-medium">
                                                                USA
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-dropdown-item">
                                                    <div
                                                        class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                                            <img src="../assets/img/flags/1.png" alt="flag-img">
                                                        </div>
                                                        <div>
                                                            <p class="text-xs font-medium">
                                                                Argentina
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-dropdown-item">
                                                    <div
                                                        class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                                            <img src="../assets/img/flags/2.png" alt="flag-img">
                                                        </div>
                                                        <div>
                                                            <p class="text-xs font-medium">
                                                                Canada
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-dropdown-item">
                                                    <div
                                                        class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                                            <img src="../assets/img/flags/3.png" alt="flag-img">
                                                        </div>
                                                        <div>
                                                            <p class="text-xs font-medium">
                                                                France
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-dropdown-item">
                                                    <div
                                                        class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                                            <img src="../assets/img/flags/4.png" alt="flag-img">
                                                        </div>
                                                        <div>
                                                            <p class="text-xs font-medium">
                                                                Germany
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-dropdown-item">
                                                    <div
                                                        class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                                            <img src="../assets/img/flags/5.png" alt="flag-img">
                                                        </div>
                                                        <div>
                                                            <p class="text-xs font-medium">
                                                                Italy
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-search">
                                    <button aria-label="button" type="button" data-hs-overlay="#search-modal"
                                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="ri-search-2-line header-icon"></i>
                                    </button>
                                </div>
                                <div class="header-theme-mode hidden sm:block">
                                    <a aria-label="anchor"
                                        class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                        href="javascript:;" data-hs-theme-click-value="dark">
                                        <i class="ri-moon-line header-icon"></i>
                                    </a>
                                    <a aria-label="anchor"
                                        class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                        href="javascript:;" data-hs-theme-click-value="light">
                                        <i class="ri-sun-line header-icon"></i>
                                    </a>
                                </div>
                                <div class="header-fullscreen hidden lg:block">
                                    <a aria-label="anchor" href="javascript:void(0);" onclick="openFullscreen();"
                                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="ri-fullscreen-line header-icon full-screen-open"></i>
                                        <i
                                            class="ri-fullscreen-line header-icon fullscreen-exit-line full-screen-close hidden"></i>
                                    </a>
                                </div>
                                <div class="header-cart hs-dropdown ti-dropdown hidden lg:block"
                                    data-hs-dropdown-placement="bottom-right">
                                    <button id="dropdown-cart" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                        <i class="ri-shopping-basket-line header-icon"></i>
                                        <span
                                            class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">
                                            <span
                                                class="relative inline-flex rounded-full h-5 w-5 bg-danger text-white justify-center items-center"
                                                id="cart-data2">4</span>
                                        </span>
                                    </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0"
                                        aria-labelledby="dropdown-cart">
                                        <div
                                            class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center">
                                            <p class="ti-dropdown-header-title !text-white font-semibold">Shopping Cart
                                            </p>
                                            <a href="javascript:void(0)"
                                                class="badge bg-black/20 text-white rounded-sm" id="cart-data">4
                                                Items</a>
                                        </div>
                                        <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                            <div class="py-2 first:pt-0 last:pb-0" id="allCartsContainer">
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="cart.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                        <img loading="lazy"
                                                            src="../assets/img/ecommerce/products/1.png"
                                                            alt="product-img"
                                                            class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                                        <div>
                                                            <p
                                                                class="text-sm font-medium text-gray-800 dark:text-white">
                                                                Black Heals For Women
                                                            </p>
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <h5 class="text-xs">$699</h5>
                                                                <span
                                                                    class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$999</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="cart.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                        <img loading="lazy"
                                                            src="../assets/img/ecommerce/products/2.png"
                                                            alt="product-img"
                                                            class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                                        <div>
                                                            <p
                                                                class="text-sm font-medium text-gray-800 dark:text-white">
                                                                Tshirt For Men
                                                            </p>
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <h5 class="text-xs">$245</h5>
                                                                <span
                                                                    class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$599</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="cart.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                        <img loading="lazy"
                                                            src="../assets/img/ecommerce/products/9.png"
                                                            alt="product-img"
                                                            class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                                        <div>
                                                            <p
                                                                class="text-sm font-medium text-gray-800 dark:text-white">
                                                                Travel Bag For Womens
                                                            </p>
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <h5 class="text-xs">$299</h5>
                                                                <span
                                                                    class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$399</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="cart.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                                        <img loading="lazy"
                                                            src="../assets/img/ecommerce/products/10.png"
                                                            alt="product-img"
                                                            class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                                        <div>
                                                            <p
                                                                class="text-sm font-medium text-gray-800 dark:text-white">
                                                                Leather Wallet For Grils
                                                            </p>
                                                            <div class="flex space-x-2 rtl:space-x-reverse">
                                                                <h5 class="text-xs">$100</h5>
                                                                <span
                                                                    class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$150</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="py-2 first:pt-0 last:pb-0 px-5">
                                                <div class="flex justify-between">
                                                    <div>
                                                        <span
                                                            class="text-xs font-semibold text-gray-800 dark:text-white">Total</span>
                                                    </div>
                                                    <div class="text-end font-medium">
                                                        <span
                                                            class="text-xs font-semibold text-gray-800 dark:text-white">$40,020</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 first:pt-0 px-5">
                                                <a class="w-full ti-btn ti-btn-primary p-2" href="checkout.html">
                                                    Proceed Checkout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-notification hs-dropdown ti-dropdown hidden sm:block"
                                    data-hs-dropdown-placement="bottom-right">
                                    <button id="dropdown-notification" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                        <i class="ri-notification-2-line header-icon animate-bell"></i>
                                        <span
                                            class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-success/80 opacity-75"></span>
                                            <span
                                                class="relative inline-flex rounded-full h-5 w-5 bg-success text-white justify-center items-center"
                                                id="notify-data">4</span>
                                        </span>
                                    </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0"
                                        aria-labelledby="dropdown-notification">
                                        <div
                                            class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center">
                                            <p class="ti-dropdown-header-title !text-white font-semibold">Notifications
                                            </p>
                                            <a href="javascript:void(0)"
                                                class="badge bg-black/20 text-white rounded-sm">Mark
                                                All Read</a>
                                        </div>
                                        <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                            <div class="py-2 first:pt-0 last:pb-0" id="allNotifyContainer">
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/17.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Elon Isk</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">Hello there!
                                                                How are
                                                                you doing? Call me
                                                                when...</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">2 min
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/2.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Shakira Sen</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">I would like
                                                                to
                                                                discuss about that
                                                                assets...</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">09:43
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/21.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Sebastian</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">Shall we go
                                                                to the
                                                                cafe at downtown...</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">
                                                                yesterday</p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/11.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Charlie Davieson</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">Lorem ipsum
                                                                dolor
                                                                sit amet, consectetur</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">
                                                                yesterday</p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="py-2 first:pt-0 px-5">
                                                <a class="w-full ti-btn ti-btn-primary p-2" href="mail-inbox.html">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-apps hs-dropdown ti-dropdown hidden md:block"
                                    data-hs-dropdown-placement="bottom-right">
                                    <button aria-label="button" id="dropdown-apps" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                        <i class="ri-bookmark-line header-icon"></i>
                                    </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0"
                                        aria-labelledby="dropdown-apps">
                                        <div
                                            class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center text-center">
                                            <p class="ti-dropdown-header-title font-semibold !text-white">Related Apps
                                            </p>
                                        </div>
                                        <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                            <div class="grid grid-cols-3 gap-0 p-4 pt-2">
                                                <a href="mail-inbox.html"
                                                    class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                    <i
                                                        class="ri ri-mail-line leading-none text-2xl avatar ring-0 bg-primary/20 text-primary rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">
                                                        Mail Inbox
                                                    </div>
                                                </a>
                                                <a href="chat.html"
                                                    class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                    <i
                                                        class="ri ri-chat-2-line leading-none text-2xl avatar ring-0 bg-secondary/20 text-secondary rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">
                                                        Chat</div>
                                                </a>
                                                <a href="tasks.html"
                                                    class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                    <i
                                                        class="ri ri-task-line leading-none text-2xl avatar ring-0 bg-warning/20 text-warning rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">
                                                        Task</div>
                                                </a>
                                                <a href="calendar.html"
                                                    class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                    <i
                                                        class="ri ri-calendar-event-line leading-none text-2xl avatar ring-0 bg-danger/20 text-danger rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">
                                                        Calendar
                                                    </div>
                                                </a>
                                                <a href="filemanager.html"
                                                    class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                    <i
                                                        class="ri ri-file-copy-2-line leading-none text-2xl avatar ring-0 bg-info/20 text-info rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">
                                                        FileManager</div>
                                                </a>
                                                <a href="contacts.html"
                                                    class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                    <i
                                                        class="ri ri-group-line leading-none text-2xl avatar ring-0 bg-success/20 text-success rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">
                                                        Contacts
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="py-2 first:pt-0 px-5">
                                                <a class="w-full ti-btn ti-btn-primary p-2"
                                                    href="javascript:void(0);">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-profile hs-dropdown ti-dropdown"
                                    data-hs-dropdown-placement="bottom-right">
                                    <button id="dropdown-profile" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle gap-2 p-0 flex-shrink-0 h-8 w-8 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                        <img class="inline-block rounded-full ring-2 ring-white dark:ring-white/10"
                                            src="../assets/img/users/1.jpg" alt="Image Description">
                                    </button>

                                    <div class="hs-dropdown-menu ti-dropdown-menu border-0 w-[20rem]"
                                        aria-labelledby="dropdown-profile">
                                        <div class="ti-dropdown-header !bg-primary flex">
                                            <div class="ltr:mr-3 rtl:ml-3">
                                                <img class="avatar shadow-none rounded-full !ring-transparent"
                                                    src="../assets/img/users/1.jpg" alt="profile-img">
                                            </div>
                                            <div>
                                                <p class="ti-dropdown-header-title !text-white">Json Taylor</p>
                                                <p class="ti-dropdown-header-content !text-white/50">Web Designer</p>
                                            </div>
                                        </div>
                                        <div class="mt-2 ti-dropdown-divider">
                                            <a href="profile.html" class="ti-dropdown-item">
                                                <i class="ti ti-user-circle text-lg"></i>
                                                Profile
                                            </a>
                                            <a href="mail-inbox.html" class="ti-dropdown-item">
                                                <i class="ti ti-inbox text-lg"></i>
                                                Inbox
                                            </a>
                                            <a href="tasks.html" class="ti-dropdown-item">
                                                <i class="ti ti-clipboard-check text-lg"></i>
                                                Task Manager
                                            </a>
                                            <a href="profile-settings.html" class="ti-dropdown-item">
                                                <i class="ti ti-adjustments-horizontal text-lg"></i>
                                                Settings
                                            </a>
                                            <a href="index3.html" class="ti-dropdown-item">
                                                <i class="ti ti-wallet text-lg"></i>
                                                Bal: $7,12,950
                                            </a>
                                            <a href="signin.html" class="ti-dropdown-item">
                                                <i class="ti ti-logout  text-lg"></i>
                                                Log Out
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-icon">
                                    <button aria-label="button" type="button"
                                        class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus-visible:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                        data-hs-overlay="#hs-overlay-switcher">
                                        <i class="ri-settings-5-line header-icon animate-spin"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- End::Header -->

        <div class="content">
            <!-- Start::main-content -->
            @yield('dashborad_header')
            <!-- Start::main-content -->
        </div>
        <!-- ========== Search Modal ========== -->
        <!-- <div id="search-modal" class="hs-overlay ti-modal hidden">
      <div class="ti-modal-box">
        <div class="ti-modal-content">
          <div class="ti-modal-body">
            <div class="header-search">
              <label for="icon" class="sr-only">Search</label>
              <div class="relative">
                <div class="search-btn">
                  <i class="ri ri-search-2-line search-btn-icon"></i>
                </div>
                <input type="text" id="icon" name="icon" class="py-2 ltr:pl-11 rtl:pr-11 ti-form-input focus:z-10"
                  placeholder="Search">
                <div class="voice-search">
                  <i class="ri ri-mic-2-line voice-btn-icon"></i>
                </div>
                <div class="search-dropdown">
                  <i class="ri ri-more-2-line search-dropdown-btn-icon"></i>
                </div>
              </div>
            </div>
            <div class="mt-5">
              <p class="font-semibold text-[13px] text-gray-400 dark:text-gray-200 mb-2">Are You Looking For...</p>
              <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                <a href="team.html" class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                  <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                      class="ri ri-user-line text-sm"></i></span>
                  Team
                </a>
                <a href="javascript:void(0);"
                  class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                  <span class="sr-only">Remove badge</span>
                  <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                <a href="form-elements.html" class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                  <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                      class="ri ri-file-text-line text-sm"></i></span>
                  Forms
                </a>
                <a href="javascript:void(0);"
                  class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                  <span class="sr-only">Remove badge</span>
                  <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                <a href="vector-maps.html" class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                  <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                      class="ri ri-map-pin-line text-sm"></i></span>
                  Maps
                </a>
                <a href="javascript:void(0);"
                  class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                  <span class="sr-only">Remove badge</span>
                  <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                    </path>
                  </svg>
                </a>
              </div>
              <div class="badge rounded-sm bg-secondary/20 text-secondary relative header-box">
                <a href="widgets.html" class="w-full my-auto items-center flex space-x-2 rtl:space-x-reverse">
                  <span class="inline-block text-secondary ltr:mr-1 rtl:ml-1"><i
                      class="ri ri-server-line text-sm"></i></span>
                  Widgets
                </a>
                <a href="javascript:void(0);"
                  class="header-remove-btn flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-secondary hover:bg-secondary hover:text-secondary focus:outline-none focus:bg-secondary focus:text-white">
                  <span class="sr-only">Remove badge</span>
                  <svg class="h-4 w-4 hover:fill-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="mt-5">
              <p class="font-semibold text-sm text-gray-500 mb-2">Recent Search :</p>
              <div
                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 mb-1 relative header-box">
                <a href="notifications.html" class="w-full my-auto items-center flex">
                  <span class="text-sm">Notifications</span>
                </a>
                <a aria-label="anchor" href="javascript:void(0);"
                  class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                  <i class="ri-close-line"></i>
                </a>
              </div>
              <div
                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 mb-1 relative header-box">
                <a href="alerts.html" class="w-full my-auto items-center flex">
                  <span class="text-sm">Alerts</span>
                </a>
                <a aria-label="anchor" href="javascript:void(0);"
                  class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                  <i class="ri-close-line"></i>
                </a>
              </div>
              <div
                class="p-2 border dark:border-white/10 rounded-sm flex items-center text-gray-500 relative header-box">
                <a href="tables.html" class="w-full my-auto items-center flex">
                  <span class="text-sm">Tables</span>
                </a>
                <a aria-label="anchor" href="javascript:void(0);"
                  class="ltr:ml-auto rtl:mr-auto flex-shrink-0 h-4 w-4 inline-flex items-center justify-center rounded-full text-gray-500 focus:outline-none header-remove-btn">
                  <i class="ri-close-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ti-modal-footer">
            <div class="inline-flex rounded-md shadow-sm">
              <button type="button" class="ti-btn-group py-1 ti-btn-soft-primary dark:border-white/10">
                Search
              </button>
              <button type="button" class="ti-btn-group py-1 ti-btn-primary dark:border-white/10">
                Clear Recents
              </button>
            </div>
          </div>
        </div>
      </div>
            </div> -->
        <!-- ========== END Search Modal ========== -->
        <footer class="mt-auto py-3 border-t dark:border-white/10 bg-white dark:bg-bgdark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-center">Copyright © <span id="year"></span> <a href="javascript:void(0)"
                        class="text-primary">Synto</a>. Designed with <span
                        class="ri ri-heart-fill text-red-500"></span> by <a class="text-primary"
                        href="javascript:void(0)"> Spruko </a> All rights reserved zubair</p>
            </div>
        </footer>

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

    <script src="{{ asset('backend/assets/libs/dropzone/dropzone-min.js') }}"></script>

    <!-- Filepond File Upload JS -->
    <script src="{{ asset('backend/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}">
    </script>
    <script
        src="{{ asset('backend/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}">
    </script>
    <script
        src="{{ asset('backend/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
    <script
        src="{{ asset('backend/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}">
    </script>
    <script
        src="{{ asset('backend/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/libs/filepond/filepond.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/fileupload.js') }}"></script>

    <!-- Flatpickr JS -->
    <script src="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/flatpickr.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('backend/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/colorpicker.js') }}"></script>

    <!-- Quill Editor JS -->
    <script src="{{ asset('backend/assets/libs/quill/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/quill.js') }}"></script>

    @yield('script')




</body>

</html>
