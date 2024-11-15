<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/img-3.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our News</h1>
        </div>
    </section>

    <!-- Stay Updated Section -->
    <section class="mx-auto p-8 md:p-16 dark:bg-gray-800 rounded-lg bg-[#d9d9d9]">
        <div class="container mx-auto">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Stay Updated</h2>
                <p class="x-subtitle"><span>Latest News</span></p>
                <div class="mt-2 border-t-2 border-gray-300 dark:border-gray-600 w-20 mx-auto"></div>
            </div>

            <!-- News Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 x-boxes-grid">

                <!-- Card 1 -->
                <div class="x-box-item" data-aos="flip-right" data-aos-duration="400">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/architecture_icon.svg') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Architectural Design & Planning</h3>
                    </div>
                    <img src="{{ asset('assets/img-1.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="#" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="x-box-item" data-aos="flip-right" data-aos-duration="700">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/interior_design_icon.svg') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Interior Design & Styling Services</h3>
                    </div>
                    <img src="{{ asset('assets/img-2.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="#" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="x-box-item" data-aos="flip-right" data-aos-duration="1000">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/interior_design_icon.svg') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Decorative Items & Furniture</h3>
                    </div>
                    <img src="{{ asset('assets/img-3.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="#" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

                <!-- Card 4 -->
                <div class="x-box-item" data-aos="flip-right" data-aos-duration="1300">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/img-2') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Turnkey Services & Coordination</h3>
                    </div>
                    <img src="{{ asset('assets/img-2.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="#" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

            </div>
        </div>

    </section>

</x-layout.app>
