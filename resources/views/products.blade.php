<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/hero_background.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Products</h1>
        </div>
    </section>

    <!-- Our Products Section with Responsive Tabs -->
    <section class="mx-auto md:py-24 py-16 dark:bg-gray-800 rounded-lg bg-[#d9d9d9]" x-data="{ activeTab: 'projectAnalysis' }">
        <div class="container mx-auto" data-aos="fade-up" data-aos-duration="1000">
            <!-- Title and Description -->
            <div class="mb-8">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Our Products</h2>
                <p class="text-gray-600 dark:text-gray-300 mt-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
            </div>

            <!-- Responsive Tab Navigation -->
            <div class="flex flex-wrap justify-center gap-4 mb-8 bg-white p-2 rounded-lg">
                <button @click="activeTab = 'projectAnalysis'"
                        :class="{ 'border-primary-500 text-primary-500 font-bold': activeTab === 'projectAnalysis', 'border-transparent': activeTab !== 'projectAnalysis' }"
                        class="px-4 py-2 w-full md:w-auto text-center text-xl border-b-2">
                    Project Analysis
                </button>
                <button @click="activeTab = 'projectControl'"
                        :class="{ 'border-primary-500 text-primary-500 font-bold': activeTab === 'projectControl', 'border-transparent': activeTab !== 'projectControl' }"
                        class="px-4 py-2 w-full md:w-auto text-center text-xl border-b-2">
                    Project Control
                </button>
                <button @click="activeTab = 'digestAccumulate'"
                        :class="{ 'border-primary-500 text-primary-500 font-bold': activeTab === 'digestAccumulate', 'border-transparent': activeTab !== 'digestAccumulate' }"
                        class="px-4 py-2 w-full md:w-auto text-center text-xl border-b-2">
                    Digest & Accumulate
                </button>
            </div>

            <!-- Responsive Tab Content -->
            <div x-show="activeTab === 'projectAnalysis'" class="flex flex-col lg:flex-row items-start space-y-6 lg:space-y-0 lg:space-x-6" x-cloak>
                <!-- Project Analysis Content -->
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Architectural Design & Planning</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <a href="#" class="x-learn-more">Learn more</a>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('assets/img-2.jpg') }}" alt="Dashboard Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image URL -->
                </div>
            </div>

            <div x-show="activeTab === 'projectControl'" class="flex flex-col lg:flex-row items-start space-y-6 lg:space-y-0 lg:space-x-6" x-cloak>
                <!-- Project Control Content -->
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Project Management Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Explore our comprehensive project control systems for effective management.
                    </p>
                    <a href="#" class="x-learn-more">Learn more</a>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('assets/img-3.jpg') }}" alt="Project Control Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image URL -->
                </div>
            </div>

            <div x-show="activeTab === 'digestAccumulate'" class="flex flex-col lg:flex-row items-start space-y-6 lg:space-y-0 lg:space-x-6" x-cloak>
                <!-- Digest & Accumulate Content -->
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Data Integration & Accumulation</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Integrate data from multiple sources to gain insights into project performance.
                    </p>
                    <a href="#" class="x-learn-more">Learn more</a>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('assets/img-3.jpg') }}" alt="Digest & Accumulate Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image URL -->
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="container mx-auto p-8 md:p-16 bg-white dark:bg-gray-800 my-20">
        <!-- Title and Description -->
        <div class="mb-12" data-aos="fade" data-aos-duration="1000">
            <h2 class="md:text-6xl text-4xl font-bold text-gray-900 dark:text-gray-100">How It Works</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
            </p>
        </div>

        <!-- Steps Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div
                class="bg-gray-800 dark:bg-gray-900 text-white p-6 rounded-lg shadow-lg flex flex-col justify-between"
                data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300"
            >
                <div class="mb-4">
                <span
                    class="inline-block bg-secondary-400 text-white text-xl font-bold px-4 py-2 rounded-full mb-4">1</span>
                    <h3 class="text-2xl font-bold mb-2">Digest & Accumulate</h3>
                    <p class="text-gray-300">
                        We integrate data from your project management software (Primavera P6, Microsoft Project, Asta
                        Powerproject, etc.), Excel and PDF reports, using our automated secured data connectors.
                    </p>
                </div>
                <a href="#" class="text-secondary-500 hover:underline">Learn more</a>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-gray-800 dark:bg-gray-900 text-white p-6 rounded-lg shadow-lg flex flex-col justify-between"
                data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600"
            >
                <div class="mb-4">
                <span
                    class="inline-block bg-secondary-400 text-white text-xl font-bold px-4 py-2 rounded-full mb-4">2</span>
                    <h3 class="text-2xl font-bold mb-2">Analyze & Learn</h3>
                    <p class="text-gray-300">
                        Our proprietary AI algorithms learn and transfer experience from historical projects.
                    </p>
                </div>
                <a href="#" class="text-secondary-500 hover:underline">Learn more</a>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-gray-800 dark:bg-gray-900 text-white p-6 rounded-lg shadow-lg flex flex-col justify-between"
                data-aos="flip-left" data-aos-duration="1000" data-aos-delay="900"
            >
                <div class="mb-4">
                <span
                    class="inline-block bg-secondary-400 text-white text-xl font-bold px-4 py-2 rounded-full mb-4">3</span>
                    <h3 class="text-2xl font-bold mb-2">Project Intelligence</h3>
                    <p class="text-gray-300">
                        Predict project outcomes, predict and measure unforeseen risks, recommend corrective actions
                        throughout the project lifecycle.
                    </p>
                </div>
                <a href="#" class="text-secondary-500 hover:underline">Learn more</a>
            </div>
        </div>
    </section>
</x-layout.app>
