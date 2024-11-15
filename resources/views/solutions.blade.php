<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Solutions</h1>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="px-4 md:px-6">
            <h2 class="text-3xl font-bold mb-4">Industries</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-5xl">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="flex flex-col md:flex-row items-start mb-12  px-4 md:px-6">
            <!-- Accordion Section -->
            <div
                class="flex justify-center items-center flex-col bg-gray-200 dark:bg-gray-800 p-6 rounded-l-lg w-full md:w-1/2 lg:w-1/3 h-auto md:h-96">
                <!-- Accordion Items -->
                <div class="w-full border-b border-slate-200 x-accordion">
                    <button
                        class="btn-accordion w-full flex justify-between items-center py-5 text-slate-800 toggle-accordion">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span class="x-icon text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                        </svg>
                    </span>
                    </button>
                    <div class="x-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution
                            you can turn the complexity of your project into an optimal sequence of actions that reduce
                            risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200 x-accordion">
                    <button
                        class="btn-accordion w-full flex justify-between items-center py-5 text-slate-800 toggle-accordion">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span class="x-icon text-slate-800 transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                               class="w-4 h-4">
                            <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z"/>
                          </svg>
                        </span>
                    </button>
                    <div class="x-content max-h-full overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution
                            you can turn the complexity of your project into an optimal sequence of actions that reduce
                            risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200 x-accordion">
                    <button
                        class="btn-accordion w-full flex justify-between items-center py-5 text-slate-800 toggle-accordion">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span class="x-icon text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                        </svg>
                    </span>
                    </button>
                    <div class="x-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution
                            you can turn the complexity of your project into an optimal sequence of actions that reduce
                            risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image Section -->
            <video autoplay loop muted class="w-full md:w-2/3 lg:w-3/4 rounded-r-lg h-96 object-cover" style="object-fit: cover;">
                <source src="{{ asset('assets/4784453_Mumbai_India_1280x720.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- Ideal For Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="px-4 md:px-6">
            <h2 class="text-3xl font-bold mb-4">Ideal For</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-5xl">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="flex flex-col md:flex-row items-start mb-12  px-4 md:px-6">
            <!-- Image Section -->
            <video autoplay loop muted class="w-full md:w-2/3 lg:w-3/4 rounded-l-lg h-96 object-cover" style="object-fit: cover;">
                <source src="{{ asset('assets/1472787_People_Industry_3840x2160.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Accordion Section -->
            <div class="flex justify-center items-center flex-col bg-[#646464] dark:bg-gray-800 p-6 rounded-r-lg  w-full md:w-1/3 lg:w-1/4 h-auto md:h-96">
                <div class="w-full border-b border-slate-200 x-accordion">
                    <button
                        class="btn-accordion text-white w-full flex justify-between items-center py-5 toggle-accordion">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span class="x-icon text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 text-orange-600">
                            <path
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                        </svg>
                    </span>
                    </button>
                    <div class="x-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-white">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution
                            you can turn the complexity of your project into an optimal sequence of actions that reduce
                            risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200 x-accordion">
                    <button
                        class="btn-accordion text-white w-full flex justify-between items-center py-5 toggle-accordion">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span class="x-icon text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 text-orange-600">
                            <path
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                        </svg>
                    </span>
                    </button>
                    <div class="x-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-white">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution
                            you can turn the complexity of your project into an optimal sequence of actions that reduce
                            risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200 x-accordion">
                    <button
                        class="btn-accordion text-white w-full flex justify-between items-center py-5 toggle-accordion">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span class="x-icon text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 text-orange-600">
                            <path
                                d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                        </svg>
                    </span>
                    </button>
                    <div class="x-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-white">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution
                            you can turn the complexity of your project into an optimal sequence of actions that reduce
                            risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
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
