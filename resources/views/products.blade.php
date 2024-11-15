<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Products</h1>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold mb-4">Our Products</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-4xl">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>

        <!-- Tab Navigation -->
        <div class="flex flex-col md:flex-row justify-center items-center bg-white p-4 rounded-lg overflow-auto border-b border-gray-300 dark:border-gray-600 mb-6 w-full">
            <button class="px-4 py-2 text-sm font-semibold border-b-2 border-primary-600 text-primary-600">Project Analysis</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Project Control</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Digest & Accumulate</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Project Control</button>
            <button class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Digest & Accumulate</button>
        </div>

        <!-- Product Content -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start mb-12 dark:bg-gray-800 p-6 rounded-lg">

            <!-- Text Content (4 columns on medium screens, 12 columns on smaller screens) -->
            <div class="col-span-12 md:col-span-4 mb-6 md:mb-0">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Architectural Design & Planning</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                </p>
                <a href="{{route('product-details')}}" class="text-primary-600 hover:underline">Learn more</a>

                <div class="mt-6 p-4 bg-white dark:bg-gray-700 rounded-lg shadow-md flex items-center">
                    <img src="{{ asset('assets/image 60.png') }}" alt="Logo" class="w-12 h-12 mr-4"> <!-- Replace with actual logo image -->
                    <div class="max-w-xs">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-gray-100">Business Type</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                    </div>
                </div>
            </div>

            <!-- Image Content (8 columns on medium screens, 12 columns on smaller screens) -->
            <div class="col-span-12 md:col-span-8">
                <img src="{{ asset('assets/Mask group-4.png') }}" alt="Dashboard Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image -->
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="container mx-auto py-12 px-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg">

        <div class="flex justify-start items-start flex-col">
            <h2 class="text-3xl font-bold text-center mb-2">How It Works</h2>
            <p class=" text-gray-700 dark:text-gray-300 mb-12 max-w-5xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 relative ">
            <!-- Step 1 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">1</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Digest & Accumulate</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4 max-w-2xl">WWe integrate data from your project management software (Primavera P6, Microsoft Project, Asta Powerproject, etc.), Excel and PDF reports, using our automated secured data connectors</p>
            </div>
{{--            <div class="absolute gradient-background">5</div>--}}

            <!-- Step 2 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">2</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Analyze & Learn</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Our proprietary AI algorithms learn and transfer experience from historical projects</p>
            </div>

            <!-- Step 3 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">3</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Project Intelligence</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Predict project outcomes, predict and measure unforeseen risks, recommend corrective actions throughout the project lifecycle</p>
            </div>
        </div>
    </section>
</x-layout.app>
