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
            <h1 class="text-4xl font-bold text-center lg:pt-40  subheader">Facials</h1>
            <div class="mt-8">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b-2 border-gray-300" style="width: 70%;">Facials services</th>
                            <th class="px-4 py-2 text-center border-b-2 border-gray-300" style="width: 20%;">Minutes/hours of services</th>
                            <th class="px-4 py-2 text-right border-b-2 border-gray-300" style="width: 10%;">Service pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">LED Pod Session</h1>
                                <p>Step into the future of skincare with our revolutionary LED machine treatment, where science meets beauty to deliver unparalleled results. Experience the magic of LED therapy for a complexion that's brighter, clearer, and more radiant than ever before.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$35</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Skin Needling</h1>
                                <p>Revitalize your skin with our transformative skin needling treatment, stimulating collagen and elastin production for a firmer, smoother complexion. Say goodbye to fine lines, wrinkles, and acne scars.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">20 minutes</td>
                            <td class="border px-4 py-2 text-right">$259</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Dr. Spiller Discovery Treatment (Entry Level)</h1>
                                <p>Indulge in a blissful escape with our luxurious yet affordable basic facial, designed to leave you glowing from within. Perfect for those seeking a quick and budget-friendly spa getaway.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">30 minutes</td>
                            <td class="border px-4 py-2 text-right">$99</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Dr. Spiller Enzymatic Level One</h1>
                                <p>Experience the power of natural enzymes with our invigorating enzymatic facial, revitalizing your skin to reveal your natural glow. Perfect for all skin types, leaving you feeling refreshed, renewed, and absolutely radiant.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">40 minutes</td>
                            <td class="border px-4 py-2 text-right">$130</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Dr. Spiller Infusions Level Two</h1>
                                <p>Step into a realm of pure indulgence with our transformative infusion facial, infusing your skin with potent serums tailored to your individual needs for a luminous and youthful complexion.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">50 minutes</td>
                            <td class="border px-4 py-2 text-right">$160</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Dr. Spiller Collagen Level Three</h1>
                                <p>Turn back the hands of time with our revitalizing collagen facial, designed to replenish and restore your skin’s youthful elasticity for a visibly smoother, tighter, and more radiant complexion.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">50 minutes</td>
                            <td class="border px-4 py-2 text-right">$180</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Alex Cosmetics Herbs2Peel B Peel</h1>
                                <p>Embark on a journey of botanical bliss with our revolutionary herbal peel facial, delivering visible results without the inconvenience of peeling. Experience the rejuvenating power of nature.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$250</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Alex Cosmetics Herbs2Peel P Peel</h1>
                                <p>Unveil your skin's true potential with our transformative peeling facial, designed to cater to all skin types. Experience the thrill of renewal as your skin becomes smoother, clearer, and more youthful-looking.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$270</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">
                                <h1 class="font-bold">Alex Cosmetic Herbs2Peel C Peel</h1>
                                <p>Embark on a journey to skin transformation with our cutting-edge deep peel facial, targeting imperfections at their core for a fresh, youthful canvas beneath. A revolution in skincare with unparalleled rejuvenation.</p>
                            </td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$799</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
