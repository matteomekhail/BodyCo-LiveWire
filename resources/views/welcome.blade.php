<!doctype html>
<html lang="en" class="relative scroll-smooth">

<head>
    <meta charset="utf-8" />
    <title>BodyCo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta content="Saas Landing page" name="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/card3d@2.6.5/dist/card3d.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ojuju:wght@200..800&display=swap" rel="stylesheet">
    @livewireStyles


</head>

<body class="overflow-x-hidden bg-base-100 font-body text-sm text-base-content antialiased">
    @livewireScripts
    <!-- Navbar -->
    @livewire('navbar')
    <!-- Hero Section -->
    @livewire('hero-section')
    <!-- Services Section  -->
    @livewire('services')
    <!-- Membership Section  -->
    <!-- Visit Us -->
    @include('components.visitus')
    <!-- Contact Us
    @livewire('contact-us') -->
    <!-- Footer -->
    @include('components.footer')
</body>

</html>
