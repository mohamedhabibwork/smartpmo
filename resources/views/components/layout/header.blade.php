
<!-- Navigation -->
<header class="bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100 shadow" x-data="{ open: false }">
    <div class="container mx-auto py-4 px-10">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-xl font-bold text-primary-700 dark:text-primary-500 ">
                <img src="{{ asset('assets/logo.svg') }}" alt="Logo" class="h-16 inline me-4">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6 ms-5">
                <a href="{{ route('home') }}" class="hover:text-amber-700 dark:hover:text-primary-500">Home</a>
                <a href="{{ route('company') }}" class="hover:text-amber-700 dark:hover:text-primary-500">Company</a>
                <a href="{{ route('solutions') }}" class="hover:text-amber-700 dark:hover:text-primary-500">Our Solutions</a>
                <a href="{{ route('products') }}" class="hover:text-amber-700 dark:hover:text-primary-500">Products</a>
                <!-- Resources Dropdown -->
                <div x-data="{ open: false }" class="relative z-20">
                    <a href="#" @click="open = !open" class="block hover:text-amber-700">Resources <i class="fa-solid fa-caret-down"></i></a>
                    <div x-show="open" @click.away="open = false" x-cloak class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-md z-10 border-gray-700 border-1">
                        <a href="{{ route('case-study') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Case study</a>
                        <a href="{{ route('case-example') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Case study example</a>

                        <a href="{{ route('news') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">News</a>
                        <a href="{{ route('article') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Articles</a>
                        <a href="{{ route('blog') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Blog</a>
                        <a href="{{ route('blog-detail') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Blog-details</a>

                    </div>
                </div>
                <a href="{{ route('contact') }}" class="hover:text-amber-700 dark:hover:text-primary-500">Contact Us</a>
            </nav>

            <!-- Desktop Request Demo Button -->
            <div class="hidden md:flex ml-auto"> <!-- Added ml-auto here to push the button to the right -->
                <a href="#" class="bg-primary-700 dark:bg-primary-500 text-white px-4 py-2 rounded hover:bg-primary-800 dark:hover:bg-primary-600 me-4">Request Demo</a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="md:hidden">
                <button @click="open = !open" class="focus:outline-none">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <div class="w-full md:hidden">
            <!-- Mobile Menu -->
            <div x-show="open" x-cloak @click.away="open = false" class="block w-full bg-white dark:bg-gray-800 shadow-md rounded-b-md text-gray-800 dark:text-gray-100">
                <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-primary-700 dark:hover:bg-primary-500 hover:text-white">Home</a>
                <a href="{{ route('company') }}" class="block px-4 py-2 hover:bg-primary-700 dark:hover:bg-primary-500 hover:text-white">Company</a>
                <a href="{{ route('solutions') }}" class="block px-4 py-2 hover:bg-primary-700 dark:hover:bg-primary-500 hover:text-white">Our Solutions</a>
                <a href="{{ route('products') }}" class="block px-4 py-2 hover:bg-primary-700 dark:hover:bg-primary-500 hover:text-white">Products</a>
                <!-- Resources Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <a href="#" @click="open = !open" class="block px-4 py-2 hover:bg-primary-700 dark:hover:bg-primary-500 hover:text-white">Resources</a>
                    <div x-show="open" @click.away="open = false" x-cloak class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 shadow-lg rounded-md z-10">
                        <a href="{{ route('case-study') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Case study</a>
                        <a href="{{ route('news') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">News</a>
                        <a href="{{ route('article') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Articles</a>
                        <a href="{{ route('blog') }}" class="block px-4 py-2 hover:bg-amber-700 dark:hover:bg-primary-500 hover:text-white">Blog</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="block px-4 py-2 hover:bg-primary-700 dark:hover:bg-primary-500 hover:text-white">Contact Us</a>
                <a href="#" class="block px-4 py-2 bg-primary-700 dark:bg-primary-500 text-white rounded-b-md text-center">Request Demo</a>
            </div>
        </div>
    </div>
</header>
