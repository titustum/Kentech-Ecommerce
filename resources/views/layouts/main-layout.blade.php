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

    <x-headerx/>


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
                                <li><a href="#!" class="inline-block hover:text-blue-600">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="w-1/2">
                            <!-- list -->
                            <ul class="flex flex-col gap-2">
                                @foreach ($productCategories as $category)
                                <li><a href="#!" class="inline-block hover:text-blue-600">{{$category->name}}</a></li>
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
                                <li><a href="#!" class="inline-block hover:text-blue-600">Company</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">About</a></li>
                                <li><a href="#!" class="inline-block">Blog</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Help Center</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Our Value</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-1/2 gap-4 mb-6 sm:w-1/2 md:w-1/4">
                            <h6>For Consumers</h6>
                            <ul class="flex flex-col gap-2">
                                <!-- list -->
                                <li><a href="#!" class="inline-block hover:text-blue-600">Payments</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Shipping</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Product Returns</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">FAQ</a></li>
                                <li><a href="./shop-checkout.html" class="inline-block">Shop Checkout</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-1/2 gap-4 sm:w-1/2 md:w-1/4">
                            <h6>Become a Shopper</h6>
                            <ul class="flex flex-col gap-2">
                                <!-- list -->
                                <li><a href="#!" class="inline-block hover:text-blue-600">Shopper Opportunities</a>
                                </li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Become a Shopper</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Earnings</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Ideas & Guides</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">New Retailers</a></li>
                            </ul>
                        </div>
                        <div class="flex flex-col w-1/2 gap-4 sm:w-1/2 md:w-1/4">
                            <h6>KenTech programs</h6>
                            <ul class="flex flex-col gap-2">
                                <!-- list -->
                                <li><a href="#!" class="inline-block hover:text-blue-600">KenTech programs</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Gift Cards</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Promos & Coupons</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">KenTech Ads</a></li>
                                <li><a href="#!" class="inline-block hover:text-blue-600">Careers</a></li>
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
                            <a href="https://webesi.co.ke/" target="_blank" class="text-blue-600">Webesi</a>
                            .
                        </span>
                    </div>
                    <div class="flex items-center md:w-1/2 md:justify-end">
                        <div class="flex flex-row items-center gap-5">
                            <div class="text-gray-500">Follow us on</div>
                            <ul class="flex items-center justify-end gap-1 text-sm">
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center w-8 h-8 font-normal leading-normal text-center no-underline whitespace-no-wrap align-middle transition ease-in-out border border-gray-300 rounded select-none hover:border-blue-600 hover:text-blue-600">
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
                                        class="inline-flex items-center justify-center w-8 h-8 font-normal leading-normal text-center no-underline whitespace-no-wrap align-middle transition ease-in-out border border-gray-300 rounded select-none hover:border-blue-600 hover:text-blue-600">
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
                                        class="inline-flex items-center justify-center w-8 h-8 font-normal leading-normal text-center no-underline whitespace-no-wrap align-middle transition ease-in-out border border-gray-300 rounded select-none hover:border-blue-600 hover:text-blue-600">
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


    <!-- Chat with customer button -->
    <div class="fixed bottom-0 right-0 m-4">
        <a href="#" target="_blank"
            rel="noopener noreferrer"
            class="text-white bg-blue-600 border-blue-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">

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

