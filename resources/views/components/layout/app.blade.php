<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body
    class="{{ request()->routeIs('home') ? 'bg-gray-100 dark:bg-gray-900 dark:text-gray-100' : 'bg-[#f0f0f0]' }} text-gray-900 font-sans">

<x-layout.header/>

{{ $slot }}

<x-layout.footer/>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Include Font Awesome for Icons (optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
        integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    // JavaScript to manage dark, light, and auto themes
    const body = document.getElementById("body");
    const themeSelector = document.getElementById("theme-selector");
    if (themeSelector) {
        // Function to apply theme based on the selection
        function applyTheme(theme) {
            if (theme === "dark") {
                body.classList.add("dark");
                localStorage.setItem("theme", "dark");
            } else if (theme === "light") {
                body.classList.remove("dark");
                localStorage.setItem("theme", "light");
            } else {
                // Auto mode - check system preference
                if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
                    body.classList.add("dark");
                } else {
                    body.classList.remove("dark");
                }
                localStorage.setItem("theme", "auto");
            }
        }

        // Apply saved theme from local storage or default to auto
        const savedTheme = localStorage.getItem("theme") || "auto";
        themeSelector.value = savedTheme;
        applyTheme(savedTheme);

        // Event listener for theme selector change
        themeSelector.addEventListener("change", (event) => {
            applyTheme(event.target.value);
        });

        // Listener to update theme automatically if system theme changes in auto mode
        window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (e) => {
            if (localStorage.getItem("theme") === "auto") {
                applyTheme("auto");
            }
        });
    }
</script>
</body>

</html>
