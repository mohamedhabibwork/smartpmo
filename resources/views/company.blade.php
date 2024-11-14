<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/hero_background.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Company</h1>
        </div>
    </section>

    <!-- Our Vision Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="flex flex-col md:flex-row items-start mb-12">
            <img src="{{ asset('assets/img-1.jpg') }}" alt="Vision Image" class="w-full md:w-1/2 aspect-video rounded-lg mb-4 md:mb-0 md:mr-6">
            <div class="md:w-1/2">
                <h2 class="md:text-6xl text-3xl font-bold mb-4">Our Vision</h2>
                <p class="text-gray-700 dark:text-gray-300">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text...</p>
            </div>
        </div>

        <!-- Our Mission Section -->
        <div class="flex flex-col md:flex-row items-start mb-12">
            <div class="md:w-1/2 md:mr-6">
                <h2 class="md:text-6xl text-3xl font-bold mb-4">Our Mission</h2>
                <p class="text-gray-700 dark:text-gray-300">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text...</p>
            </div>
            <img src="{{ asset('assets/img-2.jpg') }}" alt="Mission Image" class="w-full md:w-1/2 aspect-video rounded-lg mb-4 md:mb-0">
        </div>

        <!-- Our Story Section -->
        <div class="lg:w-full mx-auto shadow-xl rounded-3xl overflow-hidden min-h-96" style="backdrop-filter: blur(13px)">
            <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative h-full">
                <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ asset('assets/img-3.jpg') }}">
                <div class="text-center relative z-10 w-full">
                    <h2 class="md:text-3xl text-2xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                    <p class="leading-relaxed">Skateboard +1 mustache fixie paleo lumbersexual. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aliquid atque dolore doloribus eaque est, exercitationem explicabo fugit laudantium maxime minus nobis officia qui saepe sed sit velit voluptate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="mb-8">
            <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Our Team</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 gap-8">
            <!-- Team Member 1 -->
            <div class="flex items-center md:flex-row flex-col h-52 rounded-3xl overflow-hidden relative bg-[#5F5F5F]">
                <img src="{{ asset('assets/member.png') }}" alt="Team Member 1" class="aspect-video object-cover flex h-full justify-start">
                <div class="flex items-center justify-center w-full">
                    <div class="text-[#CA822B]">
                        <h3 class="md:text-5xl font-bold">Dr. Hossam Jerdi</h3>
                        <p class="text-2xl">CEO & Founder</p>
                    </div>
                </div>
                <div class="flex justify-end items-end w-fit px-20">
                    <div class="flex gap-3">
                        <!-- Social Icons -->
                        <a href="#" class="h-12 w-12 rounded-full flex items-center justify-center border border-white text-2xl text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="h-12 w-12 rounded-full flex items-center justify-center border border-white text-2xl text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="h-12 w-12 rounded-full flex items-center justify-center border border-white text-2xl text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="flex items-center md:flex-row flex-col h-52 rounded-3xl overflow-hidden relative bg-white">
                <img src="{{ asset('assets/member.png') }}" alt="Team Member 1" class="aspect-video object-cover flex h-full justify-start">
                <div class="flex items-center justify-center w-full">
                    <div class="text-black">
                        <h3 class="md:text-5xl font-bold">Dr. Hossam Jerdi</h3>
                        <p class="text-2xl">CEO & Founder</p>
                    </div>
                </div>
                <div class="flex justify-end items-end w-fit px-20">
                    <div class="flex gap-3">
                        <!-- Social Icons -->
                        <a href="#" class="h-12 w-12 rounded-full flex items-center justify-center border border-black text-2xl text-black"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="h-12 w-12 rounded-full flex items-center justify-center border border-black text-2xl text-black"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="h-12 w-12 rounded-full flex items-center justify-center border border-black text-2xl text-black"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
