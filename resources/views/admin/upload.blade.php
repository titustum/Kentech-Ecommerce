<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">


        <header class="sticky top-0 z-50 bg-white shadow-md">
            <nav class="flex items-center justify-between px-4 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{-- Logo --}}
                <div class="flex items-center">
                    <a href="#" class="flex items-center text-3xl font-black">
                        <span class="text-blue-800">Ken</span>
                        <span class="text-orange-600">Tech</span>
                        {{-- <img src="{{ asset('images/kentech-logo.png') }}" alt="KenTech Logo" class="w-auto h-10"> --}}
                    </a>
                </div>

                {{-- Main Navigation Links --}}
                <div class="items-center hidden space-x-6 md:flex">
                    <a href="#" class="font-medium text-gray-800 transition duration-300 hover:text-blue-600">Products</a>
                    <a href="#" class="font-medium text-gray-800 transition duration-300 hover:text-blue-600">Categories</a>
                    <a href="#" class="font-medium text-gray-800 transition duration-300 hover:text-blue-600">Deals</a>
                    <a href="#" class="font-medium text-gray-800 transition duration-300 hover:text-blue-600">Support</a>
                </div>

                {{-- Right Side Actions --}}
                <div class="flex items-center space-x-4">
                    {{-- Search Bar --}}
                    <div class="relative hidden md:block">
                        <input type="text" placeholder="Search products..." class="w-64 px-4 py-2 bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button class="absolute text-gray-500 transform -translate-y-1/2 right-3 top-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    {{-- User Actions --}}
                    <div class="flex items-center space-x-3">
                        @auth
                            <a href="#" class="text-gray-800 hover:text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 text-white transition duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">Login</a>
                        @endauth

                        <a href="#" class="relative text-gray-800 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="absolute flex items-center justify-center w-4 h-4 text-xs text-white bg-red-500 rounded-full -top-2 -right-2">
                                {{ 0 }}
                            </span>
                            {{-- @if(Cart::count() > 0)
                                <span class="absolute flex items-center justify-center w-4 h-4 text-xs text-white bg-red-500 rounded-full -top-2 -right-2">
                                    {{ Cart::count() }}
                                </span>
                            @endif --}}
                        </a>
                    </div>

                    {{-- Mobile Menu Toggle --}}
                    <div class="md:hidden">
                        <button id="mobile-menu-toggle" class="text-gray-800 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            {{-- Mobile Menu (Hidden by Default) --}}
            <div id="mobile-menu" class="hidden bg-white md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#" class="block px-3 py-2 text-gray-800 rounded-md hover:bg-gray-100">Products</a>
                    <a href="#" class="block px-3 py-2 text-gray-800 rounded-md hover:bg-gray-100">Categories</a>
                    <a href="#" class="block px-3 py-2 text-gray-800 rounded-md hover:bg-gray-100">Deals</a>
                    <a href="#" class="block px-3 py-2 text-gray-800 rounded-md hover:bg-gray-100">Support</a>
                </div>
            </div>
        </header>












        {{-- main content --}}

        <div class="container px-4 py-8 mx-auto">
            <h1 class="mb-8 text-3xl font-semibold text-center">Upload Categories, Products, and Testimonials</h1>

            @if(session('success'))
                <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.upload.category') }}" method="POST" enctype="multipart/form-data" class="mb-8">
                @csrf
                <h2 class="mb-4 text-2xl font-bold">Upload Category</h2>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                    <input type="text" name="name" id="name" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="slug" class="block text-sm font-medium text-gray-700">Category Slug</label>
                    <input type="text" name="slug" id="slug" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="cover_image" class="block text-sm font-medium text-gray-700">Category Cover Image</label>
                    <input type="file" name="cover_image" id="cover_image" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                </div>
                <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Upload Category</button>
            </form>

            <form action="{{ route('admin.upload.product') }}" method="POST" enctype="multipart/form-data" class="mb-8">
                @csrf
                <h2 class="mb-4 text-2xl font-bold">Upload Product</h2>
                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="category_id" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                        @foreach(App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" name="name" id="name" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                    <input type="file" name="image" id="image" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Product Price</label>
                    <input type="number" name="price" id="price" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="discount" class="block text-sm font-medium text-gray-700">Discount Percentage</label>
                    <input type="number" name="discount" id="discount" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" min="0" max="100">
                </div>
                <div class="mb-4">
                    <label for="rating" class="block text-sm font-medium text-gray-700">Rating (0-5)</label>
                    <input type="number" name="rating" id="rating" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" min="0" max="5">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Product Description</label>
                    <textarea name="description" id="description" class="block w-full p-2 mt-1 border border-gray-300 rounded-md" required></textarea>
                </div>
                <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Upload Product</button>
            </form>





            <form action="{{ route('admin.upload.testimonial') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-2xl font-bold mb-4">Upload Testimonial</h2>

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                </div>

                <!-- Position Field -->
                <div class="mb-4">
                    <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                    <input type="text" name="position" id="position" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                </div>

                <!-- Content Field -->
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Testimonial Content</label>
                    <textarea name="content" id="content" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required></textarea>
                </div>

                <!-- Avatar Field (Optional) -->
                <div class="mb-4">
                    <label for="avatar" class="block text-sm font-medium text-gray-700">Avatar Image (Optional)</label>
                    <input type="file" name="avatar" id="avatar" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Upload Testimonial</button>
            </form>



        </div>











{{-- footer --}}
<footer class="px-4 py-12 text-white bg-gray-900 sm:px-6 lg:px-8">
    <div class="grid gap-8 mx-auto max-w-7xl md:grid-cols-4">
        {{-- Brand and Description --}}
        <div>
            <img src="{{ asset('images/kentech-logo-white.png') }}" alt="KenTech Logo" class="h-10 mb-4">
            <p class="mb-4 text-gray-400">Your premier destination for cutting-edge electronics and unbeatable tech deals.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        {{-- Quick Links --}}
        <div>
            <h4 class="mb-4 font-semibold">Quick Links</h4>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-400 hover:text-white">Products</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white">Categories</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white">Deals</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white">Brands</a></li>
            </ul>
        </div>

        {{-- Customer Service --}}
        <div>
            <h4 class="mb-4 font-semibold">Customer Service</h4>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-400 hover:text-white">Support</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white">Shipping</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white">Returns</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white">Warranty</a></li>
            </ul>
        </div>

        {{-- Newsletter --}}
        <div>
            <h4 class="mb-4 font-semibold">Stay Updated</h4>
            <p class="mb-4 text-gray-400">Subscribe to our newsletter for exclusive deals and updates.</p>
            <form class="flex">
                <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 text-white bg-gray-800 rounded-l-lg focus:outline-none">
                <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded-r-lg hover:bg-blue-700">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

    {{-- Copyright and Legal --}}
    <div class="pt-8 mx-auto mt-8 text-center border-t border-gray-800 max-w-7xl">
        <p class="text-gray-400">
            © {{ date('Y') }} KenTech Electronics Mall. All Rights Reserved.
            <span class="ml-4">
                <a href="#" class="text-gray-300 hover:text-white">Privacy Policy</a> |
                <a href="#" class="text-gray-300 hover:text-white">Terms of Service</a>
            </span>
        </p>
    </div>
</footer>








{{-- Optional JavaScript for Mobile Menu Toggle --}}
<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});
</script>
</body>
</html>
















