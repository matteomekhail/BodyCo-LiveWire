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
    @livewireScripts()

</head>

<body class="overflow-x-hidden bg-base-100 font-body text-sm text-base-content antialiased">

    @livewire('navbar')
    <section class="py-8 lg:py-20 bg-[#EFE9E4] z-10 shadow-2xl" id="home">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center pt-40">
                Brows
            </h1>
            <div class="mt-8">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b-2 border-gray-300" style="width: 50%;">Brows services</th>
                            <th class="px-4 py-2 text-center border-b-2 border-gray-300" style="width: 25%;">
                                Minutes/hours of services</th>
                            <th class="px-4 py-2 text-right border-b-2 border-gray-300" style="width: 25%;">Service
                                pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brow shape</td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$20</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brow shape and tint</td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$30</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brow lamination</td>
                            <td class="border px-4 py-2 text-center">45 minutes</td>
                            <td class="border px-4 py-2 text-right">$80</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brow lamination and tint</td>
                            <td class="border px-4 py-2 text-center">1 hour</td>
                            <td class="border px-4 py-2 text-right">$90</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brow henna</td>
                            <td class="border px-4 py-2 text-center">40 minutes</td>
                            <td class="border px-4 py-2 text-right">$70</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brow wax and henna</td>
                            <td class="border px-4 py-2 text-center">50 minutes</td>
                            <td class="border px-4 py-2 text-right">$90</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brow reshape</td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$35</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>