<x-dashboard-layout>

    <div class="container">
        <div class="grid grid-cols-1 mb-8">
            <!-- page header -->
            <div class="flex flex-col gap-4 md:flex-row md:justify-between md:items-center">
                <div>
                    <h2 class="text-xl">Products</h2>
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

                            <li class="inline-block text-gray-500 active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <a href="{{ route('admin.product.create') }}" class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-100">
                        Add Product
                    </a>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="grid grid-cols-1">
            <!-- card -->
            <div class="h-full card card-lg">
                <div class="px-6 py-6">
                    <div class="grid justify-between grid-cols-12">
                        <!-- form -->
                        <div class="col-span-12 mb-2 lg:col-span-3 md:col-span-6 lg:mb-0">
                            <form class="flex" role="search">
                                <input class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" type="search" placeholder="Search Products" aria-label="Search">
                            </form>
                        </div>
                        <!-- select option -->
                        <div class="col-span-12 md:col-start-11 md:col-end-13 md:col-span-4">
                            <select class="block w-full py-2 text-base border-gray-300 rounded-lg focus:border-green-600 focus:ring-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                <option selected="">Status</option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                                <option value="Draft">Draft</option>
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
                                    <th scope="col" class="px-6 py-3">Proudct Name</th>
                                    <th scope="col" class="px-6 py-3">Category</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Price</th>
                                    <th scope="col" class="px-6 py-3">Create at</th>
                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y">

                                @foreach ($products as $product)
                                <tr class="border-transparent !border-b-0">
                                    <td class="px-6 py-3 text-center">
                                        <div class="flex items-center">
                                            <input class="w-4 h-4 text-green-600 bg-white border-gray-300 rounded focus:ring-green-600 focus:outline-none focus:ring-2" type="checkbox" value="" id="productOne">
                                            <label class="text-gray-800 ms-3" for="productOne"></label>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <a href="#!">
                                            <img src="{{ asset('storage/'. $product->productImages[0]) }}"
                                            alt="{{$product->productName}}" class="object-contain w-12 h-12 ">
                                        </a>
                                    </td>
                                    <td class="px-6 py-3 text-left"><a href="#" class="text-inherit">{{$product->productName}}</a></td>
                                    <td class="px-6 py-3 text-left">{{$product->category->name}}</td>

                                    <td class="px-6 py-3 text-left">
                                        <span class="inline-block p-1 text-sm font-semibold leading-none text-green-800 align-baseline bg-green-100 border border-green-200 rounded">Active</span>
                                    </td>
                                    <td class="px-6 py-3 text-left">${{ number_format($product->price) }}</td>
                                    <td class="px-6 py-3 text-left">{{ $product->created_at }}</td>
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
                                @endforeach

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
