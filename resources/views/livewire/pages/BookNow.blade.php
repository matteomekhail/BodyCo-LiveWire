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
    <script src="
              https://cdn.jsdelivr.net/npm/card3d@2.6.5/dist/card3d.min.js
            "></script>

</head>

<body class="overflow-x-hidden bg-base-100 font-body text-sm text-base-content antialiased">

    @livewire('navbar')

    <div class="flex flex-col items-center justify-center lg:pt-48 lg:pb-20">
        <iframe src="https://bookings.gettimely.com/bodycobeautyandwellnessclinic/bb/book" scrolling="no"
            id="timelyWidget" class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 xl:w-1/4"
            style="height:600px;border:none"></iframe>
        <br>
        <div
            class="p-6 max-w-sm mx-auto bg-gradient-to-r from-warmGray-300 via-warmGray-500 to-warmGray-700 rounded-xl shadow-md flex items-center space-x-4 text-white">
            <div class="flex-shrink-0">
                <img class="h-12 w-12" src="https://icon-library.com/images/membership-icon/membership-icon-10.jpg"
                    alt="Membership Icon">
            </div>
            <div>
                <h1 class="text-2xl font-extrabold mb-2 text-[#a17764]"> Have a membership? </h1>
                <a href="/MembershipBooking" class="btn btn-rose hover:bg-[#a17764] hover:text-white mt-1"> Book your
                    FREE appointment here instead </a>
            </div>
        </div>
    </div>
    @include('components.footer')
</body>
