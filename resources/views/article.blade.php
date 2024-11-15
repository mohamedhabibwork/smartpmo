<x-layout.app>

    <!-- Hero Section -->
    <section class="relative w-full h-64 flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('{{ asset('assets/Header.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 text-white max-w-2xl mx-auto px-6">
            <h1 class="text-4xl font-bold">Resources / News / Article</h1>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="container mx-auto py-12 px-6">
        <!-- Case Study Entries -->
        <div class="space-y-12">
            <div class=" flex justify-center items-center mb-12">
                <img src="{{asset('assets/news.png')}}">
            </div>
        </div>

        <section class="container mx-auto py-12 px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                <!-- 8-column section -->
                <div class="md:col-span-8 p-6 rounded-lg ">
                    <div class="flex justify-between items-center mb-5">
                        <h3 class="font-bold text-3xl">Lorem ipsum</h3>
                        <p>24 Sep 2024</p>
                    </div>
                    <div class="relative overflow-hidden md:overflow-visible" id="text-container">
                        <p class="text-gray-700 md:leading-9">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            <span class="hidden lg:inline" id="extra-text">
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                            </span>
                        </p>
                        <button id="read-more-btn" class="text-blue-500 hover:underline mt-4 lg:hidden">Read More</button>
                    </div>
                </div>

                <!-- 4-column section -->
                <div class="md:col-span-4  p-6 rounded-lg ">
                   <div>
                       <img src="{{asset('assets/art-1.png')}}" class="mb-5">
                       <img src="{{asset('assets/art-2.png')}}" class="mb-5">
                       <img src="{{asset('assets/art-3.png')}}">
                   </div>
                </div>

            </div>
        </section>


    </section>
    <script>
        document.getElementById("read-more-btn").addEventListener("click", function() {
            const extraText = document.getElementById("extra-text");
            const button = document.getElementById("read-more-btn");

            if (extraText.classList.contains("hidden")) {
                extraText.classList.remove("hidden");
                button.innerText = "Read Less";
            } else {
                extraText.classList.add("hidden");
                button.innerText = "Read More";
            }
        });
    </script>
</x-layout.app>
