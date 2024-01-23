<div id="navbar-wrapper" class="top-0 z-50 bg-[#A97561] lg:bg-opacity-90 fixed lg:backdrop-blur-lg fixed w-full"
    x-data="{ atTop: false }" :class="{ 'border-base-content/10': atTop, 'border-transparent': !atTop}"
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
                <img class="w-24 md:w-32 lg:w-48 h-auto" src="/images/logo-removed.png" alt="Body & Co" />
            </div>

            <div class="navbar-center hidden lg:flex text-neutral">
                <ul class="menu menu-horizontal menu-sm gap-2 px-1">
                    <li class="font-medium"><a href="#home">Home</a></li>
                    <li class="font-medium"><a href="#features">Features</a></li>
                    <li class="font-medium"><a href="#integrations">Integrations</a></li>
                    <li class="font-medium"><a href="#pricing">Pricing</a></li>
                    <li class="font-medium"><a href="#faq">FAQ</a></li>
                </ul>
            </div>

            <div class="navbar-end gap-3 text-neutral">
                <a class="btn btn-ghost btn-sm">Register</a>
                <a class="btn btn-primary btn-sm">Login</a>
            </div>
        </nav>

        <!-- sm screen menu (drawer) -->
        <div class="drawer text-neutral text-neutral">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-side">
                <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"
                    style="background-color: transparent;"></label>
                <ul
                    class="menu min-h-full w-80 gap-2 bg-transparent p-4 text-base-content text-neutral backdrop-blur-lg">
                    <!-- Navbar Brand logo -->
                    <li class="font-medium">
                        <img class="w-24 md:w-32 lg:w-48 h-auto" src="/images/logo-removed.png" alt="Body & Co" />
                    </li>

                    <li class="font-medium"><a href="#home">Home</a></li>
                    <li class="font-medium"><a href="#features">Features</a></li>
                    <li class="font-medium"><a href="#integrations">Integrations</a></li>
                    <li class="font-medium"><a href="#pricing">Pricing</a></li>
                    <li class="font-medium"><a href="#faq">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>