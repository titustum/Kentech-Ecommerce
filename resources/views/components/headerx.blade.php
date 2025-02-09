<header class="fixed top-0 z-30 w-full bg-white">
    <!-- navbar -->
    <div class="border-b">
        <div class="py-1 bg-gray-100">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full text-center md:w-1/2 md:text-left"><span>Super Value Deals - Save more with coupons</span>
                    </div>
                    <div class="hidden w-1/2 text-right lg:block">
                        <div class="flex justify-end dropdown">
                            <a class="flex items-center dropdown-toggle text-inherit" href="#!" data-bs-toggle="dropdown" id="dropdownMenuLink">
                                <span class="mr-2">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg" id="languageIcon">
                                        <!-- Default SVG content for English -->
                                        <g clip-path="">
                                            <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169"></path>
                                            <path d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z" fill="white"></path>
                                            <path d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z" fill="#C8102E"></path>
                                            <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white"></path>
                                            <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z" fill="#C8102E"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span id="selectedLanguage">English</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#!" onclick="changeLanguage('English')">
                                        <span>
                                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="">
                                                    <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169"></path>
                                                    <path d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z" fill="white"></path>
                                                    <path d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z" fill="#C8102E"></path>
                                                    <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white"></path>
                                                    <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z" fill="#C8102E"></path>
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="16" height="12" fill="white" transform="translate(0 0.5)"></rect>
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
                                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5543_19751)">
                                                    <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00"></path>
                                                    <path d="M0 0.5H16V4.5H0V0.5Z" fill="black"></path>
                                                    <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5543_19751">
                                                        <rect width="16" height="12" fill="white" transform="translate(0 0.5)"></rect>
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
                        <a class="flex items-center space-x-2 text-2xl font-bold text-blue-600 navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/kentech-logo.svg') }}" class="h-10" alt="KenTech logo">
                            <span class="hidden md:block">KenTech</span>
                        </a>
                    </div>
                    <div class="hidden lg:w-2/5 lg:block">
                        <form action="#">
                            <div class="relative">
                                <label for="searchProducts" class="invisible hidden">Search</label>
                                <input class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-blue-600 focus:ring-0 focus:border-blue-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" type="search" placeholder="Search for products" id="searchProducts">
                                <button class="absolute top-0 right-0 p-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                        <path d="M21 21l-6 -6"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="w-3/5 lg:w-1/5 text-end md:w-1/2">
                        <div class="flex items-center justify-end gap-7">
                            <div>
                                <a href="./shop-wishlist.html" class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                    </svg>
                                    <span class="absolute top-0 w-5 h-5 -mt-1 -ml-2 text-sm font-semibold text-center text-white bg-blue-600 rounded-full left-full">
                                        5
                                        <span class="invisible">unread messages</span>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <a href="#!" class="text-gray-600" data-bs-toggle="modal" data-bs-target="#userModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <button type="button" class="relative text-gray-600" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                                        <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                                    </svg>
                                    <span id="cartCount" class="absolute top-0 w-5 h-5 -mt-1 -ml-3 text-sm font-semibold text-center text-white bg-blue-600 rounded-full left-full">
                                        0
                                        <span class="invisible">unread messages</span>
                                    </span>
                                </button>
                            </div>
                            <div class="leading-none lg:hidden">
                                <!-- Button -->
                                <button class="collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-800 icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 6l16 0"></path>
                                        <path d="M4 12l16 0"></path>
                                        <path d="M4 18l16 0"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="relative items-center content-between text-black navbar navbar-expand-lg lg:flex lg:flex-wrap navbar-default" aria-label="Offcanvas navbar large">
            <div class="container w-full mx-auto max-w-7xl xl:px-4 lg:px-0">
                <div class="offcanvas offcanvas-left lg:visible" tabindex="-1" id="navbar-default">
                    <div class="pb-1 offcanvas-header">
                        <a class="flex items-center space-x-2 text-2xl font-bold text-blue-600 navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/kentech-logo.svg') }}" class="h-10" alt="KenTech logo">
                            <span>KenTech</span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18 6l-12 12"></path>
                                <path d="M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="offcanvas-body lg:flex lg:items-center">
                        <div class="block mb-4 lg:hidden">
                            <form action="#">
                                <div class="relative">
                                    <label for="searhNavbar" class="invisible hidden">Search</label>
                                    <input class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-blue-600 focus:ring-0 focus:border-blue-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" type="search" placeholder="Search for products" id="searhNavbar">
                                    <button class="absolute top-0 right-0 p-3" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                            <path d="M21 21l-6 -6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="block mb-4 lg:hidden">
                            <a class="inline-flex items-center justify-center text-white bg-blue-600 border-blue-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                    </svg>
                                </span>
                                All Categories
                            </a>
                            <div class="mt-2 collapse" id="collapseExample" style="">
                                <div class="card card-body">
                                    <ul class="list-unstyled">
                                        @foreach ($categories as $category)
                                            <li><a class="dropdown-item" href="./shop-grid.html">{{ $category->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hidden dropdown lg:block">
                            <button class="inline-flex items-center mr-4 text-white bg-blue-600 border-blue-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-grid" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                        <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                    </svg>
                                </span>
                                All Categories
                            </button>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="./shop-grid.html">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <ul class="gap-3 navbar-nav lg:flex lg:items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Computers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Smartphones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Accessories</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
