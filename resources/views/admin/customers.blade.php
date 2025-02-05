<x-dashboard-layout>

    <div class="container">
        <div class="grid grid-cols-1 mb-8">
            <!-- page header -->
            <div class="items-center justify-between md:flex">
                <div>
                    <h2 class="text-xl">Customers</h2>
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

                            <li class="inline-block text-gray-500 active" aria-current="page">Customers</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div class="mt-3 lg:mt-0">
                    <a href="./create-customers.html" class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-100">
                        Add New Customer
                    </a>
                </div>
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
                                <input class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" type="search" placeholder="Search Customers" aria-label="Search">
                            </form>
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
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Purchase Date</th>
                                    <th scope="col" class="px-6 py-3">Phone</th>
                                    <th scope="col" class="px-6 py-3">Spent</th>

                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerOne">
                                            <label class="text-gray-800 ms-3" for="customerOne"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-1.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Bonnie Howe</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">bonniehowe@gmail.com</td>

                                    <td class="px-6 py-3 text-left">17 May, 2023 at 3:18pm</td>
                                    <td class="px-6 py-3 text-left">-</td>
                                    <td class="px-6 py-3 text-left">$49.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerTwo">
                                            <label class="text-gray-800 ms-3" for="customerTwo"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-2.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Judy Nelson</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">judynelson@gmail.com</td>

                                    <td class="px-6 py-3 text-left">27 April, 2023 at 2:47pm</td>
                                    <td class="px-6 py-3 text-left">435-239-6436</td>
                                    <td class="px-6 py-3 text-left">$490.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerThree">
                                            <label class="text-gray-800 ms-3" for="customerThree"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-3.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">John Mattox</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">johnmattox@gmail.com</td>

                                    <td class="px-6 py-3 text-left">27 April, 2023 at 2:47pm</td>
                                    <td class="px-6 py-3 text-left">347-424-9526</td>
                                    <td class="px-6 py-3 text-left">$29.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerFour">
                                            <label class="text-gray-800 ms-3" for="customerFour"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-4.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Wayne Rossman</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">waynerossman@gmail.com</td>

                                    <td class="px-6 py-3 text-left">27 April, 2023 at 2:47pm</td>
                                    <td class="px-6 py-3 text-left">-</td>
                                    <td class="px-6 py-3 text-left">$39.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerFive">
                                            <label class="text-gray-800 ms-3" for="customerFive"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-5.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Rhonda Pinson</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">rhondapinson@gmail.com</td>

                                    <td class="px-6 py-3 text-left">18 March, 2023 at 2:47pm</td>
                                    <td class="px-6 py-3 text-left">304-471-8451</td>
                                    <td class="px-6 py-3 text-left">$213.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerSix">
                                            <label class="text-gray-800 ms-3" for="customerSix"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-6.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">John Mattox</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">johnmattox@gmail.com</td>

                                    <td class="px-6 py-3 text-left">18 March, 2023 at 2:47pm</td>
                                    <td class="px-6 py-3 text-left">410-636-2682</td>
                                    <td class="px-6 py-3 text-left">$490.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerSeven">
                                            <label class="text-gray-800 ms-3" for="customerSeven"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-7.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Wayne Rossman</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">waynerossman@gmail.com</td>

                                    <td class="px-6 py-3 text-left">18 March, 2023 at 2:47pm</td>
                                    <td class="px-6 py-3 text-left">845-294-6681</td>
                                    <td class="px-6 py-3 text-left">$39.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerEight">
                                            <label class="text-gray-800 ms-3" for="customerEight"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-8.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Richard Shelton</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">richarddhelton@jourrapide.com</td>

                                    <td class="px-6 py-3 text-left">12 March, 2023 at 9:47am</td>
                                    <td class="px-6 py-3 text-left">313-887-8495</td>
                                    <td class="px-6 py-3 text-left">$19.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerNine">
                                            <label class="text-gray-800 ms-3" for="customerNine"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-9.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Stephanie Morales</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">stephaniemorales@gmail.com</td>

                                    <td class="px-6 py-3 text-left">22 Feb, 2023 at 9:47pm</td>
                                    <td class="px-6 py-3 text-left">812-682-1588</td>
                                    <td class="px-6 py-3 text-left">$250.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerTen">
                                            <label class="text-gray-800 ms-3" for="customerTen"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-10.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Stephanie Morales</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">stephaniemorales@gmail.com</td>

                                    <td class="px-6 py-3 text-left">22 Feb, 2023 at 9:47pm</td>
                                    <td class="px-6 py-3 text-left">812-682-1588</td>
                                    <td class="px-6 py-3 text-left">$250.00</td>

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
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="customerEleven">
                                            <label class="text-gray-800 ms-3" for="customerEleven"></label>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <img src="../assets/images/avatar/avatar-11.jpg" alt="" class="w-8 h-8 rounded-full">
                                            <div class="ms-2">
                                                <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Pasquale Kidd</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">pasqualekidd@rhyta.com</td>

                                    <td class="px-6 py-3 text-left">22 Feb, 2023 at 9:47pm</td>
                                    <td class="px-6 py-3 text-left">336-396-0658</td>
                                    <td class="px-6 py-3 text-left">$159.00</td>

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
