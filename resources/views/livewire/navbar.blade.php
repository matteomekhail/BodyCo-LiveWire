<div id="navbar-wrapper" class="sticky top-0 z-50 bg-[#B37456] lg:bg-opacity-90 lg:fixed lg:backdrop-blur-lg w-full"
    x-data="{ atTop: false }" :class="{ 'border-base-content/10': atTop, 'border-transparent': !atTop }"
    @scroll.window="atTop = (window.pageYOffset < 30) ? false: true">
    <div class="container">
        <nav class="navbar px-0">
            <div class="navbar-start gap-2">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer" aria-label="open sidebar" class="btn btn-square btn-ghost">
                        <i class="fas fa-bars text-xl text-black"></i>
                    </label>
                </div>
                <!-- Navbar Brand logo -->
                <img class="w-24 md:w-32 lg:w-48 h-auto tracking-tighter" src="/images/logo-removed.png"
                    alt="Body & Co" />

            </div>

            <div class="navbar-center hidden lg:flex ">
                <ul class="menu menu-horizontal menu-sm gap-2 px-1">
                    <li class="font-medium galada-regular galada-regular"><a href="/">Home</a></li>
                    <li class="font-medium galada-regular relative">
                        <div class="dropdown dropdown-end bg-transparent">
                            <div tabindex="0" class="">Our Services ▼</div>
                            <ul tabindex="0"
                                class="p-2 shadow menu dropdown-content bg-white rounded-box w-52 absolute top-full left-0 space-y-2">
                                <li><a href="/lash">Lashes</a></li>
                                <li><a href="/brows">Brows</a></li>
                                <li><a href="/waxing">Hair Removal</a></li>
                                <li><a href="/spray">Spray Tan</a></li>
                                <li><a href="/sauna">Sauna</a></li>
                                <li><a href="/facial">Facials</a></li>
                                <li><a href="/sculpt">Infinity Sculpt</a></li>
                                <li><a href="/laser">Laser</a></li>
                                <li><a href="/massage">Massage</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="font-medium galada-regular"><a href="/aftercare">Aftercare</a></li>
                    <li class="font-medium galada-regular"><a href="/book">Book Now</a></li>
                    <li class="font-medium galada-regular"><a href="/#visitUs">Visit Us</a></li>
                </ul>
            </div>
        </nav>

        <!-- sm screen menu (drawer) -->
        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-side">
                <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"
                    style="background-color: transparent"></label>
                <ul class="menu min-h-full w-80 gap-2 bg-transparent p-4 text-neutral backdrop-blur-lg">
                    <!-- Navbar Brand logo -->
                    <li class="font-medium galada-regular">
                        <img class="w-24 md:w-32 lg:w-48 h-auto tracking-tighter" src="/images/logo-removed.png"
                            alt="Body & Co" />
                    </li>

                    <li class="font-medium galada-regular"><a href="/">Home</a></li>
                    <li class="font-medium galada-regular relative">
                        <div class="dropdown dropdown-end bg-transparent">
                            <div tabindex="0" class="">Our Services ►</div>
                            <ul tabindex="0"
                                class="p-2 shadow menu dropdown-content bg-white rounded-box w-40  absolute right-full mt-10 space-y-2 z-50">
                                <li><a href="/lash">Lashes</a></li>
                                <li><a href="/brows">Brows</a></li>
                                <li><a href="/waxing">Hair Removal</a></li>
                                <li><a href="/spray">Spray Tan</a></li>
                                <li><a href="/sauna">Sauna</a></li>
                                <li><a href="/facial">Facials</a></li>
                                <li><a href="/sculpt">Infinity Sculpt</a></li>
                                <li><a href="/laser">Laser</a></li>
                                <li><a href="/massage">Massage</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="font-medium galada-regular"><a href="/aftercare">Aftercare</a></li>
                    <li class="font-medium galada-regular"><a href="/book">Book Now</a></li>
                    <li class="font-medium galada-regular"><a href="/#visitUs">Visit Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            var membershipElement = document.querySelector('#membership');
            var visitUsElement = document.querySelector('#visitUs');

            if (membershipElement) {
                document.querySelector('a[href="/#membership"]').addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: membershipElement.offsetTop - 100, // 100 is the offset from the top
                        behavior: 'smooth'
                    });
                });
            }

            if (visitUsElement) {
                document.querySelector('a[href="/#visitUs"]').addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: visitUsElement.offsetTop - 100, // 100 is the offset from the top
                        behavior: 'smooth'
                    });
                });
            }
        }
    </script>
</div>
