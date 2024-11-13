<x-layout.app>

    <!-- Contact Us Section -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-center mb-2">Contact Us</h2>
        <p class="text-center text-gray-700 dark:text-gray-300 mb-8">Any question or remark? Just write us a message!</p>

        <div class="flex flex-col md:flex-row bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">

            <!-- Contact Information -->
            <div class="bg-secondary-700 text-white p-8 md:w-1/3">
                <h3 class="text-2xl font-bold mb-4">Contact Information</h3>
                <p class="mb-6">Say something to start a live chat!</p>
                <div class="space-y-4">
                    <p class="flex items-center"><span class="material-icons mr-2">phone</span> +1012 3456 789</p>
                    <p class="flex items-center"><span class="material-icons mr-2">email</span> demo@gmail.com</p>
                    <p class="flex items-center"><span class="material-icons mr-2">location_on</span> 132 Dartmouth Street Boston, MA 02156, United States</p>
                </div>
                <div class="flex mt-6 space-x-4">
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="p-8 md:w-2/3 bg-gray-50 dark:bg-gray-900">
                <form action="#" method="POST" class="space-y-6">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="first-name" class="x-label">First Name</label>
                            <input type="text" id="first-name" name="first-name" class="x-input">
                        </div>
                        <div class="w-1/2">
                            <label for="last-name" class="x-label">Last Name</label>
                            <input type="text" id="last-name" name="last-name" class="x-input">
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="email" class="x-label">Email</label>
                            <input type="email" id="email" name="email" class="x-input">
                        </div>
                        <div class="w-1/2">
                            <label for="phone" class="x-label">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="x-input">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="x-label">Select Subject</label>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="subject" value="general-inquiry" class="text-primary-600 dark:bg-gray-700">
                                <span class="ml-2">General Inquiry</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="subject" value="support" class="text-primary-600 dark:bg-gray-700">
                                <span class="ml-2">Support</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="subject" value="feedback" class="text-primary-600 dark:bg-gray-700">
                                <span class="ml-2">Feedback</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="x-label">Message</label>
                        <textarea id="message" name="message" rows="4" class="x-input" placeholder="Write your message..."></textarea>
                    </div>

                    <button type="submit" class="w-full md:w-auto bg-primary-600 hover:bg-primary-700 text-white font-semibold px-6 py-3 rounded-md">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</x-layout.app>
