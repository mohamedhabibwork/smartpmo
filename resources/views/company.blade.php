<x-layout.app>
    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Company</h1>
        </div>
    </section>

    <!-- Our Vision Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="container mx-auto py-12 px-6">
            <div class="flex flex-col md:flex-row items-start gap-8">
                <div class="w-full md:w-1/2 relative">
                    <video autoplay loop muted class="w-full h-full rounded-lg shadow-md" style="object-fit: cover;">
                        <source src="{{ asset('assets/0_Earth_Planet_1280x720.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl font-bold mb-4">Our Vision</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. A galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
            </div>
        </div>


        <!-- Our Mission Section -->
        <div class="container mx-auto py-12 px-6">
            <div class="flex flex-col md:flex-row items-start gap-8">
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. A galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
                <div class="w-full md:w-1/2 relative">
                    <video autoplay loop muted class="w-full h-full rounded-lg shadow-md" style="object-fit: cover;">
                        <source src="{{ asset('assets/6662526_Wireless_Network_1280x720.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

        <!-- Our Story Section -->
        <section class="relative w-full min-h-[600px] flex items-end justify-center text-center">
            <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover rounded-lg" style="z-index: -1;">
                <source src="{{ asset('assets/2240833_The Henderson_Construction Side_1280x720 (1).mp4') }}" type="video/mp4">
            </video>
            <div class="bg-black bg-opacity-50 w-full h-full absolute rounded-lg"></div>
            <div class="relative z-10 text-white max-w-7xl mx-auto px-6">
                <h1 class="text-4xl font-bold mb-4">Our Story</h1>
                <p class="text-lg mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    <span id="moreText" class="hidden md:inline">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                </p>
                <button id="readMoreBtn" class="text-primary-500 underline md:hidden pb-4" onclick="toggleReadMore()">Read More</button>
            </div>
        </section>
    </section>

    <!--our team-->
    <section class="container mx-auto py-12 px-6">
        <div class="flex flex-col justify-start items-start mb-4 text-center md:text-left">
            <h2 class="text-2xl md:text-3xl font-bold mb-2">Our Team</h2>
            <p class="text-gray-700 dark:text-gray-300 max-w-5xl mx-auto md:mx-0">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-1">
            <!-- Team Member 1 -->
            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg flex flex-col lg:flex-row items-center our-team gap-6 p-6">
                <div>
                    <img src="{{ asset('assets/Mask group.png') }}" alt="Team Member 1" class="w-32 md:w-48 ">
                </div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl text-[#CA822B] font-bold">Dr. Hossam Jerdi</h3>
                    <p class=" text-[#CA822B] dark:text-gray-300">CEO & Founder</p>
                </div>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg flex flex-col lg:flex-row items-center our-team gap-6 p-6">
                <div>
                    <img src="{{ asset('assets/Mask group-2.png') }}" alt="Team Member 2" class="w-32 md:w-48 ">
                </div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold">Khaoula Ben Khaled</h3>
                    <p class="text-gray-600 dark:text-gray-300">UX Designer</p>
                </div>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-black dark:text-white border border-gray-300 dark:border-white p-3 rounded-full">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleReadMore() {
            const moreText = document.getElementById('moreText');
            const btnText = document.getElementById('readMoreBtn');

            if (moreText.classList.contains('hidden')) {
                moreText.classList.remove('hidden');
                btnText.textContent = 'Read Less';
            } else {
                moreText.classList.add('hidden');
                btnText.textContent = 'Read More';
            }
        }
    </script>
</x-layout.app>
