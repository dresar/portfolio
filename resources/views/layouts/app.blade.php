<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{ config('app.name', 'Portfolio') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/" wire:navigate>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about" wire:navigate>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services" wire:navigate>Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio" wire:navigate>Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/skills" wire:navigate>Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/experience" wire:navigate>Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog" wire:navigate>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact" wire:navigate>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        {{ $slot }}
    </main>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>
