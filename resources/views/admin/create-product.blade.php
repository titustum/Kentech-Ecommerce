<x-dashboard-layout>
    <section class="my-10">
        <!-- container -->
        <div class="container">
            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-2/3">
                    <!-- Product Creation Form -->
                    <h1 class="mb-6 text-2xl font-semibold">Upload New Product</h1>

                    <form action="{{ route('admin.upload.product') }}" method="POST" enctype="multipart/form-data" class="space-y-6 needs-validation" novalidate>
                        @csrf

                        <!-- Product Name -->
                        <div class="flex flex-col gap-2">
                            <label for="productName" class="font-medium text-gray-800">Product Name <span class="text-red-600">*</span></label>
                            <input type="text" id="productName" name="productName" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter product name" required>
                            <div class="invalid-feedback">Please enter product name.</div>
                        </div>

                        <!-- Product Category -->
                        <div class="flex flex-col gap-2">
                            <label for="category" class="font-medium text-gray-800">Category <span class="text-red-600">*</span></label>
                            <select id="category" name="category" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" required>
                                <option value="">Select Category</option>
                                <option value="laptops">Laptops</option>
                                <option value="smartphones">Smartphones</option>
                                <option value="accessories">Accessories</option>
                                <option value="home-appliances">Home Appliances</option>
                                <!-- More categories can be added here -->
                            </select>
                            <div class="invalid-feedback">Please select a category.</div>
                        </div>

                        <!-- Product Name -->
                        <div class="flex flex-col gap-2">
                            <label for="brandName" class="font-medium text-gray-800">Brand Name <span class="text-red-600">*</span></label>
                            <input type="text" id="brandName" name="brandName" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter brand name" required>
                            <div class="invalid-feedback">Please enter brand name.</div>
                        </div>

                        <!-- Product Price -->
                        <div class="flex flex-col gap-2">
                            <label for="price" class="font-medium text-gray-800">Price <span class="text-red-600">*</span></label>
                            <input type="number" id="price" name="price" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter product price" required>
                            <div class="invalid-feedback">Please enter a price.</div>
                        </div>

                        <!-- Product Sale Price (Optional) -->
                        <div class="flex flex-col gap-2">
                            <label for="salePrice" class="font-medium text-gray-800">Sale Price (Optional)</label>
                            <input type="number" id="salePrice" name="salePrice" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter sale price (if applicable)">
                        </div>

                        <!-- Product Stock Availability -->
                        <div class="flex flex-col gap-2">
                            <label for="stock" class="font-medium text-gray-800">Stock Quantity <span class="text-red-600">*</span></label>
                            <input type="number" id="stock" name="stock" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter stock quantity" required>
                            <div class="invalid-feedback">Please enter stock quantity.</div>
                        </div>

                        <!-- Product Specifications -->
                        <div class="flex flex-col gap-2">
                            <label for="specifications" class="font-medium text-gray-800">Product Specifications</label>
                            <textarea id="specifications" name="specifications" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" rows="4" placeholder="Enter product specifications, such as RAM, processor type, etc."></textarea>
                        </div>

                        <!-- Product Description -->
                        <div class="flex flex-col gap-2">
                            <label for="description" class="font-medium text-gray-800">Product Description <span class="text-red-600">*</span></label>
                            <textarea id="description" name="description" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" rows="6" placeholder="Enter product description" required></textarea>
                        </div>

                        <!-- Product Images Upload -->
                        <div class="flex flex-col gap-2">
                            <label for="productImages" class="font-medium text-gray-800">Product Images <span class="text-red-600">*</span></label>
                            <input type="file" id="productImages" name="productImages[]" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" accept="image/*" multiple required>
                            <div class="invalid-feedback">Please upload at least one image for the product.</div>
                        </div>

                        <!-- Product Video URL (Optional) -->
                        <div class="flex flex-col gap-2">
                            <label for="productVideo" class="font-medium text-gray-800">Product Video URL (Optional)</label>
                            <input type="url" id="productVideo" name="productVideo" class="p-3 border border-gray-300 rounded-lg form-control focus:ring-green-600 focus:ring-0 focus:border-green-600" placeholder="Enter product video URL (e.g., YouTube)">
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-center mt-6">
                            <button type="submit" class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                Upload Product
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
        // Initialize CKEditor for product description and specifications (if necessary)
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#specifications'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-dashboard-layout>
