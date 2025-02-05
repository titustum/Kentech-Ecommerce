<x-dashboard-layout>
    {{-- <section class="my-10">
        <!-- container -->
        <div class="container">
            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-2/3">
                    <div class="mb-8">
                        <h1 class="text-xl font-semibold">Create New Product</h1>
                        <p class="text-md">Use this form to add a new product to the KenTech e-commerce system.</p>
                    </div>

                    <!-- Product Creation Form -->
                    <form action="{{ route('admin.upload.product') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6 needs-validation" novalidate>
                        @csrf

                        <!-- Product Name -->
                        <div class="flex flex-col gap-2">
                            <label for="productName" class="font-medium text-gray-800">Product Name <span class="text-red-600">*</span></label>
                            <input type="text" id="productName" name="productName" class="p-2 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter product name" required>
                            <div class="invalid-feedback">Please enter product name.</div>
                        </div>

                        <!-- Product Category -->
                        <div class="flex flex-col gap-2">
                            <label for="category" class="font-medium text-gray-800">Category <span class="text-red-600">*</span></label>
                            <select id="category" name="category" class="p-2 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" required>
                                <option value="">Select Category</option>
                                <option value="laptops">Laptops</option>
                                <option value="smartphones">Smartphones</option>
                                <option value="accessories">Accessories</option>
                                <!-- Add more categories here -->
                            </select>
                            <div class="invalid-feedback">Please select a category.</div>
                        </div>

                        <!-- Product Price -->
                        <div class="flex flex-col gap-2">
                            <label for="price" class="font-medium text-gray-800">Price <span class="text-red-600">*</span></label>
                            <input type="number" id="price" name="price" class="p-2 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter product price" required>
                            <div class="invalid-feedback">Please enter product price.</div>
                        </div>

                        <!-- Product Specifications -->
                        <div class="flex flex-col gap-2">
                            <label for="specifications" class="font-medium text-gray-800">Product Specifications</label>
                            <textarea id="specifications" name="specifications" class="p-2 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" rows="4" placeholder="Enter product specifications (e.g., RAM, Processor, etc.)"></textarea>
                        </div>

                        <!-- Product Description -->
                        <div class="flex flex-col gap-2">
                            <label for="description" class="font-medium text-gray-800">Product Description <span class="text-red-600">*</span></label>
                            <textarea id="description" name="description" class="p-2 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" rows="6" placeholder="Enter detailed product description" required></textarea>
                        </div>

                        <!-- Product Images -->
                        <div class="flex flex-col gap-2">
                            <label for="productImages" class="font-medium text-gray-800">Product Images <span class="text-red-600">*</span></label>
                            <input type="file" id="productImages" name="productImages[]" class="p-2 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" accept="image/*" multiple required>
                            <div class="invalid-feedback">Please upload product images.</div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex flex-row w-full gap-2">
                            <button type="submit" class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                Create Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CKEditor or TinyMCE Script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for Product Description
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}

</x-dashboard-layout>
