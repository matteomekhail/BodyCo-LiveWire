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
            <h1 class="text-4xl font-bold text-center lg:pt-40 subheader">Massage</h1>
            <div class="mt-8">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b-2 border-gray-300  " style="width: 70%;">Brows
                                services</th>
                            <th class="px-4 py-2 text-center border-b-2 border-gray-300  " style="width: 20%;">
                                Minutes/hours of services</th>
                            <th class="px-4 py-2 text-right border-b-2 border-gray-300  " style="width: 10%;">Service
                                pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Full Body Massage</h1>
                                <p>
                                    FULL BODY MASSAGE - Indulge in pure relaxation with our luxurious full-body massage
                                    experience. Let the stresses of the day melt away as our skilled therapists work
                                    their magic, easing tension from head to toe. Feel the soothing touch of expert
                                    hands as they release tight muscles and promote deep relaxation. Whether you’re
                                    seeking relief from everyday stress or simply craving a pampering treat, our
                                    full-body massage is the ultimate way to unwind and rejuvenate. Treat yourself to an
                                    hour of bliss – you deserve it! Book your session now and discover the
                                    transformative power of massage</p>
                            </td>
                            <td class="border px-4 py-2 text-center">1 hour</td>
                            <td class="border px-4 py-2 text-right">$120</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Back Massage<h1>
                                        <p> Experience pure bliss and targeted relief with our rejuvenating 30-minute
                                            back massage. Let our skilled therapists melt away tension and knots,
                                            focusing solely on your back to soothe tired muscles and promote relaxation.
                                            Whether you're dealing with daily stress, muscle tightness, or simply need a
                                            quick pick-me-up, our tailored back massage is the perfect solution. Feel
                                            the tension melt away as skilled hands work their magic, leaving you feeling
                                            refreshed, revitalized, and ready to tackle whatever comes your way. Treat
                                            yourself to 30 minutes of pure relaxation – your back will thank you! Book
                                            your session now and discover the instant relief of our back massage. </p>
                            </td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('components.footer')
</body>

</html>
