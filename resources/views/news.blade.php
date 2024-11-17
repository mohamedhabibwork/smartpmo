<x-layout.app>

    <!-- Hero Section -->
    <section class="relative w-full h-64 flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white max-w-2xl mx-auto px-6">
            <h1 class="text-4xl font-bold">Resources / News</h1>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="container mx-auto py-12 px-6">
        <!-- Case Study Entries -->
        <div class="space-y-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Stay Updated</h2>
                <p class="x-subtitle"><span>Latest News</span></p>
            </div>

            <section class="mx-auto p-8 md:p-16 dark:bg-gray-800 rounded-lg ">
                <div class="container mx-auto">
                    <!-- News Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 ">
                        <!-- Card 1 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300">
                            <div class="flex flex-col items-start mb-4">
                                <img src="{{ asset('assets/fi_1221905.png') }}" alt="Icon" class="w-8 h-8 mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Architectural Design & Planning</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (1).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4">
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="700">
                            <div class="flex flex-col items-start mb-4">
                                <img src="{{ asset('assets/fi_1544051.png') }}" alt="Icon" class="w-8 h-8 mb-4"> <!-- Replace with actual icon -->
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Interior Design & Styling Services</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (2).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>

                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1000">
                            <div class="flex flex-col items-start mb-4">
                                <img src="{{ asset('assets/fi_1624169.png') }}" alt="Icon" class="w-8 h-8 mb-4"> <!-- Replace with actual icon -->
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Decorative Items & Furniture</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (3).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 4 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex flex-col items-start mb-4">
                                <img src="{{ asset('assets/fi_3306960.png') }}" alt="Icon" class="w-8 h-8 mb-4"> <!-- Replace with actual icon -->
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Turnkey Services & Coordination</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group-5.png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 5 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Turnkey Services & Coordination</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (3).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 6 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Decorative Items & Furniture</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (2).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 7 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Architectural Design & Planning</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group-5.png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 8 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Interior Design & Styling services</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (1).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p  class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typestting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 9 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Turnkey Services & Coordination</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group-5.png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4">
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dumy text of the printing and typeetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>

                        </div>
                        <!-- Card 10 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Interior Design & Styling services</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (3).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4">
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 11 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Turnkey Services & Coordination</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (1).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4">
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                        <!-- Card 12 -->
                        <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                            <div class="flex items-center mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Architectural Design & Planning</h3>
                            </div>
                            <img src="{{ asset('assets/Mask group (2).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                            <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </section>

</x-layout.app>
