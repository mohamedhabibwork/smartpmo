<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/hero_background.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Company</h1>
        </div>
    </section>

    <!-- Our Vision Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="flex flex-col md:flex-row items-start mb-12">
            <img src="{{ asset('assets/vision.jpg') }}" alt="Vision Image" class="w-full md:w-1/2 rounded-lg mb-4 md:mb-0 md:mr-6">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Our Vision</h2>
                <p class="text-gray-700 dark:text-gray-300">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text...</p>
            </div>
        </div>

        <!-- Our Mission Section -->
        <div class="flex flex-col md:flex-row items-start mb-12">
            <div class="md:w-1/2 md:mr-6">
                <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
                <p class="text-gray-700 dark:text-gray-300">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text...</p>
            </div>
            <img src="{{ asset('assets/mission.jpg') }}" alt="Mission Image" class="w-full md:w-1/2 rounded-lg mb-4 md:mb-0">
        </div>

        <!-- Our Story Section -->
        <div class="flex flex-col md:flex-row items-start">
            <img src="{{ asset('assets/story.jpg') }}" alt="Story Image" class="w-full md:w-1/2 rounded-lg mb-4 md:mb-0 md:mr-6">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Our Story</h2>
                <p class="text-gray-700 dark:text-gray-300">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text...</p>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold mb-8 text-center">Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Team Member 1 -->
            <div class="p-6 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center">
                <img src="{{ asset('assets/team_member_1.jpg') }}" alt="Team Member 1" class="w-24 h-24 rounded-full mr-6">
                <div>
                    <h3 class="text-xl font-bold">Dr. Hossam Jerdi</h3>
                    <p class="text-gray-500 dark:text-gray-300">CEO & Founder</p>
                    <div class="mt-2 flex space-x-2">
                        <!-- Social Icons -->
                        <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-primary-600"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-primary-600"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-primary-600"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="p-6 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center">
                <img src="{{ asset('assets/team_member_2.jpg') }}" alt="Team Member 2" class="w-24 h-24 rounded-full mr-6">
                <div>
                    <h3 class="text-xl font-bold">Khaoula Ben Khaled</h3>
                    <p class="text-gray-500 dark:text-gray-300">UX Designer</p>
                    <div class="mt-2 flex space-x-2">
                        <!-- Social Icons -->
                        <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-primary-600"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-primary-600"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-primary-600"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
