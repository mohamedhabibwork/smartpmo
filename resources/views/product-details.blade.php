<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Products</h1>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="container mx-auto py-12 px-6 overflow-hidden">
        <div class="flex justify-center items-center flex-col"  data-aos="flip-right" data-aos-duration="1000">
            <h2 class="text-3xl font-bold mb-4">Our Products</h2>
            <img src="{{asset('assets/Mask group-8.png')}}">
        </div>
        <section class="container  py-12 px-4">
            <div class="relative flex gap-24  flex-col items-center">
                <!-- Vertical Line -->
                <div class="absolute w-1 bg-gray-300 h-full left-1/2 transform -translate-x-1/2" data-aos="fade-down" data-aos-duration="1000" ></div>

                <!-- Timeline Item 1 -->
                <div class="flex justify-start items-center md:flex-row w-full   py-8">
                    <div class="flex justify-start w-full md:w-1/2 pr-8">
                        <div class="max-w-md " data-aos="fade-right" data-aos-duration="1000">
                            <h3 class="text-xl font-bold">Feature 1</h3>
                            <p class="text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center w-12 h-12 bg-white border-2 border-black rounded-full absolute left-1/2 transform -translate-x-1/2">
                        <!-- Icon in the middle -->
                        <span class="text-green-500 font-bold" data-aos="fade-down" data-aos-duration="1000" ><div class="small-circle" ></div></span>
                    </div>
                    <div class="flex justify-end w-full md:w-1/2 pl-8" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{asset('assets/image.png')}}" alt="Feature Image" class="w-64 h-auto rounded-lg shadow-md">
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="flex justify-start items-center flex-row-reverse gap-14  w-full  py-8">
                    <div class="flex justify-end w-full md:w-1/2 pl-8">
                        <div class="max-w-md " data-aos="fade-left" data-aos-duration="1000">
                            <h3 class="text-xl font-bold">Feature 2</h3>
                            <p class="text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center w-12 h-12 bg-white border-2 border-black rounded-full absolute left-1/2 transform -translate-x-1/2">
                        <span class="text-green-500 font-bold" data-aos="fade-down" data-aos-duration="1000"><div class="small-circle"></div></span>
                    </div>
                    <div class="flex justify-start w-full md:w-1/2 pr-8" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{asset('assets/image-2.png')}}" alt="Feature Image" class="w-64 h-auto rounded-lg shadow-md">
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="flex justify-start items-center md:flex-row w-full  py-8">
                    <div class="flex justify-start w-full md:w-1/2 pr-8">
                        <div class="max-w-md " data-aos="fade-right" data-aos-duration="1000">
                            <h3 class="text-xl font-bold">Feature 1</h3>
                            <p class="text-gray-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center w-12 h-12 bg-white border-2 border-black rounded-full absolute left-1/2 transform -translate-x-1/2">
                        <!-- Icon in the middle -->
                        <span class="text-green-500 font-bold" data-aos="fade-down" data-aos-duration="1000"><div class="small-circle"></div></span>
                    </div>
                    <div class="flex justify-end w-full md:w-1/2 pl-8" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{asset('assets/image-3.png')}}" alt="Feature Image" class="w-64 h-auto rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="container mx-auto py-12 px-6 text-center">
        <!-- Title -->
        <h2 class="text-3xl font-bold mb-8">Case Studies</h2>

        <!-- Carousel Container -->
        <div class="relative" id="caseStudiesCarousel">
            <!-- Carousel Items -->
            <div class="flex overflow-hidden w-full">
                <!-- Slide 1 -->
                <div class="flex-none w-full transition-transform duration-500 ease-in-out" data-carousel-item>
                    <div class="flex flex-col items-center">
                        <img src="{{asset('assets/carousel-1.png')}}" alt="Case Study 1" class="w-3/4 md:w-1/2 rounded-lg shadow-lg mb-4">
                        <h3 class="text-lg font-semibold mt-2">Project Name </h3>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="flex-none w-full transition-transform duration-500 ease-in-out hidden" data-carousel-item>
                    <div class="flex flex-col items-center">
                        <img src="{{asset('assets/carousel-1.png')}}" alt="Case Study 2" class="w-3/4 md:w-1/2 rounded-lg shadow-lg mb-4">
                        <h3 class="text-lg font-semibold mt-2">Project Name </h3>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="flex-none w-full transition-transform duration-500 ease-in-out hidden" data-carousel-item>
                    <div class="flex flex-col items-center">
                        <img src="{{asset('assets/carousel-1.png')}}" alt="Case Study 3" class="w-3/4 md:w-1/2 rounded-lg shadow-lg mb-4">
                        <h3 class="text-lg font-semibold mt-2">Project Name </h3>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <div class="absolute inset-0 flex justify-between items-center px-4">
                <!-- Previous Button -->
                <button class="text-gray-800 bg-white rounded-full p-2 shadow hover:bg-gray-200" id="prevButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Next Button -->
                <button class="text-gray-800 bg-white rounded-full p-2 shadow hover:bg-gray-200" id="nextButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <div class="bg-gray-100 flex items-center justify-center">
        <section class="relative w-full min-h-[500px] bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('assets/freepik__expand__71645.png') }}');">
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>

            <!-- Outer Border Box -->
            <div class="w-11/12  h-4/5 border-4 border-white rounded-2xl p-5" data-aos="flip-right" data-aos-duration="1000">
                <!-- Centered Content Box -->
                <div class="relative z-10 max-w-full p-8 md:p-12 bg-transparent">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Still got questions or need a tailor-made plan?</h1>
                    <p class="text-gray-300 md:mb-32  ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="flex flex-col md:flex-row  justify-start items-start">
                        <a href="#" class="bg-primary-600 hover:bg-primary-700 text-white font-semibold px-6 py-3 rounded-md mb-5 mr-3">Contact Us</a>
                        <a href="#" class="bg-primary-600 hover:bg-primary-700 text-white font-semibold px-6 py-3 rounded-md">Book a demo</a>
                    </div>

                </div>
            </div>

        </section>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('#caseStudiesCarousel [data-carousel-item]');
        let currentIndex = 0;

        const showSlide = (index) => {
            items.forEach((item, idx) => {
                item.classList.add('hidden');
                item.classList.remove('w-full');
            });
            items[index].classList.remove('hidden');
            items[index].classList.add('w-full');
            currentIndex = index;
        };

        const nextSlide = () => {
            const newIndex = (currentIndex + 1) % items.length;
            showSlide(newIndex);
        };

        const prevSlide = () => {
            const newIndex = (currentIndex - 1 + items.length) % items.length;
            showSlide(newIndex);
        };

        document.getElementById('nextButton').addEventListener('click', nextSlide);
        document.getElementById('prevButton').addEventListener('click', prevSlide);

        // Initial display
        showSlide(currentIndex);
    });

</script>
</x-layout.app>
