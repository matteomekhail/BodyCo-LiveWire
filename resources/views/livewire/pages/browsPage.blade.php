<!doctype html>
<html lang="en" class="relative scroll-smooth">

<head>
    <meta charset="utf-8" />
    <title>BodyCo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta content="Saas Landing page" name="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <h1 class="text-4xl font-bold text-center lg:pt-40  subheader">Brows</h1>
            <div class="mt-8">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b-2 border-gray-300  subheader" style="width: 70%;">Brows
                                services</th>
                            <th class="px-4 py-2 text-center border-b-2 border-gray-300  subheader" style="width: 20%;">
                                Minutes/hours of services</th>
                            <th class="px-4 py-2 text-right border-b-2 border-gray-300  subheader" style="width: 10%;">Service
                                pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Brow Shaping Service</h1>
                                <p>We enhance the appearance of the eyebrows by refining the shape and definition. This
                                    process typically involves various methods such as waxing, tweezing, or trimming to
                                    achieve the desired brow shape that complements the individual’s facial features.
                                    Brow shaping can help create a more polished and balanced look, framing the eyes and
                                    enhancing overall facial symmetry. Our skilled brow specialist can assess the
                                    natural shape of the eyebrows and work with the client to achieve their desired
                                    outcome.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$20</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Brow shape and tint<h1>
                                <p>Tinting is a comprehensive service that not only sculpts the eyebrows but also adds
                                    depth and definition through the application of tint.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$30</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Brow lamination<h1>
                                <p>Brow lamination is a cutting-edge technique designed to give eyebrows a fuller, more
                                    defined look by restructuring the brow hairs. This process helps to smooth out
                                    unruly or sparse brows, creating a sleek and polished appearance. Brow lamination
                                    can also give the illusion of thicker, fluffier brows, as the hairs are lifted and
                                    set in place. The result is perfectly groomed brows with enhanced volume and
                                    definition, lasting for several weeks.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">45 minutes</td>
                            <td class="border px-4 py-2 text-right">$80</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Brow lamination and tint<h1>
                                <p>Brow lamination and tinting combine to offer a transformative brow enhancement
                                    experience. This comprehensive treatment is perfect for those seeking long-lasting,
                                    professionally styled brows that require minimal maintenance.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">1 hour</td>
                            <td class="border px-4 py-2 text-right">$90</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Brow henna<h1>
                                <p>Brow henna is a natural and semi-permanent colouring technique that delivers
                                    beautifully defined eyebrows with a long-lasting tint. Unlike traditional brow
                                    tinting, henna can last up to several weeks on the skin and up to six weeks on the
                                    brow hairs, making it an ideal choice for those seeking a low-maintenance yet
                                    impactful brow enhancement.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">40 minutes</td>
                            <td class="border px-4 py-2 text-right">$70</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Brow wax and henna<h1>
                                <p>Combining brow waxing with henna offers a comprehensive eyebrow enhancement that
                                    shapes and defines the brows while providing a lasting tint.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">50 minutes</td>
                            <td class="border px-4 py-2 text-right">$90</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Brow reshape<h1>
                                <p>Brow reshaping involves meticulously sculpting the eyebrows to create a more
                                    flattering and balanced appearance that complements the individual's facial
                                    features.</p>
                            </td>
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

</html>
