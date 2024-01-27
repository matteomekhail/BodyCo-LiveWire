<div id="navbar-wrapper" class="sticky top-0 z-30 bg-[#A97561] lg:bg-opacity-90 lg:fixed lg:backdrop-blur-lg w-full"
    x-data="{ atTop: false }" :class="{ 'border-base-content/10': atTop, 'border-transparent': !atTop }"
    @scroll.window="atTop = (window.pageYOffset < 30) ? false: true">
    <div class="container">
        <nav class="navbar px-0">
            <div class="navbar-start gap-2">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer" aria-label="open sidebar" class="btn btn-square btn-ghost">
                        <i class="icon-menu inline-block text-xl"></i>
                    </label>
                </div>

                <!-- Navbar Brand logo -->
                <img class="w-24 md:w-32 lg:w-48 h-auto tracking-tighter" src="/images/logo-removed.png"
                    alt="Body & Co" />

            </div>

            <div class="navbar-center hidden lg:flex ">
                <ul class="menu menu-horizontal menu-sm gap-2 px-1">
                    <li class="font-medium"><a href="/">Home</a></li>
                    <li class="font-medium"><a href="/#services">Our Services</a></li>
                    <li class="font-medium"><a href="/aftercare">Aftercare</a></li>
                    <li class="font-medium"><a href="/book">Book Now</a></li>
                    <li class="font-medium"><a href="/#membership">Membership</a></li>
                    <li class="font-medium"><a href="/#visitUs">Visit Us</a></li>
                </ul>
            </div>
        </nav>

        <!-- sm screen menu (drawer) -->
        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-side">
                <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"
                    style="background-color: transparent"></label>
                <ul
                    class="menu min-h-full w-80 gap-2 bg-transparent p-4 text-neutral backdrop-blur-lg">
                    <!-- Navbar Brand logo -->
                    <li class="font-medium">
                        <img class="w-24 md:w-32 lg:w-48 h-auto tracking-tighter" src="/images/logo-removed.png"
                            alt="Body & Co" />
                    </li>

                    <li class="font-medium"><a href="/">Home</a></li>
                    <li class="font-medium"><a href="/#services">Our Services</a></li>
                    <li class="font-medium"><a href="/aftercare">Aftercare</a></li>
                    <li class="font-medium"><a href="/book">Book Now</a></li>
                    <li class="font-medium"><a href="/#membership">Membership</a></li>
                    <li class="font-medium"><a href="/#visitUs">Visit Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('a[href="/#membership"]').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: document.querySelector('#membership').offsetTop -
                100, // 100 is the offset from the top
                behavior: 'smooth'
            });
        });

        document.querySelector('a[href="/#visitUs"]').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: document.querySelector('#visitUs').offsetTop - 100, // 100 is the offset from the top
                behavior: 'smooth'
            });
        });
    </script>
</div>
