@php
    $states = [
        'Andaman and Nicobar Islands',
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chandigarh',
        'Chhattisgarh',
        'Dadra and Nagar Haveli',
        'Goa',
        'Gujarat',
        'Haryana',
        'Himachal Pradesh',
        'Jammu and Kashmir',
        'Jharkhand',
        'Karnataka',
        'Kerala',
        'Lakshadweep',
        'Madhya Pradesh',
        'Maharashtra',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'NCR of Delhi',
        'Odisha',
        'Puducherry',
        'Punjab',
        'Rajastan',
        'Sikkim',
        'Tamil Nadu',
        'Telangana',
        'Tripura',
        'Uttarakhand',
        'Uttar Pradesh',
        'West Bengal',
    ];
    $faqs = [
        [
            'question' => 'What is the total investment required to start the franchise?',
            'answer' =>
                'The total investment required is between <strong>₹7–8 lakhs</strong>, which includes setup, branding, training, and launch support.',
        ],
        [
            'question' => 'What is the expected return on investment (ROI) and breakeven timeline?',
            'answer' =>
                'Our partners typically achieve <strong>ROI within 12–18 months</strong>, depending on location and enrolment.',
        ],
        [
            'question' => 'Do I need prior experience in education to start a preschool franchise?',
            'answer' =>
                'No prior experience is required—just a <strong>passion for education</strong>. We provide complete training and ongoing operational support.',
        ],
        [
            'question' => 'What kind of training and support do you provide?',
            'answer' =>
                ' We offer <strong>360&deg; franchise support</strong> including teacher training, curriculum guidance, operational planning, admissions help, and marketing assistance.',
        ],
        [
            'question' => 'How much space is required and can I run it from my home or rented property?',
            'answer' =>
                '  You&rsquo;ll need <strong>1200&ndash;2500 sq. ft.</strong> of space. It can be <strong>owned or rented</strong>, and we help with layout and design to create a child-friendly learning environment.',
        ],
        [
            'question' => 'Will you help me with admissions and local marketing?',
            'answer' =>
                ' Yes, we provide <strong>marketing assistance</strong> through digital promotions, branding assets, and local strategy to help boost enrolments.',
        ],
        [
            'question' => ' What curriculum do you follow and is it aligned with current education standards?',
            'answer' =>
                ' We use an <strong>award-winning preschool curriculum</strong> designed for holistic early childhood development and aligned with modern educational practices.',
        ],
        [
            'question' => ' How long does it take to set up and launch the preschool after signing the agreement?',
            'answer' =>
                'Once the agreement is signed, setup and training typically take <strong>4&ndash;6 weeks</strong>, depending on site readiness.',
        ],
        [
            'question' => 'Do I get exclusive territory rights in my area?',
            'answer' =>
                ' Yes, we offer <strong>location-based exclusivity</strong> to ensure you don&rsquo;t face competition from another franchise of our brand in your vicinity.',
        ],
        [
            'question' => ' What happens if I want to exit the franchise later?',
            'answer' =>
                '  If you wish to exit, we offer <strong>transparent exit terms</strong> as per the franchise agreement, and we assist in smooth transition or transfer.',
        ],
    ];

    $testimonials = [
        [
            'name' => 'Amit Verma',
            'location' => 'Pune',
            'quote' => 'With their full support, I started my first preschool and broke even in just 14 months!',
            'image' => '/testimonials/m.webp',
        ],
        [
            'name' => 'Ritu Sharma',
            'location' => 'Lucknow',
            'quote' => 'This franchise helped me turn my passion into a profitable preschool in my own city.',
            'image' => '/testimonials/f.webp',
        ],
        [
            'name' => 'Nilesh Patel',
            'location' => 'Gujarat',
            'quote' => 'From teacher to proud owner of 3 branches—thanks to their expert guidance!',
            'image' => '/testimonials/m2.webp',
        ],
        [
            'name' => 'Pooja Das',
            'location' => 'Siliguri',
            'quote' => 'Even in a small town, my preschool became the top choice for parents within months.',
            'image' => '/testimonials/f2.webp',
        ],
    ];
@endphp



@extends('layouts.app.app') @section('title', 'Home Page') @section('content') <section class="max-w-(--breakpoint-xl) mx-auto">
    <div class="hero min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Start Your Own Preschool</h1>
                <p class="py-6"> With India’s Fastest-Growing Preschool Franchise </p>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl ml-auto mr-0">
                @include('sections/forms/captureForm')
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
    <div class="max-w-(--breakpoint-2xl) mx-auto px-5 py-24">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Why Choose Us as <br
                class="hidden sm:block">Your Preschool Franchise Partner? </h1>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6 pb-12">
            <div class="p-4 md:w-1/3 flex items-center">
                <div
                    class="w-24 h-24 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary/60 flex-shrink-0">
                    <i class="ti text-6xl ti-building-community"></i>
                </div>
                <div class="flex-grow pl-6 items-center flex">
                    <h2 class="text-gray-900  text-3xl  title-font font-medium">25+ Centres Across India</h2>

                </div>
            </div>
            <div class="p-4 md:w-1/3 flex items-center">
                <div
                    class="w-24 h-24 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary/60 flex-shrink-0">
                    <i class="ti text-6xl  ti-certificate"></i>
                </div>
                <div class="flex-grow pl-6 items-center flex">
                    <h2 class="text-gray-900 text-3xl title-font font-medium">Award-Winning Preschool Curriculum
                    </h2>

                </div>
            </div>
            <div class="p-4 md:w-1/3 flex items-center">
                <div
                    class="w-24  h-24 inline-flex items-center  justify-center rounded-full bg-primary/10 text-primary/60 mb-4 flex-shrink-0 fill-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-primary/60" fill="none" viewBox="0 0 24 24"
                        id="Support-Agent-Fill--Streamline-Rounded-Fill-Material" height="72" width="72">

                        <path
                            d="M11.75 21c-0.2125 0 -0.3906 -0.07235 -0.53425 -0.217 -0.14385 -0.1445 -0.21575 -0.32365 -0.21575 -0.5375 0 -0.21365 0.0719 -0.39135 0.21575 -0.533 0.14365 -0.14165 0.32175 -0.2125 0.53425 -0.2125H19.5V11.9c0 -2.0615 -0.72765 -3.81015 -2.183 -5.246C15.86165 5.218 14.08935 4.5 12 4.5s-3.86165 0.718 -5.317 2.154C5.22765 8.08985 4.5 9.8385 4.5 11.9V17.5c0 0.14165 -0.047915 0.2604 -0.14375 0.35625C4.260415 17.9521 4.141665 18 4 18c-0.55 0 -1.020835 -0.19585 -1.4125 -0.5875C2.195835 17.02085 2 16.55 2 16v-2c0 -0.35 0.0875 -0.67915 0.2625 -0.9875 0.175 -0.30835 0.420835 -0.55415 0.7375 -0.7375l0.075 -1.325c0.133335 -1.13335 0.4625 -2.18335 0.9875 -3.15s1.18335 -1.80835 1.975 -2.525c0.79165 -0.716665 1.7 -1.275 2.725 -1.675C9.7875 3.2 10.86665 3 12 3c1.13335 0 2.20835 0.2 3.225 0.6 1.01665 0.4 1.925 0.954165 2.725 1.6625 0.8 0.70835 1.45835 1.54585 1.975 2.5125 0.51665 0.96665 0.85 2.01665 1 3.15l0.075 1.3c0.31665 0.15 0.5625 0.375 0.7375 0.675 0.175 0.3 0.2625 0.61665 0.2625 0.95v2.3c0 0.33335 -0.0875 0.65 -0.2625 0.95 -0.175 0.3 -0.42085 0.525 -0.7375 0.675V19.5c0 0.4125 -0.14685 0.7656 -0.4405 1.05925C20.26565 20.8531 19.9125 21 19.5 21H11.75Zm-2.7545 -7.25c-0.21365 0 -0.39135 -0.07235 -0.533 -0.217 -0.14165 -0.1445 -0.2125 -0.32365 -0.2125 -0.5375 0 -0.21365 0.07235 -0.39135 0.217 -0.533 0.1445 -0.14165 0.32365 -0.2125 0.5375 -0.2125 0.21365 0 0.39135 0.07235 0.533 0.217 0.14165 0.1445 0.2125 0.32365 0.2125 0.5375 0 0.21365 -0.07235 0.39135 -0.217 0.533 -0.1445 0.14165 -0.32365 0.2125 -0.5375 0.2125Zm6 0c-0.21365 0 -0.39135 -0.07235 -0.533 -0.217 -0.14165 -0.1445 -0.2125 -0.32365 -0.2125 -0.5375 0 -0.21365 0.07235 -0.39135 0.217 -0.533 0.1445 -0.14165 0.32365 -0.2125 0.5375 -0.2125 0.21365 0 0.39135 0.07235 0.533 0.217 0.14165 0.1445 0.2125 0.32365 0.2125 0.5375 0 0.21365 -0.07235 0.39135 -0.217 0.533 -0.1445 0.14165 -0.32365 0.2125 -0.5375 0.2125ZM6.025 12.45c-0.11665 -1.76665 0.41665 -3.28335 1.6 -4.55 1.18335 -1.26665 2.65835 -1.9 4.425 -1.9 1.45 0 2.70835 0.47915 3.775 1.4375s1.71665 2.15415 1.95 3.5875c-1.48335 -0.01665 -2.8375 -0.43335 -4.0625 -1.25s-2.17315 -1.89165 -2.8445 -3.225c-0.262 1.33335 -0.82215 2.52085 -1.6805 3.5625 -0.85835 1.04165 -1.9125 1.82085 -3.1625 2.3375Z"
                            stroke-width="0.5"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6 items-center flex">
                    <h2 class="text-gray-900 text-3xl title-font font-medium">360° Franchise Support </h2>

                </div>
            </div>
            <div class="p-4 md:w-1/3 flex items-center">
                <div
                    class="w-24 h-24 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary/60 flex-shrink-0">
                    <i class=" text-6xl ti ti-percentage "></i>
                </div>
                <div class="flex-grow pl-6 items-center flex">
                    <h2 class="text-gray-900 text-3xl title-font font-medium">ROI in 12-18 Months </h2>

                </div>
            </div>
            <div class="p-4 md:w-1/3 flex items-center">
                <div
                    class="w-24 h-24 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary/60 flex-shrink-0">
                    <i class="ti text-6xl ti-currency-rupee"></i>
                </div>
                <div class="flex-grow pl-6 items-center flex">
                    <h2 class="text-gray-900 text-3xl title-font font-medium">Affordable Setup Cost </h2>

                </div>
            </div>
            <div class="p-4 md:w-1/3 flex items-center">
                <div
                    class="w-26 h-26 inline-flex items-center justify-center rounded-full bg-primary/10 text-primary/60 flex-shrink-0">
                    <i class="ti text-6xl ti-chart-histogram"></i>
                </div>
                <div class="flex-grow pl-6 items-center flex">
                    <h2 class="text-gray-900 text-3xl title-font font-medium">Marketing Assistance </h2>

                </div>
            </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6  justify-center">


            <button type="button" class="btn  max-w-sm  btn-primary w-full uppercase font-semibold tracking-wider"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-vertically-centered-modal"
                data-hs-overlay="#hs-vertically-centered-modal">
                Apply Now <i class="ti ti-arrow-narrow-right"></i>
            </button>

            <div id="hs-vertically-centered-modal"
                class="hs-overlay  hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none ralative"
                role="dialog" tabindex="-1" aria-labelledby="hs-vertically-centered-modal-label">
                <div
                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
                    <div
                        class="w-full flex flex-col  bg-white border border-gray-200 shadow-2xs rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">

                        {{-- <h3 id="hs-vertically-centered-modal-label"
                                class="font-bold text-gray-800 dark:text-white">
                                Modal title
                            </h3> --}}
                        <div class="relative ">
                            @include('sections/forms/captureForm')
                            <div class=" absolute top-2 right-2">
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                    aria-label="Close" data-hs-overlay="#hs-vertically-centered-modal">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
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
                        <i class="ti ti-number-1 h-2 text-xs w-2 p-0.5 mx-1 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-start md:mb-10 mt-2 md:text-end">
                        <time class="font-mono  italic">STEP 1</time>
                        <div class="text-lg ">Make Enquiry</div>
                        {{-- Lorem ipsum dolor sit amet. --}}
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-2 h-2 text-xs w-2 p-0.5 mx-1 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-end md:mb-10 mt-2">
                        <time class="font-mono italic  ">STEP 2</time>
                        <div class="text-lg ">Discussion & Proposal</div>
                        {{-- Lorem ipsum dolor sit amet. --}}
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-3 h-2 text-xs w-2 p-0.5 mx-1 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-start md:mb-10 mt-2 md:text-end">
                        <time class="font-mono italic  ">STEP 3</time>
                        <div class="text-lg ">Site Visit & Agreement</div>
                        {{-- Lorem ipsum dolor sit amet. --}}
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-4 h-2 text-xs w-2 p-0.5 mx-1 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-end md:mb-10 mt-2">
                        <time class="font-mono italic  ">STEP 4</time>
                        <div class="text-lg ">Setup & Training</div>
                        {{-- Lorem ipsum dolor sit amet. --}}
                    </div>
                    <hr />
                </li>
                <li>
                    <hr />
                    <div class="timeline-middle">
                        <i class="ti ti-number-5 h-2 text-xs w-2 p-0.5 mx-1 bg-black rounded-full text-white "></i>
                    </div>
                    <div class="timeline-start md:mb-10 mt-2 md:text-end">
                        <time class="font-mono italic  ">STEP 5</time>
                        <div class="text-lg ">Launch & Ongoing Support</div>
                        {{-- Lorem ipsum dolor sit amet. --}}
                    </div>
                </li>
            </ul>


        </div>
    </div>
</section>



<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>

        <div data-hs-carousel='{ "loadingClasses": "opacity-0", "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500", "isAutoPlay": true, "slidesQty": { "xs": 1, "lg": 3 }, "isAutoHeight": true }'
            class="relative">
            <div
                class="hs-carousel relative overflow-hidden w-full md:min-h-[268px] min-h-[290px] bg-white rounded-lg">
                <div
                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    @foreach ($testimonials as $testimonial)
                        <div class="hs-carousel-slide">
                            <div class="p-4 w-full">
                                <div class="h-full bg-gray-100 p-8 rounded">
                                    <i class="ti ti-quote text-3xl block w-5 h-5 text-gray-400 mb-4"></i>
                                    <p class="leading-relaxed mb-6">{{ $testimonial['quote'] }}</p>
                                    <a class="inline-flex items-center">
                                        <img alt="testimonial" src="{{ $testimonial['image'] }}"
                                            class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                        <span class="flex-grow flex flex-col pl-4">
                                            <span
                                                class="title-font font-medium text-gray-900">{{ $testimonial['name'] }}</span>
                                            <span class="text-gray-500 text-sm">{{ $testimonial['location'] }}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="button"
                class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="text-2xl" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button"
                class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="sr-only">Next</span>
                <span class="text-2xl" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </span>
            </button>
        </div>


</section>


<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            {{-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2> --}}
            <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Frequent Asked Questions (FAQ)</h2>
        </div>
        <div class="max-w-[80ch] mx-auto">



            <div class="hs-accordion-group">
                @foreach ($faqs as $index => $faq)
                    @php
                        $headingId = 'hs-bordered-heading-' . ($index + 1);
                        $collapseId = 'hs-basic-bordered-collapse-' . ($index + 1);
                        $isActive = $index === 0;
                    @endphp
                    <div class="hs-accordion {{ $isActive ? 'active' : '' }} bg-white border border-gray-200 -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                        id="{{ $headingId }}">
                        <button
                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400   justify-between"
                            aria-expanded="{{ $isActive ? 'true' : 'false' }}" aria-controls="{{ $collapseId }}">
                            {{ $loop->iteration }}. {{ $faq['question'] }}
                            <div>
                                <svg class="hs-accordion-active:hidden block size-3.5"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                <svg class="hs-accordion-active:block hidden size-3.5"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="{{ $collapseId }}"
                            class="hs-accordion-content {{ $isActive ? '' : 'hidden' }} w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="{{ $headingId }}">
                            <div class="pb-4 px-5">
                                <p class="text-gray-800 dark:text-neutral-200">
                                    {!! $faq['answer'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>





        </div>
    </div>
</section>

@endsection
