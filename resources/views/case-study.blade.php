<x-layout.app>

    <!-- Hero Section -->
    <section class="relative w-full h-64 flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white max-w-2xl mx-auto px-6">
            <h1 class="text-4xl font-bold">Case Studies</h1>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="container mx-auto py-12 px-6">
        <!-- Case Study Entries -->
        <div class="space-y-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Real Success, Real Stories</h2>
                <p class="x-subtitle"><span>Case Studies</span></p>
            </div>

            <!-- Case Study 1 -->
            <div class="my-5 flex flex-col md:flex-row items-start bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md p-6">
                <img src="{{ asset('assets/Mask group-6.png') }}" alt="Case Study Image" class="w-full md:w-1/3 h-auto rounded-lg mb-4 md:mb-0 md:mr-6"> <!-- Replace with actual image -->
                <div class="md:w-2/3">
                    <div class="flex justify-between items-center mb-5">
                        <h3 class="text-2xl font-bold mb-2">Case Study Name</h3>
                        <div class="flex items-center">
                            <img src="{{ asset('assets/image 60.png') }}" alt="Company Logo" class="w-8 h-8 rounded-full mr-5"> <!-- Replace with actual logo -->
                            <span class="text-gray-500 dark:text-gray-400 mr-2">Company Name</span>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="my-5 flex flex-col md:flex-row items-start bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md p-6">
                <img src="{{ asset('assets/Mask group-6.png') }}" alt="Case Study Image" class="w-full md:w-1/3 h-auto rounded-lg mb-4 md:mb-0 md:mr-6"> <!-- Replace with actual image -->
                <div class="md:w-2/3">
                    <div class="flex justify-between items-center mb-5">
                        <h3 class="text-2xl font-bold mb-2">Case Study Name</h3>
                        <div class="flex items-center">
                            <img src="{{ asset('assets/image 60.png') }}" alt="Company Logo" class="w-8 h-8 rounded-full mr-5"> <!-- Replace with actual logo -->
                            <span class="text-gray-500 dark:text-gray-400 mr-2">Company Name</span>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="my-5 flex flex-col md:flex-row items-start bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md p-6">
                <img src="{{ asset('assets/Mask group-6.png') }}" alt="Case Study Image" class="w-full md:w-1/3 h-auto rounded-lg mb-4 md:mb-0 md:mr-6"> <!-- Replace with actual image -->
                <div class="md:w-2/3">
                    <div class="flex justify-between items-center mb-5">
                        <h3 class="text-2xl font-bold mb-2">Case Study Name</h3>
                        <div class="flex items-center">
                            <img src="{{ asset('assets/image 60.png') }}" alt="Company Logo" class="w-8 h-8 rounded-full mr-5"> <!-- Replace with actual logo -->
                            <span class="text-gray-500 dark:text-gray-400 mr-2">Company Name</span>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                </div>
            </div>
        </div>
    </section>

</x-layout.app>
