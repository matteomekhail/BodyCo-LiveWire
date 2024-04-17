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
            <h1 class="text-4xl font-bold text-center lg:pt-40 subheader">
                Waxing
            </h1>
            <div class="mt-8">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b-2 border-gray-300" style="width: 70%;">Waxing
                                Services</th>
                            <th class="px-4 py-2 text-center border-b-2 border-gray-300" style="width: 20%;">
                                Minutes/hours of services</th>
                            <th class="px-4 py-2 text-right border-b-2 border-gray-300" style="width: 10%;">Service
                                pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Full arm wax</td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$35</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Half arm wax</td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$25</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Full leg wax</td>
                            <td class="border px-4 py-2 text-center">40 minutes</td>
                            <td class="border px-4 py-2 text-right">$60</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Half leg wax</td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$35</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Lip wax</td>
                            <td class="border px-4 py-2 text-center">5 minutes</td>
                            <td class="border px-4 py-2 text-right">$10</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Chin wax</td>
                            <td class="border px-4 py-2 text-center">5 minutes</td>
                            <td class="border px-4 py-2 text-right">$10</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Sides of face wax</td>
                            <td class="border px-4 py-2 text-center">5 minutes</td>
                            <td class="border px-4 py-2 text-right">$25</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Full face wax</td>
                            <td class="border px-4 py-2 text-center">10 minutes</td>
                            <td class="border px-4 py-2 text-right">$40</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Underarm wax</td>
                            <td class="border px-4 py-2 text-center">10 minutes</td>
                            <td class="border px-4 py-2 text-right">$25</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Brazilian wax</td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$65</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Stomach wax</td>
                            <td class="border px-4 py-2 text-center">10 minutes</td>
                            <td class="border px-4 py-2 text-right">$35</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Chest wax</td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$40</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left  ">Back wax</td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$40</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-10 text-justify text-lg leading-relaxed font-medium text-gray-700">Waxing treatments are a
                    popular method of hair removal that involves the application of warm or hot wax to the skin, which
                    is then quickly removed to pull out unwanted hair from the root. This method effectively removes
                    hair from various parts of the body, including the legs, arms, underarms, bikini area, and face.</p>

                <p class="mt-10 text-justify text-lg leading-relaxed font-medium text-gray-700">The wax adheres to the
                    hair, allowing for efficient removal of multiple hairs at once, resulting in smooth and hair-free
                    skin. Waxing treatments can vary in intensity and technique, depending on the area being treated and
                    the individual’s preferences.</p>

                <p class="mt-10 text-justify text-lg leading-relaxed font-medium text-gray-700">Some common types of
                    waxing include strip waxing, where a thin layer of wax is applied and removed using cloth strips,
                    and hard waxing, where a thicker layer of wax is applied and removed without the need for cloth
                    strips.</p>

                <p class="mt-10 text-justify text-lg leading-relaxed font-medium text-gray-700">Waxing treatments offer
                    long-lasting results, with hair regrowth typically occurring within several weeks. Additionally,
                    regular waxing can lead to finer and sparser hair regrowth over time, making it a popular choice for
                    maintaining smooth and hair-free skin.</p>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>

</html>
