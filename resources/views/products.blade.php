<x-layout.app>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white">Our Products</h1>
        </div>
    </section>

    <!-- Our Products Section -->
    <x-products/>

    <!--What spmo section-->

    <section class="my-4">
        <div class="px-14 py-12">
            <h1 class="font-bold text-3xl">What SPMO delivers?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="flex ">
            <div class="pmo-card px-32 " data-aos="fade-up-right" data-aos-duration="1000">
                <img src="{{asset('assets/stat.png')}}" width="425" height="286" >
                <div class="card-content bg-white p-6 max-w-[425px]">
                    <h3 class="font-bold mb-3">Quickly spot budget and schedule deviations</h3>
                    <p class="max-w-sm">Track financial and physical progress with detailed charts, enabling you to promptly identify any issues and make necessary adjustments.</p>
                </div>
            </div>
            <div class="pmo-card px-32 mt-80" data-aos="fade-up-left" data-aos-duration="1000" >
                <img src="{{asset('assets/stat.png')}}" width="425" height="286" >
                <div class="card-content bg-white p-6 max-w-[425px]">
                    <h3 class="font-bold mb-3">Quickly spot budget and schedule deviations</h3>
                    <p class="max-w-sm">Track financial and physical progress with detailed charts, enabling you to promptly identify any issues and make necessary adjustments.</p>
                </div>
            </div>
        </div>
        <div class="flex ">
            <div class="pmo-card px-32 " data-aos="fade-up-right" data-aos-duration="1000">
                <img src="{{asset('assets/stat.png')}}" width="425" height="286" >
                <div class="card-content bg-white p-6 max-w-[425px]">
                    <h3 class="font-bold mb-3">Quickly spot budget and schedule deviations</h3>
                    <p class="max-w-sm">Track financial and physical progress with detailed charts, enabling you to promptly identify any issues and make necessary adjustments.</p>
                </div>
            </div>
            <div class="pmo-card px-32 mt-80" data-aos="fade-up-left" data-aos-duration="1000">
                <img src="{{asset('assets/stat.png')}}" width="425" height="286" >
                <div class="card-content bg-white p-6 max-w-[425px]">
                    <h3 class="font-bold mb-3">Quickly spot budget and schedule deviations</h3>
                    <p class="max-w-sm">Track financial and physical progress with detailed charts, enabling you to promptly identify any issues and make necessary adjustments.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- How It Works Section -->
    <section class="container mx-auto py-12 px-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg">

        <div class="flex justify-start items-start flex-col" data-aos="fade-right" data-aos-duration ="1000">
            <h2 class="text-3xl font-bold text-center mb-2">How It Works</h2>
            <p class=" text-gray-700 dark:text-gray-300 mb-12 max-w-5xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 relative ">
            <!-- Step 1 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">1</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Digest & Accumulate</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4 max-w-2xl">WWe integrate data from your project management software (Primavera P6, Microsoft Project, Asta Powerproject, etc.), Excel and PDF reports, using our automated secured data connectors</p>
            </div>
{{--            <div class="absolute gradient-background">5</div>--}}

            <!-- Step 2 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">2</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Analyze & Learn</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Our proprietary AI algorithms learn and transfer experience from historical projects</p>
            </div>

            <!-- Step 3 -->
            <div class="p-6 bg-white dark:bg-gray-700 rounded-lg shadow-md flex flex-col items-start step" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="900">
                <span class="text-xl font-bold text-white bg-secondary-600 rounded-full px-4 py-2 mb-4 step-num">3</span>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Project Intelligence</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Predict project outcomes, predict and measure unforeseen risks, recommend corrective actions throughout the project lifecycle</p>
            </div>
        </div>
    </section>
</x-layout.app>
