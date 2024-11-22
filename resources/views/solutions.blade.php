<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Solutions</h1>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="container mx-auto py-12 px-6 overflow-hidden">
        <div class="px-4 md:px-6" data-aos="fade-right" data-aos-duration ="1000">
            <h2 class="text-5xl font-extrabold mb-4">Industries</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-5xl">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="  px-8 rounded-2xl">
            <!-- Tab Navigation -->
            <div class="flex flex-col md:flex-row justify-center items-center bg-[#D9D9D9] p-4 rounded-lg overflow-auto border-b border-gray-300 dark:border-gray-600 mb-6 w-full" data-aos="fade-down" data-aos-duration="1000">
                <button @click="activeTab = 'Project Analysis'" :class="{ 'border-primary-600 text-[#CA822B] border-b-2': activeTab === 'Project Analysis' }" class="px-4 py-2 text-[#CA822B] text-sm font-semibold ">Infrastructure</button>
                <button @click="activeTab = 'Project Control'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Project Control' }" class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-[#CA822B]">Energy</button>
                <button @click="activeTab = 'Digest & Accumulate'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Digest & Accumulate' }" class="px-4 py-2 text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-[#CA822B]">Commercial</button>
            </div>
            <!-- Product Content -->
            <div class=" flex gap-6 items-start mb-12 dark:bg-gray-800 px-1 rounded-lg" x-show="activeTab === 'Project Analysis'">
                <!-- Text Content (4 columns on medium screens, 12 columns on smaller screens) -->

                <div  class="col-span-12 md:col-span-8">
                    <img src="{{ asset('assets/charts.png') }}" alt="Dashboard Screenshot" class=" rounded-lg shadow-md" data-aos="zoom-in-up" data-aos-duration = '1000'> <!-- Replace with actual image -->
                </div>

                <div  class=" mb-6 md:mb-0" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="flex flex-col justify-between items-center">
                        <p class="max-w-2xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="{{route('case-example')}}" class="bg-[#057E6A] p-4 text-white mt-12 rounded">Check Case Studies</a>
                    </div>

                </div>

                <!-- Image Content (8 columns on medium screens, 12 columns on smaller screens) -->

            </div>


        </div>
    </section>

    <!-- Ideal For Section -->
    <section class="container mx-auto py-12 px-6 overflow-hidden">
        <div class="px-4 md:px-6" data-aos="fade-left" data-aos-duration ="1000">
            <h2 class="text-3xl font-bold mb-4">Ideal For</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-5xl">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="  px-8 rounded-2xl">
            <!-- Tab Navigation -->
            <div class="flex flex-col md:flex-row justify-center items-center bg-[#646464] p-4 rounded-lg overflow-auto border-b border-gray-300 dark:border-gray-600 mb-6 w-full" data-aos="fade-down" data-aos-duration="1000">
                <button @click="activeTab = 'Project Analysis'" :class="{ 'border-primary-600 text-white border-b-2': activeTab === 'Project Analysis' }" class="px-4 py-2 text-sm text-[#CA822B] font-semibold ">General Contractors</button>
                <button @click="activeTab = 'Project Control'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Project Control' }" class="px-4 py-2 text-sm font-semibold text-white dark:text-gray-300 hover:text-[#CA822B]">Owner/Operator</button>
                <button @click="activeTab = 'Digest & Accumulate'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Digest & Accumulate' }" class="px-4 py-2 text-sm font-semibold text-white dark:text-gray-300 hover:text-[#CA822B]">Consultants</button>
                <button @click="activeTab = 'Digest & Accumulate'" :class="{ 'border-primary-600 text-primary-600 border-b-2': activeTab === 'Digest & Accumulate' }" class="px-4 py-2 text-sm font-semibold text-white dark:text-gray-300 hover:text-[#CA822B]">EPCs</button>

            </div>
            <!-- Product Content -->
            <div class=" flex gap-6 items-start mb-12 dark:bg-gray-800 px-1 rounded-lg" x-show="activeTab === 'Project Analysis'">
                <!-- Text Content (4 columns on medium screens, 12 columns on smaller screens) -->



                <div  class=" mb-6 md:mb-0" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="flex flex-col justify-between items-center">
                        <p class="max-w-2xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="{{route('case-example')}}" class="bg-[#057E6A] p-4 text-white mt-16 rounded">Check Case Studies</a>
                    </div>

                </div>
                <div  class="col-span-12 md:col-span-8">
                    <img src="{{ asset('assets/Mask group (10).png') }}" alt="Dashboard Screenshot" class=" rounded-lg shadow-md" data-aos="zoom-in-up" data-aos-duration = '1000'> <!-- Replace with actual image -->
                </div>

                <!-- Image Content (8 columns on medium screens, 12 columns on smaller screens) -->

            </div>


        </div>
    </section>

    <script>
        const buttonsAccordions = document.querySelectorAll('.btn-accordion');
        buttonsAccordions.forEach((buttonAccordion, index) => {
            buttonAccordion.addEventListener('click', () => {
                // get parent element
                const parent = buttonAccordion.parentElement;
                console.log({parent})
                toggleAccordion(buttonAccordion, index);
            });
        });

        function toggleAccordion(buttonAccordion, index) {
            const content = buttonAccordion.parentElement.querySelector('.x-content');
            const icon = buttonAccordion.querySelector('.x-icon');
            // const toggleAccordions = document.querySelectorAll('.toggle-accordion');
            // SVG for Minus icon
            const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

            // SVG for Plus icon
            const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

            const allXAccordion = buttonAccordion.parentElement.parentElement.querySelectorAll('.x-accordion');

            allXAccordion.forEach((xAccordion) => {
                const content = xAccordion.querySelector('.x-content');
                const icon = xAccordion.querySelector('.x-icon');
                if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                    content.style.maxHeight = '0';
                    icon.innerHTML = plusSVG;
                }
            });

            // Toggle the content's max-height for smooth opening and closing
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.innerHTML = plusSVG;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerHTML = minusSVG;
            }
        }
    </script>
</x-layout.app>
