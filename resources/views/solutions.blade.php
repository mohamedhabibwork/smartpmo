<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/hero_background.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Solutions</h1>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold mb-4">Industries</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-8">Lorem ipsum is simply dummy text of the printing and typesetting industry...</p>

        <div class="flex flex-col md:flex-row items-start mb-12">
            <div class="md:w-1/2 bg-gray-200 dark:bg-gray-800 p-6 rounded-lg mb-4 md:mb-0 md:mr-6">
                <div class="mb-4">
                    <h3 class="text-xl font-bold">Infrastructure</h3>
                    <p class="text-gray-600 dark:text-gray-300">Whether building a tunnel, a highway, or a bridge, our company offers you the optimal design...</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Energy</h3>
                    <p class="text-gray-600 dark:text-gray-300">Detailed description of the energy sector...</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-bold">Commercial</h3>
                    <p class="text-gray-600 dark:text-gray-300">Insights into commercial projects and collaborations...</p>
                </div>
            </div>
            <img src="{{ asset('assets/industries.jpg') }}" alt="Industries Image" class="w-full md:w-1/2 rounded-lg">
        </div>
    </section>

    <!-- Ideal For Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold mb-4">Ideal For</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-8">Lorem ipsum is simply dummy text of the printing and typesetting industry...</p>

        <div class="flex flex-col md:flex-row items-start">
            <img src="{{ asset('assets/ideal_for.jpg') }}" alt="Ideal For Image" class="w-full md:w-1/2 rounded-lg mb-4 md:mb-0 md:mr-6">
            <div class="md:w-1/2 bg-gray-200 dark:bg-gray-800 p-6 rounded-lg">
                <div class="mb-4">
                    <h3 class="text-xl font-bold">Owner/Operator</h3>
                    <p class="text-gray-600 dark:text-gray-300">Description for owners/operators...</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-xl font-bold">General Contractors</h3>
                    <p class="text-gray-600 dark:text-gray-300">Specifics for general contractors...</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-xl font-bold">Consultants</h3>
                    <p class="text-gray-600 dark:text-gray-300">Details for consultants...</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">EPCs</h3>
                    <p class="text-gray-600 dark:text-gray-300">Explaining the EPCs collaboration...</p>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
