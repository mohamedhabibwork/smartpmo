<x-layout.app>

    <!-- Hero Section with Video Background -->
    <section class="relative w-full h-screen flex justify-center items-center text-center">
        <video autoplay loop muted class="absolute inset-0 w-full h-full object-cover x-rotate-y" style="z-index: -1;">
            <source src="{{ asset('assets/Ai_Robotic.mp4') }}" type="video/mp4"> <!-- Replace with actual video path -->
        </video>
        <div class="bg-black bg-opacity-50 w-full h-full absolute"></div>
        <div class="relative z-10 text-white max-w-2xl  px-6 flex justify-center items-center flex-col ml-6">
            <h1 class="text-4xl font-bold mb-4">AI Platform for Project Management Excellence</h1>
            <p class="text-lg mb-8">Re-imagine what is controllable in project management</p>
            <a href="#" class="bg-primary-700 hover:bg-primary-800 text-white font-semibold px-6 py-3 rounded-md">Request Demo</a>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-center section-gradient-background">

            <div class="md:w-1/2 mb-8 md:mb-0" data-aos="flip-right" data-aos-duration="1000">
                <h2 class="text-3xl font-bold mb-4">Who we are?</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="#" class="bg-primary-700 hover:bg-primary-800 text-white font-semibold px-4 py-2 rounded-md mt-10">Learn More</a>
            </div>
            <div class="md:w-1/2" data-aos="flip-left" data-aos-duration="1000">
                <img src="{{ asset('assets/freepik__background__56703.png') }}" alt="Robot" class="w-full h-auto rounded-lg">
            </div>


    </section>

    <!-- Our Solutions Section -->
    <section
        class="mx-auto py-8 md:py-16 flex flex-col md:flex-row items-center md:items-start  bg-[#d9d9d9] section-gradient-background-2 solution">
        <!-- Image Section -->
        <div class="md:w-1/3" >
            <div>
                <h2
                    class="text-5xl font-bold text-gray-900 dark:text-gray-100 text-center mt-32"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000"
                >
                    Our Solutions
                </h2>
                <div class="x-rotate-y flex justify-end">
                    <img src="{{ asset('assets/robot-hand-side-view-background-presenting-technology-gesture.png') }}"

                         alt="Robot Hand" class="w-96 h-44 object-cover"> <!-- Replace with the actual image URL -->
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="md:w-2/3 flex items-center">
            <div class="space-y-8">
                <!-- Title -->

                <!-- Live Projects -->
                <div data-aos="flip-left" data-aos-duration="1000">
                    <h3 class="text-4xl font-bold text-gray-800 dark:text-gray-200 mb-2">Live Projects</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                    </p>
                    <a href="#" class="text-secondary-600 dark:text-secondary-400 text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </a>
                </div>

                <!-- Project Postmortem -->
                <div data-aos="flip-left" data-aos-duration="1500">
                    <h3 class="text-4xl font-bold text-gray-800 dark:text-gray-200 mb-2">Project Postmortem</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                    </p>
                    <a href="#" class="text-secondary-600 dark:text-secondary-400 text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section class="container mx-auto py-12 px-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg section-gradient-background">
        <div class="flex justify-start items-start flex-col" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-center mb-2">How It Works</h2>
            <p class=" text-gray-700 dark:text-gray-300 mb-12 max-w-5xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 relative ">
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">1</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Digest & Accumulate</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4 max-w-2xl">WWe integrate data from your project management software (Primavera P6, Microsoft Project, Asta Powerproject, etc.), Excel and PDF reports, using our automated secured data connectors</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step"data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">2</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Analyze & Learn</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Our proprietary AI algorithms learn and transfer experience from historical projects</p>
            </div>
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step"data-aos="flip-left" data-aos-duration="1000" data-aos-delay="900">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">3</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Project Intelligence</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Predict project outcomes, predict and measure unforeseen risks, recommend corrective actions throughout the project lifecycle</p>
            </div>
        </div>
    </section>


  <!-- Our Products Section with Responsive Tabs -->
    <x-products/>
    <!-- Consulting Team Section -->
    <section class="container mx-auto p-8 md:p-16 bg-gray-100 dark:bg-gray-800 flex flex-col md:flex-row items-center md:items-start space-y-8 md:space-y-0 md:space-x-8">
        <!-- Text Content -->
        <div class="md:w-2/3" data-aos="flip-right" data-aos-duration="1000">
            <h2 class="text-3xl md:text-5xl font-normal text-gray-900 dark:text-gray-100 mb-4">Our consulting team drives your success</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-6">
                Our team is comprised of international artificial intelligence experts, software developers, and infrastructure engineers, having worked in world-class companies, including Facebook, Google, Oracle, and Equinor.
            </p>
            <div class="mt-4">
                <p class="md:text-3xl text-xl font-normal text-gray-900 dark:text-gray-100">Dr. Houssem Jerbi</p>
                <p class="text-gray-600 dark:text-gray-400">Founder & CEO at Smart PMO</p>
            </div>
        </div>

        <!-- Image Content -->
        <div class="md:w-1/3 flex justify-center md:justify-end" data-aos="flip-left" data-aos-duration="1000">
            <img src="{{ asset('assets/image 46.png') }}" alt="Dr. Houssem Jerbi" class="w-64 h-auto rounded-lg shadow-md aspect-square max-w-full mx-auto block"> <!-- Replace with the actual image URL -->
        </div>
    </section>


    <!-- Stay Updated Section -->
    <section class="mx-auto p-8 md:p-16 dark:bg-gray-800 rounded-lg bg-[#d9d9d9]">
        <div class="container mx-auto">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Stay Updated</h2>
                <p class="x-subtitle"><span>Latest News</span></p>
                <div class="mt-2 border-t-2 border-gray-300 dark:border-gray-600 w-20 mx-auto"></div>
            </div>

            <!-- News Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 x-boxes-grid">

                <!-- Card 1 -->
                <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="400">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/fi_1221905.png') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Architectural Design & Planning</h3>
                    </div>
                    <img src="{{ asset('assets/Mask group (1).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="{{ route('blog-detail') }}" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="700">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/fi_1544051.png') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Interior Design & Styling Services</h3>
                    </div>
                    <img src="{{ asset('assets/Mask group (2).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="{{ route('blog-detail') }}" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1000">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/fi_1624169.png') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Decorative Items & Furniture</h3>
                    </div>
                    <img src="{{ asset('assets/Mask group (3).png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="{{ route('blog-detail') }}" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

                <!-- Card 4 -->
                <div class="flex flex-col justify-between p-4 md:border-r border-gray-800 dark:border-gray-300" data-aos="flip-right" data-aos-duration="1300">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/fi_3306960.png') }}" alt="Icon" class="w-8 h-8 mr-2"> <!-- Replace with actual icon -->
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 tracking-widest">Turnkey Services & Coordination</h3>
                    </div>
                    <img src="{{ asset('assets/Mask group-5.png') }}" alt="News Image" class="w-full h-40 object-cover rounded-lg mb-4"> <!-- Replace with actual image -->
                    <p class="text-black dark:text-gray-300 mb-4 font-semibold">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <a href="{{ route('blog-detail') }}" class="mt-auto inline-flex items-center justify-center w-12 h-12 bg-black dark:bg-secondary-600 text-white rounded-full hover:text-white hover:bg-secondary-500">
                    <span class="text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </span>
                    </a>
                </div>

            </div>
        </div>

    </section>


    <div class="bg-gray-100 flex items-center justify-center">
        <section class="relative w-full min-h-[500px] bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('assets/freepik__expand__71645.png') }}');">
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>

            <!-- Outer Border Box -->
            <div class="w-11/12 md:w-3/4 h-4/5 border-4 border-white rounded-2xl p-5" data-aos="flip-right" data-aos-duration="1000">
                <!-- Centered Content Box -->
                <div class="relative z-10 max-w-full p-8 md:p-12 bg-transparent">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">How can we help you today?</h1>
                    <p class="text-gray-300 md:mb-32 mb-10">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <a href="#" class="bg-primary-600 hover:bg-primary-700 text-white font-semibold px-6 py-3 rounded-md">Contact Us</a>
                </div>
            </div>


        </section>
    </div>
    <!-- Help Section -->

</x-layout.app>
