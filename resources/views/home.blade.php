<x-layout.app>


    <!-- Hero Section with Video Background -->
    <section class="relative w-full h-screen flex items-center justify-center text-center">
        <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover" style="z-index: -1;">
            <source src="{{ asset('assets/Ai_Robotic.mp4') }}" type="video/mp4"> <!-- Replace with actual video path -->
        </video>
        <div class="bg-black bg-opacity-50 w-full h-full absolute"></div>
        <div class="relative z-10 text-white max-w-2xl mx-auto px-6">
            <h1 class="text-4xl font-bold mb-4">AI Platform for Project Management Excellence</h1>
            <p class="text-lg mb-8">Re-imagine what is controllable in project management</p>
            <a href="#" class="bg-primary-700 hover:bg-primary-800 text-white font-semibold px-6 py-3 rounded-md">Request Demo</a>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="container mx-auto py-12 px-6 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h2 class="text-3xl font-bold mb-4">Who we are?</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
            <a href="#" class="bg-primary-700 hover:bg-primary-800 text-white font-semibold px-4 py-2 rounded-md">Learn More</a>
        </div>
        <div class="md:w-1/2">
            <img src="{{ asset('assets/freepik__background__56703.png') }}" alt="Robot" class="w-full h-auto rounded-lg">
        </div>
    </section>

    <!-- Our Solutions Section -->
    <section
        class="mx-auto p-8 md:p-16 flex flex-col md:flex-row items-center md:items-start container my-10">
        <!-- Image Section -->
        <div class="md:w-1/3 flex justify-center md:justify-start">
            <img src="{{ asset('assets/robot-hand-side-view-background-presenting-technology-gesture.png') }}"
                 alt="Robot Hand" class="w-80 h-80"> <!-- Replace with the actual image URL -->
        </div>

        <!-- Content Section -->
        <div class="md:w-2/3 space-y-8">
            <!-- Title -->
            <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100">Our Solutions</h2>

            <!-- Live Projects -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-2">Live Projects</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                </p>
                <a href="#" class="text-secondary-600 dark:text-secondary-400 text-xl">→</a>
            </div>

            <!-- Project Postmortem -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-2">Project Postmortem</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                </p>
                <a href="#" class="text-secondary-600 dark:text-secondary-400 text-xl">→</a>
            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section class="container mx-auto p-8 md:p-16 bg-white dark:bg-gray-800">
        <!-- Title and Description -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100">How It Works</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
            </p>
        </div>

        <!-- Steps Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-gray-800 dark:bg-gray-900 text-white p-6 rounded-lg shadow-lg flex flex-col justify-between">
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
            <div class="bg-gray-800 dark:bg-gray-900 text-white p-6 rounded-lg shadow-lg flex flex-col justify-between">
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
            <div class="bg-gray-800 dark:bg-gray-900 text-white p-6 rounded-lg shadow-lg flex flex-col justify-between">
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


    <!-- Our Products Section with Responsive Tabs -->
    <section class="container mx-auto p-6 md:p-12 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg" x-data="{ activeTab: 'projectAnalysis' }">
        <!-- Title and Description -->
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100">Our Products</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
        </div>

        <!-- Responsive Tab Navigation -->
        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <button @click="activeTab = 'projectAnalysis'" :class="{ 'bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100': activeTab === 'projectAnalysis', 'bg-gray-200 dark:bg-gray-800 text-gray-600 dark:text-gray-400': activeTab !== 'projectAnalysis' }" class="px-4 py-2 font-semibold rounded-md shadow-md w-full md:w-auto text-center">
                Project Analysis
            </button>
            <button @click="activeTab = 'projectControl'" :class="{ 'bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100': activeTab === 'projectControl', 'bg-gray-200 dark:bg-gray-800 text-gray-600 dark:text-gray-400': activeTab !== 'projectControl' }" class="px-4 py-2 font-semibold rounded-md w-full md:w-auto text-center">
                Project Control
            </button>
            <button @click="activeTab = 'digestAccumulate'" :class="{ 'bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100': activeTab === 'digestAccumulate', 'bg-gray-200 dark:bg-gray-800 text-gray-600 dark:text-gray-400': activeTab !== 'digestAccumulate' }" class="px-4 py-2 font-semibold rounded-md w-full md:w-auto text-center">
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
                <a href="#" class="text-secondary-600 dark:text-secondary-400 font-semibold hover:underline">Learn more</a>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('assets/dashboard.png') }}" alt="Dashboard Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image URL -->
            </div>
        </div>

        <div x-show="activeTab === 'projectControl'" class="flex flex-col lg:flex-row items-start space-y-6 lg:space-y-0 lg:space-x-6" x-cloak>
            <!-- Project Control Content -->
            <div class="lg:w-1/2">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Project Management Solutions</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Explore our comprehensive project control systems for effective management.
                </p>
                <a href="#" class="text-secondary-600 dark:text-secondary-400 font-semibold hover:underline">Learn more</a>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('assets/project_control.png') }}" alt="Project Control Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image URL -->
            </div>
        </div>

        <div x-show="activeTab === 'digestAccumulate'" class="flex flex-col lg:flex-row items-start space-y-6 lg:space-y-0 lg:space-x-6" x-cloak>
            <!-- Digest & Accumulate Content -->
            <div class="lg:w-1/2">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Data Integration & Accumulation</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Integrate data from multiple sources to gain insights into project performance.
                </p>
                <a href="#" class="text-secondary-600 dark:text-secondary-400 font-semibold hover:underline">Learn more</a>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('assets/digest_accumulate.png') }}" alt="Digest & Accumulate Screenshot" class="w-full h-auto rounded-lg shadow-md"> <!-- Replace with actual image URL -->
            </div>
        </div>
    </section>

    <!-- Consulting Team Section -->
    <section class="container mx-auto p-8 md:p-16 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg flex flex-col md:flex-row items-center md:items-start space-y-8 md:space-y-0 md:space-x-8">
        <!-- Text Content -->
        <div class="md:w-2/3">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4">Our consulting team drives your success</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-6">
                Our team is comprised of international artificial intelligence experts, software developers, and infrastructure engineers, having worked in world-class companies, including Facebook, Google, Oracle, and Equinor.
            </p>
            <div class="mt-4">
                <p class="text-xl font-bold text-gray-900 dark:text-gray-100">Dr. Houssem Jerbi</p>
                <p class="text-gray-600 dark:text-gray-400">Founder & CEO at Smart PMO</p>
            </div>
        </div>

        <!-- Image Content -->
        <div class="md:w-1/3 flex justify-center md:justify-end">
            <img src="{{ asset('assets/houssem_jerbi.jpg') }}" alt="Dr. Houssem Jerbi" class="w-64 h-auto rounded-lg shadow-md"> <!-- Replace with the actual image URL -->
        </div>
    </section>


    <!-- Stay Updated Section -->
    <section class="container mx-auto p-8 md:p-16 bg-gray-100 dark:bg-gray-800 rounded-lg">
        <!-- Title -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-gray-100">Stay Updated</h2>
            <p class="text-gray-600 dark:text-gray-300">Latest News</p>
            <div class="mt-2 border-t-2 border-gray-300 dark:border-gray-600 w-20 mx-auto"></div>
        </div>

        <!-- News Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Card 1 -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex flex-col">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/architecture_icon.svg') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Architectural Design & Planning</h3>
                </div>
                <img src="{{ asset('assets/news1.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <a href="#" class="mt-auto inline-flex items-center justify-center w-8 h-8 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">→</span>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex flex-col">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/interior_design_icon.svg') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Interior Design & Styling Services</h3>
                </div>
                <img src="{{ asset('assets/news2.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <a href="#" class="mt-auto inline-flex items-center justify-center w-8 h-8 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">→</span>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex flex-col">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/decor_icon.svg') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Decorative Items & Furniture</h3>
                </div>
                <img src="{{ asset('assets/news3.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <a href="#" class="mt-auto inline-flex items-center justify-center w-8 h-8 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">→</span>
                </a>
            </div>

            <!-- Card 4 -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex flex-col">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/turnkey_icon.svg') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Turnkey Services & Coordination</h3>
                </div>
                <img src="{{ asset('assets/news4.jpg') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <a href="#" class="mt-auto inline-flex items-center justify-center w-8 h-8 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">→</span>
                </a>
            </div>

        </div>
    </section>


    <div class="bg-gray-100 flex items-center justify-center ">
        <section class="relative w-full min-h-[500px] bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('assets/building_background.jpg') }}');">
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>

            <!-- Outer Border Box -->
            <div class="absolute w-11/12 md:w-3/4 h-4/5 border border-white rounded-2xl" style="border-color: rgba(255, 255, 255, 0.5);"></div>

            <!-- Centered Content Box -->
            <div class="relative z-10 max-w-lg mx-auto text-center p-8 md:p-12 bg-transparent">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">How can we help you today?</h1>
                <p class="text-gray-300 mb-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <a href="#" class="bg-primary-600 hover:bg-primary-700 text-white font-semibold px-6 py-3 rounded-md">Contact Us</a>
            </div>
        </section>
    </div>
    <!-- Help Section -->

</x-layout.app>
