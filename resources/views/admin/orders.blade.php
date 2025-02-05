<x-dashboard-layout>

    <div class="container">
        <div class="grid grid-cols-1 mb-8">
            <!-- page header -->
            <div class="items-center justify-between md:flex">
                <div>
                    <h2 class="text-xl">Order List</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="flex flex-wrap">
                            <li class="inline-block text-green-600">
                                <a href="#!">
                                    Dashboard
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline-block mx-2 icon icon-tabler icons-tabler-outline icon-tabler-slash">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M17 5l-10 14"></path>
                                    </svg>
                                </a>
                            </li>

                            <li class="inline-block text-gray-500 active" aria-current="page">Order List
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
            </div>
        </div>
        <!-- row -->
        <div class="grid grid-cols-1">
            <!-- card -->
            <div class="h-full card card-lg">
                <div class="px-6 py-6">
                    <div class="grid justify-between grid-cols-12 gap-2">
                        <div class="col-span-12 lg:col-span-3 md:col-span-6">
                            <!-- form -->
                            <form class="flex" role="search">
                                <input class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                        <!-- select option -->
                        <div class="col-span-12 md:col-start-11 md:col-end-13 md:col-span-4">
                            <select class="block w-full py-2 text-base border-gray-300 rounded-lg focus:border-green-600 focus:ring-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                <option selected="">Status</option>
                                <option value="Success">Success</option>
                                <option value="Pending">Pending</option>
                                <option value="Cancel">Cancel</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="p-0 card-body">
                    <!-- table -->
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap table-with-checkbox table-hover">
                            <thead class="text-gray-700 bg-gray-200">
                                <tr class="border-transparent !border-b-0">
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="checkAll">
                                            <label class="text-gray-800 ms-3" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">Image</th>
                                    <th scope="col" class="px-6 py-3">Order Name</th>
                                    <th scope="col" class="px-6 py-3">Customer</th>
                                    <th scope="col" class="px-6 py-3">Date &amp; TIme</th>
                                    <th scope="col" class="px-6 py-3">Payment</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Amount</th>
                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="orderOne">
                                            <label class="text-gray-800 ms-3" for="orderOne"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!"><img src="../assets/images/products/product-img-1.jpg" alt="" class="w-10 h-10"></a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">FC#1007</a></td>
                                    <td class="px-6 py-3 text-left">Jennifer Sullivan</td>

                                    <td class="px-6 py-3 text-left">01 May 2023 (10:12 am)</td>
                                    <td class="px-6 py-3 text-left">Paypal</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-green-800 align-baseline bg-green-100 border border-green-200 rounded">Success</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">$12.99</td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="dropdown">
                                            <a href="#" class="text-inherit" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="orderTwo">
                                            <label class="text-gray-800 ms-3" for="orderTwo"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!"><img src="../assets/images/products/product-img-2.jpg" alt="" class="w-10 h-10"></a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">FC#1006</a></td>
                                    <td class="px-6 py-3 text-left">Willie Hanson</td>

                                    <td class="px-6 py-3 text-left">20 April 2023 (9:20 am)</td>
                                    <td class="px-6 py-3 text-left">COD</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-green-800 align-baseline bg-green-100 border border-green-200 rounded">Success</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">$8.19</td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="dropdown">
                                            <a href="#" class="text-inherit" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="orderThree">
                                            <label class="text-gray-800 ms-3" for="orderThree"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!"><img src="../assets/images/products/product-img-3.jpg" alt="" class="w-10 h-10"></a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">FC#1005</a></td>
                                    <td class="px-6 py-3 text-left">Dori Stewart</td>

                                    <td class="px-6 py-3 text-left">11 March 2023 (7:12 pm)</td>
                                    <td class="px-6 py-3 text-left">Paypal</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-yellow-800 align-baseline bg-yellow-100 border border-yellow-200 rounded">Pending</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">$8.19</td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="dropdown">
                                            <a href="#" class="text-inherit" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="orderFour">
                                            <label class="text-gray-800 ms-3" for="orderFour"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!"><img src="../assets/images/products/product-img-4.jpg" alt="" class="w-10 h-10"></a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">FC#1004</a></td>
                                    <td class="px-6 py-3 text-left">Ezekiel Rogerson</td>

                                    <td class="px-6 py-3 text-left">09 March 2023 (6:23 pm)</td>
                                    <td class="px-6 py-3 text-left">Stripe</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-green-800 align-baseline bg-green-100 border border-green-200 rounded">Success</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">$23.11</td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="dropdown">
                                            <a href="#" class="text-inherit" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="orderFive">
                                            <label class="text-gray-800 ms-3" for="orderFive"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!"><img src="../assets/images/products/product-img-5.jpg" alt="" class="w-10 h-10"></a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">FC#1003</a></td>
                                    <td class="px-6 py-3 text-left">Maria Roux</td>

                                    <td class="px-6 py-3 text-left">18 Feb 2022 (12:20 pm)</td>
                                    <td class="px-6 py-3 text-left">COD</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-green-800 align-baseline bg-green-100 border border-green-200 rounded">Success</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">$2.00</td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="dropdown">
                                            <a href="#" class="text-inherit" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="orderSix">
                                            <label class="text-gray-800 ms-3" for="orderSix"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!"><img src="../assets/images/products/product-img-6.jpg" alt="" class="w-10 h-10"></a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">FC#1002</a></td>
                                    <td class="px-6 py-3 text-left">Robert Donald</td>

                                    <td class="px-6 py-3 text-left">12 Feb 2022 (4:56 pm)</td>
                                    <td class="px-6 py-3 text-left">Paypal</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-red-800 align-baseline bg-red-100 border border-red-200 rounded">Cancel</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">$56.00</td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="dropdown">
                                            <a href="#" class="text-inherit" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="orderSeven">
                                            <label class="text-gray-800 ms-3" for="orderSeven"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!"><img src="../assets/images/products/product-img-7.jpg" alt="" class="w-10 h-10"></a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">FC#1001</a></td>
                                    <td class="px-6 py-3 text-left">Diann Watson</td>

                                    <td class="px-6 py-3 text-left">22 Jan 2023 (1:20 pm)</td>
                                    <td class="px-6 py-3 text-left">Paypal</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-green-800 align-baseline bg-green-100 border border-green-200 rounded">Success</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">$23.00</td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="dropdown">
                                            <a href="#" class="text-inherit" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-between gap-3 px-6 py-6 border-t border-gray-300 md:flex-row">
                    <span>Showing 1 to 8 of 12 entries</span>
                    <nav class="flex items-center gap-x-1">
                        <button type="button" class="leading-none min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none" disabled="">
                            Previous
                        </button>
                        <div class="flex items-center gap-x-1">
                            <button type="button" class="leading-none min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none" aria-current="page">
                                1
                            </button>
                            <button type="button" class="leading-none min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md text-white border bg-green-600 border-green-600 hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                2
                            </button>
                            <button type="button" class="leading-none min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none">
                                3
                            </button>
                        </div>
                        <button type="button" class="leading-none min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none">
                            Next
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>
