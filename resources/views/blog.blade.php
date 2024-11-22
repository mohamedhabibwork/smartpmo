<x-layout.app>

    <!-- Hero Section -->
    <section class="relative w-full h-64 flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white max-w-2xl mx-auto px-6">
            <h1 class="text-4xl font-bold">Resources / Blog</h1>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="container mx-auto py-12 px-6 overflow-hidden">
        <!-- Case Study Entries -->
        <div class="space-y-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Discover. Learn. Grow</h2>
                <p class="x-subtitle"><span>Our Blog</span></p>
            </div>

            <div class="flex flex-col justify-center items-center" data-aos="fade-down" data-aos-duration ="1000">
                <div class="image-container">
                    <img src="{{asset('assets/blog-1.png')}}" class="responsive-image">
                    <div class="flex justify-between items-center mt-8">
                        <h3 class="text-3xl">Lorem ipsum</h3>
                        <p>24 Sep 2024</p>
                    </div>
                </div>
            </div>


            <section class="container mx-auto  px-6">
                <div class="grid grid-cols-1  md:grid-cols-12  items-center">
                    <div class="md:col-span-6 pr-2 rounded-lg " data-aos="fade-right" data-aos-duration ="1000">
                        <img src="{{asset('assets/blog-1.png')}}" class="w-full">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                    <div class="md:col-span-6  pr-2 rounded-lg " data-aos="fade-left" data-aos-duration ="1000">
                        <img src="{{asset('assets/blog-1.png')}}">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                </div>
            </section>

            <section class="container mx-auto  px-6">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                    <!-- 8-column section -->
                    <div class="md:col-span-4  rounded-lg " data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                        <img src="{{asset('assets/blog-1.png')}}">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                    <!-- 4-column section -->
                    <div class="md:col-span-4   rounded-lg " data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
                        <img src="{{asset('assets/blog-1.png')}}">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                    <div class="md:col-span-4   rounded-lg " data-aos="flip-left" data-aos-duration="1000" data-aos-delay="900">
                        <img src="{{asset('assets/blog-1.png')}}">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                </div>
            </section>
            <section class="container mx-auto  px-6">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                    <!-- 8-column section -->
                    <div class="md:col-span-4  rounded-lg " data-aos="flip-right" data-aos-duration="1000" data-aos-delay="300">
                        <img src="{{asset('assets/blog-1.png')}}">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                    <!-- 4-column section -->
                    <div class="md:col-span-4   rounded-lg " data-aos="flip-right" data-aos-duration="1000" data-aos-delay="600">
                        <img src="{{asset('assets/blog-1.png')}}">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                    <div class="md:col-span-4   rounded-lg " data-aos="flip-right" data-aos-duration="1000" data-aos-delay="900">
                        <img src="{{asset('assets/blog-1.png')}}">
                        <div class="flex justify-between items-center mt-8  ">
                            <h3 class="text-xl">Lorem ipsum</h3>
                            <p>24 Sep 2024</p>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </section>

</x-layout.app>
