<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/hero_background.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Products</h1>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold mb-4">Our Products</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-8">Lorem ipsum is simply dummy text of the printing and typesetting industry...</p>

        <!-- Tab Navigation -->
        <div class="flex overflow-auto border-b border-gray-300 dark:border-gray-600 mb-6">
            <button class="px-4 py-2 text-sm font-semibold border-b-2 border-primary-600 text-primary-600">Project Analysis</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Project Control</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Digest & Accumulate</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Project Control</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Digest & Accumulate</button>
        </div>

        <!-- Product Content -->
        <div class="flex flex-col md:flex-row items-start mb-12 bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <!-- Text Content -->
            <div class="md:w-1/2 mb-6 md:mb-0 md:mr-6">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Architectural Design & Planning</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                <a href="#" class="text-primary-600 hover:underline">Learn more</a>
                <div class="mt-6 p-4 bg-white dark:bg-gray-700 rounded-lg shadow-md flex items-center">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-12 h-12 mr-4"> <!-- Replace with actual logo image -->
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 dark:text-gray-100">Business Type</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">Lorem Ipsum is simply dummy text of the printing industry...</p>
                    </div>
                </div>
            </div>
            <!-- Image Content -->
            <div class="md:w-1/2">
                <img src="{{ asset('assets/dashboard.png') }}" alt="Dashboard Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image -->
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="container mx-auto py-12 px-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-8">How It Works</h2>
        <p class="text-center text-gray-700 dark:text-gray-300 mb-12">Lorem ipsum is simply dummy text of the printing and typesetting industry...</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Step 1 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4">1</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Digest & Accumulate</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">We integrate data from your project management software (Primavera P6, Microsoft Project, Asta Powerproject, etc.), Excel and PDF reports...</p>
                <a href="#" class="text-secondary-600 hover:underline">Learn more</a>
            </div>

            <!-- Step 2 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4">2</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Analyze & Learn</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Our proprietary AI algorithms learn and transfer experience from historical projects.</p>
                <a href="#" class="text-secondary-600 hover:underline">Learn more</a>
            </div>

            <!-- Step 3 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4">3</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Project Intelligence</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Predict project outcomes, predict and measure unforeseen risks, recommend corrective actions...</p>
                <a href="#" class="text-secondary-600 hover:underline">Learn more</a>
            </div>
        </div>
    </section>
</x-layout.app>
