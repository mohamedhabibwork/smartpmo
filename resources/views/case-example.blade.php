<x-layout.app>

    <!-- Hero Section -->
    <section class="relative w-full h-64 flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white max-w-2xl mx-auto px-6">
            <h1 class="text-4xl font-bold">Resources / Case Studies / Case Study Example</h1>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="container mx-auto py-12 px-6">
        <!-- Case Study Entries -->
        <div class="space-y-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-6xl font-bold text-gray-900 dark:text-gray-100">Case Study Name</h2>
                <section class="container mx-auto  px-6">
                    <div class="grid grid-cols-1  md:grid-cols-12 gap-6">
                        <!-- 6-column section -->
                        <div class="md:col-span-6 p-6 rounded-lg flex flex-col lg:flex-row justify-between lg:items-start bg-[#D9D9D9] mt-8" data-aos="fade-right" data-aos-duration ="1000">
                            <div class="flex flex-col justify-center mb-5 items-center md:justify-between">
                                <img src="{{asset('assets/image 60.png')}}" class="w-20 h-20">
                                <p class="whitespace-nowrap mt-4">Company Name</p>
                            </div>
                            <div class="flex justify-start items-start text-left ml-5">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
                            </div>
                        </div>
                        <div class="md:col-span-6 p-6 rounded-lg  items-start bg-[#D9D9D9] mt-8" data-aos="fade-left" data-aos-duration ="1000">
                            <div class="flex justify-start items-start ml-4 mb-5">
                                <h4 class="font-bold">The Problem:</h4>
                            </div>
                            <div class="flex justify-start items-start text-left ml-5">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="flex justify-center items-center flex-col mt-10" data-aos="fade-down" data-aos-duration ="1000">
                <h4 class="font-bold text-3xl">The Solution</h4>
                <img src="{{asset('assets/Mask group-4.png')}}">
            </div>

            <div data-aos="fade-right" data-aos-duration ="1000">
                <h4 class="font-bold text-3xl">Description</h4>
                <p class="max-w-7xl">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance</p>
            </div>
            <div class="flex justify-center items-center flex-col" data-aos="fade-up" data-aos-duration ="1000">
                <h4 class="font-bold text-3xl mb-5">The Result</h4>
                <img src="{{asset('assets/6440703_Animation_Statistics_3840x2160 1.png')}}">
            </div>

        </div>
    </section>

</x-layout.app>
