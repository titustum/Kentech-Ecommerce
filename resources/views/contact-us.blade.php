<x-main-layout>

    <section class="my-10">
        <!-- container -->
        <div class="container">
            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:mx-1/5 lg:w-2/3">
                    <div class="flex flex-wrap">
                        <div class="w-full mb-8">
                            <!-- card -->

                            <h1 class="text-xl">Retailer Inquiries</h1>
                            <p class="text-md">This form is for retailer inquiries only. For all other customer or
                                shopper support requests, please visit the links below this form.</p>
                        </div>
                    </div>

                    <!-- form -->
                    <form class="flex flex-col gap-4 md:flex-wrap lg:flex-nowrap needs-validation" novalidate="">
                        <!-- input -->
                        <div class="flex flex-col gap-3 md:flex-row">
                            <div class="flex flex-col w-full gap-2 md:w-1/2">
                                <label class="inline-block font-medium text-gray-800" for="contactFName">
                                    First Name
                                    <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="contactFName" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" name="contactFName" placeholder="Enter Your First Name" required="">
                                <div class="invalid-feedback">Please enter firstname.</div>
                            </div>
                            <div class="flex flex-col w-full gap-2 md:w-1/2">
                                <!-- input -->
                                <label class="inline-block font-medium text-gray-800" for="contactLName">
                                    Last Name
                                    <span class="text-red-600">*</span>
                                </label>
                                <input type="text" id="contactLName" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" name="contactLName" placeholder="Enter Your Last name" required="">
                                <div class="invalid-feedback">Please enter lastname.</div>
                            </div>
                        </div>
                        <div class="flex flex-col w-full gap-2">
                            <!-- input -->
                            <label class="inline-block font-medium text-gray-800" for="contactCompanyName">
                                Company
                                <span class="text-red-600">*</span>
                            </label>
                            <input type="text" id="contactCompanyName" name="contactCompanyName" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" placeholder="Your Company" required="">
                            <div class="invalid-feedback">Please enter company.</div>
                        </div>
                        <div class="flex flex-col w-full gap-2">
                            <!-- input -->
                            <label class="inline-block font-medium text-gray-800" for="contactTitle">Title</label>
                            <input type="text" id="contactTitle" name="contactTitle" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" placeholder="Your Title" required="">
                            <div class="invalid-feedback">Please enter title.</div>
                        </div>
                        <div class="flex flex-col gap-3 md:flex-row">
                            <div class="flex flex-col w-full gap-2 md:w-1/2">
                                <label class="inline-block font-medium text-gray-800" for="contactEmail">
                                    Email
                                    <span class="text-red-600">*</span>
                                </label>
                                <input type="email" id="contactEmail" name="contactEmail" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" placeholder="Enter Your First Name" required="">
                                <div class="invalid-feedback">Please enter email.</div>
                            </div>
                            <div class="flex flex-col w-full gap-2 md:w-1/2">
                                <!-- input -->
                                <label class="inline-block font-medium text-gray-800" for="contactPhone">Phone</label>
                                <input type="text" id="contactPhone" name="contactPhone" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" placeholder="Your Phone Number" required="">
                                <div class="invalid-feedback">Please enter phone.</div>
                            </div>
                        </div>
                        <div class="flex flex-col w-full gap-2">
                            <!-- input -->
                            <label class="inline-block font-medium text-gray-800" for="contactTearea">Textarea</label>
                            <textarea rows="3" id="contactTearea" class="form-control border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" placeholder="Additional Comments" required=""></textarea>
                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                        </div>
                        <div class="flex flex-row w-full gap-2">
                            <!-- btn -->
                            <button type="submit" class="inline-flex items-center text-white bg-green-600 border-green-600 btn gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>
