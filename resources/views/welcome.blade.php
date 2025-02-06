<x-main-layout>

    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="p-8 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-bold text-gray-800" id="userModalLabel">Sign Up</h3>

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
                <div class="modal-body">
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="fullName" class="block mb-2 text-gray-800">Name</label>
                            <input type="text"
                                class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="fullName" placeholder="Enter Your Name" required />
                            <div class="invalid-feedback">Please enter name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="block mb-2 text-gray-800">Email address</label>
                            <input type="email"
                                class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="email" placeholder="Enter Email address" autocomplete="email" required />
                            <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-gray-800">Password</label>
                            <input type="password"
                                class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="password" placeholder="Enter Password" required />
                            <div class="invalid-feedback">Please enter password.</div>
                            <span class="block mt-1 text-sm text-gray-500">
                                By Signup, you agree to our
                                <a href="#!" class="text-green-600">Terms of Service</a>
                                &
                                <a href="#!" class="text-green-600">Privacy Policy</a>
                            </span>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center justify-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                            Sign Up
                        </button>
                    </form>
                </div>
                <div class="flex justify-center mt-3 border-0 modal-footer">
                    Already have an account?
                    <a href="#" class="ml-1 text-green-600">Sign in</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Cart -->

    <div class="offcanvas offcanvas-right" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="border-b offcanvas-header">
            <div>
                <h5 id="offcanvasRightLabel">Shop Cart</h5>
                <span>Location in 382480</span>
            </div>
            <button type="button" class="btn-close text-inherit" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 icon icon-tabler icon-tabler-x" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-4 offcanvas-body">
            <div>
                <!-- alert -->
                <div class="p-4 mb-3 text-red-800 bg-red-500 bg-opacity-25 rounded-lg" role="alert">
                    You’ve got FREE delivery. Start
                    <a href="#!" class="alert-link">checkout now!</a>
                </div>
                <ul class="list-none">
                    <!-- list group -->
                    <li class="py-3 border-t">
                        <div class="flex items-center">
                            <div class="w-1/2 md:w-1/2 lg:w-3/5">
                                <div class="flex">
                                    <img src="./assets/images/products/product-img-1.jpg" alt="Ecommerce"
                                        class="w-16 h-16" />
                                    <div class="ml-3">
                                        <!-- title -->
                                        <a href="./shop-single.html" class="text-inherit">
                                            <h6>Haldiram's Sev Bhujia</h6>
                                        </a>
                                        <span><small class="text-gray-500">.98 / lb</small></span>
                                        <!-- text -->
                                        <div class="mt-2 leading-none small">
                                            <a href="#!" class="flex items-center text-green-600">
                                                <span class="mr-1 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="14"
                                                        height="14" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm text-gray-500">Remove</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- input group -->
                            <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                <!-- input -->
                                <div class="flex items-center justify-between rounded-lg input-group input-spinner">
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
                            <!-- price -->
                            <div class="w-1/5 text-center md:w-1/5">
                                <span class="font-bold text-gray-800">$5.00</span>
                            </div>
                        </div>
                    </li>
                    <!-- list group -->
                    <li class="py-3 border-t">
                        <div class="flex items-center">
                            <div class="w-1/2 md:w-1/2 lg:w-3/5">
                                <div class="flex">
                                    <img src="./assets/images/products/product-img-2.jpg" alt="Ecommerce"
                                        class="w-16 h-16" />
                                    <div class="ml-3">
                                        <a href="./shop-single.html" class="text-inherit">
                                            <h6>NutriChoice Digestive</h6>
                                        </a>
                                        <span><small class="text-gray-500">250g</small></span>
                                        <!-- text -->
                                        <div class="mt-2 leading-none small">
                                            <a href="#!" class="flex items-center text-green-600">
                                                <span class="mr-1 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="14"
                                                        height="14" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm text-gray-500">Remove</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- input group -->
                            <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                <!-- input -->
                                <div class="flex items-center justify-between rounded-lg input-group input-spinner">
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
                            <!-- price -->
                            <div class="w-1/5 text-center md:w-1/5">
                                <span class="font-bold text-red-600">$20.00</span>
                                <div class="text-gray-500 line-through small">$26.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- list group -->
                    <li class="py-3 border-t">
                        <div class="flex items-center">
                            <div class="w-1/2 md:w-1/2 lg:w-3/5">
                                <div class="flex">
                                    <img src="./assets/images/products/product-img-3.jpg" alt="Ecommerce"
                                        class="w-16 h-16" />
                                    <div class="ml-3">
                                        <!-- title -->
                                        <a href="./shop-single.html" class="text-inherit">
                                            <h6>Cadbury 5 Star Chocolate</h6>
                                        </a>
                                        <span><small class="text-gray-500">1 kg</small></span>
                                        <!-- text -->
                                        <div class="mt-2 leading-none small">
                                            <a href="#!" class="flex items-center text-green-600">
                                                <span class="mr-1 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="14"
                                                        height="14" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm text-gray-500">Remove</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- input group -->
                            <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                <!-- input -->
                                <div class="flex items-center justify-between rounded-lg input-group input-spinner">
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
                            <!-- price -->
                            <div class="w-1/5 text-center md:w-1/5">
                                <span class="font-bold text-gray-800">$15.00</span>
                                <div class="text-gray-500 line-through small">$20.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- list group -->
                    <li class="py-3 border-t">
                        <div class="flex items-center">
                            <div class="w-1/2 md:w-1/2 lg:w-3/5">
                                <div class="flex">
                                    <img src="./assets/images/products/product-img-4.jpg" alt="Ecommerce"
                                        class="w-16 h-16" />
                                    <div class="ml-3">
                                        <!-- title -->
                                        <!-- title -->
                                        <a href="./shop-single.html" class="text-inherit">
                                            <h6>Onion Flavour Potato</h6>
                                        </a>
                                        <span><small class="text-gray-500">250g</small></span>
                                        <!-- text -->
                                        <div class="mt-2 leading-none small">
                                            <a href="#!" class="flex items-center text-green-600">
                                                <span class="mr-1 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="14"
                                                        height="14" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm text-gray-500">Remove</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- input group -->
                            <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                <!-- input -->
                                <div class="flex items-center justify-between rounded-lg input-group input-spinner">
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
                            <!-- price -->
                            <div class="w-1/5 text-center md:w-1/5">
                                <span class="font-bold text-gray-800">$15.00</span>
                                <div class="text-gray-500 line-through small">$20.00</div>
                            </div>
                        </div>
                    </li>
                    <!-- list group -->
                    <li class="py-3 border-t border-b">
                        <div class="flex items-center">
                            <div class="w-1/2 md:w-1/2 lg:w-3/5">
                                <div class="flex">
                                    <img src="./assets/images/products/product-img-5.jpg" alt="Ecommerce"
                                        class="w-16 h-16" />
                                    <div class="ml-3">
                                        <!-- title -->
                                        <a href="./shop-single.html" class="text-inherit">
                                            <h6>Salted Instant Popcorn</h6>
                                        </a>
                                        <span><small class="text-gray-500">100g</small></span>
                                        <!-- text -->
                                        <div class="mt-2 leading-none small">
                                            <a href="#!" class="flex items-center text-green-600">
                                                <span class="mr-1 align-text-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash" width="14"
                                                        height="14" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm text-gray-500">Remove</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- input group -->
                            <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                <!-- input -->
                                <div class="flex items-center justify-between rounded-lg input-group input-spinner">
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
                            <!-- price -->
                            <div class="w-1/5 text-center md:w-1/5">
                                <span class="font-bold text-gray-800">$15.00</span>
                                <div class="text-gray-500 line-through small">$25.00</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- btn -->
                <div class="flex justify-between mt-4">
                    <a href="#!"
                        class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                        Continue Shopping
                    </a>
                    <a href="#!"
                        class="inline-flex items-center text-white bg-gray-800 border-gray-800 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                        Update Cart
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="p-6 modal-body">
                    <div class="flex items-start justify-between">
                        <div>
                            <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                            <p class="text-sm">Enter your address and we will specify the offer you area.</p>
                        </div>
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
                    <div class="my-5">
                        <label for="searhNavbarSecond" class="invisible hidden">Search</label>
                        <input
                            class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                            type="search" placeholder="Search for products" id="searhNavbarSecond" />
                    </div>
                    <div class="flex items-center justify-between mb-2">
                        <h6>Select Location</h6>
                        <a href="#" class="text-gray-500 btn btn-outline-gray-400 btn-sm">Clear All</a>
                    </div>
                    <div>
                        <div data-simplebar style="height: 300px">
                            <div class="list-none">
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 bg-gray-100 border-b hover:bg-gray-100 active active:bg-gray-100">
                                    <span>Alabama</span>
                                    <span>Min:$20</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>Alaska</span>
                                    <span>Min:$30</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>Arizona</span>
                                    <span>Min:$50</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>California</span>
                                    <span>Min:$29</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>Colorado</span>
                                    <span>Min:$80</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>Florida</span>
                                    <span>Min:$90</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>Arizona</span>
                                    <span>Min:$50</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>California</span>
                                    <span>Min:$29</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>Colorado</span>
                                    <span>Min:$80</span>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between px-2 py-3 border-b hover:bg-gray-100">
                                    <span>Florida</span>
                                    <span>Min:$90</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <main class="mt-[130px] lg:mt-[180px]">


        <!-- hero section -->
        <!-- section -->
		<section class="mb-8 lg:mt-6">
			<div class="container">
				<!-- row -->
				<div class="grid grid-cols-12 gap-6">
					<div class="col-span-12 2xl:col-span-8 xl:col-span-7">
						<div class="h-full swiper-container swiper" id="swiper-1" data-pagination-type=""
							data-speed="400" data-space-between="100" data-pagination="true" data-navigation="false"
							data-autoplay="true" data-autoplay-delay="3000" data-effect="fade"
							data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
							<div class="pb-6 swiper-wrapper">
								<div class="swiper-slide"
									style="background: url(./assets/images/banner/my-banner-1.webp) no-repeat; background-size: cover; border-radius: 0.75rem">
									<div class="px-8 lg:pl-12 lg:py-28 py-14 2xl:w-1/2 xl:w-2/3">
										<!-- badge -->
										<div class="flex items-center mb-4">
											<span>Exclusive Offer</span>
											<span
												class="inline-block p-2 ml-2 text-sm font-semibold leading-none text-white align-baseline bg-red-600 rounded">15%</span>
										</div>
										<!-- title -->
										<h2 class="mb-3 text-3xl font-bold leading-snug">Best Online Deals, Free Stuff
										</h2>
										<p class="text-gray-800 text-md">Only on this week... Don’t miss</p>
										<!-- price -->
										<div class="mt-4 mb-4">
											<span>
												Start from
												<span class="ml-1 text-red-600 text-md">$5.99</span>
											</span>
										</div>
										<!-- btn -->
										<a href="#!"
											class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
											<span>Get Best Deal</span>
											<span>
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-arrow-right" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path d="M5 12l14 0"></path>
													<path d="M13 18l6 -6"></path>
													<path d="M13 6l6 6"></path>
												</svg>
											</span>
										</a>
									</div>
								</div>
								<!-- img -->
								<div class="swiper-slide"
									style="background: url(./assets/images/banner/my-banner-2.webp) no-repeat; background-size: cover; border-radius: 0.75rem">
									<div class="px-8 lg:pl-12 lg:py-28 py-14 2xl:w-1/2 xl:w-2/3">
										<!-- badge -->
										<div class="flex items-center mb-4">
											<span>Exclusive Offer</span>
											<span
												class="inline-block p-2 ml-2 text-sm font-semibold leading-none text-white align-baseline bg-red-600 rounded">35%</span>
										</div>

										<!-- title -->
										<h2 class="text-3xl font-bold mb-3 leading-[1.25]">Chocozay wafer-rolls Deals
										</h2>
										<!-- para -->
										<p class="text-gray-800 text-md">Only on this week... Don’t miss</p>
										<div class="mt-4 mb-4">
											<span>
												Start from
												<span class="ml-1 text-red-600 text-md">$34.99</span>
											</span>
										</div>
										<!-- btn -->
										<a href="#!"
											class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
											<span>Shop Deals Now</span>
											<span>
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-arrow-right" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path d="M5 12l14 0"></path>
													<path d="M13 18l6 -6"></path>
													<path d="M13 6l6 6"></path>
												</svg>
											</span>
										</a>
									</div>
								</div>
								<!-- img -->
								<div class="swiper-slide"
									style="background: url(./assets/images/banner/my-banner-3.webp) no-repeat; background-size: cover; border-radius: 0.75rem">
									<div class="px-8 lg:pl-12 lg:py-28 py-14 2xl:w-1/2 xl:w-2/3">
										<!-- badge -->
										<div class="flex items-center mb-4">
											<span>Exclusive Offer</span>
											<span
												class="inline-block p-2 ml-2 text-sm font-semibold leading-none text-white align-baseline bg-red-600 rounded">20%</span>
										</div>
										<!-- title -->
										<h2 class="text-3xl font-bold mb-3 leading-[1.25]">Cokoladni Kolutici Lasta</h2>
										<!-- para -->
										<p class="text-gray-800 text-md">Only on this week... Don’t miss</p>
										<div class="mt-4 mb-4">
											<span>
												Start from
												<span class="ml-1 text-green-600 text-md">$5.99</span>
											</span>
										</div>
										<!-- btn -->
										<a href="#!"
											class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
											<span>Shop This Week Offer</span>
											<span>
												<svg xmlns="http://www.w3.org/2000/svg"
													class="icon icon-tabler icon-tabler-arrow-right" width="14"
													height="14" viewBox="0 0 24 24" stroke-width="2"
													stroke="currentColor" fill="none" stroke-linecap="round"
													stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
													<path d="M5 12l14 0"></path>
													<path d="M13 18l6 -6"></path>
													<path d="M13 6l6 6"></path>
												</svg>
											</span>
										</a>
									</div>
								</div>

								<!-- Add more slides as needed -->
							</div>
							<!-- Add Pagination -->
							<div class="swiper-pagination !bottom-14"></div>
							<!-- Add Navigation -->
							<div class="swiper-navigation">
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
						</div>
					</div>
					<div class="flex-col hidden col-span-12 gap-4 2xl:col-span-4 xl:col-span-5 md:flex md:flex-row xl:flex-col">
						<div class="flex-auto px-8 py-8 rounded-lg"
							style="background: url(./assets/images/banner/ad-banner-1.jpg) no-repeat; background-size: cover">
							<div>
								<h3 class="text-lg font-bold leading-tight">
									10% cashback on
									<br />
									personal care
								</h3>
								<div class="mt-4 mb-5 text-gray-800 text-md">
									<p>Max cashback: $12</p>
									<span>
										Code:
										<span class="font-bold">CARE12</span>
									</span>
								</div>
								<a href="#!"
									class="inline-flex items-center text-white bg-gray-800 border-gray-800 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
									Shop Now
								</a>
							</div>
						</div>

						<div class="flex-auto px-8 py-8 rounded-lg"
							style="background: url(./assets/images/banner/ad-banner-2.jpg) no-repeat; background-size: cover">
							<!-- Banner Content -->
							<div>
								<!-- Banner Content -->
								<h3 class="text-lg font-bold leading-tight">
									Say yes to
									<br />
									season’s fresh
								</h3>
								<div class="mt-4 mb-5 text-gray-800 text-md">
									<p class="text-gray-800 text-md">
										Refresh your day
										<br />
										the fruity way
									</p>
								</div>

								<a href="#!"
									class="inline-flex items-center text-white bg-gray-800 border-gray-800 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <!-- end hero -->




        {{-- categories --}}

        <!-- shop by categories section -->
		<section class="my-6">
			<!-- category -->
			<div class="container">
				<!-- row -->
				<div class="grid grid-cols-1">
					<div class="mb-6">
						<!-- heading -->
						<h3 class="text-lg">Shop by Category</h3>
					</div>
				</div>
				<!-- row -->
				<div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-6 lg:gap-6">
					<!-- col -->

                    @foreach ($productCategories as $category)

					<div>
						<a href="shop-grid.html" class="text-decoration-none text-inherit">
							<!-- card -->
							<div class="card card-product">
								<div class="py-8 text-center card-body">
									<div class="flex justify-center">
										<!-- img -->
										<img src="{{ asset('storage/'. $category->cover_image) }}"
											alt="{{ $category->name }}" class="object-contain mb-3 h-28" />
									</div>
									<!-- text -->
									<div class="truncate">{{ $category->name }}</div>
								</div>
							</div>
						</a>
					</div>
					<!-- col -->

                    @endforeach

				</div>
			</div>
		</section>
		<!-- end categories section -->

        <!-- Popular Products Start-->
        <section class="my-8 lg:my-14">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full mb-6">
                        <h2 class="text-lg">Popular Products</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-4 xl:grid-cols-5">

                    @foreach ($featuredProducts as $product)
                    <div class="relative break-words bg-white border border-gray-300 rounded-lg card-product">
                        <div class="flex-auto p-4">

                            <div class="relative flex justify-center text-center">
                                <div class="absolute top-0 left-0">
                                    <span class="inline-block p-1 text-sm font-semibold leading-none text-center text-white align-baseline bg-green-600 rounded">{{( round($product->salePrice/$product->price)*100) }}%</span>
                                </div>
                                <a href="#!"><img src="{{ asset('storage/'. $product->productImages[0]) }}"
                                        alt="Grocery Ecommerce Template" class="object-contain w-full h-[200px]" /></a>

                                <div class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                    <a href="#!"
                                        class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                        data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-eye" width="16" height="16"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="#!"
                                        class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-heart" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                    </a>
                                    <a href="#!"
                                        class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                        data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-arrows-exchange" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 10h14l-4 -4" />
                                            <path d="M17 14h-14l4 4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                <a href="#!" class="mt-2 text-gray-500 text-decoration-none">
                                    <small>{{ $product->category->name  }}</small>
                                </a>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-base truncate">
                                        <a href="./shop-single.html">{{$product->productName}}</a>
                                        </h3>
                                    <div class="flex items-center">
                                        <div class="flex flex-row gap-3">
                                            <small class="flex items-center text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-star-half-filled" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                                        stroke-width="0" fill="currentColor" />
                                                </svg>
                                            </small>
                                            <div class="flex flex-row gap-1">
                                                <span class="text-sm text-gray-500">4.5</span>
                                                <span class="text-sm text-gray-500">(149)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <span class="font-semibold text-gray-900">${{ $product->salePrice }}</span>
                                        <span class="text-gray-500 line-through">${{ $product->price }}</span>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-1 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                                viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 5l0 14" />
                                                <path d="M5 12l14 0" />
                                            </svg>
                                            <span>Add</span>
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Popular Products End-->

        <section>
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="mb-6 md:w-full">
                        <h2 class="text-lg">Daily Best Sells</h2>
                    </div>
                </div>
                <div class="block w-full pb-6 overflow-x-auto scrolling-touch">
                    <div class="flex grid-cols-1 gap-4 xl:grid md:grid-cols-2 xl:grid-cols-4 flex-nowrap">
                        <div class="block w-full flex-0 md:w-auto">
                            <div class="px-6 pt-8 rounded-lg"
                                style="background: url(https://megabyte-andevfront.web.app/img/categories/sliders/notebooks.jpg) no-repeat; background-size: cover; height: 470px">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-lg text-black">100% Quality and Affordable.</h3>
                                        <p class="text-base text-black">Get the best deal before close.</p>
                                    </div>
                                    <div>
                                        <a href="#!"
                                            class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                            <span>Shop Now</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrow-right" width="14"
                                                    height="14" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M5 12l14 0"></path>
                                                    <path d="M13 18l6 -6"></path>
                                                    <path d="M13 6l6 6"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($bestDeals as $product)

                        <div class="block w-full flex-0 md:w-auto">
                            <div class="relative flex flex-col min-w-0 break-words bg-white border border-gray-300 rounded-lg card-product">
                                <div class="flex-auto p-4">

                                    <div class="relative flex justify-center text-center">
                                        <a href="./shop-single.html"><img
                                                src="{{ asset('storage/'. $product->productImages[0]) }}"
                                                alt="Grocery Ecommerce Template"
                                                class="h-[220px] object-contain max-w-full m-auto mb-3" /></a>

                                        <div class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-eye" width="16" height="16"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-heart" width="16" height="16"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                </svg>
                                            </a>
                                            <a href="#!"
                                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-arrows-exchange" width="16"
                                                    height="16" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 10h14l-4 -4" />
                                                    <path d="M17 14h-14l4 4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-3">
                                <a href="#!" class="text-gray-500 text-decoration-none"><small>{{ $product->category->name }}</small></a>
                                        <div class="flex flex-col gap-2">
                                            <h3 class="text-base truncate"><a href="./shop-single.html">{{ $product->productName }}</a></h3>

                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="font-semibold text-gray-900">${{ $product->salePrice }}</span>
                                                    <span class="text-gray-500 line-through">${{ $product->price }}</span>
                                                </div>
                                                <div>
                                                    <div class="flex items-center">
                                                        <small class="flex items-center text-yellow-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-star-half-filled"
                                                                width="14" height="14" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                                                    stroke-width="0" fill="currentColor" />
                                                            </svg>
                                                        </small>
                                                        <span class="ml-2 text-sm text-gray-700">4.5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid">
                                            <button type="button"
                                                class="text-white bg-green-600 border-green-600 btn disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                                    viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 5l0 14"></path>
                                                    <path d="M5 12l14 0"></path>
                                                </svg>
                                                <span class="ml-1">Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="flex justify-start text-center">
                                            <div class="w-full deals-countdown" data-countdown="2028/10/10 00:00:00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </section>
        <section class="my-8 lg:my-14">
            <div class="container">
                <div class="flex flex-wrap gap-y-6">
                    <div class="px-3 md:w-1/2 lg:w-1/4">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/clock.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">10 minute devices now</h3>
                                <p>Get your order delivered to your doorstep at the earliest from KenTech pickup
                                    stores near you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/2 lg:w-1/4">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/gift.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Best Prices & Offers</h3>
                                <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get
                                    best pricess & offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/2 lg:w-1/4">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/package.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Wide Assortment</h3>
                                <p>Choose from 5000+ products across computers, smartphones, printers, gaming devices, accessories & other categories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/2 lg:w-1/4">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/refresh-cw.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-md">Easy Returns</h3>
                                <p>
                                    Not satisfied with a product? Return it at the doorstep & get a refund within hours.
                                    No questions asked
                                    <a href="#!" class="text-green-600">policy</a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</x-main-layout>
