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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer />
    @livewireScripts()
</head>

<body class="overflow-x-hidden bg-base-100 font-body text-sm text-base-content antialiased flex flex-col min-h-screen">
    @livewire('navbar')
    <section class="py-8 lg:py-20 bg-[#ffffff] z-10 shadow-2xl flex-grow" id="home">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center lg:pt-40  subheader">
                Spray Tan
            </h1>
            <div class="mt-8">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b-2 border-gray-300" style="width: 70%;">Spray Tan Services</th>
                            <th class="px-4 py-2 text-center border-b-2 border-gray-300" style="width: 20%;">Minutes/hours of services</th>
                            <th class="px-4 py-2 text-right border-b-2 border-gray-300" style="width: 10%;">Service pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Spray Tan</h1>
                                <p>Get a radiant, sun-kissed glow in minutes with our spray tanning service! Customizable for a flawless color that lasts, it's a safe and quick way to achieve a bronzed look without the UV damage. Suitable for all skin types, spray tanning can even out skin tone and minimize imperfections. For best results, follow our pre-tan preparation tips.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$40</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
