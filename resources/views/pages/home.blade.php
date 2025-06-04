@php $states = [ 'Andaman and Nicobar Islands', 'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chandigarh', 'Chhattisgarh', 'Dadra and Nagar Haveli', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Lakshadweep', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'NCR of Delhi', 'Odisha', 'Puducherry', 'Punjab', 'Rajastan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttarakhand', 'Uttar Pradesh', 'West Bengal', ]; @endphp 
@extends('layouts.app.app') @section('title', 'Home Page') @section('content') <section
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
    <div class="max-w-(--breakpoint-xl) mx-auto px-5 py-24">
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
    <div class="max-w-(--breakpoint-xl) mx-auto px-5 py-24">
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
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6  justify-center">
            <button class="btn  max-w-sm  btn-primary w-full uppercase font-semibold tracking-wider">Apply Now <i
                    class="ti ti-arrow-narrow-right"></i>
            </button>
        </div>
    </div>
</section>
<section class="bg-base-200">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div
            class="sm:text-3xl text-2xl text-gray-900 font-medium title-font mb-2 md:w-2/5 flex justify-center items-center">
            <h2 class=" ">Steps to Franchise
                Partnership</h2>
        </div>
        <div class="md:w-3/5 md:pl-6">

            <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                <li>
                    <div class="timeline-middle">
                        <i class="ti ti-number-1 h-4 w-4 p-0.5 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-start md:mb-10 md:text-end">
                        <time class="font-mono italic">STEP 1</time>
                        <div class="text-lg font-semibold">Make Enquiry</div>
                        Lorem ipsum dolor sit amet.
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-2 h-4 w-4 p-0.5 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-end md:mb-10">
                        <time class="font-mono italic">STEP 2</time>
                        <div class="text-lg font-semibold">Discussion & Proposal</div>
                        Lorem ipsum dolor sit amet.
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-3 h-4 w-4 p-0.5 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-start md:mb-10 md:text-end">
                        <time class="font-mono italic">STEP 3</time>
                        <div class="text-lg font-semibold">Site Visit & Agreement</div>
                        Lorem ipsum dolor sit amet.
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-4 h-4 w-4 p-0.5 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-end md:mb-10">
                        <time class="font-mono italic">STEP 4</time>
                        <div class="text-lg font-semibold">Setup & Training</div>
                        Lorem ipsum dolor sit amet.
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-5 h-4 w-4 p-0.5 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-start md:mb-10 md:text-end">
                        <time class="font-mono italic">STEP 5</time>
                        <div class="text-lg font-semibold">Launch & Ongoing Support</div>
                        Lorem ipsum dolor sit amet.
                    </div>
                </li>
            </ul>


        </div>
    </div>
</section>



<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
        <div data-hs-carousel='{ "loadingClasses": "opacity-0", "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500", "isAutoPlay": true, "slidesQty": { "xs": 1, "lg": 3 },"isAutoHeight": true}'
            class="relative">
            <div
                class="hs-carousel relative overflow-hidden w-full  md:min-h-[268px] min-h-[290px] bg-white rounded-lg">
                <div
                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    <div class="hs-carousel-slide">
                        <div class="p-4 w-full">
                            <div class="h-full bg-gray-100 p-8 rounded"> <i
                                    class="ti ti-quote text-3xl block w-5 h-5 text-gray-400 mb-4"></i>
                                <p class="leading-relaxed mb-6">With their full support, I started my first preschool
                                    and broke even in just 14 months!</p> <a class="inline-flex items-center"> <img
                                        alt="testimonial" src="https://dummyimage.com/106x106"
                                        class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center"> <span
                                        class="flex-grow flex flex-col pl-4"> <span
                                            class="title-font font-medium text-gray-900">Amit Verma </span> <span
                                            class="text-gray-500 text-sm">Pune</span> </span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="hs-carousel-slide">
                        <div class="p-4 w-full">
                            <div class="h-full bg-gray-100 p-8 rounded"> <i
                                    class="ti ti-quote text-3xl block w-5 h-5 text-gray-400 mb-4"></i>
                                <p class="leading-relaxed mb-6">This franchise helped me turn my passion into a
                                    profitable preschool in my own city.</p> <a class="inline-flex items-center"> <img
                                        alt="testimonial" src="https://dummyimage.com/106x106"
                                        class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center"> <span
                                        class="flex-grow flex flex-col pl-4"> <span
                                            class="title-font font-medium text-gray-900"> Ritu Sharma </span> <span
                                            class="text-gray-500 text-sm">Lucknow</span> </span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="hs-carousel-slide">
                        <div class="p-4 w-full">
                            <div class="h-full bg-gray-100 p-8 rounded"> <i
                                    class="ti ti-quote text-3xl block w-5 h-5 text-gray-400 mb-4"></i>
                                <p class="leading-relaxed mb-6">From teacher to proud owner of 3 branches—thanks to
                                    their expert guidance!</p> <a class="inline-flex items-center"> <img
                                        alt="testimonial" src="https://dummyimage.com/106x106"
                                        class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center"> <span
                                        class="flex-grow flex flex-col pl-4"> <span
                                            class="title-font font-medium text-gray-900"> Nilesh Patel </span> <span
                                            class="text-gray-500 text-sm">Gujarat</span> </span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="hs-carousel-slide">
                        <div class="p-4 w-full">
                            <div class="h-full bg-gray-100 p-8 rounded"> <i
                                    class="ti ti-quote text-3xl block w-5 h-5 text-gray-400 mb-4"></i>
                                <p class="leading-relaxed mb-6">Even in a small town, my preschool became the top
                                    choice for parents within months.</p> <a class="inline-flex items-center"> <img
                                        alt="testimonial" src="https://dummyimage.com/106x106"
                                        class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center"> <span
                                        class="flex-grow flex flex-col pl-4"> <span
                                            class="title-font font-medium text-gray-900"> Pooja Das </span> <span
                                            class="text-gray-500 text-sm">Siliguri</span> </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <button type="button"
                class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="text-2xl" aria-hidden="true"> <svg class="shrink-0 size-5"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg> </span> <span class="sr-only">Previous</span> </button> <button type="button"
                class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="sr-only">Next</span> <span class="text-2xl" aria-hidden="true"> <svg
                        class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg> </span> </button>
        </div>
</section>


<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            {{-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2> --}}
            <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Frequent Asked Questions (FAQ)</h2>
        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    1. What is the total investment required to start the franchise?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            The total investment required is between
                            <strong>₹7&ndash;8 lakhs</strong>, which includes setup, branding, training,
                            and launch support.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-two">

                    2. What is the expected return on investment (ROI) and breakeven timeline?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-two"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            Our partners typically achieve
                            <strong>ROI within 12&ndash;18 months</strong>, depending on location and
                            enrolment.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-three">

                    3. Do I need prior experience in education to start a preschool franchise?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-three"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            No prior experience is required&mdash;just a
                            <strong>passion for education</strong>. We provide complete training and
                            ongoing operational support.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    4. What kind of training and support do you provide?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            We offer
                            <strong>360&deg; franchise support</strong> including teacher training,
                            curriculum guidance, operational planning, admissions help, and marketing
                            assistance.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    5. How much space is required and can I run it from my home or rented property?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            You&rsquo;ll need
                            <strong>1200&ndash;2500 sq. ft.</strong> of space. It can be
                            <strong>owned or rented</strong>, and we help with layout and design to
                            create a child-friendly learning environment.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    6. Will you help me with admissions and local marketing?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            Yes, we provide
                            <strong>marketing assistance</strong> through digital promotions, branding
                            assets, and local strategy to help boost enrolments.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    7. What curriculum do you follow and is it aligned with current education
                    standards?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            We use an
                            <strong>award-winning preschool curriculum</strong> designed for holistic
                            early childhood development and aligned with modern educational practices.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    8. How long does it take to set up and launch the preschool after signing the
                    agreement?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            Once the agreement is signed, setup and training
                            typically take <strong>4&ndash;6 weeks</strong>, depending on site
                            readiness.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    9. Do I get exclusive territory rights in my area?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            Yes, we offer
                            <strong>location-based exclusivity</strong> to ensure you don&rsquo;t face
                            competition from another franchise of our brand in your vicinity.
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="hs-accordion-group max-w-[75ch] mx-auto">
            <div class="hs-accordion active bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                id="hs-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400 justify-between"
                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">

                    10. What happens if I want to exit the franchise later?
                    <div>
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-bordered-collapse-one"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                    role="region" aria-labelledby="hs-bordered-heading-one">
                    <div class="pb-4 px-5">
                        <p class="text-gray-800 dark:text-neutral-200">
                            If you wish to exit, we offer
                            <strong>transparent exit terms</strong> as per the franchise agreement, and
                            we assist in smooth transition or transfer.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection
