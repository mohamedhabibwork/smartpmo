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
            <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-5xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="flex flex-col md:flex-row items-start mb-12 gap-6 px-4 md:px-6">
            <!-- Accordion Section -->
            <div class="flex justify-center items-center flex-col bg-gray-200 dark:bg-gray-800 p-6 rounded-lg w-full md:w-1/2 lg:w-1/4 h-auto md:h-96">
                <!-- Accordion Items -->
                <div class="w-full border-b border-slate-200">
                    <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                    </button>
                    <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution you can turn the complexity of your project into an optimal sequence of actions that reduce risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200">
                    <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                    </button>
                    <div id="content-2" class="max-h-full overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution you can turn the complexity of your project into an optimal sequence of actions that reduce risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200">
                    <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                    </button>
                    <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            MWhether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution you can turn the complexity of your project into an optimal sequence of actions that reduce risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image Section -->
            <img src="{{ asset('assets/Mask group-3.png') }}" alt="Industries Image" class="w-full md:w-2/3 lg:w-1/2 rounded-lg h-96 object-cover">
        </div>
    </section>

    <!-- Ideal For Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="px-4 md:px-6">
            <h2 class="text-3xl font-bold mb-4">Ideal For</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-8 max-w-5xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="flex flex-col md:flex-row items-start mb-12 gap-6 px-4 md:px-6">
            <!-- Image Section -->
            <img src="{{ asset('assets/Mask group-7.png') }}" alt="Ideal For Image" class="w-full md:w-2/3 lg:w-1/2 rounded-lg h-96 object-cover">

            <!-- Accordion Section -->
            <div class="flex justify-center items-center flex-col bg-gray-200 dark:bg-gray-800 p-6 rounded-lg w-full md:w-1/2 lg:w-1/4 h-auto md:h-96">
                <div class="w-full border-b border-slate-200">
                    <button onclick="toggleAccordion(4)" class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span id="icon-4" class="text-slate-800 transition-transform duration-300 rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                    </button>
                    <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            Whether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution you can turn the complexity of your project into an optimal sequence of actions that reduce risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200">
                    <button onclick="toggleAccordion(5)" class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span id="icon-5" class="text-slate-800 transition-transform duration-300 rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                    </button>
                    <div id="content-5" class="max-h-full overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            Whether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution you can turn the complexity of your project into an optimal sequence of actions that reduce risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
                <div class="w-full border-b border-slate-200">
                    <button onclick="toggleAccordion(6)" class="w-full flex justify-between items-center py-5 text-slate-800">
                        <span class="font-bold text-3xl">Infrastructure</span>
                        <span id="icon-6" class="text-slate-800 transition-transform duration-300 rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                    </button>
                    <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            Whether building a tunnel, a highway, or an airport, with Frontline’s AI-powered solution you can turn the complexity of your project into an optimal sequence of actions that reduce risk while optimizing time and budget.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

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
