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
            <h1 class="text-4xl font-bold text-center lg:pt-40 subheader pb-4">Laser</h1>
            <p>
                Experience the freedom of silky-smooth skin with laser hair removal, the ultimate
                solution for effortlessly eliminating unwanted hair. Our advanced laser technology
                precisely targets hair follicles, delivering long-lasting results with minimal
                discomfort. Rediscover the joy of smooth, radiant skin and liberate yourself from
                the daily chore of hair removal. Indulge in the luxury of a hair-free lifestyle and
                unlock a new level of confidence with laser hair removal.</p>
            <div class="mt-8">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b-2 border-gray-300  " style="width: 70%;">Laser
                                services</th>
                            <th class="px-4 py-2 text-center border-b-2 border-gray-300  " style="width: 20%;">
                                Minutes/hours of services</th>
                            <th class="px-4 py-2 text-right border-b-2 border-gray-300  " style="width: 10%;">Service
                                pricing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 text-left">Full arms</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$159</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Half arms</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$99</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Under arm</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$40</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Lower Legs</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$120</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Upper Legs</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$149</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Full leg</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$179</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Bikini</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$49</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">G-string Bikini</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$55</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Brazilian</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$79</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Booty</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$99</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Inner bottom</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$49</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Chin</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$39</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Lip</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$29</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Sideburns</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$39</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Full face</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$79</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Toes and feet</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$49</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Hands</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$49</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Areola</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$49</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Navel</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$39</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Stomach</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$69</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-left">Full Body</td>
                            <td class="border px-4 py-2 text-center">-</td>
                            <td class="border px-4 py-2 text-right">$450</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('components.footer')
</body>

</html>
