@php $states = [ 'Andaman and Nicobar Islands', 'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chandigarh', 'Chhattisgarh', 'Dadra and Nagar Haveli', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Lakshadweep', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'NCR of Delhi', 'Odisha', 'Puducherry', 'Punjab', 'Rajastan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttarakhand', 'Uttar Pradesh', 'West Bengal', ]; @endphp @extends('layouts.app.app') @section('title', 'Home Page') @section('content') <section
    class="max-w-(--breakpoint-xl) mx-auto">
    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Start Your Own Preschool</h1>
                <p class="py-6"> With India’s Fastest-Growing Preschool Franchise </p>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl ml-auto mr-0">
                <div class="card-body">
                    <fieldset class="fieldset">
                        <div class="max-w-sm"> <label for="name"
                                class="block text-sm font-medium mb-2 dark:text-white">Full Name</label> <input
                                type="text" id="name"
                                class="py-2.5 sm:py-3 px-4 block w-full bg-white rounded-lg sm:text-sm focus:border-primary focus:ring-primary focus:ring-priborder-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 border border-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Your full name" required /> </div>
                        <div class="max-w-sm"> <label for="mob"
                                class="block text-sm font-medium mb-2 dark:text-white">Mobile Number</label> <input
                                type="number" id="mob"
                                class="py-2.5 sm:py-3 px-4 block w-full bg-white rounded-lg sm:text-sm focus:border-primary focus:ring-primary focus:ring-priborder-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 border border-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Your full name" required /> </div>
                        <div class="max-w-sm"> <label for="state"
                                class="block text-sm font-medium mb-2 dark:text-white">State</label>
                            <div class="relative"> <select id="state" name="state"
                                    data-hs-select='{ "placeholder": "Select option...", "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>", "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-primary dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600", "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700", "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800", "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-priborder-primary \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>" }'>
                                    <option value="" selected disabled> Select State </option>
                                    @foreach ($states as $st)
                                        <option value="{{ $st }}">{{ $st }}</option>
                                    @endforeach
                                </select>
                                <div class="absolute top-1/2 end-2.5 -translate-y-1/2"> <svg
                                        class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg> </div>
                            </div>
                        </div>
                        <div class="max-w-sm"> <label for="city"
                                class="block text-sm font-medium mb-2 dark:text-white">City</label>
                            <div class="relative"> <select id="city" name="city"
                                    data-hs-select='{ "placeholder": "Select option...", "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>", "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-primary dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600", "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700", "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800", "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-priborder-primary \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>" }'>
                                    <option value="" selected disabled> Select State </option>
                                    @foreach ($states as $st)
                                        <option value="{{ $st }}">{{ $st }}</option>
                                    @endforeach
                                </select>
                                <div class="absolute top-1/2 end-2.5 -translate-y-1/2"> <svg
                                        class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7 15 5 5 5-5"></path>
                                        <path d="m7 9 5-5 5 5"></path>
                                    </svg> </div>
                            </div>
                        </div> <small class="text-xm mt-2 text-gray-500 dark:text-neutral-500"> By clicking on submit,
                            you agree to our <a href="#" class="text-blue-600 hover:underline">Terms of
                                Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy
                                Policy</a>. </small>
                    </fieldset>
                    <div class=""> <button type="submit"
                            class="btn btn-secondary w-full uppercase font-semibold tracking-wider"> Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" bg-accent/10 ">
    <div class="max-w-(--breakpoint-xl) mx-auto py-12">
        <h1 class="text-3xl pb-8 font-semibold text-center">Franchise Opportunity</h1>
        <ul
            class="grid grid-cols-1 md:grid-cols-3    list-none  [&>li]:text-center [&>li]:px-2  [&>li]:p-6 [&>li]:text-xl [&>li]:text-semibold md:[&>li:not(:last-child)]:border-r-1 [&>li:not(:last-child)]:border-gray-600/40 [&>li:not(:last-child)]:dark:border-neutral-700 [&>li:not(:last-child)]:border-b-1 md:[&>li:not(:last-child)]:border-b-0">
            <li class="">Investment Required ₹7-8 Lakhs</li>
            <li class="">Area Required 1200 – 2500 sq. ft.</li>
            <li class="">Passion for education</li>
        </ul>
    </div>
</section>
<section class="bg-base-100">
    <div class="max-w-(--breakpoint-xl) mx-auto py-12 px-4">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Why Choose Us as <br
                class="hidden sm:block">Your Preschool Franchise Partner? </h1>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6 pb-12">
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">25+ centres across India</h2>
                    <p class="leading-relaxed text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Itaque, libero.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Award-winning preschool curriculum
                    </h2>
                    <p class="leading-relaxed text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Itaque, libero.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">360° franchise support </h2>
                    <p class="leading-relaxed text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Itaque, libero.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">ROI in 12-18 months </h2>
                    <p class="leading-relaxed text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Itaque, libero.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Affordable setup cost </h2>
                    <p class="leading-relaxed text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Itaque, libero.</p>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Marketing assistance </h2>
                    <p class="leading-relaxed text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Itaque, libero.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6  ">
            <button class="btn  max-w-sm  btn-primary w-full uppercase font-semibold tracking-wider">Apply Now <i
                    class="ti ti-brand-tabler h-4 w-4"></i></button>
        </div>
    </div>
</section> @endsection
