<form class="card-body">
    <h2 class="text-2xl mb-3 text-center">Apply for Franchise</h2>
    <fieldset class="fieldset">
        <div class="max-w-sm">
            <label
                for="name"
                class="block text-sm font-medium mb-2 dark:text-white"
                >Full Name</label
            >
            <input
                type="text"
                id="name"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white rounded-lg sm:text-sm focus:border-primary focus:ring-primary focus:ring-priborder-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 border border-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Your full name"
                required
            />
        </div>
        <div class="max-w-sm">
            <label
                for="mob"
                class="block text-sm font-medium mb-2 dark:text-white"
                >Mobile Number</label
            >
            <input
                type="number"
                id="mob"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white rounded-lg sm:text-sm focus:border-primary focus:ring-primary focus:ring-priborder-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 border border-gray-200 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Your full name"
                required
            />
        </div>
        <div class="max-w-sm">
            <label
                for="state"
                class="block text-sm font-medium mb-2 dark:text-white"
                >State</label
            >
            <div class="relative">
                <select
                    id="state"
                    name="state"
                    data-hs-select='{ "placeholder": "Select option...", "toggleTag": "<button type=\"button\" aria-expanded=\falsefalse\"></button>", "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-primary dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600", "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700", "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800", "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-priborder-primary \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>" }'
                >
                    <option value="" selected disabled>Select State</option>
                    @foreach ($states as $st)
                    <option value="{{ $st }}">{{ $st }}</option>
                    @endforeach
                </select>
                <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                    <svg
                        class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="m7 15 5 5 5-5"></path>
                        <path d="m7 9 5-5 5 5"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="max-w-sm">
            <label
                for="city"
                class="block text-sm font-medium mb-2 dark:text-white"
                >City</label
            >
            <div class="relative">
                <select
                    id="city"
                    name="city"
                    data-hs-select='{ "placeholder": "Select option...", "toggleTag": "<button type=\"button\" aria-expanded=\falsefalse\"></button>", "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-primary dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600", "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700", "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800", "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-priborder-primary \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>" }'
                >
                    <option value="" selected disabled>Select State</option>
                    @foreach ($states as $st)
                    <option value="{{ $st }}">{{ $st }}</option>
                    @endforeach
                </select>
                <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                    <svg
                        class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="m7 15 5 5 5-5"></path>
                        <path d="m7 9 5-5 5 5"></path>
                    </svg>
                </div>
            </div>
        </div>
        <small class="text-xm mt-2 text-gray-500 dark:text-neutral-500">
            By clicking on submit, you agree to our
            <a href="#" class="text-blue-600 hover:underline"
                >Terms of Service</a
            >
            and
            <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a
            >.
        </small>
    </fieldset>
    <div class="">
        <button
            type="submit"
            class="btn btn-secondary w-full uppercase font-semibold tracking-wider"
        >
            Submit
        </button>
    </div>
</form>
