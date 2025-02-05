@props(['productCategories'=>[]])

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.3.0/simplebar.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">



    <title>Kentech Electronic Shop</title>


</head>

<body>

    <div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-glass">
            <div class="container-fluid">
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-center">
                        <a class="block mr-3 text-inherit xl:hidden" data-bs-toggle="offcanvas" href="#offcanvasExample"
                            role="button" aria-controls="offcanvasExample">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-text-indent-right" viewBox="0 0 16 16">
                                <path
                                    d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm10.646 2.146a.5.5 0 0 1 .708.708L11.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zM2 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z">
                                </path>
                            </svg>
                        </a>

                        <form role="search">
                            <label for="search" class="invisible hidden mb-2 font-medium text-gray-800">Search</label>
                            <input
                                class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                type="search" placeholder="Search" aria-label="Search" id="search">
                        </form>
                    </div>
                    <div>
                        <ul class="flex items-center gap-2 list-unstyled">
                            <li class="dropdown-center">
                                <a class="relative w-12 h-12 p-0 text-gray-600 rounded-full btn hover:bg-gray-100 hover:text-green-600"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                        </path>
                                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                    </svg>
                                    <span
                                        class="absolute right-0 inline-block w-5 h-5 text-sm font-semibold text-center text-white align-baseline bg-red-600 rounded-full -top-2 translate-middle">2</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg !p-0 border-0">
                                    <div class="flex items-center justify-between p-5 border-b">
                                        <div>
                                            <h5 class="mb-1">Notifications</h5>
                                            <p class="mb-0 small">You have 2 unread messages</p>
                                        </div>
                                        <a href="#!" class="text-gray-500">
                                        </a><a href="#"
                                            class="w-10 h-10 p-0 text-gray-600 rounded-full btn hover:bg-gray-100 hover:text-green-600"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Mark all as read">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-checks">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 12l5 5l10 -10"></path>
                                                <path d="M2 12l5 5m5 -5l5 -5"></path>
                                            </svg>
                                        </a>

                                    </div>
                                    <div data-simplebar="init" style="height: 250px">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                        aria-label="scrollable content"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <!-- List group -->
                                                            <ul class="notification-list-scroll fs-6">
                                                                <!-- List group item -->
                                                                <li
                                                                    class="px-5 py-4 bg-gray-100 border-b border-gray-300 hover:bg-gray-100 active">
                                                                    <a href="#!" class="text-gray-500">
                                                                        <div class="flex">
                                                                            <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                                                                alt="" class="w-10 h-10 rounded-full">
                                                                            <div class="ms-4">
                                                                                <p class="mb-1">
                                                                                    <span class="text-gray-900">Your
                                                                                        order is placed</span>
                                                                                    waiting for shipping
                                                                                </p>
                                                                                <span class="flex items-center">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="12" height="12"
                                                                                        fill="currentColor"
                                                                                        class="text-gray-500 bi bi-clock"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <small class="ms-2">1 minute
                                                                                        ago</small>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="px-5 py-4 border-b border-gray-300 hover:bg-gray-100">
                                                                    <a href="#!" class="text-gray-500">
                                                                        <div class="flex">
                                                                            <img src="{{ asset('assets/images/avatar/avatar-5.jpg') }} "
                                                                                alt="" class="w-10 h-10 rounded-full">
                                                                            <div class="ms-4">
                                                                                <p class="mb-1">
                                                                                    <span class="text-gray-900">Jitu
                                                                                        Chauhan</span>
                                                                                    answered to your pending order list
                                                                                    with notes
                                                                                </p>
                                                                                <span class="flex items-center">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="12" height="12"
                                                                                        fill="currentColor"
                                                                                        class="text-gray-500 bi bi-clock"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <small class="ms-2">2 days
                                                                                        ago</small>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="px-5 py-4 border-b border-gray-300 hover:bg-gray-100">
                                                                    <a href="#!" class="text-gray-500">
                                                                        <div class="flex">
                                                                            <img src="{{ asset('assets/images/avatar/avatar-2.jpg') }}"
                                                                                alt="" class="w-10 h-10 rounded-full">
                                                                            <div class="ms-4">
                                                                                <p class="mb-1">
                                                                                    <span class="text-gray-900">You have
                                                                                        new messages</span>
                                                                                    2 unread messages
                                                                                </p>
                                                                                <span class="flex items-center">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="12" height="12"
                                                                                        fill="currentColor"
                                                                                        class="text-gray-500 bi bi-clock"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <small class="ms-2">3 days
                                                                                        ago</small>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="px-5 py-4 text-center">
                                        <a href="#!">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://s3.eu-central-1.amazonaws.com/plugnpaid-production/5528-087f1aad-2169-41ef-b7fd-f5a465012be9.png"
                                        alt="" class="w-12 h-12 rounded-full">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end !p-0">
                                    <div class="px-5 py-4 leading-snug border-b border-gray-300">
                                        <h5 class="mb-1 text-base">{{ Auth::user()->name }}</h5>
                                        <small>{{ Auth::user()->email }}</small>
                                    </div>

                                    <ul class="px-2 py-3 list-unstyled">
                                        <li>
                                            <a class="dropdown-item" href="#!">Home</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#!">Profile</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#!">Settings</a>
                                        </li>
                                    </ul>
                                    <div class="px-5 py-3 border-t">
                                        <a href="#">Log Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            <nav class="hidden navbar-vertical-nav xl:block">
                <div class="navbar-vertical">
                    <div class="px-4 py-5">
                        <a class="flex items-center space-x-2 navbar-brand" href="./index.html">
                            <img src="{{ asset('assets/images/logo/kentech-logo.svg') }}" class="h-8"
                                alt="TailwindCSS eCommerce HTML Template" />
                            <span class="text-[1.75rem] font-semibold text-black">KenTech</span>
                        </a>
                    </div>
                    <div class="navbar-vertical-content flex-grow-1 simplebar-scrollable-y" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <ul class="flex-col navbar-nav" id="sideNavbar">
                                                <li class="nav-item">
                                                    <a class="nav-link active " href="../dashboard/index.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                                                    <path
                                                                        d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7">
                                                                    </path>
                                                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Dashboard</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mt-6 mb-3 nav-item">
                                                    <span class="nav-label">Store Managements</span>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/products.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0">
                                                                    </path>
                                                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0">
                                                                    </path>
                                                                    <path d="M17 17h-11v-14h-2"></path>
                                                                    <path d="M6 5l14 1l-1 7h-13"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Products</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/categories.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-list">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M9 6l11 0"></path>
                                                                    <path d="M9 12l11 0"></path>
                                                                    <path d="M9 18l11 0"></path>
                                                                    <path d="M5 6l0 .01"></path>
                                                                    <path d="M5 12l0 .01"></path>
                                                                    <path d="M5 18l0 .01"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Categories</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path
                                                                        d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                                                                    </path>
                                                                    <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Orders</span>
                                                        </div>
                                                    </a>

                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/vendor-grid.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-store">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M3 21l18 0"></path>
                                                                    <path
                                                                        d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4">
                                                                    </path>
                                                                    <path d="M5 21l0 -10.15"></path>
                                                                    <path d="M19 21l0 -10.15"></path>
                                                                    <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Sellers / Vendors</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed " href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#navCustomer" aria-expanded="false"
                                                        aria-controls="navCustomer">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0">
                                                                    </path>
                                                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                                                    </path>
                                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Customers</span>
                                                        </div>
                                                    </a>
                                                    <div id="navCustomer" class="collapse "
                                                        data-bs-parent="#sideNavbar">
                                                        <ul class="flex-col nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                    href="../dashboard/customers.html">Customers</a>
                                                            </li>
                                                            <!-- Nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                    href="../dashboard/create-customers.html">Create
                                                                    Customers</a>
                                                            </li>
                                                            <!-- Nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                    href="../dashboard/customers-edits.html">Edit
                                                                    Customers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/reviews.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path
                                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Reviews</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Nav item -->

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 279px; height: 1046px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 730px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="navbar-vertical-nav offcanvas offcanvas-left navbar-offcanvac" tabindex="-1"
                id="offcanvasExample">
                <div class="navbar-vertical">
                    <div class="flex items-center justify-between px-4 py-5">
                        <a class="flex items-center space-x-2 navbar-brand" href="./index.html">
                            <img src="{{ asset('assets/images/logo/kentech-logo.svg') }}" class="h-8"
                                alt="TailwindCSS eCommerce HTML Template" />
                            <span class="text-[1.75rem] font-semibold text-black">KenTech</span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="navbar-vertical-content flex-grow-1 simplebar-scrollable-y" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <ul class="flex-col navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active " href="../dashboard/index.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                                                    <path
                                                                        d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7">
                                                                    </path>
                                                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Dashboard</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mt-6 mb-3 nav-item">
                                                    <span class="nav-label">Store Managements</span>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/products.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0">
                                                                    </path>
                                                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0">
                                                                    </path>
                                                                    <path d="M17 17h-11v-14h-2"></path>
                                                                    <path d="M6 5l14 1l-1 7h-13"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Products</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/categories.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-list">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M9 6l11 0"></path>
                                                                    <path d="M9 12l11 0"></path>
                                                                    <path d="M9 18l11 0"></path>
                                                                    <path d="M5 6l0 .01"></path>
                                                                    <path d="M5 12l0 .01"></path>
                                                                    <path d="M5 18l0 .01"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Categories</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path
                                                                        d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                                                                    </path>
                                                                    <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Orders</span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/vendor-grid.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-store">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M3 21l18 0"></path>
                                                                    <path
                                                                        d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4">
                                                                    </path>
                                                                    <path d="M5 21l0 -10.15"></path>
                                                                    <path d="M19 21l0 -10.15"></path>
                                                                    <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Sellers / Vendors</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed " href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#navCustomer" aria-expanded="false"
                                                        aria-controls="navCustomer">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0">
                                                                    </path>
                                                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                                                    </path>
                                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Customers</span>
                                                        </div>
                                                    </a>
                                                    <div id="navCustomer" class="collapse "
                                                        data-bs-parent="#sideNavbar">
                                                        <ul class="flex-col nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                    href="../dashboard/customers.html">Customers</a>
                                                            </li>
                                                            <!-- Nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                    href="../dashboard/create-customers.html">Create
                                                                    Customers</a>
                                                            </li>
                                                            <!-- Nav item -->
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                    href="../dashboard/customers-edits.html">Edit
                                                                    Customers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link " href="../dashboard/reviews.html">
                                                        <div class="flex items-center">
                                                            <span class="nav-link-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                    </path>
                                                                    <path
                                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span class="nav-link-text">Reviews</span>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 279px; height: 1046px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 730px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- main wrapper -->
            <main class="main-content-wrapper">


                {{ $slot }}

            </main>
        </div>
    </div>


    <!-- Libs JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.3.0/simplebar.min.js"></script>

    <!-- Theme JS -->

    <script src="{{ asset('assets/js/theme.min.js') }}"></script>


    <script src="{{ asset('assets/js/vendors/countdown.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <script src="{{ asset('assets/js/vendors/tns-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/zoom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/language.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/vendors/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/validation.js') }}"></script>
</body>

</html>
