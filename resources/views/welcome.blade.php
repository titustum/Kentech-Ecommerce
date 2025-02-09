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
                                class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-blue-600 focus:ring-0 focus:border-blue-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="fullName" placeholder="Enter Your Name" required />
                            <div class="invalid-feedback">Please enter name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="block mb-2 text-gray-800">Email address</label>
                            <input type="email"
                                class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-blue-600 focus:ring-0 focus:border-blue-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="email" placeholder="Enter Email address" autocomplete="email" required />
                            <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-gray-800">Password</label>
                            <input type="password"
                                class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-blue-600 focus:ring-0 focus:border-blue-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                id="password" placeholder="Enter Password" required />
                            <div class="invalid-feedback">Please enter password.</div>
                            <span class="block mt-1 text-sm text-gray-500">
                                By Signup, you agree to our
                                <a href="#!" class="text-blue-600">Terms of Service</a>
                                &
                                <a href="#!" class="text-blue-600">Privacy Policy</a>
                            </span>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center justify-center text-white bg-blue-600 border-blue-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            Sign Up
                        </button>
                    </form>
                </div>
                <div class="flex justify-center mt-3 border-0 modal-footer">
                    Already have an account?
                    <a href="#" class="ml-1 text-blue-600">Sign in</a>
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
                                            <a href="#!" class="flex items-center text-blue-600">
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
                                            <a href="#!" class="flex items-center text-blue-600">
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
                                            <a href="#!" class="flex items-center text-blue-600">
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
                                            <a href="#!" class="flex items-center text-blue-600">
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
                                            <a href="#!" class="flex items-center text-blue-600">
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
                        class="inline-flex items-center text-white bg-blue-600 border-blue-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
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
                            class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-blue-600 focus:ring-0 focus:border-blue-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
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
		<section class="mt-8">
			<div class="container">
				<div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="400"
					data-space-between="100" data-pagination="true" data-navigation="false" data-autoplay="true"
					data-autoplay-delay="3000" data-effect="fade"
					data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
					<div class="pb-8 swiper-wrapper">
						<div class="swiper-slide"
							style="background: url(./assets/images/slider/slide-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
							<div class="p-12 lg:py-32 lg:pl-12 xl:w-2/5 md:w-3/5">
								<span
									class="inline-block p-2 text-sm font-semibold leading-none text-gray-900 align-baseline bg-yellow-500 rounded-lg">Opening
									Sale Discount 50%</span>
								<div class="flex flex-col gap-2 my-7">
									<h1 class="text-xl font-bold leading-tight text-gray-900 lg:text-5xl">SuperMarket
										For Fresh Grocery</h1>
									<p class="font-light text-md">Introduced a new model for online grocery shopping and
										convenient home delivery.</p>
								</div>
								<a href="#!"
									class="inline-flex items-center text-white bg-gray-800 border-gray-800 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
									Shop Now
									<svg xmlns="http://www.w3.org/2000/svg"
										class="inline-block icon icon-tabler icon-tabler-arrow-right" width="14"
										height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
										fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M5 12l14 0" />
										<path d="M13 18l6 -6" />
										<path d="M13 6l6 6" />
									</svg>
								</a>
							</div>
						</div>
						<div class="swiper-slide"
							style="background: url(./assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
							<div class="px-12 py-12 lg:py-32 lg:pl-12 lg:pr-6 xl:w-2/5 md:w-3/5">
								<span
									class="inline-block p-2 text-sm font-semibold leading-none text-gray-900 align-baseline bg-yellow-500 rounded-lg">Free
									Shipping - orders over $100</span>
								<div class="flex flex-col gap-2 my-7">
									<h2 class="text-xl font-bold leading-tight text-gray-900 lg:text-5xl">
										Free Shipping on
										<br />
										orders over
										<span class="text-green-600">$100</span>
									</h2>
									<p class="font-light text-md">Free Shipping to First-Time Customers Only, After
										promotions and discounts are applied.</p>
								</div>
								<a href="#!"
									class="inline-flex items-center text-white bg-gray-800 border-gray-800 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
									Shop Now
									<svg xmlns="http://www.w3.org/2000/svg"
										class="inline-block icon icon-tabler icon-tabler-arrow-right" width="14"
										height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
										fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M5 12l14 0" />
										<path d="M13 18l6 -6" />
										<path d="M13 6l6 6" />
									</svg>
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

                    <div class="group">
                        <a href="shop-grid.html" class="block">
                            <div class="p-6 transition-all duration-200 bg-white border border-gray-200 rounded-xl hover:shadow-md">
                                <div class="space-y-4">
                                    <!-- Image Container -->
                                    <div class="flex items-center justify-center h-32">
                                        <img src="{{ asset('storage/'. $category->cover_image) }}"
                                             alt="{{ $category->name }}"
                                             class="object-contain w-auto h-full transition-transform duration-200 group-hover:scale-105">
                                    </div>

                                    <!-- Category Name -->
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">{{ $category->name }}</h3>
                                    </div>
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
                    <div class="relative transition-all duration-200 bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md group">
                        <div class="p-4">
                            <!-- Sale Badge -->
                            <div class="absolute z-10 top-3 left-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                    -{{ round(($product->price-$product->salePrice)/$product->price*100) }}%
                                </span>
                            </div>

                            <!-- Product Image -->
                            <div class="relative mb-5 aspect-square">
                               <a href="#">
                                    <img src="{{ asset('storage/' . $product->productImages[0]) }}" alt="{{ $product->productName }}"
                                        class="object-contain w-full h-full rounded-lg">
                                </a>

                                <!-- Action Buttons -->
                                <div class="absolute inset-x-0 bottom-0 flex items-center justify-center gap-2 mb-4 transition-all duration-200 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                                    <a href="#" class="inline-flex items-center justify-center w-10 h-10 text-gray-700 transition-colors duration-200 bg-white rounded-full shadow-md hover:bg-blue-600 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="space-y-3">
                                <!-- Category -->
                                <div class="text-sm text-gray-500">{{$product->category->name}}</div>

                                <!-- Title -->
                                <h3 class="text-lg font-medium text-gray-900 truncate">
                                    <a href="#" class="hover:text-blue-600">{{$product->productName}}</a>
                                </h3>

                                <!-- Rating -->
                                <div class="flex items-center gap-2">
                                    <div class="flex text-yellow-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="currentColor"><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="currentColor"><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="currentColor"><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="currentColor"><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"/></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="currentColor" opacity="0.5"><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"/></svg>
                                    </div>
                                    <span class="text-sm text-gray-500">4.5 (149)</span>
                                </div>

                                <!-- Price and Add to Cart -->
                                <div class="flex items-center justify-between pt-2">
                                    <div class="space-x-2">
                                        <span class="text-lg font-medium text-gray-900">${{ $product->salePrice }}</span>
                                        <span class="text-sm text-gray-500 line-through">${{ $product->price }}</span>
                                    </div>

                                    <a href="#" class="inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-white transition-colors duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 5l0 14"/>
                                            <path d="M5 12l14 0"/>
                                        </svg>
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Popular Products End-->



        <section class="my-8 lg:my-14">
            <div class="container">
                <div class="flex flex-wrap gap-y-6">
                    <div class="px-3 md:w-1/2 lg:w-1/4">
                        <div class="flex flex-col gap-4">
                            <div class="inline-block"><img src="assets/images/icons/clock.svg" alt="" /></div>
                            <div class="flex flex-col gap-2">
                                <h3 class= "text-md">10 minute devices now</h3>
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
                                    <a href="#!" class="text-blue-600">policy</a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>






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
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 6l-12 12"/>
                            <path d="M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="flex flex-wrap">
                    <div class="md:w-1/2">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                            <div class="zoom modal-image-container" onmousemove="zoom(event)"
                                 style="background-image: url({{ asset('storage/'.$product->productImages[0]) }})">
                                <!-- img -->
                                <img src="{{ asset('storage/'. $product->productImages[0]) }}" alt="Product Image" class="image1"/>
                            </div>
                            {{-- <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                     style="background-image: url({{ asset('storage/'.$product->productImages[1] ?? $product->productImages[0]) }})">
                                    <!-- img -->
                                    <img src="{{ asset('storage/'. $product->productImages[1] ?? $product->productImages[0]) }}" alt="Product Image"/>
                                </div>
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                     style="background-image: url({{ asset('storage/'. $product->productImages[2] ?? $product->productImages[0]) }})">
                                    <!-- img -->
                                    <img src="{{ asset('storage/'. $product->productImages[2] ?? $product->productImages[0]) }}" alt="Product Image"/>
                                </div>
                            </div> --}}
                            {{-- <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                     style="background-image: url({{ asset('storage/'. $product->productImages[3] ?? $product->productImages[0]) }})">
                                    <!-- img -->
                                    <img src="{{ asset('storage/'. $product->productImages[3] ?? $product->productImages[0]) }}" alt="Product Image"/>
                                </div>
                            </div> --}}
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div class="flex gap-3 thumbnails" id="productModalThumbnails">
                                @foreach($product->productImages as $image)
                                    <div class="w-1/4">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img src="{{ $image }}" alt="Thumbnail" />
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pl-4 pr-4 md:w-1/2">
                        <div class="mt-6 lg:pl-10 md:mt-0">
                            <div class="flex flex-col gap-4">
                                <!-- content -->
                                <a href="#!" class="block text-blue-600" id="productCategory">Product Category</a>
                                <!-- heading -->
                                <h1 class="modal-title" id="quickViewModalLabel">{{ $product->productName }}</h1>
                                <div id="productDescription">
                                    <!-- Description will be dynamically inserted here -->
                                    {!! $product->description !!}
                                </div>
                                <div id="productPrice" class="mt-3 text-lg font-semibold">
                                    Price: ${{ number_format($product->price, 2) }}
                                </div>
                                @if($product->salePrice)
                                    <div id="productSalePrice" class="mt-1 text-lg text-red-600">
                                        Sale Price: ${{ number_format($product->salePrice, 2) }}
                                    </div>
                                @endif
                                <div id="productStock" class="mt-2 text-sm">
                                    Stock: {{ $product->stock }} available
                                </div>
                                <div id="productSpecifications" class="mt-4">
                                    <!-- Specifications will be dynamically inserted here -->
                                    {!! $product->specifications !!}
                                </div>
                                <div class="mt-6">
                                    <button class="btn btn-primary">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




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
                                <div class="zoom modal-image-container" onmousemove="zoom(event)"
                                    style="background-image: url(./assets/images/products/product-single-img-1.jpg)">
                                    <!-- img -->
                                    <!-- img -->
                                    <img src="./assets/images/products/product-single-img-1.jpg" alt="" class="image1"/>
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
                                    <a href="#!" class="block text-blue-600">Product Category</a>
                                    <!-- heading -->
                                    <h1 class="modal-title" id="quickViewModalLabel">Product Name</h1>
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
                                            <a href="#" class="text-blue-600">(30 reviews)</a>
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
                                                    class="justify-center text-white bg-blue-600 border-blue-600 btn disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-blue-700 hover:border-blue-700 active:bg-blue-700 active:border-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
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



<script>
        document.querySelectorAll('.quickview-btn').forEach(button => {
        button.addEventListener('click', function() {
            const name = this.getAttribute('data-product-name');
            const description = this.getAttribute('data-product-description');
            const price = this.getAttribute('data-product-price');
            const salePrice = this.getAttribute('data-product-sale-price');
            const image = this.getAttribute('data-product-image');
            const stock = this.getAttribute('data-product-stock');
            const specifications = this.getAttribute('data-product-specifications');

            // Populate modal with the data
            const modalTitle = document.querySelector('#quickViewModal .modal-title');
            const modalDescription = document.querySelector('#quickViewModal .modal-description');
            const modalPrice = document.querySelector('#quickViewModal .modal-price');
            const modalSalePrice = document.querySelector('#quickViewModal .modal-sale-price');
            const modalImage = document.querySelector('#quickViewModal .modal-image');
            const modalStock = document.querySelector('#quickViewModal .modal-stock');
            const modalSpecifications = document.querySelector('#quickViewModal .modal-specifications');
            const modalImageContainer = document.querySelector('#quickViewModal .modal-image-container');

            if (modalTitle) modalTitle.textContent = name;
            if (modalDescription) modalDescription.innerHTML = description;
            if (modalPrice) modalPrice.textContent = `Price: $${parseFloat(price).toFixed(2)}`;
            if (modalSalePrice) modalSalePrice.textContent = salePrice ? `Sale Price: $${parseFloat(salePrice).toFixed(2)}` : '';
            if (modalImage) modalImage.src = image;
            if (modalStock) modalStock.textContent = `Stock: ${stock}`;
            if (modalSpecifications) modalSpecifications.innerHTML = specifications || 'No specifications available.';
            modalImageContainer.style.backgroundImage = image;
            document.querySelector('#quickViewModal .image1').src = image;
        });
    });

</script>



</x-main-layout>
