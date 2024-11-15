<x-layout.app>

    <!-- Contact Us Section -->
    <section class="container mx-auto pb-12 ">
        <div class="page-header w-100">
            <h2 class="text-3xl font-bold text-center mb-2 text-white">Contact Us</h2>
        </div>

        <div class="">
            <h2 class="text-3xl font-bold text-center mb-2 text-black">Contact Us</h2>
            <p class="text-center text-gray-700 dark:text-gray-300 mb-8 text-black">Any question or remark? Just write us a message!</p>
        </div>

        <div class="container mx-auto px-10">
            <div class="flex flex-col md:flex-row bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">

                <!-- Contact Information -->
                <div class="relative bg-secondary-600 text-white p-8 md:w-1/3 flex justify-between flex-col contact-card">
                    <div class=" hidden lg:inline absolute w-[250px] h-[250px] bg-teal-600 rounded-full opacity-70 bottom-[-100px] right-[-90px] "></div>
                    <div class=" hidden lg:inline absolute w-[150px] h-[150px] bg-[#48484880] rounded-full opacity-70 bottom-[40px] right-[80px]"></div>

                    <!-- Contact Content -->
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Contact Information</h3>
                        <p class="mb-6 text-gray-300">Say something to start a live chat!</p>
                    </div>

                    <div>
                        <p class="flex items-center mb-10"><i class="fa-solid fa-phone-volume mr-3"></i> +1012 3456 789</p>
                        <p class="flex items-center mb-10"><i class="fa-solid fa-envelope mr-3"></i> demo@gmail.com</p>
                        <p class="flex items-center mb-10"><i class="fa-solid fa-location-dot mr-3"></i> 132 Dartmouth Street Boston, MA 02156, United States</p>
                    </div>

                    <div class="flex mt-6 space-x-4">
                        <a href="#" class="text-white bg-black w-10 h-10 flex items-center justify-center rounded-full">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-black bg-white w-10 h-10 flex items-center justify-center rounded-full">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="p-8 md:w-2/3 bg-gray-50 dark:bg-gray-900 z-20">
                    <form action="#" method="POST" class="space-y-6">
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="first-name" class="x-label">First Name</label>
                                <input type="text" id="first-name" name="first-name" class="x-input focus:border-b-black peer-focus:text-black">
                            </div>
                            <div class="w-1/2">
                                <label for="last-name" class="x-label">Last Name</label>
                                <input type="text" id="last-name" name="last-name" class="x-input focus:border-b-black peer-focus:text-black">
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="email" class="x-label text-gray-500 peer-focus:text-primary-600">Email</label>
                                <input type="email" id="email" name="email" class="x-input peer focus:border-b-black focus:outline-none">
                            </div>


                            <div class="w-1/2">
                                <label for="phone" class="x-label">Phone Number</label>
                                <input type="text" id="phone" name="phone" class="x-input focus:border-b-black peer-focus:text-black">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="x-label">Select Subject</label>
                            <div class="flex gap-0 md:gap-4">
                                <label class=" items-center">
                                    <input type="radio" name="subject" value="general-inquiry" class="text-primary-600 dark:bg-gray-700">
                                    <span class="ml-2">General Inquiry</span>
                                </label>
                                <label class=" items-center">
                                    <input type="radio" name="subject" value="general-inquiry" class="text-primary-600 dark:bg-gray-700">
                                    <span class="ml-2">General Inquiry</span>
                                </label>
                                <label class=" items-center">
                                    <input type="radio" name="subject" value="general-inquiry" class="text-primary-600 dark:bg-gray-700">
                                    <span class="ml-2">General Inquiry</span>
                                </label>
                                <label class=" items-center">
                                    <input type="radio" name="subject" value="general-inquiry" class="text-primary-600 dark:bg-gray-700">
                                    <span class="ml-2">General Inquiry</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="x-label">Message</label>
                            <textarea id="message" name="message" rows="4" class="x-input" placeholder="Write your message..."></textarea>
                        </div>
                        <div class="flex justify-end items-end flex-col relative pb-20">
                            <button type="submit" class="w-full md:w-auto bg-primary-600 hover:bg-primary-700 text-white font-semibold px-6 py-3 rounded-md ">
                                Send Message
                            </button>
                            <img src="{{asset('assets/letter_send 1.png')}}" alt="" class="send-img">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
