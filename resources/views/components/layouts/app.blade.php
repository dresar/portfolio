<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])




</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <nav class="bg-white dark:bg-gray-800 shadow-md p-4 flex justify-between items-center">
        <div class="text-xl font-bold">
            <a href="/" wire:navigate>My Portfolio</a>
        </div>
        <div class="space-x-4">
            <a href="/" wire:navigate class="hover:text-blue-500">Home</a>
            <a href="/about" wire:navigate class="hover:text-blue-500">About</a>
            <a href="/services" wire:navigate class="hover:text-blue-500">Services</a>
            <a href="/portfolio" wire:navigate class="hover:text-blue-500">Portfolio</a>
            <a href="/skills" wire:navigate class="hover:text-blue-500">Skills</a>
            <a href="/experience" wire:navigate class="hover:text-blue-500">Experience</a>
            <a href="/blog" wire:navigate class="hover:text-blue-500">Blog</a>
            <a href="/contact" wire:navigate class="hover:text-blue-500">Contact</a>
        </div>
        <div>
            <!-- Dark Mode Toggle (Placeholder) -->
            <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                🌙
            </button>
        </div>
    </nav>

    <main class="container mx-auto mt-8 p-4">
        {{ $slot }}
    </main>



    <script>
        // Dark Mode Toggle Logic (Encapsulated in IIFE to avoid variable scope conflicts)
        (function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const html = document.documentElement;

            // Check for saved theme preference
            if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }

            if (darkModeToggle) {
                darkModeToggle.addEventListener('click', () => {
                    if (html.classList.contains('dark')) {
                        html.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    } else {
                        html.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    }
                });
            }
        })();
    </script>
</body>
</html>
