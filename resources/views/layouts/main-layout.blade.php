@props(['productCategories'=>[]])

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.3.0/simplebar.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">



    <title>Kentech Electronic Shop</title>


</head>

<body>

    <header class="fixed top-0 z-40 w-full bg-white">
        <!-- navbar -->
        <div class="border-b">
            <div class="py-1 bg-gray-100">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full text-center md:w-1/2 md:text-left"><span>Super Value Deals - Save more with
                                coupons</span>
                        </div>
                        <div class="hidden w-1/2 text-right lg:block">
                            <div class="flex justify-end dropdown">
                                <a class="flex items-center dropdown-toggle text-inherit" href="#!"
                                    data-bs-toggle="dropdown" id="dropdownMenuLink">
                                    <span class="mr-2">
                                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" id="languageIcon">
                                            <!-- Default SVG content for English -->
                                            <g clip-path="">
                                                <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                                                <path
                                                    d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                    fill="#C8102E" />
                                                <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                    fill="white" />
                                                <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                    fill="#C8102E" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span id="selectedLanguage">English</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#!" onclick="changeLanguage('English')">
                                            <span>
                                                <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="">
                                                        <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                                                        <path
                                                            d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                            fill="white" />
                                                        <path
                                                            d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                            fill="#C8102E" />
                                                        <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                            fill="white" />
                                                        <path
                                                            d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                            fill="#C8102E" />
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <rect width="16" height="12" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!" onclick="changeLanguage('Deutsch')">
                                            <span>
                                                <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_5543_19751)">
                                                        <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00" />
                                                        <path d="M0 0.5H16V4.5H0V0.5Z" fill="black" />
                                                        <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_5543_19751">
                                                            <rect width="16" height="12" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Deutsch
                                        </a>
                                    </li>
                                    <!-- Add more languages as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <div class="container">
                    <div class="flex flex-wrap items-center justify-between w-full">
                        <div class="w-2/5 lg:w-1/6 md:w-1/2">
                            <a class="flex items-center space-x-2 navbar-brand" href="./index.html">
                                <img src="./assets/images/logo/kentech-logo.svg"
                                class="h-8"
                                    alt="TailwindCSS eCommerce HTML Template" />
                                <span class="text-[1.75rem] font-semibold text-black">kenTech</span>
                            </a>
                        </div>
                        <div class="hidden lg:w-2/5 lg:block">
                            <form action="#">
                                <div class="relative">
                                    <label for="searchProducts" class="invisible hidden">Search</label>
                                    <input
                                        class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                        type="search" placeholder="Search for products" id="searchProducts" />
                                    <button class="absolute top-0 right-0 p-3" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-search" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="hidden lg:w-1/5 lg:block">
                            <!-- Button trigger modal -->
                            <button type="button"
                                class="inline-flex items-center text-gray-600 bg-transparent border-gray-300 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                data-bs-toggle="modal" data-bs-target="#locationModal">
                                <span class="flex items-center gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-map-pin" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path
                                                d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                        </svg>
                                    </span>
                                    <span>Location</span>
                                </span>
                            </button>
                        </div>
                        <div class="w-3/5 lg:w-1/5 text-end md:w-1/2">
                            <div class="flex items-center justify-end gap-7">
                                <div>
                                    <a href="./shop-wishlist.html" class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-heart" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        <span
                                            class="absolute top-0 w-5 h-5 -mt-1 -ml-2 text-sm font-semibold text-center text-white bg-green-600 rounded-full left-full">
                                            5
                                            <span class="invisible">unread messages</span>
                                        </span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#!" class="text-gray-600" data-bs-toggle="modal"
                                        data-bs-target="#userModal">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user" width="22" height="22"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <button type="button" class="relative text-gray-600" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                            <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                        </svg>
                                        <span id="cartCount"
                                            class="absolute top-0 w-5 h-5 -mt-1 -ml-3 text-sm font-semibold text-center text-white bg-green-600 rounded-full left-full">
                                            0
                                            <span class="invisible">unread messages</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="leading-none lg:hidden">
                                    <!-- Button -->
                                    <button class="collapsed" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#navbar-default" aria-controls="navbar-default"
                                        aria-label="Toggle navigation">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="text-gray-800 icon icon-tabler icon-tabler-menu-2" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 6l16 0" />
                                            <path d="M4 12l16 0" />
                                            <path d="M4 18l16 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="relative items-center content-between text-black navbar navbar-expand-lg lg:flex lg:flex-wrap navbar-default"
                aria-label="offcanvas navbar large">
                <div class="container w-full mx-auto max-w-7xl xl:px-4 lg:px-0">
                    <div class="offcanvas offcanvas-left lg:visible" style="background-color: white !important;" tabindex="-1" id="navbar-default">
                        <div class="pb-1 offcanvas-header" >
                            <a href="./index.html" class="flex items-center space-x-2">
                                <img src="./assets/images/logo/kentech-logo.svg"
                                class="h-8"
                                    alt="TailwindCSS eCommerce HTML Template" />
                                <span class="text-[1.75rem] font-semibold text-black">kenTech</span>
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="text-gray-700 icon icon-tabler icon-tabler-x" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="offcanvas-body lg:flex lg:items-center">
                            <div class="block mb-4 lg:hidden">
                                <form action="#">
                                    <div class="relative">
                                        <label for="searhNavbar" class="invisible hidden">Search</label>
                                        <input
                                            class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                            type="search" placeholder="Search for products" id="searhNavbar" />
                                        <button class="absolute top-0 right-0 p-3" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-search" width="16" height="16"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                                <path d="M21 21l-6 -6" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="block mb-4 lg:hidden">
                                <a class="inline-flex items-center justify-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                            <path
                                                d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                            <path
                                                d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                            <path
                                                d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        </svg>
                                    </span>
                                    All Categories
                                </a>
                                <div class="mt-2 collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <ul class="list-unstyled">

                                            @foreach ($productCategories as $category)
                                            <li>
                                                <a class="dropdown-item" href="./shop-grid.html">{{ $category->name }}</a>
                                            </li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden dropdown lg:block">
                                <button
                                    class="inline-flex items-center mr-4 text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                            <path
                                                d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                            <path
                                                d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                            <path
                                                d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        </svg>
                                    </span>
                                    All Categories
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach ($productCategories as $category)
                                    <li>
                                        <a class="dropdown-item" href="./shop-grid.html">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <ul class="gap-3 navbar-nav lg:flex lg:items-center">
                                    <li class="w-full nav-item dropdown lg:w-auto">
                                        <a class="nav-link" href="#" role="button" aria-expanded="false">Home</a>
                                    </li>

                                    <li class="w-full nav-item dropdown lg:w-auto dropdown-fullwidth">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Explore Electronics</a>
                                        <div class="pb-0 dropdown-menu">
                                            <div class="flex flex-wrap p-2 lg:flex-nowrap lg:p-6 gap-x-6">
                                                <div class="w-full mb-4 lg:w-1/4">
                                                    <h6 class="pl-3 mb-2 text-blue-600">Smartphones & Accessories</h6>
                                                    <a class="dropdown-item" href="./shop-grid.html">Smartphones</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Chargers & Cables</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Screen Protectors</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Phone Cases</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Power Banks</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Headphones & Earbuds</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Smartwatches</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Mobile Accessories</a>
                                                </div>
                                                <div class="w-full mb-4 lg:w-1/4">
                                                    <h6 class="pl-3 mb-2 text-blue-600">Laptops & Computers</h6>
                                                    <a class="dropdown-item" href="./shop-grid.html">Laptops</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Monitors</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Keyboards & Mice</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">External Storage</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Printers & Scanners</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Laptop Bags</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Docking Stations</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Computer Accessories</a>
                                                </div>
                                                <div class="w-full mb-4 lg:w-1/4">
                                                    <h6 class="pl-3 mb-2 text-blue-600">Home Appliances</h6>
                                                    <a class="dropdown-item" href="./shop-grid.html">Refrigerators</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Washing Machines</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Microwaves & Ovens</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Air Conditioners</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Vacuum Cleaners</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Dishwashers</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Water Heaters</a>
                                                    <a class="dropdown-item" href="./shop-grid.html">Kitchen Appliances</a>
                                                </div>
                                                <div class="w-full mb-4 lg:w-1/4">
                                                    <div class="border-0 card">
                                                        <img src="./assets/images/banner/menu-banner.jpg" alt="KenTech Electronics Offer" />
                                                        <div class="absolute pl-6 mt-8">
                                                            <h5>Exclusive Deals<br> on Electronics</h5>
                                                            <a href="#"
                                                                class="inline-flex items-center mt-3 text-white bg-blue-600 border-blue-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 btn-sm">
                                                                Shop Now
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="w-full nav-item dropdown lg:w-auto">
                                        <a class="nav-link" href="#" role="button" aria-expanded="false">Blog</a>
                                    </li>
                                    <li class="w-full nav-item dropdown lg:w-auto">
                                        <a class="nav-link" href="#" role="button" aria-expanded="false">About us</a>
                                    </li>
                                    <li class="w-full nav-item dropdown lg:w-auto">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                                        <ul class="dropdown-menu lg:right-0 xl:right-auto">
                                            <li><a class="dropdown-item" href="{{ route('login') }}">Sign in</a></li>
                                            <li><a class="dropdown-item" href="{{ route('register') }}">Signup</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./dashboard/index.html">Dashboard</a>
                                    </li>

                                    <li class="w-full nav-item dropdown lg:w-auto">
                                        <a class="nav-link" href="#" role="button" aria-expanded="false">Contact Us</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Modal -->


    {{ $slot  }}




    <!-- footer -->
    <footer class="py-8 bg-gray-200">
        <div class="container">
            <div class="flex flex-wrap py-4 mb-6 md:gap-4 lg:gap-0">
                <div class="flex flex-col w-full gap-4 mb-6 md:w-full lg:w-1/3">
                    <h6>Categories</h6>
                    <div class="flex flex-wrap">
                        <div class="w-1/2">
                            <!-- list -->
                            <ul class="flex flex-col gap-2">
                                @foreach ($productCategories as $category)
                                <li><a href="#!" class="inline-block hover:text-green-600">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="w-1/2">
                            <!-- list -->
                            <ul class="flex flex-col gap-2">
                                @foreach ($productCategories as $category)
                                <li><a href="#!" class="inline-block hover:text-green-600">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-full lg:w-2/3">
                    <div class="flex flex-wrap">
                        <div class="flex flex-col w-1/2 gap-4 mb-6 sm:w-1/2 md:w-1/4">
                            <h6>Get to know us</h6>
                            <!-- list -->
                            <ul class="flex flex-col gap-2">
                                <li><a href="#!" class="inline-block hover:text-green-600">Company</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">About</a></li>
                                <li><a href="#!" class="inline-block">Blog</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Help Center</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Our Value</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-1/2 gap-4 mb-6 sm:w-1/2 md:w-1/4">
                            <h6>For Consumers</h6>
                            <ul class="flex flex-col gap-2">
                                <!-- list -->
                                <li><a href="#!" class="inline-block hover:text-green-600">Payments</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Shipping</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Product Returns</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">FAQ</a></li>
                                <li><a href="./shop-checkout.html" class="inline-block">Shop Checkout</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-1/2 gap-4 sm:w-1/2 md:w-1/4">
                            <h6>Become a Shopper</h6>
                            <ul class="flex flex-col gap-2">
                                <!-- list -->
                                <li><a href="#!" class="inline-block hover:text-green-600">Shopper Opportunities</a>
                                </li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Become a Shopper</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Earnings</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Ideas & Guides</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">New Retailers</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-1/2 gap-4 sm:w-1/2 md:w-1/4">
                            <h6>KenTech programs</h6>
                            <ul class="flex flex-col gap-2">
                                <!-- list -->
                                <li><a href="#!" class="inline-block hover:text-green-600">KenTech programs</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Gift Cards</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Promos & Coupons</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">KenTech Ads</a></li>
                                <li><a href="#!" class="inline-block hover:text-green-600">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 border-t border-gray-300">
                <div class="flex flex-wrap items-center justify-center gap-y-4 lg:justify-start">
                    <div class="text-center lg:w-2/5 lg:text-left">
                        <div class="flex flex-col items-center gap-3 md:flex-row md:gap-6">
                            <div class="text-gray-900">Payment Partners</div>
                            <ul class="flex flex-row items-center gap-4">
                                <li>
                                    <a href="#!"><img src="./assets/images/payment/amazonpay.svg"
                                            alt="amazon pay" /></a>
                                </li>
                                <li>
                                    <a href="#!"><img src="./assets/images/payment/american-express.svg"
                                            alt="american express" /></a>
                                </li>
                                <li>
                                    <a href="#!"><img src="./assets/images/payment//mastercard.svg"
                                            alt="mastercard" /></a>
                                </li>
                                <li>
                                    <a href="#!"><img src="./assets/images/payment/paypal.svg" alt="paypal" /></a>
                                </li>
                                <li>
                                    <a href="#!"><img src="./assets/images/payment/visa.svg" alt="visa" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-end lg:w-3/5">
                        <div class="flex flex-col items-center gap-3 md:flex-row md:gap-6">
                            <div class="text-gray-900">Get deliveries with KenTech</div>
                            <ul class="flex flex-row gap-2">
                                <li>
                                    <a href="#!"><img src="./assets/images/appbutton/appstore-btn.svg" alt=""
                                            style="width: 140px" /></a>
                                </li>
                                <li>
                                    <a href="#!"><img src="./assets/images/appbutton/googleplay-btn.svg" alt=""
                                            style="width: 140px" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 border-t border-gray-300">
                <div class="flex flex-col items-center gap-3 md:flex-row">
                    <div class="md:w-1/2">
                        <span class="text-sm text-gray-500">
                            ©
                            <span id="copyright">
                                <script>
                                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()));
                                </script>
                            </span>
                            KenTech Solutions Ltd. Powered by
                            <a href="https://webesi.co.ke/" target="_blank" class="text-green-600">Webesi</a>
                            .
                        </span>
                    </div>
                    <div class="flex items-center md:w-1/2 md:justify-end">
                        <div class="flex flex-row items-center gap-5">
                            <div class="text-gray-500">Follow us on</div>
                            <ul class="flex items-center justify-end gap-1 text-sm">
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center w-8 h-8 font-normal leading-normal text-center no-underline whitespace-no-wrap align-middle transition ease-in-out border border-gray-300 rounded select-none hover:border-green-600 hover:text-green-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-facebook" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center w-8 h-8 font-normal leading-normal text-center no-underline whitespace-no-wrap align-middle transition ease-in-out border border-gray-300 rounded select-none hover:border-green-600 hover:text-green-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-x" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center w-8 h-8 font-normal leading-normal text-center no-underline whitespace-no-wrap align-middle transition ease-in-out border border-gray-300 rounded select-none hover:border-green-600 hover:text-green-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-instagram" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M16.5 7.5l0 .01" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- buy now template button
Remove if you do not want.
-->

    <!-- Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered lg:min-w-[1140px]">
            <div class="modal-content">
                <div class="p-8 modal-body">
                    <div class="absolute top-0 right-0 p-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 icon icon-tabler icon-tabler-x"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="md:w-1/2">
                            <!-- img slide -->
                            <div class="product productModal" id="productModal">
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(./assets/images/products/product-single-img-1.jpg)">
                                    <!-- img -->
                                    <!-- img -->
                                    <img src="./assets/images/products/product-single-img-1.jpg" alt="" />
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url(./assets/images/products/product-single-img-2.jpg)">
                                        <!-- img -->
                                        <img src="./assets/images/products/product-single-img-2.jpg" alt="" />
                                    </div>
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url(./assets/images/products/product-single-img-3.jpg)">
                                        <!-- img -->
                                        <img src="./assets/images/products/product-single-img-3.jpg" alt="" />
                                    </div>
                                </div>
                                <div>
                                    <div class="zoom" onmousemove="zoom(event)"
                                        style="background-image: url(./assets/images/products/product-single-img-4.jpg)">
                                        <!-- img -->
                                        <img src="./assets/images/products/product-single-img-4.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- product tools -->
                            <div class="product-tools">
                                <div class="flex gap-3 thumbnails" id="productModalThumbnails">
                                    <div class="w-1/4">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="./assets/images/products/product-single-img-1.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="w-1/4">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="./assets/images/products/product-single-img-2.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="w-1/4">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="./assets/images/products/product-single-img-3.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="w-1/4">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="./assets/images/products/product-single-img-4.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pr-4 md:w-1/2">
                            <div class="mt-6 lg:pl-10 md:mt-0">
                                <div class="flex flex-col gap-4">
                                    <!-- content -->
                                    <a href="#!" class="block text-green-600">Bakery Biscuits</a>
                                    <!-- heading -->
                                    <h1>Napolitanke Ljesnjak</h1>
                                    <div class="flex flex-col gap-2">
                                        <div class="flex items-center">
                                            <!-- rating -->
                                            <!-- rating -->
                                            <small class="inline-flex items-center text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor"></path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor"></path>
                                                </svg>
                                            </small>
                                            <a href="#" class="text-green-600">(30 reviews)</a>
                                        </div>
                                        <div class="text-md">
                                            <span class="font-semibold text-gray-900">$18</span>
                                            <span class="text-gray-500 line-through">$24</span>

                                            <span><small class="text-red-600">26% Off</small></span>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <div class="flex flex-col gap-6">
                                        <hr />
                                        <div>
                                            <button type="button"
                                                class="inline-flex items-center text-gray-800 bg-white border border-gray-300 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                                250g
                                            </button>
                                            <!-- btn -->
                                            <button type="button"
                                                class="inline-flex items-center text-gray-800 bg-white border border-gray-300 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                                500g
                                            </button>
                                            <!-- btn -->
                                            <button type="button"
                                                class="inline-flex items-center text-gray-800 bg-white border border-gray-300 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                                1kg
                                            </button>
                                        </div>
                                        <div>
                                            <!-- input -->
                                            <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                                <!-- input -->
                                                <div
                                                    class="flex items-center justify-between rounded-lg input-group input-spinner">
                                                    <input type="button" value="-"
                                                        class="w-8 py-1 border-r border-gray-300 cursor-pointer button-minus"
                                                        data-field="quantity" />
                                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                                        class="px-2 text-center bg-transparent border-0 quantity-field w-9 h-7" />
                                                    <input type="button" value="+"
                                                        class="w-8 py-1 border-l border-gray-300 cursor-pointer button-plus"
                                                        data-field="quantity" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center justify-start gap-2">
                                            <div class="grid w-full lg:w-1/3 md:w-2/5">
                                                <!-- button -->
                                                <!-- btn -->
                                                <button type="button"
                                                    class="justify-center text-white bg-green-600 border-green-600 btn disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="mr-2 icon icon-tabler icon-tabler-plus" width="12"
                                                        height="12" viewBox="0 0 24 24" stroke-width="3"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 5l0 14"></path>
                                                        <path d="M5 12l14 0"></path>
                                                    </svg>
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div class="w-full md:w-1/3">
                                                <!-- btn -->
                                                <a href="#"
                                                    class="inline-flex items-center justify-center w-10 h-10 px-0 mr-1 text-gray-800 bg-white border border-gray-300 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-arrows-exchange" width="20"
                                                        height="20" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M7 10h14l-4 -4"></path>
                                                        <path d="M17 14h-14l4 4"></path>
                                                    </svg>
                                                </a>
                                                <a href="#"
                                                    class="inline-flex items-center justify-center w-10 h-10 px-0 text-gray-800 bg-white border border-gray-300 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-heart" width="20"
                                                        height="20" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- hr -->
                                        <hr />
                                    </div>
                                    <div>
                                        <!-- table -->
                                        <table class="w-full text-left">
                                            <tbody>
                                                <tr>
                                                    <td class="px-6 py-3">Product Code:</td>
                                                    <td class="px-6 py-3">FBB00255</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-3">Availability:</td>
                                                    <td class="px-6 py-3">In Stock</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-3">Type:</td>
                                                    <td class="px-6 py-3">Fruits</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-3">Shipping:</td>
                                                    <td class="px-6 py-3">
                                                        <small>
                                                            01 day shipping.
                                                            <span class="text-gray-700">( Free pickup today)</span>
                                                        </small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <!-- dropdown -->
                                        <div class="relative">
                                            <a class="inline-flex items-center text-gray-800 bg-white border border-gray-300 dropdown-toggle btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Share
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="inline-block icon icon-tabler icon-tabler-brand-facebook"
                                                            width="18" height="18" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                                        </svg>
                                                        Facebook
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-brand-x" width="18"
                                                            height="18" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                                                        </svg>
                                                        Twitter
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-brand-instagram"
                                                            width="18" height="18" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                                            <path d="M16.5 7.5l0 .01" />
                                                        </svg>
                                                        Instagram
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Chat with customer button -->
    <div class="fixed bottom-0 right-0 m-4">
        <a href="#" target="_blank"
            rel="noopener noreferrer"
            class="text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">

            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-brand-whatsapp">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M18.497 4.409a10 10 0 0 1 -10.36 16.828l-.223 -.098l-4.759 .849l-.11 .011a1 1 0 0 1 -.11 0l-.102 -.013l-.108 -.024l-.105 -.037l-.099 -.047l-.093 -.058l-.014 -.011l-.012 -.007l-.086 -.073l-.077 -.08l-.067 -.088l-.056 -.094l-.034 -.07l-.04 -.108l-.028 -.128l-.012 -.102a1 1 0 0 1 0 -.125l.012 -.1l.024 -.11l.045 -.122l1.433 -3.304l-.009 -.014a10 10 0 0 1 1.549 -12.454l.215 -.203a10 10 0 0 1 13.226 -.217m-8.997 3.09a1.5 1.5 0 0 0 -1.5 1.5v1a6 6 0 0 0 6 6h1a1.5 1.5 0 0 0 0 -3h-1l-.144 .007a1.5 1.5 0 0 0 -1.128 .697l-.042 .074l-.022 -.007a4.01 4.01 0 0 1 -2.435 -2.435l-.008 -.023l.075 -.041a1.5 1.5 0 0 0 .704 -1.272v-1a1.5 1.5 0 0 0 -1.5 -1.5" />
            </svg>

            <span>Chat</span>

        </a>
    </div>

    <!-- Libs JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.3.0/simplebar.min.js"></script>

    <!-- Theme JS -->

    <script src="./assets/js/theme.min.js"></script>


    <script src="./assets/js/vendors/countdown.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <script src="./assets/js/vendors/tns-slider.js"></script>
    <script src="./assets/js/vendors/zoom.js"></script>
    <script src="./assets/js/vendors/language.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="./assets/js/vendors/swiper.js"></script>
    <script src="./assets/js/vendors/validation.js"></script>
</body>

</html>

