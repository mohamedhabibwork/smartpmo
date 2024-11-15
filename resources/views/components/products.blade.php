<section class="container mx-auto py-12 px-6" x-data="{ activeTab: 'Project Analysis' }">
    <h2 class="text-3xl font-bold mb-4">Our Products</h2>
    <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-4xl">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    </p>

    <!-- Tab Navigation -->
    <div class="flex flex-col md:flex-row justify-center items-center bg-white p-4 rounded-lg overflow-auto border-b border-gray-300 dark:border-gray-600 mb-6 w-full">
        <button @click="activeTab = 'Project Analysis'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Project Analysis' }" class="px-4 py-2 text-sm font-semibold ">Project Analysis</button>
        <button @click="activeTab = 'Project Control'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Project Control' }" class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Project Control</button>
        <button @click="activeTab = 'Digest & Accumulate'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Digest & Accumulate' }" class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-primary-600">Digest & Accumulate</button>
    </div>

    <!-- Product Content -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start mb-12 dark:bg-gray-800 p-6 rounded-lg" x-show="activeTab === 'Project Analysis'">
        <!-- Text Content (4 columns on medium screens, 12 columns on smaller screens) -->
        <div  class="col-span-12 md:col-span-4 mb-6 md:mb-0">
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
        <div  class="col-span-12 md:col-span-8">
            <img src="{{ asset('assets/Mask group-4.png') }}" alt="Dashboard Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image -->
        </div>
    </div>

    <!-- Product Content -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start mb-12 dark:bg-gray-800 p-6 rounded-lg" x-show="activeTab === 'Project Control'">
        <!-- Text Content (4 columns on medium screens, 12 columns on smaller screens) -->
        <div  class="col-span-12 md:col-span-4 mb-6 md:mb-0">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Project Control</h3>
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
        <div  class="col-span-12 md:col-span-8">
            <img src="{{ asset('assets/Mask group-4.png') }}" alt="Dashboard Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image -->
        </div>
    </div>

    <!-- Product Content -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start mb-12 dark:bg-gray-800 p-6 rounded-lg" x-show="activeTab === 'Digest & Accumulate'">
        <!-- Text Content (4 columns on medium screens, 12 columns on smaller screens) -->
        <div  class="col-span-12 md:col-span-4 mb-6 md:mb-0">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Digest & Accumulate</h3>
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
        <div  class="col-span-12 md:col-span-8">
            <img src="{{ asset('assets/Mask group-4.png') }}" alt="Dashboard Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image -->
        </div>
    </div>

</section>
